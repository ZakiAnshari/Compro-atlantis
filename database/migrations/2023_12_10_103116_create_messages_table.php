<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('slug')->nullable();
            $table->string('jeniskelamin', 100);
            $table->string('agama', 100);
            $table->string('namasekolahasal', 100);
            $table->string('noteleponsiswa', 15);
            $table->string('emailsiswa', 100);
            $table->string('jenjangpendidikan', 100);
            $table->string('namawali', 100);
            $table->string('noteleponortu', 15);
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
        Schema::dropIfExists('messages');
    }
};
