<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('voucher_user', function (Blueprint $table) {
        //     $table->dropColumn('voucher_user');
            // $table->id();
            // $table->string('user_id');
            // $table->string('voucher_id');
            // $table->text('keterangan');
            // $table->integer('status');
            // $table->text('keterangan')->nullable();
            // $table->timestamp('expire_at')->nullable();
            // $table->softDeletes();
            // $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voucher_users');
    }
};
