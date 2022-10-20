@php
$container = 'container-fluid';
$containerNav = 'container-fluid';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Penjualan')

@section('content')
<div>
    <livewire:penjualan-component>
</div>
@endsection