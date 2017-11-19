@extends('layouts.template')

@section('title')
    Renta de bicicletas Puente Ltda.
@endsection


@section('content')
    @include('puenteltda.partials.logo')
    @include('puenteltda.partials.slider')
    @include('puenteltda.partials.service')
    @include('puenteltda.partials.portfolio')
    @include('puenteltda.partials.blog')
    @include('puenteltda.partials.contact')
    @include('puenteltda.partials.user')
    @include('puenteltda.partials.switchselection')
@endsection