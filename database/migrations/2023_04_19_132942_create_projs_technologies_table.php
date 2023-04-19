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
        Schema::create('projs_technologies', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('proj_id')
            ->constrained()
            ->cascadeOnDelete();

            $table->foreignId('technology_id')
            ->constrained()
            ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projs_technologies');
    }
};
