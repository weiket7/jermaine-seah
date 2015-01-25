<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post', function($table)
    {
			$table->increments('id');
      $table->string('title', 100);
      $table->string('subcontent', 200);
      $table->text('content');
      $table->string('tags', 250);
      $table->string('image', 50);
      $table->char('category', 1);
      $table->char('column', 1);
      $table->char('stat', 1)->default('D');
      $table->char('popular', 1);
      $table->smallInteger('pos');
      $table->timestamps();
    });

    $p = new Post();
    $p->title='RECOGNIZING THE NEED CONDITION';
    $p->tags='property, investment, money';
    $p->image='m1.jpg';
    $p->content='Teho pitem sequi nesciunt. Neque porro quisquam pora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.';
    $p->subcontent='Teho pitem sequi nesciunt. Neque porro quisquam pora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum';
    $p->category = 'P';
    $p->column = 'N';
    $p->save();

    $p = new Post();
    $p->title='INTEGE LISTA VITAE BEZAM FELIS RAFT';
    $p->tags='property, investment, money';
    $p->image='m2.jpg';
    $p->content='Zave tatem sequi nesciunt. Neque porro quisquam est, quam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.';
    $p->subcontent='Zave tatem sequi nesciunt. Neque porro quisquam est, quam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima';
    $p->category = 'P';
    $p->column = 'H';
    $p->save();

    $p = new Post();
    $p->title='TAGER PORVITAE FELISTA NIL VITA';
    $p->tags='property, investment, money';
    $p->image='m3.jpg';
    $p->content='Zave tatem sequi nesciunt. Neque porro quisquam est, quam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.';
    $p->subcontent='Fenora utem sequi nesciunt. Neque porro quisquam est, quam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima';
    $p->category = 'P';
    $p->column = 'H';
    $p->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('post');
		//
	}

}
