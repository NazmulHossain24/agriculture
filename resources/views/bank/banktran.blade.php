@extends('layouts.master')
@extends('box.bank.banktran')
@section('title')
    Bank Transaction
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <p><button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#depositModal"><b><i class="icon-file-plus"></i></b> Deposit Amount</button></p>
                </div>
                <div class="col-md-6">
                    <p style="margin-left: -112px;"><button type="button" class="btn btn-warning btn-labeled" data-toggle="modal" data-target="#withdrawModal"><b><i class="icon-file-minus"></i></b> Withdraw Amount</button></p>
                </div>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">All Bank Transaction</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Date</th>
                            <th>Bank</th>
                            <th>Bank A/C</th>
                            <th>Deposit Amount</th>
                            <th>Withdraw Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($table as $row)
                            <tr>
                                <td>{{$row->bankBookID}}</td>
                                <td>{{$row->created_at->formatLocalized('%d %B %Y')}}</td>
                                <td>{{$row->bank['name']}}</td>
                                <td>{{$row->bank['accountNumber']}}</td>
                                <td>TK. {{$row->amountIN}}</td>
                                <td>TK. {{$row->amountOut}}</td>
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

    </script>

@endsection