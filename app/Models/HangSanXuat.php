<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hangsanxuat extends Model
{
    use HasFactory;
    protected $table = '_hangsanxuats';
    protected $fillable = [
        'tenhang',
        'tenhang_slug',
        'hinhanh',
    ];
    public function SanPham(): HasMany
    {
        return $this->hasMany(SanPham::class, 'hangsanxuat_id', 'id');
    }
}
