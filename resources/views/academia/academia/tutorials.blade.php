  {{! $breadcrumbs = Breadcrumbs::render('academia-tutorials') }}
  @extends('academia.layouts.template')
  @section('title', 'Tutoriales')
  @section('content')

  @section('academia_sedes')
    <!-- Enlace al archivo CSS específico -->
    <link rel="stylesheet" href="https://www.trilce.edu.pe/css/academia_sedes.css">
@endsection
  <style>
  .container-main-aca {
    display: none;
  }
  
  .new_banner {
    
  }

  .header-double-bottom {
    background: transparent;
  }
  .header-double-border {
    display: none;
  }
  .header-double-title {
    display: none;
  }

  .header-double-title h1 {
    display: none;
  }

  .header-double-top>.row {
    position: relative;
    height: 400px;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    overflow: hidden;
}
.header-double-w-preparation-tutorials {
  background-image: url(/static/images/banner-tutoriales_1_11zon.webp);
      background-position: center center;
    background-size: cover;

}

figure {
  margin: 4em  auto;
}

figure figcaption{
      text-align: left;
    width: 450px;
    margin: 1em auto;
        font-family: Geogrotesque-Rg;
}


figure figcaption strong{
  margin-left: 1.2em;
}

figure img {
  width: 402px;
  height: inherit;
  
}

@media (max-width: 768px){
figure {
    margin: 2em auto;
}
    .header-double-top>.row {
      height: 352px;
    }

    .header-double-w-preparation-tutorials {
      background-image: url(/static/images/slides/banner-tutoriales-MOBILE_2_11zon.webp);
          background-position: center center;
        background-size: cover;

    }

    .header-double-content-top {
      height: initial;
  }
}
  </style>

    <div class="header-double-top new_banner">
      <div class="row">
        <div class="col-xs-12 col-sm-12 header-double-content-top header-double-w-preparation-tutorials"></div>

        <div class="header-double-border"></div>
        <div class="header-double-title">
          <h1> Tutoriales Clases Virtuales</h1>
        </div>
      </div>
    </div>

    <div class="row center-xs about-container container-base py-5 containeredit">
        <div class="col-xs-12 col-md-5 conta">
          <figure class="figureclass">
              <a href="https://youtu.be/Ex8s9fvY4Rs" target="_blank">
                <img src="/static/images/academia/img1_3_11zon.webp" alt="Google Classroom Trilce">
                </a> <br>
            <figcaption><strong>Tutorial para ingresar a Google Classroom</strong><br>
            <div class="More-Information-2025 a20">
              <a href="https://www.youtube.com/watch?v=Ex8s9fvY4Rs" target="_blank">Ver video</a>
            </div>

          </figure>
        </div>
        <div class="col-xs-12 col-md-5 conta">
              <figure class="figureclass">
                <a href="https://www.youtube.com/embed/w7RmICpaIN4" target="_blank">
                <img src="/static/images/academia/img2_4_11zon.webp" alt="Google Meet Trilce">
              </a> <br>
                <figcaption><strong>Tutorial para ingresar a Google Meet</strong><br>
                <div class="More-Information-2025 a20">
              <a href="https://www.youtube.com/embed/w7RmICpaIN4" target="_blank">Ver video</a>
            </div>
              </figure>
        </div>
    </div>


    @include('academia.partials.card_bottom')
  @endsection

  @section('scripts')
      page = 'tuyorials';
    @parent
  @endsection
