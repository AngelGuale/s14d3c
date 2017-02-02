@extends('admin_base')

@section('content')
<div class="main-page">
	<div class="elements">
		<div class="col-md-8 col-md-offset-2 weather-grids widget-shadow">
			<!--<form  method="post" action="/clasificador" enctype="multipart/form-data">-->
		


		<table class='table'>
			<thead>
				<th>Fecha</th>
				<th>Responsable</th>
				<th>Codigo</th>
				<th>Observaciones</th>
				
			</thead>

			<tbody>
			@foreach($examenes as $ex)
				<tr>
			      <td>$ex->fecha</td>
			      <td>Mark</td>
			      <td>Otto</td>
			      <td>jkj</td>
			    </tr>
				
			@endforeach
			</tbody>
		</table>
		</div>
		<div class="clearfix"> </div>	
	</div>
</div>
@stop

@section('scripts')
<script>
	

</script>
@stop