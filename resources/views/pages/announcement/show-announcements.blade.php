<x-layout>
  <x-nav />
  <div class="container mt-4" style="min-height: 64vh;">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center my-3 primary-color-text">{{__('ui.Announce')}}</h1>
        <table class="table">
          <thead>
            <tr>
              {{-- <th scope="col">#</th> --}}
              <th scope="col">{{__('ui.insertTitle')}}</th>
              <th scope="col">{{__('ui.Category')}}</th>
              <th scope="col">{{__('ui.insertDescription')}}</th>
              <th scope="col">{{__('ui.insertPrice')}}</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($announcements as $announcement)
              {{-- <th scope="row">{{ $announcement->id }}</th> --}}
              <th scope="row"><a class="primary-color-text" href="{{ route('announce.View', $announcement)}}">{{ $announcement->title }}</a></th>
              <td class="fw-norma"><a class="text-black" href="{{ route('announce.View', $announcement)}}">{{ $announcement->category->name }}</a></td>
              <td class="fw-normal"><a class="text-black" href="{{ route('announce.View', $announcement)}}">{{ $announcement->description }}</a></td>
              <td class="fw-semibold "><a class="text-black" href="{{ route('announce.View', $announcement)}}">{{ Number::currency($announcement->price, in: 'EUR', locale: 'it') }}</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <x-footer />
</x-layout>