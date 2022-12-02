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
        Schema::create('master_details', function (Blueprint $table) {
            $table->id('id_master_detail');
            $table->foreignId('id_master')
                    ->constrained('masters', 'id_master')
                    ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');
            $table->string('no_master_detail');
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
        Schema::dropIfExists('master_details');
    }
};
