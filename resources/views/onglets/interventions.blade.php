@extends('dashboard')

@section('menu-content')
    <div class="container">
        <div>
            FILTRE
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>N° intervention</th>
                    <th>Type</th>
                    <th>Immeuble chantier</th>
                    <th>Motif</th>
                    <th>Statut</th>
                    <th>Action</th>    
                </tr>
            </thead>
            <tbody>
                @foreach($interventions as $intervention)
                <tr>
                    <td>{{ $intervention-> }}</td>
                    <td>{{ $intervnetion-> }}</td>
                    <td>{{ $intervnetion-> }}</td>
                    <td>{{ $intervnetion-> }}</td>
                    <td>{{ $intervnetion-> }}</td>
                    <td>{{ {{ $intervnetion-> }} }}</td>
                    <td><a href="">Vois plus de détails</a></td>   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection