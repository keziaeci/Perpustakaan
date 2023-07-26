<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory , HasUuids;

    protected $with = ['user','buku'];
    protected $guarded = ['id'];

    public const STATUS = [
        'Pending' => 'Menunggu',
        'Borrow' => 'Sedang Meminjam',
        'Returned' => 'Sudah Mengembalikan',
    ];

    function user() {
        return $this->belongsTo(User::class);
    }

    function buku() {
        return $this->belongsTo(Buku::class);
    }
        
}
