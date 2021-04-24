<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function test(){
        $info = array(
            array(
                'firstname' => 'John',
                'lastname' => 'Cena',
                'from' => 'USA'
            ),
            array(
                'firstname' => 'John',
                'lastname' => 'Doe',
                'from' => 'Canada'
            ),
        );
        return view('test',['data' => $info]);
    }
}
