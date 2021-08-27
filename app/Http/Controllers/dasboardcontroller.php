<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dasboardcontroller extends Controller
{
    public function index()
    {
        $data = [
            'siswa' => DB::table('siswa')->count(),
            'agenda' => DB::table('agenda')->count(),
            'sekeltaris' => DB::table('sekeltaris')->count(),
        ];
        return view('dasboard/index', $data);
    }
}
