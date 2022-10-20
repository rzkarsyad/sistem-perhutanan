@php
$container = 'container-fluid';
$containerNav = 'container-fluid';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Pengolah')

@section('content')
<div>
    <livewire:pengolah-component>
</div>
@endsection