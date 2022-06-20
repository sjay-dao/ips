<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateIpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ips', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type_id')->default(0);
            $table->string('doc_code', 20)->default('none');
            $table->string('name', 400)->default('none');
            $table->date('date_filed')->default(null);
            $table->string('reg_no', 20)->default('none');
            $table->string('author_r_inventor', 255)->default('none');
            $table->string('status', 355)->default('none')->nullable();;
            $table->date('date_approved')->default(null)->nullable();;
            $table->string('project_title', 255)->default('none')->nullable();;
            $table->string('duration')->default('none')->nullable();;
            $table->string('project_cost')->default('none')->nullable();;
            $table->string('funding_source')->default('none')->nullable();;
            $table->string('income_gross')->default('none')->nullable();;
            $table->string('praise_award')->default('none')->nullable();;
            $table->string('nast_award')->default('none')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ips');
    }
}
