@extends('layouts.base')
@section('title', 'Statistics')
@section('subtitle', 'Pets Statistics')
@section('content')
<div class="card">
    <h1>STATISTICS OF SABANAPETS!</h1>
    <p>now we have {{$viewData['numDogs']}} dogs</p>
    <p>now we have {{$viewData['numCats']}} cats</p>
    <p>with an average score of: {{$viewData['averageScore']}}</p>
</div>
@endsection