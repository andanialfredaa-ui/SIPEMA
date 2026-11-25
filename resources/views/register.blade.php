@extends('layout')
@section('content')
<section class="auth"><h1>Daftar akun pegawai</h1><form method="POST">@csrf<label>Nama<input name="name" value="{{ old('name') }}" required></label><label>Email<input type="email" name="email" value="{{ old('email') }}" required></label><label>Kata sandi<input type="password" name="password" required></label><label>Konfirmasi kata sandi<input type="password" name="password_confirmation" required></label><button>Daftar</button></form></section>
@endsection
