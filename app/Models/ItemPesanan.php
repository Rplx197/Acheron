<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItemPesanan extends Model
{
    use HasFactory;
    protected $table = 'item_pesanan';
    protected $fillable = ['id_pesanan', 'jenis_layanan', 'jumlah_item','harga_per_item'];

    public function pesanan():BelongsTo{
        return $this->belongsTo(Pesanan::class, 'id_pesanan');
    }
}
