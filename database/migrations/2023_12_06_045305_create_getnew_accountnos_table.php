<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('getnew_accountnos', function (Blueprint $table) {
            $table->id();
            $table->string('account_number');
            $table->string('cid');
            $table->string('village');
            $table->string('gewog');
            $table->string('dzongkhag');
            $table->string('household_number');
            $table->string('thram_no');
            $table->string('phone_no');
            $table->string('new_account_no');
            $table->string('status')->default('pending');
            $table->string('file_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('getnew_accountnos');
    }
};
