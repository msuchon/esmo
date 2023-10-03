const scrollTopBtn = document.querySelector('#toTop');
const scrollTopBtn2 = document.querySelector('#toTop2');

scrollTopBtn.addEventListener('click', ()=> {

    window.scrollTo(0,0);

});

scrollTopBtn2.addEventListener('click', ()=> {

    window.scrollTo(0,0);

});
$(document).ready(function() {

    if($(window).width() >= 1000)
    {
        if($(window).scrollTop() == 0)
        {
            $('.mainNav').css('display', 'none', 'height', '0');
        }
        else
        {
            $('.mainNav').css('display', 'flex');
        }
    }
    else if ($(window).width() < 1000)
    {
        if($(window).scrollTop() == 0)
        {
            $('#menubtn').css('display', 'none', 'height', '0');
        }
        else
        {
            $('#menubtn').show();
        }
    }
    
    $(window).scroll(function (){

        
        if($(window).width() >= 1000)
        {
            if($(window).scrollTop() == 0)
            {
                $('.mainNav').css('display', 'none', 'height', '0');
            }
            else
            {
                $('.mainNav').css('display', 'flex');
            }
        }
        else if ($(window).width() < 1000)
        {
            if($(window).scrollTop() == 0)
            {
                $('#menubtn').css('display', 'none', 'height', '0');
            }
            else
            {
                $('#menubtn').show();
            }
        }
        
    });
});