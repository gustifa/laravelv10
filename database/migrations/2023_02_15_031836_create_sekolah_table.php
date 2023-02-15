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
        Schema::create('sekolah', function (Blueprint $table) {
            $table->uuid('sekolah_id');
            $table->string('npsn');
            $table->string('nama');
            $table->string('nss')->nullable();
            $table->string('alamat')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kode_wilayah')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('no_fax')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->uuid('guru_id')->nullable();
            $table->integer('status_sekolah');
            $table->integer('sinkron')->default(0);
            $table->string('logo_sekolah')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->timestamp('last_sync');
            $table->primary('sekolah_id');
            //$table->foreign('kode_wilayah')->references('kode_wilayah')->on('ref.mst_wilayah')
                // ->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('sekolah', function (Blueprint $table) {
        //     $table->dropForeign(['kode_wilayah']);
        // });
        Schema::dropIfExists('sekolah');
    }
};
