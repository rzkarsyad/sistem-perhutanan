@php
$container = 'container-fluid';
$containerNav = 'container-fluid';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Petani')

@section('content')
<div>
    <livewire:petani-component>
</div>
@endsection