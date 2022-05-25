<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    public function jurusans(){
        return $this->hasOne(jurusan::class,'id','jurusan_id'); 
    }
}
