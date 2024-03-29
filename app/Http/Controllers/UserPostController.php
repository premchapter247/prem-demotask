<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Phone;
use Session;


class UserPostController extends Controller
{
    public function insert(){
        $user = Post::create([
            'name' => 'Custom Post name',
            'description' => 'This is the inserted desciption by userpostcontroller from insert method method ',
            'user_id' => '10',
        ]);
        if($user)
            echo "<b>Its Inserted</b>";
    }
    public function show()
    {
        //$this->insert();
        //$this->update();
        //$this->delete();
        // For general update the name records
        // $user = User::find(50);
        // $user->name = "Prrrr";
       // $user->save();
        return view('UserPost', [
            'user' => User::all()
        ]);   
    }
    public function showWihoutUseScope(){

    }
    public function update($id=null)
    {
        // For mass update with conditions
        $user = User::where('id',$id)
                    ->where('email','prem@gmail.com')
                    ->update(['email_verified_at' => '2021-04-29 06:57:25','password'=>'012345']);
        echo "<b>User Updated</b>";
    }
    public function delete($id=null)
    {
        // For delete the data by ID
        /*
       

        Flight::destroy(1, 2, 3);

        Flight::destroy([1, 2, 3]);

        Flight::destroy(collect([1, 2, 3]));
        */
        // User::destroy(59);
        $user = User::where('id',$id)->delete();
            echo "<b>Soft Deleted</b>";
    }
    public function getUsersWithScope(){
        $user = User::get();
        echo "<pre>";
        echo print_r($user);
    }
    public function oneToOneRelationShipData($user_id=null){
        echo "Phone model data useing relationship, Data from the phone table ";    
        $phone = User::find($user_id)->phone;
        echo "<pre>";
        print_r($phone);
        $user = Phone::find($user_id)->name;
        echo "Inverse relationship data, Data from the User table ";    
        echo "<pre>";
        print_r($user);
    }

    function user_signup(Request $request ){
        $validated = $request->validate([
            'first_name' => 'required|min:1',
            'last_name' => 'required|min:1',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:1',
            'gender' => 'required',
            'phone' => 'required|numeric',
            'question' => 'required',
            'answer' => 'required|min:1',
        ]);
        $dataForInsert = array(
            'email' => $request->email,
            'password' => $request->password,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'question' => $request->question,
            'answer' => $request->answer,
        );
        $dataForInsert['name'] = $request->first_name.' '.$request->last_name;
        $user = User::create($dataForInsert); 
        if($user){
            Session::flash('message', 'Data Inserted Successfully.'); 
            Session::flash('alert-class', 'alert-danger'); 
            // Redirect::to('/add-users');
            //$data['success_msg'] = "Data Inserted Successfully";
        }
       return view('UserRegister');
    }

}
