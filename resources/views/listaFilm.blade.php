@extends("layouts.master")

@section("title")
    Lista film
@endsection

@php
    $films = ["Il Padrino", "Inception", "Titanic", "Interstellar"];
@endphp

@section("main")
<main class="bg-light min-vh-100 py-5">
    <div class="container">
        <div class="row justify-content-center">
            
            @foreach ($films as $film)
                <x-card>
                    
                </x-card>
            @endforeach

            <div class="col-12 text-center mt-4">
                <a href="{{ url('listaFilm') }}" class="btn btn-success btn-lg shadow">Torna alla homepage!</a>
            </div>

        </div>
    </div>
</main>
@endsection
