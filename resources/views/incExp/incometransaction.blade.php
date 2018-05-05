@extends('layouts.master')
@extends('box.incExp.incometransaction')
@section('title')
    Income Transaction
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <p><button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#myModal"><b><i class="icon-file-plus"></i></b> Add New Income Transaction</button></p>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Income Transaction</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Project Name</th>
                            <th>Income Category</th>
                            <th>Amount</th>
                            <th>Comment</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td>{{$row->incexpTransacID}}</td>
                                <td>{{$row->project['name']}}</td>
                                <td>{{$row->inc_exp['name']}}</td>
                                <td>{{$row->amountIN}}</td>
                                <td>{{$row->description}}</td>
                                <td class="text-right">
                                    <button class="btn btn-xs btn-success no-padding mr-5 ediBtn" data-pname="{{$row->projectsID}}" data-inexp="{{$row->incexpID}}" data-id="{{$row->incexpTransacID}}" data-amount="{{$row->amountIN}}" data-description="{{$row->description}}"  data-toggle="modal" data-target="#ediModal" title="Edit"><i class="icon-pencil5"></i></button>
                                    <a class="btn btn-xs btn-danger no-padding" href="{{action('IncomeTransactionController@del', ['id' => $row->incexpTransacID])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"><i class="icon-bin"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')

    <script src="{{asset('public/js/jquery.geocomplete.min.js')}}" type="text/javascript"></script>

    <script type="text/javascript">

        $(function () {

            $('.datatable').DataTable({
                order: [[ 0, "desc" ]],
                columnDefs: [
                    { orderable: false, "targets": [2] }//For Column Order
                ]
            });
        });

        $(function () {
            $('.ediBtn').click(function () {
                var id = $(this).data('id');
                var projects = $(this).data('pname');
                var inexp = $(this).data('inexp');
                var amount = $(this).data('amount');
                var description = $(this).data('description');


                $('#ediID').val(id);
                $('#ediModal [name=projectsID]').val(projects);
                $('#ediModal [name=incexpID]').val(inexp);
                $('#ediModal [name=amountIN]').val(amount);
                $('#ediModal [name=description]').val(description);

            });
        });



    </script>

@endsection