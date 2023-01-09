<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            //Agregando nuevos campos a la tabla de tareas
            $table->string("nombre", 60);
            $table->string("descripcion", 60)->nullable();
            $table->tinyInteger("finalizada")->default(0);
            $table->timestamp("fecha_limite");
            $table->tinyInteger("urgencia")->comment("0: No es urgente, 1: Urgencia normal, 2: Muy urgente");
            //Una vez con los campos definidos en la bd se procede a ejecutar php artisan migrate para migrar los cambios a la bd
            // y se vea reflejado
            $table->softDeletes();
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
        Schema::dropIfExists('tareas');
    }
};
