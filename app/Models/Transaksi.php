<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory , HasUuids;

    public const STATUS = [
        'Pending' => 'Menunggu',
        'Borrow' => 'Sedang Meminjam',
        'Returned' => 'Sudah Mengembalikan',
    ];

    function user() {
        return $this->belongsTo(User::class);
    }

    function book() {
        return $this->belongsTo(Buku::class);
    }

}
