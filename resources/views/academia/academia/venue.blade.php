{{! $breadcrumbs = Breadcrumbs::render('academia-venue', $data->name) }}
@extends('academia.layouts.template')
@section('title', $data->name)
@section('content')

  <!-- map -->
  <style>
    #mapid { height: 100%; }
    .leaflet-control-attribution{
      opacity: .6;
    }
    .header-double-w-venues-sb
    {
      background-image: url(/static/images/academia/banners/sedes_sb.png);
    }
    .header-double-w-venues-lo 
    {
      background-image: url(/static/images/academia/banners/sedes.png);
    }
    .VES_ACADMIA{
      background-image: url(/static/images/academia/banners/VES_11zon.webp);
    }
  </style>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>  

  <div class="header-double-top">
    <div class="row">
      <div class="col-xs-12 col-sm-6 header-double-bottom"></div>
        @if($data->name == 'Santa Beatriz')
          <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-venues-sb"></div>
        @elseif($data->name == 'Los Olivos')
          <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-venues-lo"></div>
        @else
          <div class="col-xs-12 col-sm-6 header-double-content-top header-double-w-venues VES_ACADMIA"></div>
        @endif
      
      <!--div class="header-double-border"></div-->
      <div class="header-double-title">
        <h1>
          @if($data->name == 'Cercado de Lima')
            Cercado de Lima (Torrico)
            @elseif($data->name == 'Villa El Salvador')
            Academia Trilce <br>sede Villa El Salvador
          @elseif($data->name == 'Santa Beatriz')
            Academia Trilce <br>sede Santa Beatriz
          @elseif($data->name == 'Los Olivos')
            Academia Trilce <br>sede Los Olivos
          @endif
        </h1>
      </div>
    </div>
  </div>

  <div class="row col-xs-12 center-xs venue">
    <div class="row col-xs-12 col-sm-9 col-md-8 start-xs start-md">

      <div class="col-xs-12 col-sm container-base venue-info-container">
        <div class="col-xs-12 venue-info-title"><h2>Información general</h2>
          @if($data->name == 'Santa Beatriz')
            <p class="venue-info-parrafo">En la Academia Trilce sede Santa Beatriz, nos especializamos en la formación preuniversitaria, centrándonos en la preparación para los exámenes de ingreso a prestigiosas universidades como San Marcos (UNMSM), la UNI y la Católica (PUCP).</p>
          @elseif ($data->name == 'Los Olivos')
            <p class="venue-info-parrafo">En la Academia Trilce sede Los Olivos, nos especializamos en la formación preuniversitaria, centrándonos en la preparación para los exámenes de ingreso a prestigiosas universidades como San Marcos (UNMSM), la UNI y la Católica (PUCP).</p>
          @elseif ($data->name == 'Villa El Salvador')
            <p class="venue-info-parrafo">En la Academia Trilce sede Villa El Salvador, nos especializamos en la formación preuniversitaria, centrándonos en la preparación para los exámenes de ingreso a prestigiosas universidades como San Marcos (UNMSM).</p>
          @endif</div>
        <div class="row col-xs-12 col-sm-12 table-responsive">
          <table class="venue-table">
            <thead>
              <tr>
                <th>Horario de atención</th>
                <th>Dirección</th>
                <th>Teléfono</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td data-label="Horario de atención"> {!! $data->horary !!}</td>
                  <td data-label="Dirección"> {{ $data->direction }}</td>
                  <td data-label="Teléfono"> {{ $data->phone }}</td>
                </tr>
            </tbody>
          </table>

          <br />

          <style>
            .ref{
              width: 100%;
              margin-bottom: 20px;
              padding: 8px;
              font-size: 14px;
              font-family: "Geogrotesque-Rg" !important;
              border: 1px solid #ddd;

            }
            .ref2{
              margin-bottom: 0;
              display: flex;
              align-items: center;
              flex-wrap: nowrap;

            }
            .ref strong{
              margin-right: 5px;
            }

            .reflog{
              display: inline-block;
            }

            .reflog img{
              width: 48px;
            }

            .ref.ref200 {background-color: #FF4E0E;color: white;
            font-size:16px}
          </style>

          <div class="venue-content-editable">
            {!! $x =
              str_replace(
                [
                  'title=',
                  '<a href',
                  'alt="UNI"></a>',
                  'alt="San Marcos"></a>',
                  'alt="PUCP"></a>',
		              'alt="Escolar"></a>',
                  '"><img'
                ],
                [
                  'alt=',
                  '<a class="venue-preparation-item" href',
                  'alt="UNI"><strong>UNI</strong></a>',
                  'alt="San Marcos"><strong>San Marcos</strong></a>',
                  'alt="PUCP"><strong>PUCP</strong></a>',
		              'alt="Escolar"><strong>Escolar</strong></a>',
                  '#' . Str::slug($data->name) . '"><img'
                ]
                ,$data->content) !!}
          </div>

        </div>
      </div>

      <div class="col-xs-12 col-sm">
        <div id="mapid" style="display: none"></div>
          @if($data->name == 'Santa Beatriz')
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.7554280351521!2d-77.03736403400319!3d-12.077139284743188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8f2fe84be61%3A0x77db19933b39532c!2sAcademia%20Trilce%20Santa%20Beatriz!5e0!3m2!1ses!2spe!4v1687434971219!5m2!1ses!2spe" width="600" height="450" frameborder="0" style="border:0; height: 450px !important; padding: 0px 0px 0px 15px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          @elseif ($data->name == 'Los Olivos')
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.470934276111!2d-77.07283442290175!3d-12.011065757856557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ceef869cfb69%3A0x13097984914075f3!2sAcademia%20Trilce%20Tom%C3%A1s%20Valle!5e0!3m2!1ses!2spe!4v1687435092590!5m2!1ses!2spe" width="600" height="450" frameborder="0" style="border:0; height: 450px !important; padding: 0px 0px 0px 15px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          @elseif ($data->name == 'Villa El Salvador')
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3899.781207057614!2d-76.9609821!3d-12.1952854!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b974d0310917%3A0xba0deb925cc5445f!2sAcademia%20Trilce%20Villa%20El%20Salvador!5e0!3m2!1ses!2spe!4v1731385450065!5m2!1ses!2spe" width="600" height="450" frameborder="0" style="border:0; height: 450px !important; padding: 0px 0px 0px 15px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          @endif
      </div>

    </div>
  </div>


  @include('academia.partials.card_bottom')
@endsection

@section('scripts')
    page = 'venue';

  @parent

  <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin="">
  </script>
  <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />

  <script>
    var mymap = L.map('mapid').setView([{{$data->logitude}},{{$data->latitude}}], 17);

    mymap.addControl(new L.Control.Fullscreen());

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoiemVudGlkbyIsImEiOiJjanNidW5oNzgwZWFrNDNvODdkYzRvb2RpIn0.tZbhzFp5-WPfsxvutTL00w'
    }).addTo(mymap);

    var greenIcon = L.icon({
        iconUrl: 'https://www.trilce.edu.pe/static/images/map-marker.svg',

        iconSize:     [50, 55], // size of the icon
        iconAnchor:   [30, 55], // point of the icon which will correspond to marker's location
        popupAnchor:  [-5, -55] // point from which the popup should open relative to the iconAnchor
    });

    var marker = L.marker([{{$data->logitude}},{{$data->latitude}}], {icon: greenIcon}).addTo(mymap);
    marker.bindPopup(`<span style="color:#f4633a">{{ $data->name }}</span><br>{!! $data->direction !!} <br> <i class="fa fa-phone" aria-hidden="true" style="color: #f4633a;"></i> {{ $data->phone }}`).openPopup();
  </script>


@endsection
