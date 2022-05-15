<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Pelamar;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  
    public function index()
    {
        $pelamar = count(Pelamar::get());
        $user = count(User::get())-1;
        return view('Dashboard.index',[
          'pelamar'=>$pelamar,
          'user' => $user
          ]);
    }    
    
}
