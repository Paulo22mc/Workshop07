<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RenderController extends Controller
{
    public function showDatabaseName()
    {
        $databaseName = DB::connection()->getDatabaseName();

        return view('welcome', ['database' => $databaseName]);
    }
}
