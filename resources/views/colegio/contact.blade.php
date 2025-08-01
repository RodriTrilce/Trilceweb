{{! $breadcrumbs = Breadcrumbs::render('colegio-contact') }}
@extends('colegio.layouts.template')
@section('title', 'Contáctanos')
@section('content')

  <div class="header-double-image">
    <div class="col-xs-12 header-double-image-desk">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-contactenos.jpg') }}" alt="">
    </div>
    <div class="header-double-image-mobile">
      <img src="{{ url('/static/images/colegio/pages-banners/banner-contactenos-movil.jpg') }}" alt="">
    </div>
  </div>

  @if ($errors->any())
    <div class="row col-xs-12 center-xs">
      <div class="form-error">
          <ul class="form-error-ul">
          @foreach ($errors->all() as $error)
            <li class="form-li">{{ $error }}</li>
          @endforeach
          </ul>
      </div>
    </div>
  @endif

<div class="row center-xs center-sm container-base-no-mobile contact">
  <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

    <div class="col-xs-12 col-sm contact-info container-padding-mobile">
      <h1 class="contact-subtitle contact-subtitle-colegio">Información de contacto</h1>
      <ul class="contant-info-ul">
        <li>Central telefónica: 6198 100</li>
        <li>Correo: atencionalcliente@trilce.edu.pe</li>
        <li>Whatsapp: <a href="https://api.whatsapp.com/send?phone=51922336565&text=Me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n" title="Chatea con nosotros" target="_blank" rel="nofollow">922 33 6565</a></li>
      </ul>

      <br />
      {{-- <div class="worktrilce">
        <a href="#">

          <div class="row col-xs-12 worktrilce-div">
            <div class="col-xs worktrilce-line"><i class="fa fa-briefcase"></i></div>
            <div class="col-xs">TRABAJA<span class="about">con nosotros</span><span class="postulate">Postúla</span></div>
          </div>

        </a>
      </div> --}}

      <div class="fb-page"
        data-href="https://www.facebook.com/ColegioTrilce/"
        data-tabs="timeline,messages"
        data-small-header="false"
        data-hide-cover="false"
        data-adapt-container-width="true"
        data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/ColegioTrilce/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ColegioTrilce/">Trilce Colegio</a></blockquote>
      </div>

    </div>
    <div class="col-xs-12 col-sm-6 contact-form" style="display:none">

      <div class="col-xs-12 step1 container-padding-mobile">
        <h2>Déjanos tu consulta</h2>

        <form action="/colegio/contacto" method="post">
          @csrf
          <fieldset class="form-group">
            <input type="onlytext" name="contact_names" placeholder="Nombres y apellidos" pattern="[A-Za-z ]+" required>
          </fieldset>

          <fieldset class="form-group">
            <input type="email" name="contact_email" placeholder="Correo" required>
          </fieldset>

          <fieldset class="form-group">
            <input type="tel" type="tel" class="contant-form-phone" minlength="6" min="0" name="contact_phone" placeholder="Teléfono" pattern="([0-9]+)" required>
          </fieldset>

          <fieldset class="form-group">
            <textarea name="contact_message" rows="8" cols="80" placeholder="Consulta" required></textarea>
          </fieldset>

          <div class="row col-xs-12">
            <div class="col-xs-12">
              <fieldset class="form-group">
                <input type="captcha" class="captcha" name="captcha" id="captcha">
              </fieldset>
            </div>

            <div class="col-xs-12">
              <div class="g-recaptcha" data-callback="captcha" data-sitekey="6LeHW1cUAAAAALgptl-KjhXhIlK5JzCBI4Mt0Zi1"></div>
            </div>
          </div>
          <div class="row col-xs-12 end-xs">
            <input type="text" name="contact_type" value="colegio" hidden readonly><br >
            <button type="submit" name="contact_validate" id="contact_validate" class="validate">Enviar <i class="fa fa-check"></i></button>
          </div>
        </form>
      </div>

    </div>

  </div>
</div>

  @include('colegio.partials.card_bottom')
@endsection

@section('scripts')
    page = 'contact';

    function captcha(){
      if(grecaptcha.getResponse().length > 0){
        document.getElementById("captcha").value = 'valid';
      }
    }
  @parent
  <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
