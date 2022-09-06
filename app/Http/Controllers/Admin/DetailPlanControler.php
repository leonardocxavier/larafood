<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Models\DetailPlan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Models\Plan;
use Illuminate\Http\Request;

class DetailPlanControler extends Controller
{
    protected $repository,$plan;

    public function __construct(DetailPlan $detailPlan, Plan $plan)
    {
        $this->repository = $detailPlan;
        $this->plan = $plan;
    }

    public function index($urlPlan)
    {
        $plan = $this->plan->where('url',$urlPlan)->first();

        if(!$plan){
            return redirect()->back();               
        }

        //$details = $plan->details();
        $details = $plan->details()->paginate();

        return view('admin.pages.plans.details.index',[
            'plan'=>$plan,
            'details'=>$details,
        ]);
    }
}
