@extends('dashboard::layouts.twoten')

@section('sidebar')
  @include('food::sidebar')
@endsection

@section('content-main')
  @include('recipes::'.$view)
@endsection