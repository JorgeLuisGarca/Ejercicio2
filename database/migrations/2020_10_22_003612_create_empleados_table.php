<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apaterno');
            $table->string('amaterno');
            $table->string('puesto');
            $table->timestamps();
        });

        DB::table('empleados')->insert(
            array(
                'nombres' => 'Alexis',
                'apaterno' => 'Sanchez',
                'amaterno' => 'Morones',
                'puesto' => 'Gerente'
            )
        );

        DB::table('empleados')->insert(
            array(
                'nombres' => 'Jorge Luis',
                'apaterno' => 'Ordoñez',
                'amaterno' => 'García',
                'puesto' => 'Jefe'
            )
        );

        DB::table('empleados')->insert(
            array(
                'nombres' => 'Carolina',
                'apaterno' => 'Mendoza',
                'amaterno' => 'Del Valle',
                'puesto' => 'Supervisora'
            )
        );
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
