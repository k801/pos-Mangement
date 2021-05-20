<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table="campanies";
    protected $fillable=['campany_name','campany_address','campany_phone','campany_email','campany_fax'];
}
