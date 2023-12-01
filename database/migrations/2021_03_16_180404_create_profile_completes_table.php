<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileCompletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_completes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('idea')->nullable();
            $table->text('qualification')->nullable();
            $table->text('experience')->nullable();
            $table->text('ambition')->nullable();
            $table->text('creativity')->nullable();
            $table->text('finance_startup')->nullable();
            $table->text('invest_money')->nullable();
            $table->text('smallBusiness_plan')->nullable();
            $table->mediumText('file')->nullable();
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
        Schema::dropIfExists('profile_completes');
    }
}
