<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreakSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('break_sessions', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('break_sessions');
    }
}
public function up()
{
    Schema::create('break_sessions', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('work_session_id');
        $table->timestamp('start_time');
        $table->timestamp('end_time')->nullable();
        $table->timestamps();

        $table->foreign('work_session_id')->references('id')->on('work_sessions')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('break_sessions');
}