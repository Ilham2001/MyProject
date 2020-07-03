@extends('layouts.app')

@section('content')
  <br><h3>Détail demande</h3><br><br>
    <table class="table table-bordered">
          <thead>
              <tr>
                <td>N° demande</td>
                  <th>Date</th>
                  <th>Type de demande</th>
                  <th>Contenu</th>    
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>{{ $demande->id }}</td>
                  <td>{{ $demande->date_demand }}</td>
                  <td>{{ $demande->type_demand }}</td>
                  <td>{{ $demande->content_demand }}</td>
                     
              </tr>
          </tbody>
      </table>
@endsection