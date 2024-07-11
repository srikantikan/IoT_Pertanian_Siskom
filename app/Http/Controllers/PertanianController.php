<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanianController extends Controller
{
    public function dashboard() {
        $latest_pertanian_data = DB::table('posts_table_pertanian')->orderBy('created_at', 'desc')->first();

        // $latest_pertanian_data = DB::table('posts_table_pertanian')->latest()->first();
        return view('dashboard', ['latest_pertanian_data' => $latest_pertanian_data]);
    }
}
