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
        if (!Schema::hasTable('table_order')) {
            Schema::create('table_order', function (Blueprint $table) {
                $table->id();
                $table->foreignId('customer_id')->references('id')->on('table_customer');
                $table->foreignId('menu_id')->references('id')->on('table_menu');
                $table->integer('quantity');
                $table->integer('menu_price')->references('menu_price')->on('table_menu');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_order');
    }
};
