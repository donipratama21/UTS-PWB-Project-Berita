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

		$nama_file = time().".".$request->file("foto")->extension();
		$request->file("foto")->move(public_path(), $nama_file);

		echo "<img src='/$nama_file'>" . "<br>";
		echo "Email : " . $request->get("email") . "<br>";
		echo "Password : " . $request->get("password") . "<br>";
		echo "Alamat : " . $request->get("alamat") . "<br>";
		echo "Kota : " . $request->get("kota") . "<br>";
		echo "Jenis Kelamin : " . $request->get("kelamin") . "<br>";
	}
}