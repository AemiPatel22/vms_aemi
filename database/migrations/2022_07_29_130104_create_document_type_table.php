<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_type', function (Blueprint $table) {
            $table->id();
            $table->string('document_for');
            $table->string('document_name');
            $table->integer('validity_piriod');
            $table->integer('warn_before');
            $table->enum('is_expire',['Y','N'])->default('Y')->comment('Y for yes and N for no');
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
        Schema::dropIfExists('document_type');
    }
}
