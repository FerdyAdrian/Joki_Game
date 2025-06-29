<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $fillable = [
        'customer_id',
        'joki_id',
        'game',
        'deskripsi',
        'status',
        'bukti_pembayaran',
        'waktu_selesai',
    ];

    public function customer() {
        return $this->belongsTo(User::class, 'customer_id');
    }
    public function joki() {
        return $this->belongsTo(User::class, 'joki_id');
    }
} 