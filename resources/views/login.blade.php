@extends('layout')
@section('content')
<section class="auth"><small>PORTAL AKSES</small><h1>Selamat datang kembali</h1><p>Masuk ke akun SIPEMA Anda.</p><form method="POST">@csrf<label>Email<input type="email" name="email" value="{{ old('email') }}" required></label><label>Kata sandi<input type="password" name="password" required></label><button>Masuk ke sistem →</button></form><p>Belum punya akun? <a href="/register">Daftar</a></p></section>
@endsection
