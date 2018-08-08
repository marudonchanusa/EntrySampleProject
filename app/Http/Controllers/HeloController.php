<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Controllers\Controller;
 
class HeloController extends Controller
{
    public function getIndex()
    {
        return view('helo', ['message' => 'Hello!']);
    }
}