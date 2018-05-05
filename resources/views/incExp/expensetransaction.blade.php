@extends('layouts.master')
@extends('box.incExp.expensetransaction')
@section('title')
    Expense Transaction
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <p><button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#myModal"><b><i class="icon-file-plus"></i></b> Add New Expense Transaction</button></p>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Expense Transaction</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Project Name</th>
                            <th>Expense Category</th>
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
                                <td>{{$row->amountOut}}</td>
                                <td>{{$row->description}}</td>
                                <td class="text-right">
                                    <button class="btn btn-xs btn-success no-padding mr-5 ediBtn" data-pname="{{$row->productsID}}" data-inexp="{{$row->incexpID}}" data-id="{{$row->incexpTransacID}}" data-amount="{{$row->amountOut}}" data-description="{{$row->description}}"  data-toggle="modal" data-target="#ediModal" title="Edit"><i class="icon-pencil5"></i></button>
                                    <a class="btn btn-xs btn-danger no-padding" href="{{action('ExpenseTransactionController@del', ['id' => $row->incexpTransacID])}}"  onclick="return confirm('Are you sure to delete?')" title="Delete"><i class="icon-bin"></i></a>
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
                var products = $(this).data('pname');
                var inexp = $(this).data('inexp');
                var amount = $(this).data('amount');
                var description = $(this).data('description');


                $('#ediID').val(id);
                $('#ediModal [name=productsID]').val(products);
                $('#ediModal [name=inexp]').val(inexp);
                $('#ediModal [name=amount]').val(amount);
                $('#ediModal [name=description]').val(description);

            });
        });



    </script>

@endsection