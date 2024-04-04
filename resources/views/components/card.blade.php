<a href="{{ $root }}" class="">
  <div class="card  reveal reveal.active rounded-4 h-100 shadow card-scale border-0 position-relative overflow-hidden " style="width: 22rem;">
    <div class="position-absolute z-1 p-2 px-3 bg-white w-75 rounded-5 userBar primary-color-text">
      <div class="d-flex align-items-center">
        <i class="bi bi-person-circle fs-2 "></i>
        <h6 class="m-0 ms-2 ">{{$user}}</h6>
      </div>

    </div>
    <div class="position-relative">

      <div class="blackGradient"></div>
      <p class="card-text position-absolute accent-color-text fw-bold h5 price z-1">
        {{ Number::currency($price, in: 'EUR', locale: 'it') }}
      </p>
      <div id="{{$announcement}}" class="carousel slide" data-bs-ride="carousel">


        @if(count($images))
        <div class="carousel-inner">
          @foreach($images as $image)
          <div class="carousel-item @if($loop->first) active @endif">
            <div class="blackGradient"></div>
            <img src="{{$image->getUrl(300,200)}}" class="d-block w-100 " alt="...">
          </div>
          @endforeach
        </div>
        @else
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/woman-02.png" class="d-block w-100 " alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/woman-02.png" class="d-block w-100 " alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/woman-02.png" class="d-block w-100 " alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/woman-02.png" class="d-block w-100 " alt="...">
          </div>
        </div>
        @endif
        <button class="carousel-control-prev" type="button" data-bs-target="#{{$announcement}}" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#{{$announcement}}" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      {{-- <img src="https://picsum.photos/300/20{{rand(0, 9)}}" class="card-img-top rounded-top-4 " alt="..."> --}}
    </div>

    <div class="card-body rounded-4 d-flex flex-column gap-1 justify-content-between py-4 pt-5 px-4">
      <div class="d-flex">
        <i class="bi bi-tags-fill accent-color-text"></i>
        <p class="card-text m-0 primary-color-text ms-2 text-uppercase ">{{$category}}</p>
      </div>
      <h5 class="card-title primary-color-text">{{$title}}</h5>

      <!-- <p class="card-text text-truncate"><span class="h6">Descrizione: </span>{{$description}}</p> -->


    </div>

  </div>
</a>