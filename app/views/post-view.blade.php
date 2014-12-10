@section('content')
<div class="space80"></div>

<div class='container'>
<div class='row'>
<div class='col-md-8'>

<div class="blog-detail"> 
	<div class="post-data-container">
	  <div class="post-data">
	    <h2>{{$post->title}}</h2>
	    <!-- <h4>Design is directed toward human</h4> -->
	    <p>
	     	{{$post->content}} 
	    </p>  
	  </div>  
	</div>
</div>

</div>

<div class='col-md-4'>
	<h3>Recent Posts</h3>

	<div class="popular-posts">
        
	  <ul>
	  	@foreach($posts as $k => $p)
	    <li>
	      <img src="img/popular-posts/01.jpg" alt="">
	      <div class="pp-info">
	        <h4>{{link_to('post/'.$p->id, $p->title, ['class'=>'title'])}}</h4>
	      </div>
	    </li>
	    @endforeach	    
	  </ul>
  
	</div>

</div>

</div>
</div>

@stop