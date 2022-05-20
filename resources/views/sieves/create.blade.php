@extends('layouts.main')

@section('content')
  <form action="{{ route('sieves.store') }}" method="POST">
    @csrf 
    <input type="number" name="size" class="form-control">
    <button type="submit" class="btn btn-primary">Get Primes</button>
    
  </form>

@endsection

