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
        if (!Schema::hasTable('table_purchase')) {
            Schema::create('table_purchase', function (Blueprint $table) {
                $table->id();
                $table->foreignId('customer_id')->references('id')->on('table_order');
                $table->foreignId('order_id')->references('id')->on('table_order');
                $table->integer('total');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_purchase');
    }
};