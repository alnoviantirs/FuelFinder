<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpbuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spbu', function (Blueprint $table) {
            $table->string('namaspbu')->nullable();
            $table->string('jam_operasional')->nullable();
            $table->string('jenis_bahan_bakar')->nullable();
            $table->string('telepon')->nullable();
            $table->string('fasilitas')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spbu');
    }
}
