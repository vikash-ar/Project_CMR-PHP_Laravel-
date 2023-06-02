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
        Schema::create('liftingplan', function (Blueprint $table) {
            $table->id();
            $table->date('planning_dispatch_date');
            $table->string('company');
            $table->string('location');
            $table->string('order_no');
            $table->string('business_partner');
            $table->string('bp_name');
            $table->integer('item');
            $table->integer('pending_quantity');
            $table->integer('approx_quantity_for_dispatch');
            $table->integer('price');
            $table->string('amount');
            $table->string('ref_no');
            $table->text('remark');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liftingplan');
    }
};
