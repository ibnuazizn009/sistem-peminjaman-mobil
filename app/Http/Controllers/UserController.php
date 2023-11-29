<?php

namespace App\Http\Controllers;

use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function index(){
        return view('register');
    }

    public function show(){

    }

    public function create(Request $request){
        try {
            DB::table('users')->insert([
                'id' => 'USR'.$this->generateRandomString(7),
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_telepon' => $request->no_telepon,
                'no_sim' => $request->no_sim,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
            return redirect('/');
        } catch (\Throwable $th) {
            throw $th;
            return redirect('/register');
        }
        
    }
}
