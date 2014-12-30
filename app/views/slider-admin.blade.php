@section('content')

<h1>Slider</h1>

{{HTML::link('admin/slider/create', "Create Slider", ['class'=>'btn btn-primary'])}}
<br><br>

@if ($sliders->isEmpty())
	<p> No sliders</p>

@else
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Image</th>
				<th>Caption</th>
				<th>Subcaption</th>
			</tr>
		</thead>
		<tbody>
			@foreach($sliders as $s)
				<tr>
					<td>{{HTML::image('img/slider/'.$s->image, null, ['height'=>'100px', 'style'=>'width:auto'])}}</td>
					<td>{{link_to('admin/slider/update/'.$s->id, $s->caption)}}</td>
					<td>{{$s->subcaption}}</td>
				</tr>
			@endforeach
	</tbody>
	</table>
@endif

@stop