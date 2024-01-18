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
        if (!Schema::hasTable('table_customer')) {
            Schema::create('table_customer', function (Blueprint $table) {
                $table->id();
                $table->string('cust_email')->unique();
                $table->string('cust_name');
                $table->string('cust_pass');
                $table->integer('cust_phone_num');
                $table->string('unit_kerja');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_customer');
    }
};
