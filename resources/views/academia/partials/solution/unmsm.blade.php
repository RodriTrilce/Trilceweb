
<div class="container-base row center-sm solution-table solution-table-double">
  <div class="row col-xs-12 col-sm-9 col-md-8 start-sm start-md table-responsive">

    <table class="solution-table-content">
      <thead>
        <!--tr>
          <th></th>
          <th>Área A, B y D</th>
          <th>Área C y E</th>
		  <th>Área C y E</th>
		  <th>Área C y E</th>
        </tr-->
      </thead>
      <tbody>

        @foreach($solutions as $solution)
          <tr>
            <td data-label="">{{$solution->display}}</td>
            
            <td data-label="Área B y D">
               @if($solution->exm_1)
                <a href="{{$solution->exm_1}}" target="_blank"><i class="fa fa-file-pdf-o"></i> {{$solution->title_1}}</a>
               @endif
            </td>

            <td data-label="Área E">
               @if($solution->exm_2)
                 <a href="{{$solution->exm_2}}" target="_blank"><i class="fa fa-file-pdf-o"></i> {{$solution->title_2}}</a>
               @endif
            </td>
			
			<td data-label="Área A">
               @if($solution->exm_3)
                 <a href="{{$solution->exm_3}}" target="_blank"><i class="fa fa-file-pdf-o"></i> {{$solution->title_3}}</a>
               @endif
            </td>
			
			<td data-label="Área C">
               @if($solution->exm_4)
                 <a href="{{$solution->exm_4}}" target="_blank"><i class="fa fa-file-pdf-o"></i> {{$solution->title_4}}</a>
               @endif
            </td>

          </tr>
        @endforeach

      </tbody>
    </table>

  </div>
</div>