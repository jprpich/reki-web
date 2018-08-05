<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestFactoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_factory', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_factory');
            $table->string('tipo_material');
            $table->unsignedInteger('cantidad');
            $table->decimal('valor',14,2);
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
        Schema::dropIfExists('request_factory');
    }
}
