@php
$container = 'container-fluid';
$containerNav = 'container-fluid';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Petani')

@section('content')
<div>
    <livewire:petak-component>
</div>
@endsection