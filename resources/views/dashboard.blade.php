@extends('layouts.app')
<style>
    body {
      margin: 0;
    }
    .header-navbar .sidebar .outer-container {
        padding : 1px 0;
    }
    .main {
        max-with : 960px;
        margin : auto;
    }
    .sidebar {
        float : left;
        font-family: 'Open Sans', sans-serif;
        position: fixed;
        width: 230px;
        top: 0;
        left: 0;
        bottom: 0;
        background-color: rgba(30,144,255,0.7);
        padding-top: 50px;
        margin-top : 55px;
    }

    .sidebar h1 {
      display: block;
      padding: 10px 20px;
      color: #fff;
      text-decoration: none;
      letter-spacing: 2px;
      font-weight: 400;
      margin: 0;
      font-size: 25px;
      text-transform: uppercase;
      text-align: center;
    }

    .sidebar li {
      display: table-cell;
      padding: 10px 20px;
      color: white;
      text-decoration: none;
      letter-spacing: 2px;
      vertical-align : middle;
    }
    .outer-container {
        margin-left : 235px;
    }
    #search-box {
        margin : 0 auto;
    }
  </style>
@section('content')
    <div class="main">
        <div class="sidebar">
            <form class="form-inline d-flex justify-content-center md-form form-sm mt-0">
                <i class="fas fa-search" aria-hidden="true"></i>
                <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
            </form>
            <ul class="nav navbar">
                <li class="nav-item">Immeuble 1</li>
                <li class="nav-item">Immeuble 2</li>
            </ul>
        </div>
        <div class="outer-container">
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
                <li class="nav-item">
                    <a class="nav-link" href="#">Finances</a>
                </li>
            </ul>
            @yield('menu-content')
        </div>
    </div>


@endsection
