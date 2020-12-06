@extends('master')

@section('title')
	UTS Pemrograman Web Lanjut
@endsection

@section('content')
	<h1>Login</h1>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

	<form action="{{ route('berita_proses')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection