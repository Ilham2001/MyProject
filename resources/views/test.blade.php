@extends('layouts.app')

@section('content')
<style>
    .table {
        padding : 20px;
        margin : 10px;
    }
</style>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <section id="tabs" class="project-tab">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-building-tab" data-toggle="tab" href="#nav-building" role="tab" aria-controls="nav-building" aria-selected="true">dmd</a>
                            <a class="nav-item nav-link" id="nav-demand-tab" data-toggle="tab" href="#nav-demand" role="tab" aria-controls="nav-demand" aria-selected="false">inter</a>
                            <a class="nav-item nav-link" id="nav-report-tab" data-toggle="tab" href="#nav-report" role="tab" aria-controls="nav-report" aria-selected="false">quote</a>
                            <a class="nav-item nav-link" id="nav-quote-tab" data-toggle="tab" href="#nav-quote" role="tab" aria-controls="nav-quote" aria-selected="false">doc</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-building" role="tabpanel" aria-labelledby="nav-building-tab">
                            @include('onglets.demands')
                        </div>
                        <div class="tab-pane fade" id="nav-demand" role="tabpanel" aria-labelledby="nav-demand-tab">
                            2
                        </div>
                        <div class="tab-pane fade" id="nav-report" role="tabpanel" aria-labelledby="nav-report-tab">
                            3
                        </div>
                        <div class="tab-pane fade" id="nav-quote" role="tabpanel" aria-labelledby="nav-quote-tab">
                            4
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
