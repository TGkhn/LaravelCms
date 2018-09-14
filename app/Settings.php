<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table="tgpt_settings";
    protected $fillable=['settingsName,settingsValue,settingsStatus'];

    protected $primaryKey="settingsID";
    public $timestamps = false;



}
