<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class AdminPostController extends AdminController
{
    public function postSettings(Request $request){

        try
        {
            if( isset($request->fileLogo)) {

                $validator = Validator::make($request->all(), [
                    'fileLogo' => 'mimes:jpg,jpeg,png,gif',

                ]);

                if ($validator->fails()) {

                    return response(["procStatus" => "error", "procTitle" => "Opppss", "procContent" => "Yüklediğiniz dosya resim dosyası olması gerekiyor."]);

                } else {

                    $logo = Input::file('fileLogo');

                    $logo_ex = Input::file('fileLogo')->getClientOriginalExtension();
                    $logo_name = 'SiteLogo.' . $logo_ex;
                    Storage::disk('uploads')->makeDirectory('img');

                    Image::make($logo->getRealPath())->resize(150, 150)->save('uploads/img/'.$logo_name);

                    $err = Settings::where("settingsName", "SiteLogo")->update(['SettingsValue' => $logo_name]);

                    if($err==1) {
                        return response(["procStatus" => "success", "procTitle" => "Başarılı", "procContent" => "Logo Başarılı"]);
                    }else{
                        return response(["procStatus" => "error", "procTitle" => "Opppss", "procContent" => "Hatalı"]);
                    }


                    unset($request["_token"]);
                    //unset($request["_token"]);

                    $Error = 0;
                    foreach ($request->all() as $req => $value) {
                        $colName = substr($req, 3, strlen($req) - 3);
                        $err = Settings::where("settingsName", $colName)->update(['SettingsValue' => $value]);
                        if ($err != 1) $Error = 1;
                    }

                    if ($Error == 0) {
                        return response(["procStatus" => "success", "procTitle" => "Başarılı", "procContent" => "Kayıt Başarılı"]);
                    } else {
                        return response(["procStatus" => "error", "procTitle" => "Opppss", "procContent" => "Hatalı"]);
                    }
                    

                }
            }

        }catch (\Exception $ex){
            return response(["procStatus"=>"error","procTitle"=>"Opppss","procContent"=>$ex->getMessage()]);
        }


    }
}
