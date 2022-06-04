<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title' , 255)->nullable(false);
            $table->text('article')->nullable(false);
            $table->string('file' , 255)->nullable(false);
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')
                ->onDelete('cascade');
            $table->time('data_published');
            $table->string('banner_img' , 255);
            $table->boolean('featured');
            $table->boolean('enabled');
            $table->boolean('comments_enabled');
            $table->integer('views');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('projects_user_id_foreign');
        });
        Schema::dropIfExists('projects');

    }
}
