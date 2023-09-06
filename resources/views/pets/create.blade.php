@extends('layouts.base')
@section('title', 'Register')
@section('subtitle', 'Pets register')
@section('content')

@if($errors->any())
<ul id="errors" class="alert alert-danger list-unstyled">
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Element created successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<form class="row g-1 p-5" action="{{ route('pets.save') }}" method="POST">
  @csrf
  <div class="form-floating">
    <input type="text" class="form-control" name="name" id="name" placeholder="name" required>
    <label for="name">Name</label>
  </div>
  <div class="form-floating">
    <input type="number" class="form-control" name="score" id="score" placeholder="score" min="0" max="100" required>
    <label for="score">Score</label>
    <div class="form-text">Score must be a number between 0 and 100 (including them)</div>
  </div>
  <div class="form-floating">
    <select class="form-select" aria-label="select type" name="type" id="type" placeholder="type" required>
      <option selected></option>
      <option value="Cat">Cat</option>
      <option value="Dog">Dog</option>
    </select>
    <label for="type">Type</label>
  </div>
  <div class="col-12 text-center">
    <button class="btn btn-primary" type="submit">Submit form</button>
    <button class="btn btn-primary" type="reset">Reset form</button>
  </div>
</form>
@endsection
