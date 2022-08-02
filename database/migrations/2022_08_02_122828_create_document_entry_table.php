<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_entry', function (Blueprint $table) {
            $table->id();
            $table->string('document_for');
            $table->string('document_type');
            $table->string('document_of');
            $table->date('issue_date');
            $table->date('expriy_date');
            $table->string('document_number');
            $table->string('issue_place');
            $table->enum('status',['A','I'])->default('A')->comment('A for active and I for inactive');
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
        Schema::dropIfExists('document_entry');
    }
}
