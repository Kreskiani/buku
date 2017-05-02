<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected 	$table 		="admin";
    public 		$fileable	=['id','ADMI_Username','ADMI_Password','ADMI_Name','ADMI_Email','ADMI_HakAkses'];
    public 		$timestamp 	= true;
}
