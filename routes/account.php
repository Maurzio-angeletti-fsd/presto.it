<?php

use App\Http\Middleware\Subscribed;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
// use App\Http\Controllers\EmailSentsController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SubscriptionController;

Route::get('/inserisci_annuncio', [AccountController::class, 'insertAnnouncement'])->name('insert_announcement');

Route::get('/notifiche/index', [AccountController::class, 'notificationIndex'])->name('notification.index');

Route::delete('/notifiche/{notification}/delete',[AccountController::class,'destroyNotification'])->name('notification.destroy');

Route::get('/richiesta/revisore/form', [AccountController::class, 'becomeRevisorForm'])->name('become.revisor.form');

Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('IsRevisor')->name('revisor.index');

Route::get('/contatta/venditore/{user}', [AccountController::class, 'contactVendor'])->name('contact.vendor');


//revisor
Route::post('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');

Route::get('/revisor/home/revised', [RevisorController::class, 'indexRevised'])->middleware('IsRevisor')->name('revisor.index-revised');

Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('IsRevisor')->name('revisor.accept_announcement');

Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('IsRevisor')->name('revisor.reject_announcement');

Route::patch('/ripristina/revisone/annuncio/{announcement}', [RevisorController::class, 'restoreRevisionAnnouncement'])->middleware('IsRevisor')->name('revisor.restore_announcement');


//plan
Route::get('/plan/show', [PlanController::class, 'show'])->name('plan.show');


//Subscriptions

Route::post('/subscribe/store', [SubscriptionController::class, 'store'])->name('subscribe.store');

Route::get('/subscribe/cancelled', [SubscriptionController::class, 'cancelled'])->name('subscribe.cancelled');

Route::get('/subscribe/billing', [SubscriptionController::class, 'billingShow'])->name('billing.show');

Route::get('/subcription/payment/cancelled', [SubscriptionController::class, 'subscriptionPaymentCancelled'])->name('subscriptions.payment-cancelled');

Route::get('/subcription/payment/validate', [SubscriptionController::class, 'subscriptionPaymentValidate'])->name('subscriptions.payment-validate');










// Route::post('/email/store', [AccountController::class, 'emailStore'])->name('email.store');


