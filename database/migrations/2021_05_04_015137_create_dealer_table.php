<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('about')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->longText('googlemaps')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
        });

        DB::table('dealer')->insert(
            array(
                'name' => 'belimobilkuy'
                'about' => 'jual mobil dealer mistubishi'
                'email' => 'dedycar1@gmail.com',
                'name' => 'belimobilkuy',
                'password' => Hash::make('123456'),
            )
        ); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dealer');
    }
}
