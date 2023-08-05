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
        'Menunggu' => 'Pending', 
        'Sedang Meminjam' => 'Borrow',
        'Sudah Mengembalikan' => 'Returned',
    ];

    function scopeStatus($query, $status) {
        $query->when($status ?? false, function($query, $status) {
            return $query->where("status" , "LIKE" , "%{$status}%");
        });

        // $query->when($status['borrow'] ?? false, function($query, $borrow) {
        //     return $query->where("status" , "LIKE" , "%{$borrow}%");
        // });

        // $query->when($status['returned'] ?? false, function($query, $returned) {
        //     return $query->where("status" , "LIKE" , "%{$returned}%");
        // });
    }
    function user() {
        return $this->belongsTo(User::class);
    }

    function buku() {
        return $this->belongsTo(Buku::class);
    }
        
}
