@extends('dashboard')
<style>
    .search-box {
        padding : 10px;
        margin-top : 10px;
        margin-bottom : 0px ;
    }
</style>
@section('menu-content')
    <div class="container">
        <div class="row justify-content-md-center search-box">
            <form action="/searchDoc" method="GET" style="width : 70%;">
            {{csrf_field()}}
                <div class="row">
                    <div class="col">
                        <label for="startDate" class="form-control-label">Du :</label>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control form-control-sm mb-4" name ="startDate">
                    </div>
                    <div class="col">
                        <label for="endDate" class="form-control-label">Au :</label>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control form-control-sm mb-4" name="endDate">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="documentNature" class="form-control-label">Nature :</label>
                    </div>
                    <div class="col">
                        <select class="form-control form-control-sm mb-4" name="documentNature"> 
                            <option value="Fax">Fax</option>
                            <option value="Correspondance">Correspondance</option>
                            <option value="Contrat">Contrat</option>
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
        <div class="row ">
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
                        <td>{{ $document->id }}</td>
                        <td>{{ $document->title_document }}</td>
                        <td>{{ $document->location_document }}</td>
                        <td>{{ $document->type_document }}</td>
                        <td class="cell-center">
                            <a href="{{ URL::to('documents/' . $document->id) }}">
                                <i class="fas fa-download"></i>
                            </a>
                        </td>   
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection