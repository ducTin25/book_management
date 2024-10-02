<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Chapter extends Model

{
    use HasFactory;

    public $timestamp = false; // set time to false
    protected $fillable = [
        'tieude', 'tomtat', 'kichhoat', 'slug_chapter', 'noidung', 'truyen_id'

    ];
    protected $primaryKey = 'id';
    protected $table = 'chapter';
    public function truyen()
    {
        return $this->belongsTo('App\Models\Truyen');

    }
    
} 
