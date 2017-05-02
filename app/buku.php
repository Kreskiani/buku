<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table ="buku";
    public 		$fileable	=['id','BUKU_Name','BUKU_Pengarang','BUKU_Penerbit','BUKU_Harga'];
    public 		$timestamp 	= true;
}
