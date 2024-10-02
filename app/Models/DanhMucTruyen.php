<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMucTruyen extends Model
{
    use HasFactory;

    public $timestamp = false; // set time to false
    protected $fillable = [
        'tendanhmuc', 'mota', 'kichhoat', 'slug_danhmuc'

    ];
    protected $primaryKey = 'id';
    protected $table = 'danhmuc';
    // Mot danh muc co the co nhieu truyen
    public function truyen()
    {
        return $this->hasMany('App\Models\Truyen');
    }
} 
