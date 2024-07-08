<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandReward extends Model
{
    use HasFactory;
    protected $fillable = ['url', 'key', 'tracking_id', 'cpc'];
}
