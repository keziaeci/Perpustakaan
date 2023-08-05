<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory , HasUuids;

    public const GENRE = [
        'Romansa' => 'Romansa',
        'Komedi' => 'Komedi',
    ];

    protected $guarded = ['id'];

    function scopeFilter($query,$filter) {
        
        $query->when($filter ?? false , function ($query, $filter) {
            return $query->where('judul', 'LIKE' , "%{$filter}%")
            ->orWhere('pengarang', 'LIKE' , "%{$filter}%");
        });
    }
}
