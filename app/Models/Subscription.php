<?php

namespace App\Models;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Cashier\Subscription as CashierSubscription;
 

class Subscription extends CashierSubscription
{
    use HasFactory;

    protected $fillable = ['user_id','plan_id','type','stripe_id','stripe_status','stripe_price','ends_at'];

    protected $dates = [
        'ends_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function isActive($subscription)
    {
        // return $this->ends_at->gt(now());
        return now() >= $subscription->created_at && now() <= $subscription->ends_at;
    }

    

}
