  @if (session('contact'))
    <div id="modal-1" style="display:none;">
      <div class="modal-auto">
        <div class="row col-xs-12 center-xs modal-contact">
            <div class="col-xs-12">
              <h1 class="finish-title">{{ucwords(session('name'))}}, gracias por escribirnos <img src="{{url('/static/images/academia/svg/icon-thanks-enrolltment.svg')}}" class="finish-thanks" alt="Gracias por contactarnos"></h1>
            </div>
            <div class="col-xs-12">
              <p class="finish-text">Nos pondremos en contacto contigo a la brevedad.</p>
            </div>
        </div>
      </div>
    </div>
  @endif
