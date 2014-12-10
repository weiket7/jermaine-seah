<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slider', function($table)
    {
	   $table->increments('id');
      $table->string('image', 100);
      $table->tinyInteger('order');
      $table->string('caption', 100);
      $table->string('subcaption', 100);
      $table->timestamps();
      $table->softDeletes();
    });

    $p = new Slider();
    $p->image='marina-one.jpg';
    $p->order='1';
    $p->save();

    $p = new Post();
    $p->image='robin-residences.jpg';
    $p->tags='2';
    $p->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('slider');
		//
	}

}
