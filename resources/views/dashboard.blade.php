@extends('layout')
@section('content')
<section class="hero"><small>{{ strtoupper(auth()->user()->role->nama) }}</small><h1>Halo, {{ auth()->user()->name }}</h1><p>Selamat datang di pusat inventaris SIPEMA.</p></section><div class="grid"><article><small>Jenis aset</small><h1>{{ $total }}</h1></article><article><small>Unit tersedia</small><h1>{{ $stok }}</h1></article><article><small>Hak akses</small><h2>{{ ucfirst(auth()->user()->role->nama) }}</h2></article></div><p><a class="button" href="/">Lihat katalog</a></p>
@endsection
