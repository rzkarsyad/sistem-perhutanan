@php
$container = 'container-fluid';
$containerNav = 'container-fluid';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Akun')

@section('content')
<div>
    <livewire:user.user-component>
</div>
@endsection