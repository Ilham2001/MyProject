@extends('layouts.app')

@section('content')
    <ul class="nav navbar bg-light">
        <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/demands') }}">Demandes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/interventions') }}">Intervention</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/quotes') }}">Devis</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/documents') }}">Documents</a>
        </li>
    </ul>
    @yield('menu-content')
@endsection
