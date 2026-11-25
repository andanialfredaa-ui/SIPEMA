<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
 public function up():void {
 Schema::create('roles',function(Blueprint $t){$t->id();$t->string('nama')->unique();$t->timestamps();});
 Schema::table('users',function(Blueprint $t){$t->foreignId('role_id')->nullable()->constrained('roles');$t->string('status_akun')->default('aktif');});
 Schema::create('kategori',function(Blueprint $t){$t->id();$t->string('nama_kategori');$t->text('deskripsi')->nullable();$t->timestamps();});
 Schema::create('barang',function(Blueprint $t){$t->id();$t->string('kode_aset')->unique();$t->string('nama_barang');$t->foreignId('kategori_id')->constrained('kategori');$t->unsignedInteger('stok');$t->string('kondisi_fisik');$t->string('lokasi_penyimpanan');$t->text('spesifikasi');$t->timestamps();});
 }
 public function down():void {Schema::dropIfExists('barang');Schema::dropIfExists('kategori');Schema::table('users',function(Blueprint $t){$t->dropConstrainedForeignId('role_id');$t->dropColumn('status_akun');});Schema::dropIfExists('roles');}
};
