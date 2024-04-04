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
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;


class ContactVendorForm extends Component
{
    public $emailSentId;
    #[Validate('required', message: 'il testo è obbligatorio.')]
    #[Validate('max:300', message: 'il testo non può contenere più di :max caratteri.')]
    public $body;
    public $receiving_user_id;
    public $receiving_user_email;




    public function render()
    {
        return view('livewire.contact-vendor-form');
    }

    public function store(Request $request)
    {
        $this->validate();

       EmailSents::create(
        [


            'sending_user_id' => Auth::id(),
            'receiving_user_id' =>$this->receiving_user_id,
            'body' => $this->body,

        ]);

        Mail::to($this->receiving_user_email)->send(new ContactVendor(Auth::user()));

        $this->resetEmailBody();

        
        session()->flash('emailSentSuccess');
        
        

    }

    public function resetEmailBody()
    {
        $this->body = '';

    }

    public function emailSent()
    {
        $this->dispatch('email-sent');
        return redirect('/')->with('success', 'complementi! hai richesto di diventare revisore correttamente, attendi la conferma da parte dell\'admin');
       
    }


   
}
