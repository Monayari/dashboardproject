<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('tag_id')->constrained()->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::table('project_tag', function (Blueprint $table) {
            $table->dropForeign('project_tag_tag_id_foreign');
        });
        Schema::table('project_tag', function (Blueprint $table) {
            $table->dropForeign('project_tag_project_id_foreign');
        });
        Schema::dropIfExists('project_tag');
    }
}
