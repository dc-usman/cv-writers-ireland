<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('country');
            $table->string('select_package');
            $table->string('paper_type')->nullable();
            $table->string('paper_topic')->nullable();
            $table->string('language')->nullable();
            $table->integer('reference')->nullable();
            $table->string('subject_area')->nullable();
            $table->string('style')->nullable();
            $table->string('academic_level')->nullable();
            $table->string('career_level');
            $table->integer('number_of_pages')->nullable();
            $table->string('deadline')->nullable();
            $table->tinyInteger('spacing')->default(1);
            $table->double('cost_per_page', 8,2)->nullable();
            $table->double('total_price', 8,2)->nullable();
            $table->mediumText('detail')->nullable();
            $table->boolean('is_complete')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
