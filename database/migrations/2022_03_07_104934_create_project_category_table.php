<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_project', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('project_id')->constrained()->onUpdate('cascade')
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
        Schema::table('category_project', function (Blueprint $table) {
            $table->dropForeign('category_project_project_id_foreign');
        });
        Schema::table('category_project', function (Blueprint $table) {
            $table->dropForeign('category_project_category_id_foreign');
        });
        Schema::dropIfExists('project_category');
    }
}
