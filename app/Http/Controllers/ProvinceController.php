<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProvinceController extends Controller
{

    public function dashboard(){
        return view('dashboard');
    }

    public function provinsi(){

        $prov = Province::get();

        return view('provinsi',compact('prov'));
    }

    public function createprov(){
        return view('createprov');
    }

    public function storeprov(Request $request){
        $validator = Validator::make($request->all(),[
            'provinsi' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['province']   = $request->provinsi;

        province::create($data);

        return redirect()->route('provinsi');
    }

    public function editprov(Request $request,$id){
        $data = province::find($id);

        return view('editprov',compact('data'));
    }

    public function updateprov(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'provinsi' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['province']   = $request->provinsi;

        Province::whereId($id)->update($data);

        return redirect()->route('provinsi');
    }

    public function deleteprov(Request $request,$id){
        $data = Province::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('provinsi');
    }
}
