@if (session('enrollment'))
  <div id="modal-1" style="display:none;">
    <div class="modal-b50">
      <div class="col-xs-12 center-xs enrollment-finish">
          <div class="col-xs-12">
              <div class="col-xs-12 center-xs">
                <svg version="1.1"  class="finish-thanks" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                	 viewBox="0 0 79.1 86.2" enable-background="new 0 0 79.1 86.2" xml:space="preserve">
                <path fill="#FF6336" d="M59.2,45.3V12H9.5v62.1h22.8c1.6,0,3,1.3,3,3c0,1.6-1.3,3-3,3H6.6c-1.6,0-3-1.3-3-3v-68c0-1.6,1.3-3,3-3
                	h55.6c1.6,0,3,1.3,3,3v36.3c0,1.6-1.3,3-3,3C60.5,48.3,59.2,47,59.2,45.3L59.2,45.3z M74.6,52.6c-1.2-1.1-3.1-1-4.2,0.2L54,71
                	l-8.2-7.9c-1.2-1.1-3.1-1.1-4.2,0.1c-1.1,1.2-1.1,3.1,0.1,4.2l10.4,10c0.5,0.5,1.3,0.8,2.1,0.8h0.1c0.8,0,1.6-0.4,2.1-1l18.4-20.5
                	C75.9,55.5,75.8,53.7,74.6,52.6L74.6,52.6z M48.3,23.5H21.5c-1.6,0-3,1.3-3,3c0,1.6,1.3,3,3,3h26.8c1.6,0,3-1.3,3-3
                	C51.3,24.8,49.9,23.5,48.3,23.5L48.3,23.5z M51.3,42.8c0-1.6-1.3-3-3-3H21.5c-1.6,0-3,1.3-3,3c0,1.6,1.3,3,3,3h26.8
                	C49.9,45.8,51.3,44.5,51.3,42.8L51.3,42.8z M21.5,55.7c-1.6,0-3,1.3-3,3c0,1.6,1.3,3,3,3h7.9c1.6,0,3-1.3,3-3c0-1.6-1.3-3-3-3H21.5z
                	 M21.5,55.7"/>
                </svg>
              </div>
            <h1 class="finish-title">¡Gracias!</h1>
          </div>
          <div class="col-xs-12">
            <p class="finish-text">
              Para culminar, acércate con tu ficha y DNI a la sede de tu preferencia.
            </p>
          </div>
          <div class="col-xs-12 finish-button-container">
            <form action="/academia/preinscripcion/descargar-pdf" method="post" target="_blank">
              {{ csrf_field() }}
              <input name="token" type="hidden" value="{{ session('dni') }}">
              <button type="submit" class="enrollment-finish--button">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                	 viewBox="0 0 239.3 59.5" enable-background="new 0 0 239.3 59.5" xml:space="preserve">
                <rect x="0" y="0" fill="#51555A" width="239.3" height="59.5"/>
                <g>
                	<g>
                		<path fill="#FFFFFF" d="M58.4,21.7l-9.7-10.1c-0.1-0.1-0.3-0.2-0.5-0.2H33.8c-1.6,0-2.9,1.3-2.9,2.9v10.2H25c-1.2,0-2.2,1-2.2,2.2
                			v11c0,1.2,1,2.2,2.2,2.2h5.8v6.6c0,1.6,1.3,2.9,2.9,2.9h21.9c1.6,0,2.9-1.3,2.9-2.9V22.2C58.7,22,58.6,21.9,58.4,21.7L58.4,21.7z
                			 M48.4,13.4l7.9,8.3h-7.9V13.4z M25,38.5c-0.4,0-0.7-0.3-0.7-0.7v-11c0-0.4,0.3-0.7,0.7-0.7h19.7c0.4,0,0.7,0.3,0.7,0.7v11
                			c0,0.4-0.3,0.7-0.7,0.7H25z M57.2,46.5c0,0.8-0.7,1.5-1.5,1.5H33.8c-0.8,0-1.5-0.7-1.5-1.5v-6.6h12.4c1.2,0,2.2-1,2.2-2.2v-11
                			c0-1.2-1-2.2-2.2-2.2H32.3V14.4c0-0.8,0.7-1.5,1.5-1.5H47v9.5c0,0.4,0.3,0.7,0.7,0.7h9.5V46.5z M57.2,46.5"/>
                		<path fill="#FFFFFF" d="M31.6,30c-0.2-0.3-0.5-0.5-0.9-0.6c-0.2-0.1-0.7-0.1-1.5-0.1h-2v6.3h1.3v-2.4h0.8c0.6,0,1,0,1.3-0.1
                			c0.2,0,0.4-0.1,0.7-0.3c0.2-0.2,0.4-0.4,0.5-0.6c0.1-0.3,0.2-0.6,0.2-1C31.9,30.7,31.8,30.3,31.6,30L31.6,30z M30.5,31.7
                			c-0.1,0.1-0.2,0.2-0.4,0.3c-0.2,0.1-0.5,0.1-1,0.1h-0.7v-1.8H29c0.5,0,0.8,0,0.9,0c0.2,0,0.4,0.1,0.5,0.3c0.1,0.1,0.2,0.3,0.2,0.6
                			C30.6,31.4,30.6,31.6,30.5,31.7L30.5,31.7z M30.5,31.7"/>
                		<path fill="#FFFFFF" d="M38,31c-0.1-0.4-0.3-0.7-0.6-1c-0.3-0.3-0.6-0.5-0.9-0.6c-0.3-0.1-0.7-0.1-1.2-0.1H33v6.3h2.4
                			c0.5,0,0.8,0,1.1-0.1c0.4-0.1,0.7-0.3,0.9-0.5c0.3-0.3,0.5-0.7,0.7-1.1c0.1-0.4,0.2-0.8,0.2-1.3C38.2,31.9,38.2,31.4,38,31L38,31z
                			 M36.8,33.6c-0.1,0.3-0.2,0.5-0.3,0.6c-0.1,0.1-0.3,0.2-0.5,0.3c-0.2,0-0.4,0.1-0.8,0.1h-0.9v-4.2h0.6c0.5,0,0.9,0,1,0.1
                			c0.2,0.1,0.4,0.1,0.6,0.3c0.2,0.1,0.3,0.3,0.4,0.6c0.1,0.3,0.1,0.6,0.1,1.1C36.9,32.9,36.9,33.3,36.8,33.6L36.8,33.6z M36.8,33.6"
                			/>
                		<path fill="#FFFFFF" d="M43.6,30.3v-1.1h-4.3v6.3h1.3v-2.7h2.6v-1.1h-2.6v-1.5H43.6z M43.6,30.3"/>
                	</g>
                	<text transform="matrix(1 0 0 1 73.4744 29.2844)"><tspan x="0" y="0" fill="#FFFFFF" font-family="'Geogrotesque-SmBd'" font-size="16.4207">Descarga tu ficha de</tspan><tspan x="0" y="16.2" fill="#FFFFFF" font-family="'Geogrotesque-SmBd'" font-size="16.4207">preinscripción aquí</tspan></text>
                </g>
                </svg>
              </button>
            </form>
          </div>
      </div>
    </div>
  </div>
@endif
