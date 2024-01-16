<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierReview extends Model
{
    use HasFactory;

    public $fillable = [
        'supplier_id',
        'user_id',
        'review',
        'rating',
    ];

    public function supplier()
    {
        return $this->belongsTo(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
