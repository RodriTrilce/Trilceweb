  {{! $breadcrumbs = Breadcrumbs::render('academia-paymentguide') }}
  @extends('academia.layouts.template')
  @section('title', 'Guía de pagos en línea')
  @section('content')
  <style>
  
  .row-banks {
    max-width: 1000px;
    margin: 0 auto;
  }
.about-container {
    margin-top: 80px;
    margin-bottom: 40px;
}

.clic {
      font-size: 2em;
    font-weight: bold;
    font-family: Geogrotesque-Md;
    letter-spacing: 1px;
    margin: 1.5em;
}
  
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
  background-image: url(/static/images/slides/banner-guia-de-pagos-academias-1.png);
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
    height: inherit;
    margin-bottom: 2em;
}

.superior {
 margin-top: 1em;
    font-weight: bold;
    font-size: 1.5em;
    font-family: Geogrotesque-Md;
}

.inferior {
    font-weight: normal;
    font-size: 1em;
    font-family: Geogrotesque-Rg;
}

@media (max-width: 768px){
  .row-banks {
    max-width: 100%
  }
  
    .about-container {
        margin-top: 60px;
        margin-bottom: 40px;
    }
    figure {
        margin: 2em auto;
    }
    .header-double-top>.row {
      height: 352px;
    }

    .header-double-w-preparation-tutorials {
      background-image: url(/static/images/slides/banner-guia-de-pagos-academias-1-MOBILE.png);
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
          <h1> Guía de pagos en línea</h1>
        </div>
      </div>
    </div>

    <div class="row center-xs about-container container-base py-5">
        <div class="col-xs-12 col-md-12">
        <p class="superior">Para saber cómo realizar pagos</p><br>
        <p class="inferior">por internet, ventanilla y/o agente</p>
        <div class="row  row-banks">
        
          <div class="col-xs-12 col-md-3">
            <figure>
                <a href="https://drive.google.com/file/d/1VgthhCEWHdCo0wNxQFEWREHn0A_ywvqR/view?usp=sharing" target="_blank">
                  <p class="clic"> ¡Clic Aquí! </p>
                  <img src="/static/images/academia/logo-scotia.svg" alt="Scotiabank" width="180">
                </a>
            </figure>
          </div>
          <div class="col-xs-12 col-md-3">
            <figure>
                <a href="https://drive.google.com/file/d/1uuTLwjlGt95iO2exPYsF34YxuP6mTQU_/view?usp=sharing" target="_blank">
                  <p class="clic"> ¡Clic Aquí! </p>
                  <img src="/static/images/academia/bcp.svg" alt="BCP"width="160">
                </a>
            </figure>
          </div>
          <div class="col-xs-12 col-md-3">
            <figure>
                <a href="https://drive.google.com/file/d/1Hs8Ut7NEgNEP92UUSUZUmdYyFKATd7VH/view?usp=sharing" target="_blank">
                  <p class="clic"> ¡Clic Aquí! </p>
                  <img src="/static/images/academia/bbva.svg" alt="BBVA" width="160">
                </a>
            </figure>
          </div>
          <div class="col-xs-12 col-md-3">
            <figure>
                <a href="https://www.trilce.edu.pe/l/guia-pagos-yape-academia" target="_blank">
                  <p class="clic"> ¡Clic Aquí! </p>
                  <img src="/static/images/academia/logo-yape-qvas-act.svg" alt="YAPE" width="160">
                </a>
            </figure>
          </div>
        </div>
        </div>
    </div>


    @include('academia.partials.card_bottom')
  @endsection

  @section('scripts')
      page = 'tuyorials';
    @parent
  @endsection
