@extends('layout.app')
@section('title', 'Home Page')
@section('homehero')
    @include('components.hero')
@endsection

@section('homepricing')
    @include('components.pricing')
@endsection

@section('homecta')
    @include('components.cta')
@endsection