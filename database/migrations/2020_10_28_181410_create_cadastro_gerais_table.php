<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroGeraisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_gerais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas');            
            $table->unsignedBigInteger('congregacao_id');
            $table->foreign('congregacao_id')->references('id')->on('congregacoes'); 
            $table->unsignedBigInteger('funcao_eclesiastica_id')->nullable();
            $table->foreign('funcao_eclesiastica_id')->references('id')->on('funcao_eclesiasticas');       
            $table->string('nome'); 
            $table->string('Contato')->nullable();                                  
            $table->string('numero_cartao_membro')->unique(); 
            $table->string('Endereco')->nullable();                                    
            $table->string('observacoes')->nullable(); 
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
        Schema::dropIfExists('cadastro_gerais');
    }
}
