<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    
    public function dashboard(){
        return view('dashboard');
    }

    public function kota(){
        
        $cit = City::get();

        return view('kota',compact('cit'));
    }

    public function createkota(){
        return view('createkota');
    }

    public function storekota(Request $request){
        $validator = Validator::make($request->all(),[
            'tipe' => 'required',
            'kota' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['type']   = $request->tipe;
        $data['city']   = $request->kota;

        city::create($data);

        return redirect()->route('kota');
    }

    public function editkota(Request $request,$id){
        $data = City::find($id);

        return view('editkota',compact('data'));
    }

    public function updatekota(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'tipe' => 'required',
            'kota' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['type']   = $request->tipe;
        $data['city']   = $request->kota;

        City::whereId($id)->update($data);

        return redirect()->route('kota');
    }

    public function deletekota(Request $request,$id){
        $data = City::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('kota');
    }
}
