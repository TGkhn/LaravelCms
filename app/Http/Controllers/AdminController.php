<?php

namespace App\Http\Controllers;

use App\Settings;
use Mockery\Exception;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public  function getIndex(){
        return view('backend.index');
    }

    public function getSettings(){

        $AllSettings = Settings::all();

        foreach ($AllSettings as $setting){
            $ViewSetting[$setting->settingsName] = $setting->settingsValue;
        }

        return view('backend.settings')->with('ViewSetting',$ViewSetting);
    }
    public function postSettings(Request $request){

        try
        {
            unset($request["_token"]);

            $Error=0;
            foreach ($request->all() as $req=>$value){
                $colName =  substr($req,3,strlen($req)-3);
                $err = Settings::where("settingsName",$colName)->update(['SettingsValue' => $value]);
                if($err!=1) $Error=1;
            }

            if($Error==0) {
                return response(["procStatus"=>"success","procTitle"=>"Başarılı","procContent"=>"Kayıt Başarılı"]);
            }else{
                return response(["procStatus"=>"error","procTitle"=>"Opppss","procContent"=>"Hatalı"]);
            }

        }catch (\Exception $ex){
            return response(["procStatus"=>"error","procTitle"=>"Opppss","procContent"=>"Hatalı"]);
        }





    }
}
