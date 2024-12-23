<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    /** @use HasFactory<\Database\Factories\RequisitionFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'asset_id',
        'designation',
    ];

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
    }
