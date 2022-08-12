<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgresDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progres_documents', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id');
            $table->integer('service_id');
            $table->string('status');
            $table->date('progres_date');    
            $table->string('qr_code');
            $table->string('no_invoice');
            $table->text('progres_log');

            $table->softDeletes();
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
        Schema::dropIfExists('progres_documents');
    }
}
