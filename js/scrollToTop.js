const scrollTopBtn = document.querySelector('#toTop');

scrollTopBtn.addEventListener('click', ()=> {

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