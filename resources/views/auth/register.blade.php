<x-layout>

  <x-nav />
  <div class="d-flex flex-column justify-content-between " style="height:84vh">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4 mx-auto">
          <div class="card background rounded-5 shadow p-3">

            <div class="card-body">
              <form action="/register" method="POST">
                @csrf
                <div class="row g-3">
                  <div class="col-12">
                    <label for="name">Nome utente</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                    @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-12">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                    @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-12">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-12">
                    <label for="password_confirmation">Conferma password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">

                  </div>
                  <div class="col-12">
                    <button type="submit"
                      class="btn text-white rounded-5  primary-color-bg btnStatic">Registrati</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <x-footer />
  </div>
</x-layout>