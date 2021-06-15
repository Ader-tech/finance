<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\softDeletes;
class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('amount', 15,2);
            $table->integer('startdate');
            $table->string('progress')->constrained();
            $table->integer('enddate');
            $table->string('createdby');
            $table->enum('status',[0,1,2])->default(0);
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
        Schema::dropIfExists('budgets');
    }
}
