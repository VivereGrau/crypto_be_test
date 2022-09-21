<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('currency_id');
            $table->bigInteger('from_user_id');
            $table->tinyInteger('is_in_system');
            $table->bigInteger('to_user_id');
            $table->string('ref_to_user');
            $table->string('to_address');
            $table->string('action');
            $table->decimal('total', 14, 10);
            $table->decimal('price', 14, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
