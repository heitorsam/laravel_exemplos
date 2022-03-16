<?php

//Methodo caso o projeto ja esteja em produção, apenas adiconando campos
//php artisan make:migration add_observacao_to_produtos_table

//Rodar apenas um arquivo
//artisan migrate --path=/database/migrations/2022_03_16_162248_add_anexo_foto_to_produtos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddObservacaoToProdutosTable extends Migrationphp 
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
            //
            $table->string('observacao',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            //
            $table->string('observacao',100);
        });
    }
}
