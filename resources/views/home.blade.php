@extends('app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush

@section('content')
    <header class="default-flex flex-column gap-m" id="home-header">
     <h1 class="header-title">
      Welcome to ChoreEase – Simplifying Chore Management for Everyone!
     </h1>
     <div class="default-flex flex-column gap-xs header-info">
      <p class="hide-header-info">Keeping track of household tasks can be a challenge, but with ChoreEase, managing chores has never been easier. Our platform is designed to help families, roommates, and individuals organize their daily, weekly, and monthly tasks effortlessly.
      </p> 
       <p class="hide-header-info">With features like customizable chore lists, reminders, and progress tracking, you’ll never forget a task again. Assign responsibilities, track completion, and enjoy a cleaner, more organized space—together!
       </p>
       <p class="hide-header-info">
         Start your journey toward stress-free chore management today!
       </p>
     </div>
 
      <div class="align-self-center default-flex gap-xs">
        <button>Log in</button>
        <a href="{{route('registration')}}">Register</a>
      </div>
    </header>
@push('index')
<script src="{{asset('scripts/index.js')}}"></script>
@endpush
@endsection