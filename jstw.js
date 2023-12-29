let menu =document.querySelector('#menu-btn');
let navbar =document.querySelector('.header .navbar');


menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".home-slider",{
    loop:true,
    navigation:{
        nextEl:".swiper-button-next",
        prevEl:".swiper-button-prev",
    },
    // autoHeight:true,
});

var swiper =new Swiper(".review-slider",{
    loop:true,
    spaceBetween:15,
    autoHeight:true,
    grabCursor:true,
    breakpoints:{
        640:{
            slidesPerView:1,
        },
        768:{
            slidesPerView:2,
        },
        1024:{
            slidesPerView:3,
        },
    },
});


var boxes=document.querySelectorAll('.packages .box-container .box');
var loadbtn=document.querySelector('.packages .load-more .btn');

var boxes=document.querySelectorAll('.packages .box-container .box');
let currentItem=6;

loadbtn.onclick= () =>{
    
    for(var i=currentItem ;i<currentItem+3;i++)
    {
        boxes[i].style.display='inline-block';
    }

    currentItem+=3;
    if(currentItem>=boxes.length)
    {
        loadbtn.style.display='none';
    }
}

