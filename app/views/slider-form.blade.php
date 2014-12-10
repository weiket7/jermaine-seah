
@section('content')


<?php $route = Route::currentRouteAction(); ?>
<?php $action = substr(strstr($route, '@'), 1); ?>

<div class="container">

	<h1>{{ ucfirst($action) }} Slider</h1>
	@if(Session::has('msg'))
	  <div class="alert alert-success ">
	    {{ Session::get('msg') }}
	  </div>
	@endif
	
	<div class="content">
		{{ Form::open(['url'=> 'admin/slider/'.$action, 'id'=>'val', 'class'=>'form', 'role'=>'form', 'files'=>true]) }}
		@if ($action == 'update')
			{{ Form::hidden('id', $slider->id) }}
		@endif

		<table>	
			<tr>
				<td width='100px'>{{ Form::label('image', 'Image') }}</td>
				<td>
				@if($slider->image != '')
					{{ HTML::image('img/slider/'.$slider->image, null, ['height'=>'100px', 'style'=>'width:auto']) }}
				@endif
				{{ Form::file('image') }}</td>
			<tr>
				<td>{{ Form::label('caption', 'Caption') }}</td>
				<td>{{ Form::text('caption', $slider->caption, ['class'=>'form-control']) }}</td>
			</tr>
			<tr>
				<td>{{ Form::label('subcaption', 'Sub Caption') }}</td>
				<td>
					{{ Form::text('subcaption', $slider->subcaption, ['class'=>'form-control'])}}
				</td>
			</tr>
			<tr>
				<td>{{ Form::label('order', 'Order') }}</td>
				<td>{{ Form::text('order', $slider->order, ['class'=>'form-control']) }}</td>
			</tr>
			<tr>
				<td>{{ Form::label('delete', 'Delete') }}</td>
				<td>{{ Form::checkbox('delete') }}</td>
			</tr>
		</table>

		<br>
		@if ($action != 'view')	<!--create update-->
			{{ Form::submit(ucfirst($action).' Slider', ['class'=>'btn btn-primary']) }}
		@endif
		{{ Form::button('Back', ['onclick'=>'history.back();', 'class'=>'btn btn-primary']) }}		

		{{ Form::close() }}
</div>

</div>

@stop