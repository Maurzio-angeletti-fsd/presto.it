

@if ($activePlan->duration_in_days > $plan->duration_in_days && $activePlan->price > $plan->price )
<form action=""  id="paymentForm" >
  @csrf
  <button   class="btn " >
    <input  class="invisible">

    
    <label for ="plan" class="btn btn-outline-info rounded m-2 p-0 border-0">
      <div class="card  primary-color-bg p-2 text-dark bg-opacity-50 reveal reveal.active rounded-4 h-100 shadow card-scale border-0 position-relative overflow-hidden " style="width: 22rem;">
        <div class="position-absolute z-1">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <h4 class="m-0 text-white">attualmente non puoi sottoscrivere questo piano</h4>
          </div>
        </div>
        <div class="position-absolute z-1 p-2 px-3 bg-white w-75 rounded-5 userBar primary-color-text">
          <div class="d-flex align-items-center">
            <i class="bi bi-ban-fill fs-2 "></i>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <h4 class="m-0 ms-2 accent-color-text">{{ $plan->slug }}</h4>
            </div>
          </div>

        </div>
        <div class="position-relative">
        
          <p class="h2 font-weight-bold text-capitalize"></p>
          <img src="/img/woman-02.png" class="d-block w-100 " alt="...">
          
        </div>
        <div class="card-body rounded-4 d-flex flex-column gap-1 justify-content-between py-4 pt-5 px-4 ">
          <div class="d-flex">
          
            <p class="card-text m-0 primary-color-text  fw-bold h5 mt-5 ms-2 text-uppercase z-1"></p>
          </div>
          
          <p class="card-text m-0 accent-color-text fw-bold h5 ms-2 text-uppercase display-3 z-1">{{ $plan->visual_price }}</p>

        </div>

      </div>
    
    </label>
   
  </button>
</form>


<!-- piano attuale -->
@elseif (Auth::user()->is_subscribed === $plan->slug)
<form action=""  id="paymentForm" >
  @csrf
  <button   class="btn " >
    <input  class="invisible">

    
    <label for ="plan" class="btn btn-outline-info rounded m-2 p-0 border-0">
      <div class="card  accent-color-bg p-2 text-dark bg-opacity-50 reveal reveal.active rounded-4 h-100 shadow card-scale border-0 position-relative overflow-hidden " style="width: 22rem;">
        <div class="position-absolute z-1">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <h4 class="m-0 text-white">attualmente hai attivo questo piano</h4>
          </div>
        </div>
        <div class="position-absolute z-1 p-2 px-3 bg-white w-75 rounded-5 userBar primary-color-text">
          <div class="d-flex align-items-center">
            <i class="bi bi-ban-fill fs-2 "></i>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <h4 class="m-0 ms-2 primary-color-text">{{ $plan->slug }}</h4>
            </div>
          </div>

        </div>
        <div class="position-relative">
        
          <p class="h2 font-weight-bold text-capitalize"></p>
          <img src="/img/woman-02.png" class="d-block w-100 " alt="...">
          
        </div>
        <div class="card-body rounded-4 d-flex flex-column gap-1 justify-content-between py-4 pt-5 px-4 ">
          <div class="d-flex">
          
            <p class="card-text m-0 primary-color-text  fw-bold h5 mt-5 ms-2 text-uppercase z-1"></p>
          </div>
          
          <p class="card-text m-0 primary-color-text fw-bold h5 ms-2 text-uppercase display-3 z-1">{{ $plan->visual_price }}</p>

        </div>

      </div>
    
    </label>
   
  </button>
</form>

@elseif (Auth::user()->is_subscribed)
<form action="{{ route('subscribe.store') }}" method="POST" id="paymentForm">
  @csrf
  <button type="submit" id="payButton" class="btn" >
    <input type="text" name="plan" value="{{ $plan->id }}"  class="invisible">

    
    <label for ="plan" class="btn btn-outline-info rounded m-2 p-0 border-0">
      <div class="card  reveal reveal.active rounded-4 h-100 shadow card-scale border-0 position-relative overflow-hidden " style="width: 22rem;">
        <div class="position-absolute z-1">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <h4 class="m-0 accent-color-text">Puoi fare l'upgrade con questo piano</h4>
          </div>
        </div>
        <div class="position-absolute z-1 p-2 px-3 bg-white w-75 rounded-5 userBar primary-color-text">
          <div class="d-flex align-items-center">
            <i class="bi bi-bag-fill fs-2 "></i>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <h4 class="m-0 ms-2 accent-color-text">{{ $plan->slug }}</h4>
            </div>
          </div>

        </div>
        <div class="position-relative">
        
          <p class="h2 font-weight-bold text-capitalize"></p>
          <img src="/img/woman-02.png" class="d-block w-100 " alt="...">
          
        </div>
        <div class="card-body rounded-4 d-flex flex-column gap-1 justify-content-between py-4 pt-5 px-4 ">
          <div class="d-flex">
          
            <p class="card-text m-0 primary-color-text  fw-bold h5 mt-5 ms-2 text-uppercase z-1"></p>
          </div>
          
          <p class="card-text m-0 primary-color-text fw-bold h5 ms-2 text-uppercase display-3 z-1">{{ $plan->visual_price }}</p>

        </div>

      </div>
    
    </label>
   
  </button>
</form>

<!-- piani disponibili -->

@else
<form action="{{ route('subscribe.store') }}" method="POST" id="paymentForm">
  @csrf
  <button type="submit" id="payButton" class="btn" >
    <input type="text" name="plan" value="{{ $plan->id }}"  class="invisible">

    
    <label for ="plan" class="btn btn-outline-info rounded m-2 p-0 border-0">
      <div class="card  reveal reveal.active rounded-4 h-100 shadow card-scale border-0 position-relative overflow-hidden " style="width: 22rem;">
        <div class="position-absolute z-1 p-2 px-3 bg-white w-75 rounded-5 userBar primary-color-text">
          <div class="d-flex align-items-center">
            <i class="bi bi-bag-fill fs-2 "></i>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <h4 class="m-0 ms-2 accent-color-text">{{ $plan->slug }}</h4>
            </div>
          </div>

        </div>
        <div class="position-relative">
        
          <p class="h2 font-weight-bold text-capitalize"></p>
          <img src="/img/woman-02.png" class="d-block w-100 " alt="...">
          
        </div>
        <div class="card-body rounded-4 d-flex flex-column gap-1 justify-content-between py-4 pt-5 px-4 ">
          <div class="d-flex">
          
            <p class="card-text m-0 primary-color-text  fw-bold h5 mt-5 ms-2 text-uppercase z-1"></p>
          </div>
          
          <p class="card-text m-0 primary-color-text fw-bold h5 ms-2 text-uppercase display-3 z-1">{{ $plan->visual_price }}</p>

        </div>

      </div>
    
    </label>
   
  </button>
</form>
@endif