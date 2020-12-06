@extends('master')

@section('title')
  UTS Pemrograman Web Lanjut
@endsection

@section('content')
  <h1>Pendaftaran</h1>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

<form action="{{ route('berita_daftar')}}" method="POST" enctype="multipart/form-data">

    @csrf

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="kota">Kota</label>
      <input type="text" name="kota" class="form-control">
    </div>

    <div class="form-group">
    <label for="foto">Masukkan Foto Profil</label>
    <input type="file" name="foto" class="form-control-file">
  </div>

    <div class="form-group col-md-4">
      <label for="kelamin">Jenis Kelamin</label>
      <select name="kelamin" class="form-control">
        <option> </option>
        <option>Laki-Laki</option>
        <option>Perempuan</option>
      </select>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection