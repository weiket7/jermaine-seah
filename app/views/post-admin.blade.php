@section('content')

<h1>Post</h1>

{{HTML::link('admin/post/create', "Create Post", ['class'=>'btn btn-primary'])}}
{{HTML::link('admin/post/order', "Order", ['class'=>'btn btn-primary'])}}
<br><br>

@if ($posts->isEmpty())
	<p> No posts</p>

@else
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Image</th>
				<th>Title</th>
				<th>Sub Content</th>
				<th>Tags</th>
				<th>Popular</th>
				<th>Position</th>
			</tr>
		</thead>
		<tbody>
			@foreach($posts as $p)
				<tr>
					<td>{{HTML::image('img/blog/'.$p->image, null, ['height'=>'100px', 'style'=>'width:auto'])}}</td>
					<td>{{link_to('admin/post/update/'.$p->id, $p->title)}}</td>
					<td>{{$p->subcontent}}</td>
					<td>{{$p->tags}}</td>
					<td>{{$p->popular == '1' ? 'Yes' : 'No'}}</td>
					<td>{{$p->pos}}</td>
				</tr>
			@endforeach
	</tbody>
	</table>
@endif

@stop