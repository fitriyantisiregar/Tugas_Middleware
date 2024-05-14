<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index( {
        if (Auth::user()->role == 'superadmin') {
            return redirect('/user-management');
        } else {
            return redirect('/products');
        }
    })

}
