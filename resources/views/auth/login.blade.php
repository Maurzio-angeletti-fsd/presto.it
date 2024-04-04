<x-layout title="Accedi">
    <x-nav />
    <div class="container mt-5 pt-5" style="min-height: 64vh;">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card background rounded-5 shadow p-3">

                    <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf
                            <div class="row g-3">
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
                                    <input type="checkbox" name="remeber" id="remeber" class="form-check-label">
                                    <label for="remeber" class="form-check-label">Ricordati di me</label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn text-white rounded-5  primary-color-bg btnStatic">Accedi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <x-footer />

</x-layout>