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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('genre');
            $table->string('durasi');
            $table->timestamps();
        });
        Schema::create('pengunjungs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('status', ['pending', 'approved'])->default('pending');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_film');
            $table->string('ruangan');
            $table->date('show_date');
            $table->time('show_time');
            $table->foreign('id_film')->references('id')->on('films')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pengunjung');
            $table->unsignedBigInteger('id_jadwal');
            $table->decimal('harga', 8, 2);
            $table->foreign('id_pengunjung')->references('id')->on('pengunjungs')->onDelete('cascade');
            $table->foreign('id_jadwal')->references('id')->on('jadwals')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['admin', 'staf', 'pengunjung'])->after('password');
        });

        Schema::create('film_pengunjung', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('pengunjung_id');
            $table->timestamps();

            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');
            $table->foreign('pengunjung_id')->references('id')->on('pengunjungs')->onDelete('cascade');

            $table->unique(['film_id', 'pengunjung_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
        Schema::dropIfExists('pengunjungs');
        Schema::dropIfExists('jadwals');
        Schema::dropIfExists('tikets');
        Schema::dropIfExists('film_pengunjung');
    }
};
