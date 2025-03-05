@extends('layouts.master')

@section('titolo')
    Main Comics Page
@endsection

@php
    $cards = config('comics');
@endphp


@section('contenuto')
    <section id="jumbo-section">

        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" class="jumbo-img">

        <h1 class="jumbo-text">CURRENT SERIES</h1>
    </section>
    <div class="container mt-5">
        <div class="row  g-3 justify-content-center">
            @foreach ($cards as $card)
                <div class="col-2">
                    <x-card>
                        <x-slot:immagine>{{ $card['thumb'] }}</x-slot:immagine>
                        <x-slot:titolo>{{ $card['title'] }}</x-slot:titolo>

                    </x-card>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary rounded-0 px-5 fw-bold
            py-2">LOAD MORE</button>
        </div>
        <section class="mt-5 py-5" id="infos-section">
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" class="img-badge"alt="">
                    <h6 class="badge-description">DIGITAL COMICS</h5>
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" class="img-badge"alt="">
                    <h6 class="badge-description">DC MERCHANDISE</h5>
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" class="img-badge"alt="">
                    <h6 class="badge-description">SUBSCRIPTION</h5>
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" class="img-badge"alt="">
                    <h6 class="badge-description">COMIC SHOP LOCATION</h5>
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" class="img-badge"alt="">
                    <h6 class="badge-description">DC POWER VISA</h5>
                </div>
            </div>
        </section>

    </div>
@endsection
