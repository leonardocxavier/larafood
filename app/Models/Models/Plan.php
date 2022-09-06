<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['name','url','price','description'];


    public function details()
    {
        return $this->hashMany(DetailPlan::class);
    }

    public function search($filter=null)
    {
        $results = $this->Where('name','LIKE',"%{$filter}%")
                    ->orWhere('description','LIKE',"%{$filter}%")
                    ->paginate();
        return $results;
    }

}
