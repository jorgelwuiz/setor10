<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_pessoas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('area_id')->nullable();
            $table->foreign('area_id')->references('id')->on('areas');            
            $table->unsignedBigInteger('congregacao_id')->nullable();
            $table->foreign('congregacao_id')->references('id')->on('congregacoes');             
            $table->unsignedBigInteger('funcao_eclesiastica_id')->nullable();
            $table->foreign('funcao_eclesiastica_id')->references('id')->on('funcao_eclesiasticas');                                                            
            $table->string('nome'); 
            $table->string('contato')->nullable();  
            $table->string('email')->nullable()->unique();                                  
            $table->string('numero_cartao_membro')->unique(); 
            $table->string('endereco')->nullable();       
            $table->integer('numero')->nullable();        
            $table->string('status')->nullable();                                        
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
        Schema::dropIfExists('cadastro_pessoas');
    }
}
