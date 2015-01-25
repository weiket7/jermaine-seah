<?php

class SiteController extends BaseController {

	public $layout='template';

	public function index()
	{
		$data = [
			'posts' => Post::orderBy('pos')->where('stat', 'P')->get(),
			'sliders'=>Slider::all()
		];
		$this->layout->content = View::make('index', $data);
	}

	public function category($category_raw)
	{
		$category_map = ['property-market'=>'P', 'new-launches'=>'L', 'infrastructure'=>'I'];
		$category = $category_map[$category_raw];
		$data = [
			'posts' => Post::where('category', $category)->orderBy('created_at')->get(),
			'sliders'=>Slider::all(),
		];
		$this->layout->content = View::make('index', $data);
	}

	public function login() {
		$this->layout->content = View::make('login');
	}

	public function post(Post $post = null) {
		$data = [
			'post'=> $post,
			'posts'=>Post::where('category', $post->category)->orderBy('created_at')->get(),
			'sliders'=>Slider::all(),
		];
		$this->layout->content = View::make('post-view', $data);
	}

	public function loginPost() {
		$user = array(
			'username'=>Input::get('username'),
			'password'=>Input::get('password'),
		);

		if (Auth::attempt($user, true)) {
			return Redirect::to('task')->with('msg', 'Welcome');
		}	else {
			return Redirect::to('login')->with('msg', 'Wrong username and/or password');
		}
	}

	public function logout() {
		Auth::logout();
		return Redirect::to('login')->with('msg', 'Logged out');
	}
 
  public function about()
  {
		$this->layout->content = View::make('about');
  }

  public function portfolio()
  {
		$this->layout->content = View::make('portfolio');
  }

  public function services()
  {
		$this->layout->content = View::make('services');
  }

  public function blog()
  {
  	$data = ['posts'=>Post::all()];
		$this->layout->content = View::make('blog', $data);
  }

   public function contact()
  {
		$this->layout->content = View::make('contact');
  }

}
