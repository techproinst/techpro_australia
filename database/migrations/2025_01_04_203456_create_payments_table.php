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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->decimal('amount', 10,2)->nullable();
            $table->string('amount_due',10,2)->nullable();
            $table->string('payment_reference')->nullable();
            $table->string('invoice')->nullable();
            $table->string('transaction_reference')->nullable();
            $table->string('status')->nullable();
            $table->string('purpose')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('schedule_id')->nullable();
            $table->string('payment_receipt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
