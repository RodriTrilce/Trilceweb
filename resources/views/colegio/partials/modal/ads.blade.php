@if($popup)
<div id="modal-ads" style="display:none;">
    <div class="row top-xs col-xs-12 center-xs">
      <a {{ ($popup->link == '#close' ? 'data-modal-close' : '' ) }} href="{{$popup->link}}" target="_blank" class="row top-xs col-xs-12 center-xs">
        <img class="xs-hide" src="{{$popup->image_url}}">
        <img class="xs-reverse" src="{{$popup->image_url_movil}}">
      </a>
    </div>
</div>
@endif