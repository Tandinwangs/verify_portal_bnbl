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
        Schema::create('user_account_details', function (Blueprint $table) {
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
            $table->boolean('has_claimed')->default(false);
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_account_details');
    }
};
