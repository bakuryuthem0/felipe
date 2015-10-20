@extends('layouts.default')

@section('content')
 <div id="pagepiling">
      <div class="section" id="s1" >
        <div class="slider">
          <div> 
            <img src="{{ asset('images/background1.jpg') }}"> 
          </div>
          <div> 
            <img src="{{ asset('images/background2.jpg') }}"> 
          </div>
          <div> 
            <img src="{{ asset('images/background1.jpg') }}"> 
          </div>
        </div>
      </div>
      <div class="section" id="s2" >
        <div class="no-pad-bot section-third">
          <div class="container"><strong><h1 class="main-title left">{{ Lang::get('lang.menu-btn1') }}</h1></strong></div>
          <div class="texto col-xs-12">
            <div class="container">
              <p>{{ Lang::get('lang.text1') }}</p>
              <br>
              <a href="{{ URL::to('biografia') }}">Leer Biografia</a>
            </div>
            
          </div>
        </div>
        <div class="section-sixth to-right">
          <div class="carousel" >
              <div class="front"><img src="{{ asset('images/porta1.jpg') }}"/></div>
              <div class="front"><img src="{{ asset('images/porta2.jpg') }}"/></div>
              <div class="front"><img src="{{ asset('images/porta3.jpg') }}"/></div>

          </div>
        </div>
      </div>
      <div class="section" id="s3" >
        <div class="no-pad-bot section-third right">
          <div class="container"><strong><h1 class="main-title move-to-left">{{ Lang::get('lang.menu-btn2') }}</h1></strong></div>
          <div class="texto col-xs-12">
            <div class="container">
              <p>{{ Lang::get('lang.text2') }}</p>
              <br>
              <a href="{{ URL::to('servicios') }}">Ver Servicios</a>
            </div>

            
          </div>
        </div>
        <div class="section-sixth parallax to-left cont2" ></div>
      </div>
      <div class="section" id="s4" >
        <div class="no-pad-bot section-third">
          <div class="container"><strong><h1 class="main-title left">{{ Lang::get('lang.menu-btn3') }}</h1></strong></div>
          <div class="texto  col-xs-12">
           <div class="collection container">
            <a href="#!" class="collection-item porta-item" data-src="{{ asset('images/porta1.jpg') }}">Alvin</a>
            <a href="#!" class="collection-item porta-item" data-src="{{ asset('images/porta2.jpg') }}">Alvin</a>
            <a href="#!" class="collection-item porta-item" data-src="{{ asset('images/porta3.jpg') }}">Alvin</a>
          </div>
            
          </div>
        </div>
        <div class="section-sixth parallax to-right cont3" ></div>
      </div>
      <div class="section" id="s5" >
        <div class="no-pad-bot section-third right">
          <div class="container"><strong><h1 class="main-title move-to-left">{{ Lang::get('lang.menu-btn4') }}</h1></strong></div>
          <div class="texto  col-xs-12">
            <div class="container">
             <div class="col s12 formulario">
                <label class="country-label">{{ Lang::get('lang.form-field1') }}:</label>
                <select name="pais" class="pais browser-default form-validate" data-title="{{ Lang::get('lang.form-field-validation1') }}">
                  <option value="" selected>Seleccione pais</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
              <div class="input-field col s12 formulario">
                <input type="text" class="nombre validate form-validate" data-title="{{ Lang::get('lang.form-field-validation2') }}" required>
                <label for="first_name">{{ Lang::get('lang.form-field2') }}</label>
              </div>
              <div class="input-field col s12 formulario">
                <input type="email" class="email validate form-validate" data-email-malo="{{ Lang::get('lang.wrong-email') }}" data-title="{{ Lang::get('lang.form-field-validation3') }}" required>
                <label for="first_name">{{ Lang::get('lang.form-field3') }}</label>
              </div>
              <div class="input-field col s12 formulario">
                <textarea id="textarea1" class="msg materialize-textarea form-validate" data-title="{{ Lang::get('lang.form-field-validation4') }}" required></textarea>
                <label for="textarea1">{{ Lang::get('lang.form-field4') }}</label>
              </div>
              <div class="input-field col s12 formulario">
                 <button class="btn waves-effect waves-light sendEmail" data-success-msg="{{ Lang::get('lang.success-msg') }}" type="submit" name="action">{{ Lang::get('lang.form-field5') }}
                  <i class="material-icons right">send</i>
                </button>
              </div>
                <div class="formulario">
                  <div class="preloader-wrapper small">
                    <div class="spinner-layer spinner-blue">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                        <div class="circle"></div>
                      </div><div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>

                    <div class="spinner-layer spinner-red">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                        <div class="circle"></div>
                      </div><div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>

                    <div class="spinner-layer spinner-yellow">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                        <div class="circle"></div>
                      </div><div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>

                    <div class="spinner-layer spinner-green">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                        <div class="circle"></div>
                      </div><div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="section-sixth parallax to-left contact-map" >
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125629.7759369715!2d-67.60541045!3d10.267183899999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e803c989377fe87%3A0xb5ff524dadae5b74!2sMaracay!5e0!3m2!1ses!2sve!4v1443983568703" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
  </div>


@stop

@section('postscript')

<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('.pais').material_select();
  });
</script>
@stop