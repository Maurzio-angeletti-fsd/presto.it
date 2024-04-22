<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\PlanSubscription;
use App\Models\SubscriptionItem;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Events\WebhookHandled;
use Laravel\Cashier\Events\WebhookReceived;
use Stripe\Subscription as StripeSubscription;
use Laravel\Cashier\SubscriptionItem as StripeSubscriptionItem;

class SubscriptionController extends Controller
{

    public function store (Request $request , )
    {
        $plan= Plan::all()[$request->plan-1];
        
        PlanSubscription::create([
            'user_id' => Auth::id(),
            'plan_id' => $plan->id,
            'type' =>  $plan->slug,
            'stripe_id' => $plan->stripe_id,
            'stripe_status' => 'unpaid',
            'stripe_price' => $plan->stripe_price,
            'ends_at' => now()->addDays($plan->duration_in_days)
            
        ]);

        return $request->user()
        ->newSubscription('$plan->stripe_id,
        ', $plan->stripe_price,
        )
        ->checkout([
            'success_url' => route('subscriptions.payment-validate'),
            'cancel_url' => route('subscriptions.payment-cancelled'),
        ]);

    }

    public function subscriptionPaymentValidate (Request $request)
    {

        $subscription = PlanSubscription::where('user_id',auth()->user()->id)->get()->last();

        
        $old_subscription = PlanSubscription::where('user_id',auth()->user()->id)->where('stripe_status','paid')->get()->first();
       
        $old_subscription->setEndsAtNow();
        $old_subscription->setReplaced();

        $subscription->setPaid();

        Auth::user()->setSubsrcibed($subscription->type);

        return redirect('/account/subscribe/billing');
    }

    public function subscriptionPaymentCancelled (Request $request)
    {

        $unpaid_subscriptions = PlanSubscription::where('user_id',auth()->user()->id)->where('stripe_status','unpaid')->get();

        foreach ($unpaid_subscriptions as  $unpaid_subscription) {
            $unpaid_subscription->setEndsAtNull();
       }

       return redirect('/account/plan/show');
    }

    public function billingShow ()
    {   
        $subscription = PlanSubscription::where('user_id',auth()->user()->id)->where('stripe_status','paid')->get()->last();
        
       return view('subscriptions.billing', ['plans' => Plan::all(),'subscription' => $subscription]);

    }

    

   
}
