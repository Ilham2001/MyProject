@extends('layouts.app')
<style>
    .icons {
        font-size : 100px;
    }


</style>
<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
@section('content')
    @include('layouts.headers.cards')
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

    <center>
        <div class="container">
            <div class="row">
                <div class="col">
                    <i class="fas fa-wrench icons"></i>
                    <label>Intervention</label>
                    <p>Liste et détails des interventions réalisées par nos services</p>
                </div>
                <div class="col">
                    <i class="fas fa-euro-sign icons"></i>
                    <label>Devis</label>
                    <p>Liste et détails des interventions réalisées par nos services</p>
                </div>
                <div class="w-100"></div>
                <div class="col-lg">
                    <i class="fas fa-envelope icons"></i>
                    <label>Demandes</label>
                    <p>Liste et détails des interventions réalisées par nos services</p>
                </div>
                <div class="col-lg">
                    <i class="fas fa-folder-open icons"></i>
                    <label>Documents</label>
                    <p>Liste et détails des interventions réalisées par nos services</p>
                </div>
            </div>
        </div>
    </center>

        
        
    
    
@endsection
