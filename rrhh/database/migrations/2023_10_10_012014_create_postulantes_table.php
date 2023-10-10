<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('postulantes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 100);
            $table->string('Apellido', 100)->nullable();
            $table->string('Email', 100);
            $table->integer('Celular');
            $table->bigInteger('idCargo');
            $table->timestamps();

            $table->foreign('idCargo')
            ->references('id')
            ->on('cargos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulantes');
    }
};
