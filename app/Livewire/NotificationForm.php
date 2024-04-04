<?php

namespace App\Livewire;

use Livewire\Component;
Use Illuminate\Support\Facades\Mail;
use App\Mail\ContactVendor;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmailSentsRequest;
use App\Models\EmailSents;
use App\Models\User;
use App\Models\Notification;
use Livewire\Attributes\On;

class NotificationForm extends Component
{

   
    


    public function rules(){
        return [
        'body'=> 'required|max:300'
        ];

    }

    public function render()
    {
        return view('livewire.notification-form');
        
    }
    #[On('email-sent')]
    public function emailNotificationStore(Request $request)
    {
       
    
       Notification::create(
        [
            'user_id' => Auth::id(),
            'body' => "hai inviato un'email al venditore",
        ]);
        
            
        $this->dispatch('notification-created');
        
    
    }
    
    #[On('announcement-created')]
    public function announcementNotificationStore(Request $request)
    {
        
        
        Notification::create(
        [
            'user_id' => Auth::id(),
            'body' => "hai creato un nuovo annuncio",
        ]);
            
        $this->dispatch('notification-created');
        
        
    }
    
    
    
}
