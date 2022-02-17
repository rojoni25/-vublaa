<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipPayments extends Model
{
   protected $guarded = ['_token'];
    use HasFactory;
}
