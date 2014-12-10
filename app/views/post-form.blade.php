@section('content')

<script type="text/javascript" src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js') }}"></script>

<script type="text/javascript">
tinymce.init({
 	selector:'.tinymce',
  plugins: [
         "jbimages"
   ],
   width: 700,
   relative_urls: false
});
</script>

<?php $route = Route::currentRouteAction(); ?>
<?php $action = substr(strstr($route, '@'), 1); ?>

<div class="container">
	<h1>{{ ucfirst($action) }} Post</h1>
	@if(Session::has('msg'))
	  <div class="alert alert-success ">
	    {{ Session::get('msg') }}
	  </div>
	@endif
	
	<div class="content">
		{{ Form::open(['url'=> 'admin/post/'.$action, 'id'=>'val', 'class'=>'form', 'role'=>'form', 'files'=>true]) }}
		@if ($action == 'update')
			{{ Form::hidden('id', $post->id) }}
		@endif

		<table>	
			<tr>
				<td width='100px'>{{ Form::label('image', 'Image') }}</td>
				<td>
				@if($post->image != '')
					{{ HTML::image('img/blog/'.$post->image, null, ['height'=>'100px', 'style'=>'width:auto']) }}
				@endif
				{{ Form::file('image') }}</td>
			<tr>
				<td>{{ Form::label('title', 'Title') }}</td>
				<td>{{ Form::text('title', $post->title, ['class'=>'form-control']) }}</td>
			</tr>			
			<tr>
				<td style='vertical-align:top'>{{ Form::label('content', 'Content') }}</td>
				<td>
					{{ Form::textarea('content', $post->content, ['class'=>'tinymce'])}}
				</td>
			</tr>
			<tr>
				<td style='vertical-align:top'>{{ Form::label('subcontent', 'Sub Content') }}</td>
				<td>
					{{ Form::textarea('subcontent', $post->subcontent, ['class'=>'form-control'])}}
				</td>
			</tr>
			<tr>
				<td>{{ Form::label('category', 'Category') }}</td>
				<td>
					<?php $category_arr = array('P'=>"Property Market", 'L'=>"New Launches", 'I'=>"Infrastructure") ?>
			  	{{ Form::select('category', $category_arr, $post->category, ['class'=>'form-control']) }}
				</td>
			</tr>
			<tr>
				<td>{{ Form::label('column', 'Column') }}</td>
				<td>
					<?php $column_arr = array('N'=>"What's New", 'H'=>"What's Hot") ?>
			  	{{ Form::select('column', $column_arr, $post->column, ['class'=>'form-control']) }}
				</td>
			</tr>
			<tr>
				<td>{{ Form::label('tags', 'Tags') }}</td>
				<td>{{ Form::text('tags', $post->tags, ['class'=>'form-control']) }}</td>
			</tr>
			<tr>
				<td>{{ Form::label('popular', 'Popular') }}</td>
				<td>
					<?php $status_arr = array('1'=>'Yes', '0'=>'No') ?>
			  	@foreach($status_arr as $key => $s) 
				  	<label class='radio-inline' for='{{$s}}'>
			  			@if ($key == $post->popular)
								{{ Form::radio('popular', $key, true, array('id'=>$s)) }}
							@else
								{{ Form::radio('popular', $key, false, array('id'=>$s)) }}
					  	@endif
					  	{{$s}}
					  </label>
			  	@endforeach
			  	<label for='popular' class='error' />
			  </td>
			</tr>
			<tr>
				<td>{{ Form::label('delete', 'Delete') }}</td>
				<td>{{ Form::checkbox('delete') }}</td>
			</tr>
		</table>

		<br>
		@if ($action != 'view')	<!--create update-->
			{{ Form::submit(ucfirst($action).' Post', ['class'=>'btn btn-primary']) }}
		@endif
		{{ Form::button('Back', ['onclick'=>'history.back();', 'class'=>'btn btn-primary']) }}		

		{{ Form::close() }}
</div>

</div>

@stop