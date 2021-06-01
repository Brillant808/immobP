<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBienImmobiliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bien_immobiliers', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->longText('description');
            $table->string('addresse');
            $table->string('photo')->nullable();
            $table->integer('prix');
            $table->integer('users_id');
            $table->foreign('users_id')
		    ->references('id')
		    ->on('users')
		    ->onDelete('restrict')
		    ->onUpdate('restrict');
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
        Schema::dropIfExists('bien_immobiliers');
    }
}
