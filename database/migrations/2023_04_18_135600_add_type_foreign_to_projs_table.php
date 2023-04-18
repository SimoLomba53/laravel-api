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
        Schema::table('projs', function (Blueprint $table) {
            $table->foreignId('type_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projs', function (Blueprint $table) {
            $table->dropForeign('projs_type_id_foreign');
            $table->dropColumn('type_id');
        });
    }
};
