<x-layout>
  <x-nav-home />
  <x-access-denied />
  <x-success />
  <x-error />
  <x-message />
  <!-- HERO SECTION -->
  <section class="container mt-5" style="min-height:95vh">
    <div class="row">
      <div class="col-12 col-lg-8 col-xl-6 d-flex flex-column justify-content-center pe-md-5 searchBar z-1">
        <h1 class="fw-bold mb-5 animate__animated animate__fadeInLeft primary-color-text">
          {{__('ui.AllAnnouncements')}}<br>
        </h1>

        <div class="row  px-2">
          <div class="col-12 searchStyle  p-2 rounded-5 animate__animated animate__fadeInLeft bg-white">
            <form action="{{ route('announcements.search') }}" method="GET">
              @csrf

              <div class="row gap-3 gap-md-0">

                <div class="col-12 col-xl-5 col-md-6 ">
                  <input type="search" name="searched" id="searched" placeholder="{{__('ui.InputSearch')}}" class="form-control rounded-5 ">
                </div>

                <div class="col-12 col-xl-4 col-md-4 p-md-0">
                  <select name="searchedCategory" id="searchedCategory" class="form-select rounded-5">
                    <option selected>{{__('ui.CategorySearch')}}</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>


                <div class="col-12 col-xl-3  col-md-2 ">
                  <button type="submit" class="btn searchBtn  w-100 rounded-5 btnStatic">{{__('ui.Search')}}</button>
                </div>

                <x-error-search />

              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
    </div>

    <div class="col-12">
      <img src="img/Online-Shopping.png" alt="" class="shopImage animate__animated animate__fadeInRight">
      <img src="img/Online-Shopping-background.png" alt="" class="shopBack ">
    </div>


  </section>

  <!-- END HERO SECTION -->


  <!-- SEARCH BY CATEGORY SECTION -->
  <a class="text-center d-block py-5" name="category-section"></a>

  <section class=" categoryCardContainer py-5 position-relative overflow-hidden  ">

    <img src="../img/Speed_Shop_Logo_grey.svg" alt="" style="width: 1000px; top:-100px; opacity: 10%; " class="position-absolute">
    <div class="container ">
      <div class="d-flex align-items-center justify-content-center ">
        <div class="d-inline-block accent-color-bg me-3 " style="height:2px; width:60px"></div>
        <h3 class="text-center  accent-color-text fw-light m-0 " style="z-index: 1;">{{__('ui.categorySection')}}</h3>
        <div class="d-inline-block accent-color-bg ms-3 " style="height:2px; width:60px"></div>
      </div>
      <h3 class="text-center mb-5 text-white h1" style="z-index: 1;">{{__('ui.searchByCategory')}}</h3>


      <div class="category-container mt-5">
        <div class="row gap-5 justify-content-center ">

          @foreach($categories as $category)
          <a href="{{ route('category.View', $category->id) }}" class="col-12 col-sm-5 col-md-5 col-lg-3 col-xxl-2 text-decoration-none w-card">
            <div class="shadow rounded-5 categoryCard d-flex flex-sm-column  justify-content-center align-items-center reveal reveal.active gap-2 " style="height: 210px;">
              <i class="fa-solid {{ $category->icon }} fs-2 "></i>
              <h5 class=" fw-bold ">{{$category->name}}</h5>
              <div class="circle">
                <h5 class=" fw-bold m-0">{{$category->announcements()->where('is_accepted', true)->count()}}</h5>
              </div>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </section>




  <a name="announcements-section"></a>
  <section class="container mt-5 pt-5 mb-5 pt-5">

    <div class="d-flex align-items-center justify-content-center ">
      <div class="d-inline-block accent-color-bg me-3 " style="height:2px; width:60px"></div>
      <h3 class="text-center  accent-color-text fw-light m-0 " style="z-index: 1;">{{__('ui.announceSection')}}</h3>
      <div class="d-inline-block accent-color-bg ms-3 " style="height:2px; width:60px"></div>
    </div>


    @if($announcements->count() < 1) <h3 class="text-center mb-5 primary-color-text h1" style="z-index: 1;">
      {{__('ui.noAnnounceCardSection')}}</h3>
      @else
      <h3 class="text-center mb-5 primary-color-text h1" style="z-index: 1;">{{__('ui.okAnnounceCardSection')}}</h3>
      @endif

      <div class="row g-2">
        @foreach($announcements as $announcement)
        <div class="col-12 col-lg-6 col-xl-4 mb-4 d-flex justify-content-center ">
          <x-card :user="$announcement->user->name" :price="$announcement->price" :description="$announcement->description" :category="$announcement->category->name" :title="$announcement->title" :root="route('announce.View',$announcement->id)" :images="$announcement->images" :announcement="$announcement->id" />
        </div>
        @endforeach
      </div>
  </section>

  <x-footer />
</x-layout>