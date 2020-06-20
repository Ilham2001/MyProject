@extends('layouts.app')
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
@section('content')
    <div class="table-responsive">
        <div class="form-group">
            <input type="text" class="form-controller" id="search" name="search"></input>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Building Name</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection

<script type="text/javascript">
    $('#search').on('keyup',function() {
        $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{URL::to('testSearch')}}',
            data : {'search': $value},
            success : function(data) {
                $.('tobdy').html(data);
            }
        });
    })
</script>