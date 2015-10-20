<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>{{ $title }}</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  {{ HTML::style("css/bootstrap.css") }}
  {{ HTML::style("css/bootstrap-theme.css") }}
  {{ HTML::style("css/materialize.css") }}
  {{ HTML::style("css/style.css") }}
  {{ HTML::style("js/slick-1.5.0/slick/slick.css")}}
  {{ HTML::style("js/slick-1.5.0/slick/slick-theme.css")}}
  {{ HTML::style("js/pagedor/jquery.pagepiling.css") }}
  {{ HTML::style("css/custom.css?v=1.1") }}

</head>
<body>
  <nav class="nav-container" role="navigation">
   
   <a href="#!" class="btn waves-effect btn-menu right menu-btn">Menu</a>
  </nav>
  <div class="navegador-container">
     @if(isset($segunda))
   <a href="{{ URL::previous() }}" class="btn btn-flat waves-effect left btn-volver" style="color:white;">Volver</a>
   @endif
    <div class="right"><a href="#!" class="close-menu btn btn-flat"><i class="fa fa-close"></i></a></div>
    <ul class="menu-items" id="menu-items">
      <li data-menuanchor="{{ $menu[0] }}" style="display:none;"><h2><a  href="#{{ $menu[0] }}" class="subNavBtn">{{ Lang::get('lang.menu-btn0') }}</a></h2></li>
      <li data-menuanchor="{{ $menu[1] }}"><h2><a  href="#{{ $menu[1] }}" class="subNavBtn">{{ Lang::get('lang.menu-btn1') }}</a></h2></li>
      <li data-menuanchor="{{ $menu[2] }}"><h2><a  href="#{{ $menu[2] }}" class="subNavBtn">{{ Lang::get('lang.menu-btn2') }}</a></h2></li>
      <li data-menuanchor="{{ $menu[3] }}"><h2><a  href="#{{ $menu[3] }}" class="subNavBtn">{{ Lang::get('lang.menu-btn3') }}</a></h2></li>
      <li data-menuanchor="{{ $menu[4] }}"><h2><a  href="#{{ $menu[4] }}" class="subNavBtn">{{ Lang::get('lang.menu-btn4') }}</a></h2></li>
    </ul>

    <div class="lang">
      <p><a href="{{ URL::to('cambiar-lenguaje/es') }}"><h4>{{ Lang::get('lang.menu-btn5') }}</h4></a><h4> | </h4><a href="{{ URL::to('cambiar-lenguaje/en') }}"><h4>{{ Lang::get('lang.menu-btn6') }}</h4></a></p>
    </div>
    <div class="redes">
      <p>
        <a href="#!">Facebook</a> 
        <a href="#!">Twitter</a> 
        <a href="#!">Instagram</a> 
        <a href="#!">Linkedin</a> 
        <a href="#!">Youtube</a> 
      </p>
    </div>
  </div>
  <div class="backdrop-menu"></div>
  @yield('content')


  <footer class="page-footer @if(isset($segunda)) second-page @endif">
    <div class="container footer-copyright">
      <div class="logo">
        <img src="{{ asset('images/logo.jpg') }}" alt="logo">
      </div>
      <p><a class="to-activate" href="{{ URL::to('terminos-y-condiciones') }}">{{ Lang::get('lang.term-cond') }}</a></p>
      <p class="to-activate">{{ Lang::get('lang.develop') }} <a class="to-activate" href="http://tecnographic.com.ve">Tecnographic Venezuela</a></p>
    </div>
  </footer>


  <!--  Scripts-->
  {{ HTML::script('js/jquery.min.js') }}
  <!--  slick slider-->
  {{ HTML::script("js/slick-1.5.0/slick/slick.min.js")}}
  <script type="text/javascript">
    jQuery(document).ready(function($) {
     
      $('.slider').slick(
      {
        slidesToShow: 1,
        slidesToScroll: 1,
        vertical    :true,
        verticalSwiping :true,
        arrows      :false, 
        autoplay    : true,
        autoplaySpeed: 6000,
        pauseOnHover:false,
        dots:true,
      });
      $('#pagepiling').pagepiling({
          menu: '#menu-items',
          anchors: ['s1','s2', 's3','s4','s5'],
          navigation: {
                'textColor': '#f2f2f2',
                'bulletsColor': '#ccc',
                'position': 'right',
                'tooltips': ['Inicio','Felipe sosa', 'Servicios', 'Portafolio', 'Contactenos']
            }
      });
    });
  </script>
  {{ HTML::script('js/bootstrap.min.js') }}
  {{ HTML::script("js/materialize.js")}}
  {{ HTML::script("js/init.js")}}
  {{ HTML::script("js/pagedor/jquery.pagepiling.min.js") }}
  @yield('postscript')
  {{ HTML::script("js/custom.js?v=1.1")}}

  </body>
</html>
