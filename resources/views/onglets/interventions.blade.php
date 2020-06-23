@extends('dashboard')

@section('menu-content')
    <div class="container">
        <div class="">
            <form action="">
                <div class="input-group">
                    <label for="" class="form-control-label">Du :</label>
                    <span class="input-group-btn" style="width:15px;"></span>
                    <div class="col-xs-3"><input type="date" class="form-control form-control-sm mb-4" name =""></div>
                    <span class="input-group-btn" style="width:50px;"></span>
                    <label for="adress_building" class="form-control-label">Au :</label>
                    <span class="input-group-btn" style="width:15px;"></span>
                    <div class="col-xs-3"><input type="date" class="form-control form-control-sm mb-4" name=""></div>
                </div>
                <div class="input-group">
                    <label for="" class="form-control-label">N° intervention :</label>
                    <span class="input-group-btn" style="width:15px;"></span>
                    <div class="col-xs-3"><input type="text" class="form-control form-control-sm mb-4" name =""></div>
                    <span class="input-group-btn" style="width:50px;"></span>
                    <label for="adress_building" class="form-control-label">Statut :</label>
                    <span class="input-group-btn" style="width:15px;"></span>
                    <div class="col-xs-3">
                        <select class="form-control form-control-sm mb-4" name="status_intervention"> 
                            <option value="Réalisée">Réalisée</option>
                            <option value="Prévue">Prévue</option>
                            <option value="En cours">En cours</option>            
                        </select>
                    </div>
                </div>
            </form>
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
                    <td>{{ $intervention->date_intervention }}</td>
                    <td>{{ $intervention->id }}</td>
                    <td>type de l'intervention</td>
                    <td>{{ $intervention->location_intervention }}</td>
                    <td>{{ $intervention->reason }}</td>
                    <td>{{ $intervention->status_intervention }}</td>
                    <td><a href="{{ URL::to('interventions/' . $intervention->id) }}">Voir plus de détails</a></td>   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
