<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	Public function getHome()
	{
		return view('pages.home');
	}
}