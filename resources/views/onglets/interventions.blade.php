@extends('dashboard')

<style>
    #search-button {
        float : right;
    }
</style>
@section('menu-content')
    <div class="container">
        <div class="row justify-content-md-center search-box">
            <form action="/searchInter" method="GET" style="width : 70%;">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="" class="form-control-label">Du :</label>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control form-control-sm mb-4" name ="startDate">
                    </div>
                    <div class="col">
                        <label for="adress_building" class="form-control-label">Au :</label>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control form-control-sm mb-4" name="endDate">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="id_intervention" class="form-control-label">N° intervention :</label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm mb-4" name ="id_intervention">
                    </div>
                    <div class="col">
                        <label for="status_intervention" class="form-control-label">Statut :</label>
                    </div>
                    <div class="col">
                        <select class="form-control form-control-sm mb-4" name="status_intervention"> 
                            <option value="Réalisée">Réalisée</option>
                            <option value="Prévue">Prévue</option>
                            <option value="En cours">En cours</option>            
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-6"></div>
                    <div class="col"></div>
                    <div class="col">
                        <input class="btn btn-primary" type="submit" value="Recherche">
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
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
                            <td>{{ $intervention->date_intervention }}</td>
                            <td>{{ $intervention->id }}</td>
                            <td>type de l'intervention</td>
                            
                            <td>{{ $intervention->location_intervention }}</td>
                            <td>{{ $intervention->reason }}</td>
                            <td>{{ $intervention->status_intervention }}</td>
                            <td class="cell-center"><a href="{{ URL::to('interventions/' . $intervention->id) }}"><i class="fas fa-eye"></i></a></td>   
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
