@extends('layout')
@section('content')
<section class="hero"><small>PORTAL INVENTARIS DIGITAL</small><h1>Temukan aset yang kamu butuhkan.</h1><p>Kelola kebutuhan kerja dengan inventaris kantor yang terpusat.</p></section><h2>Katalog barang</h2><form class="search"><input name="q" placeholder="Cari nama barang..." value="{{ request('q') }}"><button>Cari</button></form><div class="grid">@forelse($items as $item)<article><div class="visual">▣</div><small>{{ $item->kategori->nama_kategori }} · {{ $item->kode_aset }}</small><h3>{{ $item->nama_barang }}</h3><p>{{ $item->lokasi_penyimpanan }}</p><strong class="stock">{{ $item->stok }} unit tersedia</strong></article>@empty<p>Barang tidak ditemukan.</p>@endforelse</div>{{ $items->links() }}
@endsection
