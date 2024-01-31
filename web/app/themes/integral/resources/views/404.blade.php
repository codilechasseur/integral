@extends('layouts.app')

@section('content')
  {{-- @include('partials.page-header') --}}

  @if (! have_posts())
    <x-alert type="warning">
      <h1 class="text-9xl md:text-10xl lg:text-12xl text-charcoal font-serif">404 page</h1>
      <div class="text-xs lg:text-base font-light">
        {!! __('Sorry, but the page you are  looking for doesn’t exist.', 'sage') !!}
      </div>
    </x-alert>
  @endif
@endsection
