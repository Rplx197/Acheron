<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransaksiPembayaran extends Model
{
    use HasFactory;
    protected $table = 'transaksi_pembayaran';
    protected $fillable = ['id_pesanan', 'metode', 'total','tanggal_pembayaran'];

    public function pesanan():BelongsTo{
        return $this->belongsTo(Pesanan::class, 'id_pesanan');
    }
}
