<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Donhang extends Model
{
    use HasFactory;
    protected $table = '_donhangs';
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function DonHang_ChiTiet(): HasMany
    {
        return $this->hasMany(Donhangchitiet::class, 'donhang_id', 'id');
    }
}
