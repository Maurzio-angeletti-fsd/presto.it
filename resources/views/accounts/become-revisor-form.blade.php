<x-layout>
    <x-nav />

    <div class="row m-0 p-0">
        <div class="col-10 mx-auto text-center">
            <h1 class="primary-color-text ">richiedi di diventare revisore.</h1>
        </div>
    </div>

    <div class="row mt-4 p-4">
        <div class="col-6 mx-auto text-center">
            <form action="{{route('become.revisor')}}" method="POST">
                @csrf
                <p>
                    Presto.it è sempre alla ricerca di figure professionali che possano contribuire competenza ed entusiasmo a rendere sempre più sicuro il sito dedicato agli annunci. <br>La nostra aspirazione è di continuare a crescere e migliorare, scommettendo su persone motivate, dinamiche, con talenti speciali.Se stai cercando un lavoro che ti offra la possibilità di esprimere al meglio le tue potenzialità, sei nel posto giusto.
                </p>

                <h3 class="primary-color-text">
                    Lascia una breve descrizione di te e delle tue motivazioni.
                </h3>

                <div class="mb-3">
                    <label for="body" class="form-label"></label>
                    <textarea type="text" name="body" class="form-control p-0" id="body" placeholder="  Scrivi la richiesta"  style="height: 200px">{{ old('body') }}</textarea>
                    @error('body')<span class="text-danger small">{{ $message }}</span> @enderror
                </div>


                <div class="d-flex mt-3 ">
                    <div class="mx-auto">
                        <button class="btn btn-primary" type="submit" role="button">Invia richiesta</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <x-footer />

</x-layout>