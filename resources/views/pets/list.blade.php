@extends('layouts.base')
@section('title', 'Listing')
@section('subtitle', 'Listing Pets')
@section('content')
<div class="row">
    @foreach ($viewData["pets"] as $pet)
        <div class="col-md-3 col-lg-2 mb-2">
            <div class="card">
                <h5 class="card-header">Pet ID #{{ $pet->getId() }}</h5>
                <div class="card-body">
                    <p class="card-text">Type: {{ $pet->getType() }}</p>
                    @if($pet->getType() == "Cat")
                    <p class="card-text text-primary-emphasis">Name: {{ $pet->getName() }}</p>
                    <p class="card-text">Score: {{ $pet->getScore() }}</p>
                    @else
                    <p class="card-text ">Name: {{ $pet->getName() }}</p>
                    <p class="card-text fw-bolder">Score: {{ $pet->getScore() }}</p>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
