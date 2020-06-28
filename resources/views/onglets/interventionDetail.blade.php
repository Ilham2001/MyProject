@extends('layouts.app')

@section('content')
<style>
    .table {
        padding : 20px;
        margin : 10px;
    }
</style>
    <h3>Détail intervention</h3>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <section id="tabs" class="project-tab">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-building-tab" data-toggle="tab" href="#nav-building" role="tab" aria-controls="nav-building" aria-selected="true">Référence immeuble</a>
                            <a class="nav-item nav-link" id="nav-demand-tab" data-toggle="tab" href="#nav-demand" role="tab" aria-controls="nav-demand" aria-selected="false">Votre demande</a>
                            <a class="nav-item nav-link" id="nav-report-tab" data-toggle="tab" href="#nav-report" role="tab" aria-controls="nav-report" aria-selected="false">Compte rendu</a>
                            <a class="nav-item nav-link" id="nav-quote-tab" data-toggle="tab" href="#nav-quote" role="tab" aria-controls="nav-quote" aria-selected="false">Devis</a>
                            <a class="nav-item nav-link" id="nav-document-tab" data-toggle="tab" href="#nav-document" role="tab" aria-controls="nav-document" aria-selected="false">Document</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-building" role="tabpanel" aria-labelledby="nav-building-tab">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Référence de l'immeuble</th>
                                            <td>{{ $building->buildingRef }}</td>
                                        </tr>
                                    <tr>
                                        <th>Adresse</th>
                                            <td>{{ $building->adress }}</td>
                                        </tr>
                                    <tr>
                                        <th>Code postal</th>
                                            <td>{{ $building->zipcode }}</td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <th>Ville</th>
                                            <td>{{ $building->city }}</td>
                                        </tr>
                                    <tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-demand" role="tabpanel" aria-labelledby="nav-demand-tab">
                        <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Contenu de la demande</th>
                                            <td>{{ $demand->content_demand }}</td>
                                        </tr>
                                    <tr>
                                        <th>Correspondant</th>
                                            <td>
                                                @foreach($intervention->staffs as $staff)
                                                    {{ $staff->corresponding }}
                                                @endforeach
                                            </td>
                                        </tr>
                                    <tr>
                                        <th>Date</th>
                                            <td>{{ $demand->date_demand }}</td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <th>Origine</th>
                                            <td>ORIGINE</td>
                                        </tr>
                                    <tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-report" role="tabpanel" aria-labelledby="nav-report-tab">
                        <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Statut de l'intervention</th>
                                            <td>{{ $intervention->status_intervention}}</td>
                                        </tr>
                                    <tr>
                                        <th>Intervenant</th>
                                            <td>
                                                @foreach($intervention->staffs as $staff)
                                                    {{ $staff->delostal_technician }}
                                                @endforeach
                                            </td>
                                        </tr>
                                    <tr>
                                        <th>Effectuée le</th>
                                            <td>{{ $intervention->date_intervention }}</td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <th>Heure début</th>
                                            <td>{{ $intervention->startTime }}</td>
                                        </tr>
                                    <tr>
                                    <tr>
                                        <th>Heure fin</th>
                                            <td>{{ $intervention->endTime }}</td>
                                    </tr>
                                    <tr>
                                        <th>Panne constatée</th>
                                            <td>{{ $intervention->breakdown }}</td>
                                    </tr>
                                    <tr>
                                        <th>Solution apportée</th>
                                            <td>{{ $intervention->solution }}</td>
                                    </tr>
                                    <tr>
                                        <th>Matériel remplacé</th>
                                            <td>{{ $intervention->replaced_hardware }}</td>
                                    </tr>
                                    <tr>
                                        <th>Commentaire</th>
                                            <td>{{ $intervention->commentary }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-quote" role="tabpanel" aria-labelledby="nav-quote-tab">
                            4
                        </div>
                        <div class="tab-pane fade" id="nav-document" role="tabpanel" aria-labelledby="nav-document-tab">
                            5
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
