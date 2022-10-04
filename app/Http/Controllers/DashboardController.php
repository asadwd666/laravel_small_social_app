<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use resources\views\dashboard;
use App\Mail\PostLiked;

class DashboardController extends Controller
{
    public function index(){
        // $user=auth()->user();
        // Mail::to($user)->send(new PostLiked());
        return view('dashboard');
    }
}
