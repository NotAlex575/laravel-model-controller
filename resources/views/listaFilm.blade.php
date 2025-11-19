@extends("layouts.master")

@section("title")
    Lista film
@endsection


@section("main")
<main class="bg-light min-vh-100 py-5">
    <div class="container">
        <div class="row justify-content-center">
            
            @foreach ($Movies as $Movie)
                <x-card>
                    <x-slot:title>{{ $Movie["title"] }}</x-slot:title>
                    <x-slot:original_title>{{ $Movie["original_title"] }}</x-slot:original_title>
                    <x-slot:nationality>{{ $Movie["nationality"] }}</x-slot:nationality>
                    <x-slot:date>{{ $Movie["date"] }}</x-slot:date>
                    <x-slot:vote>{{ $Movie["vote"] }}</x-slot:vote>
                </x-card>
            @endforeach

            <div class="col-12 text-center mt-4">
                <a href="{{ url('/') }}" class="btn btn-success btn-lg shadow">Torna alla homepage!</a>
            </div>

        </div>
    </div>
</main>
@endsection
