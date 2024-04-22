<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanSubscription extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','plan_id','type','stripe_id','stripe_status','stripe_price','ends_at'];

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

    public function setReplaced()
    {
        $this->stripe_status = 'replaced';
        $this->save();
        return;
    }

    public function setPaid()
    {
        $this->stripe_status = 'paid';
        $this->save();
        return;
    }

    

    public function setEndsAtNull()
    {
        $this->ends_at = NULL;
        $this->save();
        return;
    }

   

    public function setEndsAtNow()
    {
        $this->ends_at = now();
        $this->save();
        return;
    }

}

// $plan=Plan::where($subscription->type);

// 'ends_at => now()->addDays($plan->duration_in_days);

// $subscription->setEndsAt($date);

// Auth::user()->setSubsrcibed($subscription->type);