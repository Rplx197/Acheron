<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $fillable = ['id_pelanggan','tanggal_penerimaan', 'tanggal_pengambilan','status_pesanan','catatan'];

    public function pelanggan():BelongsTo{
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }
}
