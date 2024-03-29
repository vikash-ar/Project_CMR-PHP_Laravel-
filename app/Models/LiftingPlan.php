<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Support\Facades\DB;

class LiftingPlan extends Model
{
    use HasFactory;
    protected $table="liftingplan";
    // protected $liftingPlan = [
    //     'id', 'planning_dispatch_detail', 'company', 'location', 'order_no', 'business_partner', 'bp_name', 'item', 'pending_quantity', 'approx_quantity_for_dispatch', 'price', 'amount', 'ref_no', 'remark'
    // ];
    protected $timestamp = false;
    protected $fillable = ['planning_dispatch_date','company','location','order_no','business_partner','bp_name','item','pending_quantity','approx_quantity_for_dispatch','price','amount','ref_no','remark'];
}
