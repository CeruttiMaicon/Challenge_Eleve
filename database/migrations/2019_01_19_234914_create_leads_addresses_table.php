<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger ('lead_id')->unsigned();
            $table->string('cnpj');
            $table->string('fantasy_name');
            $table->string('social_name');
            $table->string('site');
            $table->string('phone');
            $table->string('accept_terms');

            $table->foreign('lead_id')->references('id')->on('leads');
            $table->softDeletes();
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
        Schema::dropIfExists('leads_addresses');
    }
}

