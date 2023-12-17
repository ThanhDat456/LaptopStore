<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Donhangchitiet extends Model
{
    use HasFactory;
    protected $table = '_donhangchitiets';
    public function DonHang(): BelongsTo
    {
        return $this->belongsTo(Donhang::class, 'donhang_id', 'id');
    }
    public function SanPham(): BelongsTo
    {
        return $this->belongsTo(Sanpham::class, 'sanpham_id', 'id');
    }
}
