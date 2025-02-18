<div class="container-base row center-sm solution-table solution-table-double">
  <div class="row col-xs-12 col-sm-9 col-md-8 start-sm start-md table-responsive">
	
    <table class="solution-table-content">
      <thead>
        <tr>
          <th></th>
          <th>Aptitud Académica y Humanidades</th>
          <th>Matemática</th>
          <th>Física y Química</th>
        </tr>
      </thead>
      <tbody>

          @foreach($solutions as $solution)
            <tr>
              <td data-label="">{{$solution->display}}</td>

              <td data-label="Aptitud académica y humanidades">
                 @if($solution->exm_1)
                  <a href="{{$solution->exm_1}}" target="_blank"><i class="fa fa-file-pdf-o"></i> Descargar</a>
                 @endif
              </td>

              <td data-label="Matemática">
                 @if($solution->exm_2)
                   <a href="{{$solution->exm_2}}" target="_blank"><i class="fa fa-file-pdf-o"></i> Descargar</a>
                 @endif
              </td>

              <td data-label="Física y química">
                 @if($solution->exm_3)
                   <a href="{{$solution->exm_3}}" target="_blank"><i class="fa fa-file-pdf-o"></i> Descargar</a>
                 @endif
              </td>
            </tr>
          @endforeach
          
      </tbody>
    </table>


  </div>
</div>