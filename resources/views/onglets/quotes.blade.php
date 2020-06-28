@extends('dashboard')

@section('menu-content')
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
                    <label for="" class="form-control-label">N° devis :</label>
                    <span class="input-group-btn" style="width:15px;"></span>
                    <div class="col-xs-3"><input type="text" class="form-control form-control-sm mb-4" name =""></div>
                    <span class="input-group-btn" style="width:50px;"></span>
                    <label for="adress_building" class="form-control-label">Statut :</label>
                    <span class="input-group-btn" style="width:15px;"></span>
                    <div class="col-xs-3">
                        <select class="form-control form-control-sm mb-4" name="status_quote"> 
                            <option value="Accepté">Accepté</option>
                            <option value="Facturé">Facturé</option>
                            <option value="Refusé">Refusé</option>
                            <option value="En cours d'acceptation">En cours d'acceptation</option>            
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>N° devis</th>
                    <th>Titre</th>
                    <th>Chantier</th>
                    <th>Montant HT</th>
                    <th>Montant TTC</th>  
                    <th>Statut</th> 
                    <th>Action</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($quotes as $quote)
                <tr>
                    <td>{{ $quote->date_quote }}</td>
                    <td>{{ $quote->id }}</td>
                    <td>{{ $quote->title_quote }}</td>
                    <td>{{ $quote->location_quote }}</td>
                    <td>{{ $quote->amountHT }}</td>
                    <td>{{ $quote->amountTTC }}</td>
                    <td>{{ $quote->status_quote }}</td>
                    <td><a href="">Voir plus de détails</a></td>   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection