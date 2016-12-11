<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    
    public function up()
    {
         Schema::create('pasta', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('hash_id')->unique();
            $table->int('expirate')->nullable();
            $table->string('access')->nullable();
            $table->text('name')->nullable();
            $table->text('text')->nullable();
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
        Schema::drop('pasta');
    }
}
