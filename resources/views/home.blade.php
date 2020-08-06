@extends('layouts.base')

@section('title', __('Home'))

@section('body')
    @include('groups._list')
@endsection
