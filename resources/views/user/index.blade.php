@extends('user.layouts.app')

@section('content')
    @include('user.partials.carrousel')

    {{-- @include('user.partials.apercu') --}}

    @include('user.partials.about')

    @include('user.partials.features')

    {{-- @include('user.partials.service') --}}

    @include('user.partials.devis')

    @include('user.partials.commentaire')

    {{-- @include('user.partials.team') --}}

@endsection
