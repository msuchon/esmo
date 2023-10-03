<?php

include('functions.php');

?>

<!DOCTYPE html>
<html lang="pl" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>eSportowe Mistrzostwa Olsztyna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body ondragstart="return false;" ondrop="return false;">
<div id="preloader">
<img src="bitmapa.svg" alt="logo" style="max-width: 38.08vh; max-height: 38.08vh;"  class="preloader">
<h1>Wczytywanie zawartości...</h1>
</div>
<script>
    
    $(document).ready(function (){
        $('#sidenav').width('0%');
    
    $('#menubtn').on('click', function (event) {
    event.preventDefault();
    $('#sidenav').width('100%');
    $('#menubtn').hide();
    });

    $('#closebtn').on('click', function (event) {
    event.preventDefault();
        $('#sidenav').width('0%');
        $('#menubtn').show();
    });

    });
</script>
    <!--<img src="bitmapa.svg" alt="logo" class="esmo">
    <div class="a1">
        
        <p>eSportowe <br>Mistrzostwa <br>Olsztyna</p>

    </div>-->
    <div class="menuBtn" id="menubtn"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg></div>

    <span class="sideNav" id="sidenav">
        <a href="#" class="closeBtn" id="closebtn"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg></a>
        <div id="nav_options" class="nav flex-column nav-underline">
        <img src="bitmapa.svg" alt="logo" style="max-width: 10vh; max-height: 10vh; margin: 0 auto;">
        <a class="nav-link" href="#about">O Turnieju</a>
        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#registrationInfo">Zapisy</a>
        <a class="nav-link" href="#rules">Regulamin</a>
        <a class="nav-link" href="#contact">Kontakt</a>
        </div>
</span>
            <nav class="mainNav">
            <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" id="toTop">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>    
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#about">O Turnieju</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#registrationInfo">Zapisy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#rules">Regulamin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Kontakt</a>
            </li>
            </ul>
            </nav>    
  <section>
        <div class="parent1">
            <div class="header_main">
            <div class="logo">
            <img src="bitmapa.svg" alt="logo" style="max-width: 38.08vh; max-height: 38.08vh;">
            </div>
            <div class="esmo">eSportowe Mistrzostwa Olsztyna</div>
            </div>
            <div class="arrow_place"><img src="arrow.svg" alt="arrow" class="arrow"></div>
        </div>
    </section>
    <section>
        <div class="parent2" id="about">
            <div class="opis">
            <div class="a1">O turnieju</div>
                <p>Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit. Donec vitae lectus tempus mauris 
                blandit viverra ut a ligula. Duis aliquet at mauris non sollicitudin. 
                Quisque molestie tempor enim, fringilla bibendum orci feugiat sit amet. 
                Curabitur rhoncus commodo tortor sit amet rutrum.</p>
                
                
                <!-- DO WYMUSZENIA WCZYTANIA PRELOADERA
                    
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SDF_n_jipSE?si=pw7PJEMMkjk311pz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SDF_n_jipSE?si=pw7PJEMMkjk311pz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/SDF_n_jipSE?si=pw7PJEMMkjk311pz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/SDF_n_jipSE?si=pw7PJEMMkjk311pz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/SDF_n_jipSE?si=pw7PJEMMkjk311pz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/SDF_n_jipSE?si=pw7PJEMMkjk311pz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/SDF_n_jipSE?si=pw7PJEMMkjk311pz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/SDF_n_jipSE?si=pw7PJEMMkjk311pz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/SDF_n_jipSE?si=pw7PJEMMkjk311pz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/SDF_n_jipSE?si=pw7PJEMMkjk311pz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/SDF_n_jipSE?si=pw7PJEMMkjk311pz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/SDF_n_jipSE?si=pw7PJEMMkjk311pz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/SDF_n_jipSE?si=pw7PJEMMkjk311pz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><iframe width="560" height="315" src="https://www.youtube.com/embed/SDF_n_jipSE?si=pw7PJEMMkjk311pz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                </div>
            <div class="secondpart_about">
            <div class="logos"> 
                <img src="oga.svg" alt="logo_oga">
           </div>
           <div class="logos">     
                <img src="lo11.svg" alt="logo_XILO">
            <div class="button">
                <!--<button type="button" class="butt">Zapisz się!</button>-->
                <div class="wrapper">
                    <a class="cta" data-bs-toggle="modal" data-bs-target="#registrationInfo">
                      <span>ZAPISZ SIĘ!</span>
                      <span>
                        <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                            <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                            <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                          </g>
                        </svg>
                      </span> 
                    </a>
                  </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <section>
        <p>fedu</p>
    </section>


<!-- MODALS (wyskakujące okienka) -->
<div class="modal fade modal-lg" id="registrationInfo" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="registrationInfoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" style="font-size: 2em !important;" id="registrationInfoLabel">REJESTRACJA UCZESTNIKÓW</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="text-align: center;">
      <iframe width="1000px" height="500px" src="https://forms.office.com/Pages/ResponsePage.aspx?id=3l6mzPSrwUWA3aEUFyyHdc2MM0aJJSNFkXDi40tF3pNUNkFPWFUyUEZaVzNYMVRaME40RkVLUkFQUC4u&embed=true" frameborder="0" marginwidth="0" marginheight="0" style="border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin: 0 auto;" data-bs-dismiss="modal">Zamknij</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script  src="js/scrollToTop.js"></script>

<script>

	var loader = document.getElementById("preloader");

	window.addEventListener("load", function () {

		loader.style.display = "none";

	});


</script>

</body>
</html>