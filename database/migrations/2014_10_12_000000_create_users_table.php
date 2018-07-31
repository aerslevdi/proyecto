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
            $table->string('name');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('entidad');
            $table->string('foto');
            $table->string('cate')->default('1')->nullable();
            $table->string('ranking')->default('70');
            $table->string('email',60)->unique();
            $table->string('iden',60)->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });



          DB::table('users')->insert([
                     'name' => 'admin',
                      'cate' => '0',
                     'email' => 'admin@isol.com',
                     'direccion'=>'0',
                     'telefono'=>'0',
                     'entidad'=>'0',
                     'foto'=>'0',
                     'iden'=>'0',


                     'password' => bcrypt('admin123'),
                 ]);


            \DB::commit();


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
