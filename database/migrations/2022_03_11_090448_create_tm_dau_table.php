<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTmDauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_dau', function (Blueprint $table) {
            $table->id();
            $table->string('reg_no')->default('none');
            $table->date('date_3rd_dou')->default(null)->nullable()->change();
            $table->string('status_3rd_dou')->default('none')->nullable()->change();;
            $table->string('regno_3rd_dou')->default('none')->nullable()->change();;
            $table->string('date_5th_dou')->default('none')->nullable()->change();;
            $table->string('status_5th_dou')->default('none')->nullable()->change();;
            $table->string('regno_5th_dou')->default('none')->nullable()->change();;
            $table->string('goods_n_services')->default('none')->nullable()->change();;
            $table->string('status_renewal')->default('none')->nullable()->change();;
            $table->date('first_use')->default(null)->nullable()->change();;
            
            $table->string('outlet')->default('none')->nullable()->change();;
            $table->string('outlet_address')->default('none')->nullable()->change();;
            $table->string('pic_n_lbl')->default('none')->nullable()->change();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_dau');
    }
}
