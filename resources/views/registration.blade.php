@extends('app')
@push('styles')
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush


@section('content')
  <form action="" method="POST">
    @csrf
    <label for="email">email</label>
    <input type="email" name="email">
    <label for="name">name</label>
    <input type="text" name="name">
    <label for="password">password</label>
    <input type="password" name="password">
    <label for="repass">password</label>
    <input type="password" name="repass">
    <input type="submit" value="register">
  </form>
@endsection