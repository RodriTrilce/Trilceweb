{{! $breadcrumbs = Breadcrumbs::render('academia-venues') }}
@extends('academia.layouts.template')
@section('title', 'Sedes')

@section('academia_sedes')
    <!-- Enlace al archivo CSS específico -->
    <link rel="stylesheet" href="https://www.trilce.edu.pe/css/academia_sedes.css">
@endsection
@section('content')

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
      <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-venues"></div>
      <div class="header-double-border"></div>
      <div class="header-double-title">
        <h1>Nuestras sedes</h1>
      </div>
    </div>
  </div>


  <div class="row col-xs-12 center-xs container-base preparation__section">
    <div class="row col-xs-12 col-sm-9 col-md-8 center-xs center-md preparation__title">
      <h1 class="preparation__title">¡Estudia con los mejores!</h1>
      <h3 class="preparation__subtitle">Encuentra el mejor ambiente para estudiar</h3>
    </div>
</div>

  <div class="row col-xs-12 center-xs venue-container container-base">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-sm start-md">

      <div class="row col-xs-12 venue-infolist">
        <div class="col-xs-12 col-sm-4 venue-infolist--left img_acedemia_girl">
          <img src="{{ url('/static/images/academia/img-sedes-academia.png') }}" alt="Sobre nosotros">
        </div>
        <div class="col-xs-12 col-sm venue-infolist--right">
        <h2 class="contact-subtitle">Conoce Nuestras Sedes</h2>
          <div class="venue-infolist--pcontainer">

          <div class="row col-xs-12 center-xs venue">
            <div class="row col-xs-12 col-sm-12 col-md-12 start-xs start-md">
              <div class="col-xs-12 col-sm container-base venue-info-container">
                <div class="row col-xs-12 col-sm-12">
                  <ul>
                    <li>
                      <strong class="Titlle-Strong">Santa Beatriz</strong>
                      <p class="More-Information-2025"><a href="/academia/sede/santa-beatriz">Más Información</a></p>
                    </li>
                    <li>
                      <strong class="Titlle-Strong">Los Olivos</strong>
                      <p class="More-Information-2025"><a href="/academia/sede/los-olivos">Más Información</a></p>
                    </li>
                    
                   <!--  <li>
                      <strong>Comas</strong>
                      <p><a href="/academia/sede/comas">Más Información</a></p>
                    </li> -->
                    <li>
                      <strong class="Titlle-Strong">Villa El Salvador</strong>
                      <p class="More-Information-2025"><a href="/academia/sede/villa-el-salvador">Más Información</a></p>
                    </li>
                    {{--<li>
                      <strong>Cercado de Lima</strong>
                      <p><a href="/academia/sede/cercado-de-lima">Más Información</a></p>
                    </li>--}}
                    {{--<li>
                      <strong>Marsano</strong>
                      <p><a href="/academia/sede/marsano">Más Información</a></p>
                    </li>--}}
                    {{--<li>
                    <strong>San Isidro</strong>
                      <p><a href="/academia/sede/san-isidro">Más Información</a></p>
                    </li>--}}
                  </ul>
                  {{--<table>
                    <tbody>
                        <tr>
                          <td data-label="Sede"><a href="/academia/sede/los-olivos">Los Olivos</a></td>
                          <td data-label="Sede"><a href="/academia/sede/santa-beatriz">Santa Beatriz</a></td>
                          <td data-label="Sede"><a href="/academia/sede/comas">Comas</a></td>
                          <td data-label="Sede"><a href="/academia/sede/villa-el-salvador">Villa El Salvador</a></td>
                          <td data-label="Sede"><a href="/academia/sede/cercado-de-lima">Cercado de Lima</a></td>
                          <td data-label="Sede"><a href="/academia/sede/marsano">Marsano</a></td>
                          <td data-label="Sede"><a href="/academia/sede/san-isidro">San Isidro</a></td>
                        </tr>
                    </tbody>
                  </table>--}}
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>     
    </div>
  </div>

  


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'venues';

  @parent
@endsection
