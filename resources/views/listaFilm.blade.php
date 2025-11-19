@extends("layouts/master")

@section("title")
    Lista film
@endsection

@section("main")
    <div class="container">
            <div class="row justify-content-center text-center">
                @foreach ($films as $film)
                    <x-card>

                    </x-card>
                @endforeach
                <div class="col-md-8">
                    <a href="{{ "listaFilm" }}" class="btn btn-primary btn-lg shadow">Vai alla lista dei film</a>
                </div>
            </div>
        </div>
@endsection