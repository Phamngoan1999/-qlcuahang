<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function load404()
    {
        return view("hethong.404");
    }

    public function responseSuccsess($resource, $message, $status)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'resource' => $resource
        ], $status);
    }
}
