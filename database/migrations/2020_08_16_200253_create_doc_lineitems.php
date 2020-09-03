<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocLineitems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_lineitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('lineitem_id')->nullable();
            $table->string('cost')->nullable();
            $table->string('quantity')->nullable();
            $table->string('doc_type')->nullable();
            $table->integer('doc_id')->nullable();
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
        Schema::dropIfExists('doc_lineitems');
    }
}
