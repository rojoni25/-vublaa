<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('registration_id')->nullable();
            $table->string('payment_method');
            $table->string('reference')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('bank_date')->nullable();
            $table->string('paid_amount')->nullable();
            $table->string('checked_by')->nullable();
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membership_payments');
    }
}
