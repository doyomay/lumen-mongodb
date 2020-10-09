<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use Laravel\Lumen\Http\Request;

class LogsController extends Controller
{
    public function create(Request $request)
    {
        $logs = [];
        $logs['ip'] = $this->getIp();
        $logs['headers'] = $this->parseHeaders();
        $logs['data'] = $request->json()->all();
        Logs::create($logs);

        $all = Logs::all();
        return response()->json(['data' => $all]);
    }
}
