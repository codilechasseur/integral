{{--
  Template Name: Basic Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    {{-- @include('partials.page-header') --}}
    @include('partials.content-page-basic')
  @endwhile
@endsection
