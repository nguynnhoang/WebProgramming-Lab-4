const openBtn = document.querySelector('.bar');
const closeBtn = document.querySelector('.close');
const navbarMobile = document.querySelector('.navbar-mobile');
const toggleWrapper = document.querySelector('.navbar-toggle-mobile');

function handleOpenMenu(){
    navbarMobile.classList.add('active');
    openBtn.style.display='none';
    closeBtn.style.display='block';
    toggleWrapper.classList.remove('activeClose');
    toggleWrapper.classList.add('activeBar');
}

function handleCloseMenu(){
    navbarMobile.classList.remove('active');
    openBtn.style.display='block';
    closeBtn.style.display='none';
    toggleWrapper.classList.add('activeClose');
    toggleWrapper.classList.remove('activeBar');
}

openBtn.addEventListener('click', handleOpenMenu);
closeBtn.addEventListener('click', handleCloseMenu);