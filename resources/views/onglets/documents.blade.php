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
                    <span class="input-group-btn" style="width:50px;"></span>
                    <label for="adress_building" class="form-control-label">Nature :</label>
                    <span class="input-group-btn" style="width:15px;"></span>
                    <div class="col-xs-3">
                        <select class="form-control form-control-sm mb-4" name="status_document"> 
                            <option value="Fax">Fax</option>
                            <option value="Correspondance">Correspondance</option>
                            <option value="Contrat">Contrat</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Nature</th>
                    <th>Titre</th>
                    <th>Chantier</th>
                    <th>Type</th> 
                    <th>Action</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($documents as $document)
                <tr>
                    <td>{{ $document->creationDate }}</td>
                    <td>{{ $document->id_document }}</td>
                    <td>{{ $document->title_document }}</td>
                    <td>{{ $document->location_document }}</td>
                    <td>{{ $document->type_document }}</td>
                    <td><a href="">Télécharger</a></td>   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection