<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->text('biography');
            $table->string('favoraite');
            $table->string('img')->nullable();
            $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('citie_id')->nullable();
            $table->unsignedBigInteger('citie_id');
            $table->unsignedBigInteger('province_id');
            // $table->unsignedBigInteger('province_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('citie_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
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
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropForeign('profiles_user_id_foreign');
        });
        Schema::table('profiles', function (Blueprint $table) {
        $table->dropForeign('profiles_citie_id_foreign');
    });
        Schema::table('profiles', function (Blueprint $table) {
        $table->dropForeign('profiles_province_id_foreign');
    });
        Schema::dropIfExists('profiles');
    }
}
