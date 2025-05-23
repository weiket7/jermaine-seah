<?php

class PostController extends BaseController {

	public $layout='template-admin';

	public function index() {
		$data = array(
			'posts'=>Post::all(),
			'sliders'=>Slider::all(),
		);
		$this->layout->content = View::make('post-admin', $data);
	}

	public function create() {
		$data = array(
			'post' => Post::bare(),
		);
		$this->layout->content = View::make('post-form', $data);
	}

	public function createPost() {
		$input = Input::all();		
		$post = new Post;
		$post->tags = $input['tags'];
		$post->title = $input['title'];
		$post->content = $input['content'];
		$post->subcontent = $input['subcontent'];
		$post->popular = $input['popular'];
		$post->category = $input['category'];
		$post->column = $input['column'];
		$post->stat = $input['stat'];

		$destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/img/blog/";	
		if (Input::hasFile('image')) {
      $file            = Input::file('image');
      $image_name        = $file->getClientOriginalName();
      $uploadSuccess   = $file->move($destinationPath, $image_name);
      $post->image = $image_name;
    }

		$post->save();
		return Redirect::to('admin/post')->with('msg', 'Post created');
	}

	public function update(Post $post)
	{
		$data = array(
			'post' => $post,
		);
	 	$this->layout->content = View::make('post-form', $data);
	}


	 public function updatePost() {
	 	$post = Post::findOrFail(Input::get('id'));
	 	$input = Input::all();

	 	if (isset($input['delete'])) {
			$post->delete();
			return Redirect::to('admin/post')->with('msg', 'Post deleted');
		}

	 	$post->tags = $input['tags'];
	 	$post->title = $input['title'];
	 	$post->content = $input['content'];
	 	$post->subcontent = $input['subcontent'];
	 	$post->popular = $input['popular'];
	 	$post->category = $input['category'];
	 	$post->column = $input['column'];
		 $post->stat = $input['stat'];

	 	$destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/img/blog/";	
		if (Input::hasFile('image')) {
      $file            = Input::file('image');
      $image_name        = $file->getClientOriginalName();
      $uploadSuccess   = $file->move($destinationPath, $image_name);
      $post->image = $image_name;
    }

		$post->save();
 	  return Redirect::to('admin/post')->with('msg', 'Post updated');
  }

	public function order() {
		$data = array(
			'posts'=>Post::orderBy('pos')->where('stat', 'P')->get(),
			'sliders'=>Slider::all(),
		);
		if (Request::isMethod('post')) {
			foreach($data['posts'] as $p) {
				$pos = $_POST['pos'.$p->id];
				$s = "update post set pos = $pos where id = ".$p->id;
				DB::statement($s);
			}
			return Redirect::to('admin/post/order')->with('msg', 'Order saved');;
		}
		$this->layout->content = View::make('post-order', $data);
	}

}
