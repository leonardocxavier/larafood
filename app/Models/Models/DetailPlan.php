<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Models\Plan;

class DetailPlan extends Model
{
    protected $table = 'details_plan';

    public function plan()
    {
        $this->belongsTo(Plan::class);
    }



}
