<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUser = DB::select("select count(*) as 'count' from users");
        $totalTopic = DB::select("select count(*) as 'count' from linhvuc");
        $totalQuestion = DB::select("select count(*) as 'count' from question");
        return view('dashboard.index',['totalUser' => $totalUser[0]->count, 'totalTopic' => $totalTopic[0]->count, 'totalQuestion' => $totalQuestion[0]->count]);

    }
}
