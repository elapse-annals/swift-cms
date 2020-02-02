<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('group_name');
            $table->integer('parent_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->string('created_by', 80);
            $table->timestamp('updated_at')->default(
                DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP')
            );
            $table->string('updated_by', 80);
            $table->timestamp('deleted_at')->nullable();
            $table->string('deleted_by', 80)->nullable();
            $table->comment = '内容分组';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_groups');
    }
}
