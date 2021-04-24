<?php
namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test()
    {
        $info =  DB::table('tests')->select('id','title','description')->get();
        $users = DB::table('tests')->get();
        $info1 = array(
            array(
                'firstname' => 'John',
                'lastname' => 'Cena',
                'from' => 'USA'
            ),
            array(
                'firstname' => 'Steven',
                'lastname' => 'Hank',
                'from' => 'Canada'
            ),
        );
        // return view('test',['info'=>$info]);
        // return view('test',compact('info'));
        return view('test')->with('info', $info)->with('users', $users);
    }
}
