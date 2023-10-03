const scrollTopBtn = document.querySelector('.scroll-top');

scrollTopBtn.addEventListener('click', ()=> {

    window.scrollTo(0,0);

});
$(document).ready(function() {

    $('.scroll-top').hide();
    
    $(window).scroll(function (){

        if($(window).scrollTop() == 0)
        {
            $('.scroll-top').hide();
        }
        else
        {
            $('.scroll-top').show();
        }
        
        
    });
});