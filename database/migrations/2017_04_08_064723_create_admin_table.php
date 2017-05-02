<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table)
        {
            $table->string('ADMI_Username', 100);
            $table->primary('ADMI_Username');
            $table->string('ADMI_Password', 100);
            $table->string('ADMI_Name', 100);
            $table->string('ADMI_Email', 100);
            $table->string('ADMI_HakAkses', 100);
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
        Schema::drop('admin');
    }
}
