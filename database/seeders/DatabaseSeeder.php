<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\{Role,User,Kategori,Barang};
class DatabaseSeeder extends Seeder {public function run():void {
 foreach([['admin','Hendra Wijaya','admin.sarpras'],['manager','Budi Santoso','budi.manager'],['pegawai','Rian Hidayat','rian.pegawai']] as [$role,$name,$email]){$r=Role::firstOrCreate(['nama'=>$role]);User::firstOrCreate(['email'=>$email.'@sipema.ac.id'],['name'=>$name,'password'=>'Sipema123!','role_id'=>$r->id]);}
 foreach([['Laptop & PC','AST-LTP-001','MacBook Pro M2 14',15],['Laptop & PC','AST-LTP-002','Asus ZenBook 14 OLED',8],['AV & Multimedia','AST-PRJ-012','Epson Projector EB-E01',4],['Display & Monitor','AST-MON-103','Dell UltraSharp 27',15]] as [$cat,$code,$name,$stock]){$c=Kategori::firstOrCreate(['nama_kategori'=>$cat]);Barang::firstOrCreate(['kode_aset'=>$code],['nama_barang'=>$name,'kategori_id'=>$c->id,'stok'=>$stock,'kondisi_fisik'=>'Grade A','lokasi_penyimpanan'=>'Gudang IT','spesifikasi'=>'Inventaris kantor']);}
}}
