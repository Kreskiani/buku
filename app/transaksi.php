<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table ="transaksi";
    public 		$fileable	=['id','TRAN_ADMI_Username','TRAN_USER_Username','TRAN_BOOK_Id','TRAN_Date'];
    public 		$timestamp 	= true;
}
