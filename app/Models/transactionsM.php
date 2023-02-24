<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactionsM extends Model
{
    protected $table = 'transactions';
    protected $fillable = [
        'id', 'id_produk', 'nama_pelanggan'
    ];
}
