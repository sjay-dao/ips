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
            $table->string('reg_no')->default('none');;
            $table->string('status_3rd_dou')->default('none');;
            $table->string('regno_3rd_dou')->default('none');;
            $table->string('status_5th_dou')->default('none');;
            $table->string('regno_5th_dou')->default('none');;
            $table->string('goods_n_services')->default('none');;
            $table->string('status_renewal')->default('none');
            $table->date('first_use')->default(DB::raw('CURRENT_TIMESTAMP'));;
            
            $table->string('outlet')->default('none');;
            $table->string('outlet_address')->default('none');;
            $table->string('pic_n_lbl')->default('none');;
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
