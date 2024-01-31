{{--
  Template Name: Thank you Template
--}}

@extends('layouts.app')

@section('content')
  {{-- @include('partials.page-header') --}}

  <div>
    <h1 class="text-9xl md:text-10xl lg:text-12xl text-charcoal font-serif">@php(the_title())</h1>
    <div class="text-xs lg:text-base font-light">
      @php(the_content())
    </div>
  </div>
@endsection
