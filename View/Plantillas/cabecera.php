
<!--****************************************************-->

<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Itala Migone</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,follow" />
<meta name="googlebot" content="index, follow" />

<link rel="shortcut icon" href="./Recursos/img/iconos/favicon.ico" type="image/x-icon">

<script src="Recursos/js/jquery.min.js"></script>

<!--Import Google Icon Font-->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="Recursos/css/materialize.min.css"  media="screen,projection"/>

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="stylesheet" type="text/css" media="screen" href="Recursos/css/main.css" />
<script src="Recursos/js/main.js"></script> 
      
<!--Recursos / plugins-->

<script src="Recursos/js/lightbox-plus-jquery.js"></script>
<link rel="stylesheet" href="Recursos/css/lightbox.css">

<link rel="stylesheet" href="Recursos/css/jquery.bxslider.css">
<script src="Recursos/js/jquery.bxslider.min.js"></script> 

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

<!-- Código de seguimiento google analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125822464-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125822464-1');
</script>

<!-- Fin de código de siguimiento  -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W2KR486');</script>
<!-- End Google Tag Manager -->


<script>

/* Script de botón flotante mensajeria en paginas */

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
    direction: 'top'
    });
});

/* ********************************************* */

          /* Script scroll click */ 
          
          $(document).ready(function(){

                    if($(window).width()>1100){
                        medida = 90;    
                    }else if($(window).width()<768){
                        medida = 50;    
                    }

                    //alert($(window).width());                   
              
                    $('a').click(function(){
                        $('html, body').animate({
                            scrollTop: $( $(this).attr('href') ).offset().top - medida
                        }, 1500);
                    return false;
                    });    

          });
           
          /* Evento al terminar de cargar la página*/   
          
          $(window).on("load", function (e) {
            $('#page-preloader').fadeOut(500);                
          })

</script>

