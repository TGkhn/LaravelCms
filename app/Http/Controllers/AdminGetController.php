<?php

namespace App\Http\Controllers;
use App\Settings;


class AdminGetController extends AdminController
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


    public function getPages(){

        $allPages = Settings::all();

        return view('backend.settings')->with('allPages',$allPages);
    }
}
