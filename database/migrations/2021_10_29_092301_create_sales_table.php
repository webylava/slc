<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedBigInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
			$table->unsignedInteger('company_id');
			$table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');;
			$table->string('invoice_no', 15)->unique();
            $table->date('invoice_date');
            $table->date('due_date');
            $table->string('reference_number', 35);
            $table->string('website', 100);
			$table->float('discount', 3, 2);
			$table->enum('recurring', ['yes', 'no']);
            $table->string('attachments', 255);
			$table->integer('creator_id');
            $table->text('details');
            $table->text('notes');
            $table->text('self_memo');
			$table->enum('status', ['sent', 'paid', 'overdue', 'void', 'writeoff', 'draft']); 
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
        Schema::dropIfExists('sales');
    }
}
