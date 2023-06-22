<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactes', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->string('email');
            $table->text('website');
            $table->string('number');
            $table->string('map_embedded');
            $table->text('work_hour');
            $table->string('contact_email');
            $table->string('banner_image')->nullable(); 
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
        Schema::dropIfExists('contactes');
    }
}
