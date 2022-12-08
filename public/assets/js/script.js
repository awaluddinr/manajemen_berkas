const activePage = window.location.pathname;
const navLinks  = document.querySelectorAll('.sidebar-menu ul li a').forEach(link =>{
    if(link.href.includes(`${activePage}`)){
        link.classList.add('aktif').siblings().classList.remove('aktif');
    }
})

