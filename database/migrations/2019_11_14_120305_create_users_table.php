<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('status_user');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('profil');
            $table->string('no_telepon');
            $table->string('jenis_kelamin');
            $table->string('alamat_desa');
            $table->string('alamat_kabupaten');
            $table->string('alamat_provinsi');
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
        Schema::dropIfExists('users');
    }
}
