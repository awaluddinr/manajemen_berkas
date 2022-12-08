$(function(){
        $.ajax({
            url: 'http://localhost/manajemen-file/Home/Kelola_User',
            type : 'POST',
            dataType : 'json',
            success : function(data){
                $('#nama').val(data.nama)
                $('#user').val(data.username)
                $('#pass').val(data.pass)
                $('#peran').val(data.peran)
                $('#tanggal').val(data.tanggal)
                $('#act').val(data.activity)
            }
    });
});