<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_master', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brand_master');
    }
}
