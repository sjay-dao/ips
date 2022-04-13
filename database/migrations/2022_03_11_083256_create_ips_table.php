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
            $table->string('name', 200)->default('none');
            $table->date('date_filed')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('reg_no', 20)->default('none');
            $table->string('author_r_inventor')->default('none');
            $table->string('status')->default('none');
            $table->date('date_approved')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('project_title')->default('none');
            $table->string('duration')->default('none');
            $table->string('project_cost')->default('none');
            $table->string('funding_source')->default('none');
            $table->string('income_gross')->default('none');
            $table->string('praise_award')->default('none');
            $table->string('nast_award')->default('none');
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
