<div>
    @if(session()->has('announcementSuccess'))
    
    <form action="" wire:submit.prevent="store" class="invisible z-n1">
        <p class="d-inline-flex gap-1">
            
            <button class="btn btn-primary" type="submit" data-bs-toggle="collapse" data-bs-target="#collapseExample" wire:click="">
                Notifiche livewire form
            </button>
        </p>
        
    </form>
    @endif

    @if(session()->has('EmailSentsuccess'))
    <form action="" wire:submit.prevent="emailNotificationStore">
        <p class="d-inline-flex gap-1">
            
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" wire:click="">
                Notifiche livewire
            </button>
        </p>
        
    </form>
    @endif
</div>
