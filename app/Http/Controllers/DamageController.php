<?php

namespace App\Http\Controllers;

use App\Models\Damage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DamageController extends Controller
{
    public function kerusakan(){
        
        $dam = Damage::get();

        return view('kerusakan',compact('dam'));

    }

    public function createkerusakan(){
        return view('createkerusakan');
    }

    public function storekerusakan(Request $request){
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'sumber' => 'required',
            'harga' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['damage_name']    = $request->nama;
        $data['resources']      = $request->sumber;
        $data['price']          = $request->harga;

        damage::create($data);

        return redirect()->route('kerusakan');
    }
}
