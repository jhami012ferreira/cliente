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
        Schema::create('__cliente__empresa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Empresa_id');
            $table->foreign('Empresa_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->timestamps();

            $table->unsignedBigInteger('Cliente_id');
            $table->foreign('Cliente_id')->references('id')->on('clientes')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('__cliente__empresa');
    }
};
