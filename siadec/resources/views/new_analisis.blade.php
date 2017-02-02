@extends('admin_base')

@section('content')
<style type="text/css">
	.center{
width: 150px;
  margin: 40px auto;
  
}
	.center2{
width: 90px;
  margin: 30px auto;
  
}
</style>


	<div class="tables col-md-8 col-md-offset-2">
		<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
			<h4 class="center">Crear Análisis</h4>
		<div class="center">
  		<span class="input-group-btn ">
              <button type="button" onclick="location.href='/crear_examen'" class="btn btn-success " data-type="plus" data-field="">
                  <span class="glyphicon glyphicon-plus center2"></span>
              </button>
          </span>
          </div>
		</div>
	</div>
@stop

@section('scripts')
<script>
	

</script>
@stop
