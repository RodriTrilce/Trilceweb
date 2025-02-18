<input type="text" id="_university" value="{{ ($type=='san-marcos'?'sm':$type) }}" hidden>
<div class="row col-xs-12 center-xs nuevos-i-list container-base">
  <div class="row col-xs-12 col-sm-9 col-md-8 start-md start-xs start-sm nuevos-i-list-selects">
    @switch($type)
      @case('san-marcos')
        @include('academia.partials.preparation.search.search-san-marcos')
        @break

      @case('uni')
        @include('academia.partials.preparation.search.search-uni')
        @break

      @case('pucp')
        @include('academia.partials.preparation.search.search-pucp')
        @break
    @endswitch
  </div>

  <div class="row col-xs-12 col-sm-9 col-md-8 start-sm start-xs table-responsive preparation-overflow" id="drawTables"></div>

  @if($type == 'pucp')
  <div class="row col-xs-12 col-sm-9 col-md-8 start-sm start-xs" id="academia-aviso" style="display: none;">
    <span style="
    font-family: Geogrotesque-Lt;
    font-size: 1.1rem;
    color: #f4633a;
    padding-right: 2px;
    ">
    <span>*</span>Consultar por nuestra modalidad en cuotas.
  </span>
  </div>
  @endif

</div>

<script>
  var v = document.getElementById("beginning-venue"),
      b = document.getElementById("academia-aviso");
  v.addEventListener("change", function(){
    b.style.display = "none";
    let sede = v.options[v.selectedIndex].value;
    if(sede == 23 || sede == 20)
      b.style.display = "flex";
  })
</script>