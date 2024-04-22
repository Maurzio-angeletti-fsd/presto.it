<x-layout>
    <x-nav />

<div class="container-fluid">
    <div class="row text-center">
        <h1 class="primary-color-text">
            ABBONAMENTI
        </h1>
    </div>

    <div class="row ">
    @foreach ($plans as $plan)
        <div class="col-12 col-lg-6 col-xl-2 mb-4 mx-auto d-flex justify-content-center">
            <x-subscription-card :activePlan=$activePlan :plan="$plan"/>
        </div>                    
    @endforeach
    </div>
</div>




<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Subscribe</div>

                <div class="card-body">
                    <form action="{{ route('subscribe.store') }}" method="POST" id="paymentForm">
                        @csrf
                        <div class="row mt-3">
                            <div class="col">
                                <label>
                                    Select your plan
                                </label>
                                <div class="form-group">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        @foreach ($plans as $plan)
                                            <label
                                                class="btn btn-outline-info rounded m-2 p-3"
                                            >
                                                <input
                                                    type="radio"
                                                    name="plan"
                                                    value="{{ $plan->id }}"
                                                    required
                                                >
                                                <p class="h2 font-weight-bold text-capitalize">
                                                    {{ $plan->slug }}
                                                </p>

                                                <p class="display-4 text-capitalize">
                                                    {{ $plan->visual_price }}
                                                </p>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            
                        <div class="text-center mt-3">
                            <button type="submit" id="payButton" class="btn btn-primary btn-lg">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->




<!-- <form action="{{ route('subscribe.store') }}" method="POST" id="paymentForm">
<input type="text" name="plan" value="{{ $plan->id }}"  class="invisible">
   
    
    <label for ="plan" class="btn btn-outline-info rounded m-2 p-3">
      <div class="card  reveal reveal.active rounded-4 h-100 shadow card-scale border-0 position-relative overflow-hidden " style="width: 22rem;">
        <div class="position-absolute z-1 p-2 px-3 bg-white w-75 rounded-5 userBar primary-color-text">
          <div class="d-flex align-items-center">
            <i class="bi bi-person-circle fs-2 "></i>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <h4 class="m-0 ms-2 accent-color-text">{{ $plan->slug }}</h4>
            </div>
          </div>

        </div>
        <div class="position-relative">

          
        
        
        
          <p class="h2 font-weight-bold text-capitalize"></p>

      
        
        
        
          
          
        <img src="/img/woman-02.png" class="d-block w-100 " alt="...">
          
          
          
        
        <div class="card-body rounded-4 d-flex flex-column gap-1 justify-content-between py-4 pt-5 px-4 ">
          <div class="d-flex">
          
            <p class="card-text m-0 primary-color-text  fw-bold h5 mt-5 ms-2 text-uppercase z-1"></p>
          </div>
          
          <p class="card-text m-0 primary-color-text fw-bold h5 ms-2 text-uppercase display-3 z-1">{{ $plan->visual_price }}</p>
         

        </div>

      </div>
    </div>
    </label>
    <button type="submit" id="payButton" class="btn" >
  </button>
  </form> -->





        
    
</div>
</x-layout>
