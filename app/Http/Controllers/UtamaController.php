<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtamaController extends Controller
{
	public function login()
	{
		return view("view-1");
	}

	public function daftar()
	{
		return view("view-2");
	}

	public function index()
	{
		return view("test-tema"); // tema dengan templates
	}

	public function about()
	{
		return view("about");
	}

	public function home()
	{
		return view("home");
	}

	public function topan()
	{
		return view("topan");
	}

	public function kriminal()
	{
		return view("kriminal");
	}

	public function olahraga()
	{
		return view("olahraga");
	}

	public function teknologi()
	{
		return view("teknologi");
	}

	public function proses(Request $request)
	{
		$validasi = $request->validate([
			"email" => ["required"],
			"password" => ['required',"between:5,100"],
		]);		

		echo "Email : ". $request->get("email") . "<br>";
		echo "Password : " . $request->get("password") . "<br>";
	}

}