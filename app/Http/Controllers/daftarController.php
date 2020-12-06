<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftarController extends Controller
{

	public function daftar(Request $request)
	{
		$validasi = $request->validate([
			"email" => ["required"],
			"password" => ['required',"between:5,100"],
			"alamat" => ["required"],
			"kota" => ["required"],
			"foto" => ["required"],
			"kelamin" => ['required'],
		]);		

		echo $request->get("email");
		echo $request->get("password");
		echo $request->get("alamat");
		echo $request->get("kota");
		echo $request->get("kelamin");

		$nama_file = time().".".$request->file("foto")->extension();
		$request->file("foto")->move(public_path(), $nama_file);
		echo "<img src='/$nama_file'>";
		
		echo "<br>form ini diproses";
	}
}