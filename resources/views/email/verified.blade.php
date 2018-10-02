@extends('layouts.pms_app')

@section('content')


  <div class="text-center">
    <h1 class="errorText text-white">User Not found!</h1>
  </div>
  <div class="list-group bg-info auto m-b-sm m-b-lg">
    <a href="{{ url('/') }}" class="list-group-item">
      <i class="fa fa-chevron-right text-muted"></i>
      <i class="fa fa-fw fa-mail-forward m-r-xs"></i> Goto application
    </a>
    <a href="{{url('/register')}}" class="list-group-item">
      <i class="fa fa-chevron-right text-muted"></i>
      <i class="fa fa-fw fa-unlock-alt m-r-xs"></i> Sign up
    </a>
    <a href="{{url('/login')}}" class="list-group-item">
      <i class="fa fa-chevron-right text-muted"></i>
      <i class="fa fa-fw fa-unlock-alt m-r-xs"></i> Sign in
    </a>
  </div>

@endsection
