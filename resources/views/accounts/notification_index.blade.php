<x-layout>
    <x-nav />
        <div class="container-fluid p-0">
            <div class="row m-0 justify-content-center">
                <div class="col-11 p-0">
                     <h1 class="text-center text-md-start my-5">Tutte le notifiche</h1>
                </div>
            </div>

            <div class="row m-0 justify-content-center">
                <div class="col-11 p-0">
                    <ul class="list-group pb-5">
                
                        @foreach($notifications as $notification)
                            <li class=" list-group-item d-sm-flex justify-content-between  primary-color-bg text-white">
                                <p class="mb-0 py-1 text-center">
                                    {{$notification->body}}
                                </p>

                                <p class="mb-0 py-1 text-center">
                                Giorno:
                                {{$notification->created_at->format('d-m-Y')}} Ora: {{$notification->created_at->format('H:i')}}
                                </p>
                                
                                <form action="{{route('notification.destroy',$notification)}}" class="text-center" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type ="submit" class="btn btn-danger px-5 px-sm-4 px-lg-3 btn-sm">
                                        Elimina
                                </button>
                                </form>
                            </li>
                            
                        @endforeach    
                    </ul>
                </div>
                
            </div>
            
            
        </div>
        
        
    
</x-layout>