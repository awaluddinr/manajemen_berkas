<?php


class Helper
{

    public function compress($source, $compImage)
    {
        $imageInfo = getimagesize($source);
        if ($imageInfo['mime'] == 'image/jpeg') {
            $source = imagecreatefromjpeg($source);
            imagejpeg($source, $compImage, 45);
        } elseif ($imageInfo['mime'] == 'image/png') {
            $source = imagecreatefrompng($source);
            imagepng($source, $compImage, 3);
        }

        return $compImage;
    }

    public function convert($bytes, $decimal = 2)
    {
        $size = [' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB'];
        $factor = floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimal}f", $bytes / pow(1024, $factor)) . @$size[$factor];
    }

    // Create zip
    public function createZip($zip, $dir)
    {
        if (is_dir($dir)) {

            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {

                    // If file
                    if (is_file($dir . $file)) {
                        if ($file != '' && $file != '.' && $file != '..') {

                            $zip->addFile($dir . $file);
                        }
                    } else {
                        // If directory
                        if (is_dir($dir . $file)) {

                            if ($file != '' && $file != '.' && $file != '..') {

                                // Add empty directory
                                $zip->addEmptyDir($dir . $file);

                                $folder = $dir . $file . '/';

                                // Read data of the folder
                                // createZip($zip, $folder);
                            }
                        }
                    }
                }
                closedir($dh);
            }
        }
    }

    public static function formatSize($size)
    {
        if ($size >= 1073741824) {
            $size = number_format($size / 1073741824, 2) . ' GB';
        } elseif ($size >= 1048576) {
            $size = number_format($size / 1048576, 2) . ' MB';
        } elseif ($size >= 1024) {
            $size = number_format($size / 1024, 2) . ' KB';
        } elseif ($size > 1) {
            $size = $size . ' bytes';
        } elseif ($size == 0) {
            $size = $size . ' byte';
        } else {
            $size = '0 bytes';
        }
        return $size;
    }

    public static function getFolderSize($foldernama)
    {

        $totalSize = 0;
        $fileData = scandir("assets/media/" . $_SESSION['loginData']['nama'] . "/" . $foldernama . "/");

        foreach ($fileData as $file) {
            if ($file === '.' && $file === '..') {
                continue;
            } else {
                $path = "assets/media/" . $_SESSION['loginData']['nama'] . "/" . $foldernama . "/" . $file;
                $totalSize = $totalSize + filesize($path);
            }
        }

        return Helper::formatSize($totalSize);
    }

    public static function getFolderSizeById($username, $foldernama)
    {

        $totalSize = 0;
        $fileData = scandir("assets/media/" . $username . "/" . $foldernama . "/");

        foreach ($fileData as $file) {
            if ($file === '.' && $file === '..') {
                continue;
            } else {
                $path = "assets/media/" . $username . "/" . $foldernama . "/" . $file;
                $totalSize = $totalSize + filesize($path);
            }
        }

        return Helper::formatSize($totalSize);
    }

    public static function totalfile($foldernama)
    {
        $dir = "assets/media/" . $_SESSION['loginData']['nama'] . "/" . $foldernama . "/";
        $filecount = count(glob($dir . "*"));
        return $filecount;
    }


    public static function facebook_time_ago($timestamp)
    {
        date_default_timezone_set('Asia/makassar');

        $time_ago = strtotime($timestamp);
        $current_time = time();
        $time_difference = $current_time - $time_ago;
        $seconds = $time_difference;
        $minutes      = round($seconds / 60);           // value 60 is seconds  
        $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
        $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
        $weeks          = round($seconds / 604800);          // 7*24*60*60;  
        $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
        $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
        if ($seconds <= 60) {
            return "Baru Saja";
        } else if ($minutes <= 60) {
            if ($minutes == 1) {
                return "1 Menit Yang Lalu";
            } else {
                return "$minutes Menit Yang Lalu";
            }
        } else if ($hours <= 24) {
            if ($hours == 1) {
                return "1 Jam Yang Lalu";
            } else {
                return "$hours Jam Yang Lalu";
            }
        } else if ($days <= 7) {
            if ($days == 1) {
                return "Kemarin";
            } else {
                return "$days Hari Yang Lalu";
            }
        } else if ($weeks <= 4.3) //4.3 == 52/12  
        {
            if ($weeks == 1) {
                return "1 Minggu Yang Lalu";
            } else {
                return "$weeks Minggu Yang Lalu";
            }
        } else if ($months <= 12) {
            if ($months == 1) {
                return "1 Bulan Yang Lalu";
            } else {
                return "$months Bulan Yang Lalu";
            }
        } else {
            if ($years == 1) {
                return "1 Tahun Yang Lalu";
            } else {
                return "$years Tahun Yang Lalu";
            }
        }
    }
}
