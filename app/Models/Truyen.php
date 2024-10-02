<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truyen extends Model

{
    use HasFactory;

    public $timestamp = false; // set time to false
    protected $fillable = [
        'tentruyen', 'tomtat', 'kichhoat', 'slug_danhmuc', 'hinhanh', 'danhmuc_id', 'ngonngu', 'isbn', 'tacgia'

    ];
    protected $primaryKey = 'id';
    protected $table = 'truyen';

    public function danhmuctruyen()
    {
        return $this->belongsTo('App\Models\DanhMucTruyen','danhmuc_id','id');
    }
    public function chapter()
    {
        return $this->hasMany('App\Models\Chapter','truyen_id','id');

    }
} 
