<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;

    protected $table='sach';

    protected $guarded = [];

    public function nxb(){
        return $this->belongsTo(Nxb::class, 'id');
    }

    public function theloai(){
        return $this->belongsTo(Theloai::class, 'id');
    }

    public function tacgia(){
        return $this->belongsTo(Tacgia::class, 'id');
    }

    public function linhvuc(){
        return $this->belongsTo(Linhvuc::class, 'id');
    }

    public function nganh(){
        return $this->belongsTo(Nganh::class, 'id');
    }

    public function trangthai(){
        return $this->belongsTo(Trangthai::class, 'id');
    }
}
