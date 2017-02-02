@extends('admin_base')

@section('content')
	<div class="tables col-md-8 col-md-offset-2">
		<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
			<h4>Examenes Realizados:</h4>
			<table class="table table-hover"> 
				<thead> 
					<tr> 
						<th>#</th> 
						<th>C&oacute;digo</th> 
						<th>Fecha </th> 
						<th>Responsable</th> 
						<th>Resultados</th>
						<th>Detalle</th>
					</tr> 
				</thead> 
				<tbody> 
					@foreach($examenes as $index => $examen)
					<tr> 
						<th scope="row">{{ $index + 1 }}</th> 
						<td>{{$examen->codigo}}</td> 
						<td>{{$examen->fecha}}</td> 
						<td>{{$examen->responsable}}</td> 
						<td style="color : green;">No se detectaron enfermedades!</td> 
						<td><button class="btn btn-info btn-xs btn-block" onclick="location.href='/clasificador/{{$examen->id}}'" style="border: none; border-radius: 0px;">Ver</button></td>
					</tr> 
					@endforeach
				</tbody> 
			</table>
		</div>
	</div>
@stop

@section('scripts')
<script>
	

</script>
@stop