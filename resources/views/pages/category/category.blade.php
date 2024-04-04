<x-layout>
  <x-nav />
  <div class="d-flex flex-column justify-content-between " style="height:84vh">
    <div class="container mt-5 ">

      <h1 class="text-center mb-5 primary-color-text">{{ $category->name }}</h1>



      <div class="row g-5">
        @foreach($category->announcements as $annoucement)
        @if($annoucement->is_accepted)
        <div class="col-md-6 col-xl-4 mb-4 d-flex justify-content-center ">
          <x-card :announcement="$annoucement->id" :user="$annoucement->user->name" :price="$annoucement->price" :description="$annoucement->description" :category="$annoucement->category->name" :title="$annoucement->title" :root="route('announce.View',$annoucement->id)" :images="$annoucement->images" />
        </div>
        @endif
        @endforeach

      </div>

    </div>

    <x-footer />
  </div>
</x-layout>