<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_projects', function (Blueprint $table) {
            $table->id();
            $table->text('project_name');
            $table->string('description');
            $table->string('video_url');
            $table->string('thumbnail_image')->nullable();
            $table->string('project_image')->nullable();
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
        Schema::dropIfExists('table_projects');
    }
}
