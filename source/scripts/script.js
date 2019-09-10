//search button icon & text toggle based on width
let win = window;
let searchBtn = document.querySelector('.search-btn');
win.addEventListener('resize', function(){
    if (win.innerWidth <= 500) {
        searchBtn.innerHTML = '<i class="fas fa-search"></i>';
    }else{
        searchBtn.innerHTML = 'SEARCH';
    }
});
window.addEventListener('load',function(){
    if (win.innerWidth <= 500) {
        searchBtn.innerHTML = '<i class="fas fa-search"></i>';
    }else{
        searchBtn.innerHTML = 'SEARCH';
    }
})

//menu toggle

let menuBtn = document.querySelector('#menu-toggle');
let menuDiv = document.querySelector('.nav-menu');
let menuClose = document.querySelector('.nav-icon');
menuBtn.addEventListener('click',function(){
    menuDiv.style.display = 'flex';
    setTimeout(function(){
        menuDiv.style.marginLeft = '0';
    },10);
})

menuClose.addEventListener('click',function(){
    menuDiv.style.marginLeft = 'none';
    setTimeout(function(){
        menuDiv.style.marginLeft = '100vw';
    },10);
})