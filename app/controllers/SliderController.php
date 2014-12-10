<?php

class SliderController extends BaseController {

	public $layout='template-admin';

	public function index() {
		$data = array(
			'sliders'=>Slider::all(),
		);
		$this->layout->content = View::make('slider-admin', $data);
	}

	public function create() {
		$data = array(
			'slider' => Slider::bare(),
		);
		$this->layout->content = View::make('slider-form', $data);
	}

	public function createPost() {
		$input = Input::all();		
		$slider = new Slider;
		$slider->caption = $input['caption'];
		$slider->subcaption = $input['subcaption'];
		$slider->order = $input['order'];

		$destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/img/slider/";	
		if (Input::hasFile('image')) {
      $file            = Input::file('image');
      $image_name        = $file->getClientOriginalName();
      $uploadSuccess   = $file->move($destinationPath, $image_name);
      $slider->image = $image_name;
    }

		$slider->save();
		return Redirect::to('admin/slider')->with('msg', 'Slider created');
	}

	public function update(Slider $slider) {
		$data = array(
			'slider' => $slider,
		);
	 	$this->layout->content = View::make('slider-form', $data);
	}


	 public function updatePost() {
	  $slider = Slider::findOrFail(Input::get('id'));
	 	$input = Input::all();

	 	if (isset($input['delete'])) {
			$slider->delete();
			return Redirect::to('admin/post')->with('msg', 'Slider deleted');
		}

	 	$slider->caption = $input['caption'];
		$slider->subcaption = $input['subcaption'];
	 	$slider->order = $input['order'];

	 	$destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/img/slider/";	
		if (Input::hasFile('image')) {
      $file            = Input::file('image');
      $image_name        = $file->getClientOriginalName();
      $uploadSuccess   = $file->move($destinationPath, $image_name);
      $slider->image = $image_name;
    }

		$slider->save();
 	  return Redirect::to('admin/slider')->with('msg', 'Slider updated');
  }

}
