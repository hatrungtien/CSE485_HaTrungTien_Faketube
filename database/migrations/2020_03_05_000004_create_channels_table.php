<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelsTable extends Migration
{
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->bigIncrements('channel_id');
            $table->string('channel_name');
            $table->text('description');
            $table->integer('subscribers_count');
            $table->string('url');
            $table->timestamps();
            $table->timestamps('created_at');
            $table->timestamps('updated_at');

        });;
        

    }
}
