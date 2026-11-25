<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Barang extends Model {protected $table='barang'; protected $fillable=['kode_aset','nama_barang','kategori_id','stok','kondisi_fisik','lokasi_penyimpanan','spesifikasi']; public function kategori(){return $this->belongsTo(Kategori::class);}}
