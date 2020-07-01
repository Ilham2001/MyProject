@extends('dashboard')

<style>
    .search-box {
        padding : 10px;
        margin-top : 10px;
        margin-bottom : 0px ;
    }
    }
    #search-submit {
        float : right;
    }
</style>
@section('menu-content')
<div class="container">
    <div class="row justify-content-md-center search-box">
        <form action="/searchQuote" method="GET" style="width : 70%;">
        {{csrf_field()}}
            <div class="row">
                <div class="col">
                    <label for="startDate" class="form-control-label">Du :</label>
                </div>
                <div class="col">
                    <div class=""><input type="date" class="form-control form-control-sm mb-4" name ="startDate"></div>
                </div>
                <div class="col">
                    <label for="endDate" class="form-control-label">Au :</label>
                </div>
                <div class="col">
                    <div class=""><input type="date" class="form-control form-control-sm mb-4" name="endDate"></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="id_quote" class="form-control-label">N° devis :</label>
                </div>
                <div class="col">
                    <div class="col-xs-3"><input type="text" class="form-control form-control-sm mb-4" name =""></div>
                </div>
                <div class="col">
                    <label for="status_quote" class="form-control-label">Statut :</label>
                </div>
                <div class="col">
                    <select class="form-control form-control-sm mb-4" name="status_quote"> 
                        <option value="Accepté">Accepté</option>
                        <option value="Facturé">Facturé</option>
                        <option value="Refusé">Refusé</option>
                        <option value="En cours d'acceptation">En cours d'acceptation</option>            
                    </select>
                </div>
            </div>
            <div class="row" id="search-submit">
                <input class="btn btn-primary" type="submit" value="Recherche">
            </div>
        </form>
    </div>
    <div class="row justify-content-md-center">
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
                    <td class="cell-center"><a href=""><i class="fas fa-download"></i></a></td>   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection