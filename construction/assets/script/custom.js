$(document).ready(function(){
 $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        700:{
            items:5
        },
        1000:{
            items:5
        }
    }
})





});

 function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "nav") {
        x.className += "responsive";
    } else {
        x.className = "nav";
    }
}
$('.fa-search').click(function(){
    $('.sss').toggle(300);
       
 })
