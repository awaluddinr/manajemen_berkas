const activePage = window.location.pathname;
const navLinks  = document.querySelectorAll('.navbar .collapse .navbar-nav .nav-item .nav-link').forEach(link =>{
    if(link.href.includes(`${activePage}`)){
        link.classList.add('aktif').siblings().classList.remove('aktif');
    }
})

