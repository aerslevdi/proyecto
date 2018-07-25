<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

          Schema::create('categorias', function (Blueprint $table) {
              $table->increments('id');
              $table->string('name');
              $table->string('desc');
              $table->string('foto')->default('0');
              $table->timestamps();
          });



            DB::table('categorias')->insert([


              [ 'name' => 'Diseño',
              'desc' => 'Diseño de interiores para empresas y locales'],
              [ 'name' => 'Judicial',
              'desc' => 'Servicios legales y judiales -Empresas-'],
              [ 'name' => 'Arquitectura',
              'desc' => 'Arquitectura para proyectos empresariales'],
              [ 'name' => 'Medicina',
              'desc' => 'Servicios de salud y sanidad para empresas'],
              [ 'name' => 'Tecnologia',
              'desc' => 'Tecnologia giagiaiga'],
              [ 'name' => 'Motivacion Empresarial',
              'desc' => 'Capacitaciones DH',
              'desc' => 'Servicios de capacitacion personales y empresariales'],

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
        //
    }
}
