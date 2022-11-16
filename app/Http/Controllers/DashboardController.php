<?php

namespace App\Http\Controllers;

use App\Models\Logging;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $data = [
        //     'logging' => Logging::all()
        // ];
        $logging = Logging::all();
        return view('dashboard.index', ['logging' => $logging]);
    }
    public function report()
    {
        $logging = Logging::where('id', '>', 10)->orderBy('id', 'desc')->paginate(
            $perPage = 10,
            $columns = ['*'],
            $pageName = 'logging'
        );
        return view('dashboard.report', ['logging' => $logging]);
    }
    public function setting()
    {
        return view('dashboard.setting');
    }
}