<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sanpham extends Model
{
    use HasFactory;
    protected $table = '_sanphams';
    protected $fillable = [
        'hangsanxuat_id',
        'tensanpham',
        'tensanpham_slug',
        'soluong',
        'dongia',
        'hinhanh',
        'motasanpham',
    ];
    public function HangSanXuat(): BelongsTo
    {
        return $this->belongsTo(HangSanXuat::class, 'hangsanxuat_id', 'id');
    }
    public function DonHang_ChiTiet(): HasMany
    {
        return $this->hasMany(Donhangchitiet::class, 'sanpham_id', 'id');
    }
}
