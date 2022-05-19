@extends('layout.mainLayout')

@section('title')
    DC | DC Comics
@endsection

@section('main')
    @include('partials.bodyMain', $comics)
@endsection