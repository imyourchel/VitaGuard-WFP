<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'service_name',
        'description',
        'availability',
        'price'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function transactions(){
        return $this->hasMany(Transaction::class, 'service_id', 'id');
    }
}
