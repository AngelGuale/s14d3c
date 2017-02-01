@extends('admin_base')

@section('content')
	<div class="tables col-md-8 col-md-offset-2">
		<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
			<h4>Fulfilled Test:</h4>
			<table class="table table-hover"> 
				<thead> 
					<tr> 
						<th>#</th> 
						<th>Code</th> 
						<th>Test Date</th> 
						<th>Responsible</th> 
						<th>Results</th>
						<th>detail</th>
					</tr> 
				</thead> 
				<tbody> 
					@foreach($examenes as $index => $examen)
					<tr> 
						<th scope="row">{{ $index + 1 }}</th> 
						<td>{{$examen->codigo}}</td> 
						<td>{{$examen->fecha}}</td> 
						<td>{{$examen->responsable}}</td> 
						<td style="color : green;">No disease detected!</td> 
						<td><button class="btn btn-info btn-xs btn-block" style="border: none; border-radius: 0px;">Show</button></td>
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