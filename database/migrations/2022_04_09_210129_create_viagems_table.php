<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viagems', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table-> string ("localizador");
            $table-> string ("pagamento");
            $table-> string ("precogol");
            $table-> string ("precovoemais");
            $table-> string("cpf");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viagems');
       /**
        *  $table-> foreignId("cliente_id")
        *->constrained()
        *->onDelete('cascade');
        */
    }
}
