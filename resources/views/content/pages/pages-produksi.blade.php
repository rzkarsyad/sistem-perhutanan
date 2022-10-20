@php
$container = 'container-fluid';
$containerNav = 'container-fluid';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Produksi')

@section('content')
<div>
    <livewire:produksi-component>
</div>
@endsection