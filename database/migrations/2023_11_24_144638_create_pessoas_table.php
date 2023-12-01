<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('cpf', 20)->nullable();
            $table->timestamps();
        });
    }

    /*O SCHEMA acima faz basicamente essa linha de codigo do SQL para criar um banco de dados 
    CREATE TABLE pessoas (
        'id' INT PRIMARY KEY,
        'name' VARCHAR(150) NOT NULL,
        'cpf' VARCHAR(20) unique,
    );
    */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }

    /*O SCHEMA acima esta rodando basicamente um delete da tabela pessoas 
    DROP TABLE pessoas;
    */
};
