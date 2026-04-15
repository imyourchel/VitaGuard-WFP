<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_code',
        'member_id',
        'service_id',
        'doctor_id',
        'consultation_date',
        'status',
        'amount',
        'payment_method',
        'notes'
    ];

    protected $casts = [
        'consultation_date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function member(){
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }

    public function service(){
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }
}
