$(document).ready(function(){

    let nav_item = document.querySelectorAll('#main-nav .nav-item a');

    console.log('nav-item add class');

        for(i=0;i<nav_item.length;i++){
            nav_item[i].classList.add('nav-link');

        }


    // fin scripts
});