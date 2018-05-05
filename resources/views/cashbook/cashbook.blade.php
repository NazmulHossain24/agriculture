@extends('layouts.master')
@extends('box.cashbook.cashbook')
@section('title')
    Cash Book
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <p><button type="button" class="btn btn-primary btn-labeled" data-toggle="modal" data-target="#depositModal"><b><i class="icon-file-plus"></i></b> Cash In Amount</button></p>
                </div>
                <div class="col-md-6">
                    <p style="margin-left: -112px;"><button type="button" class="btn btn-warning btn-labeled" data-toggle="modal" data-target="#withdrawModal"><b><i class="icon-file-minus"></i></b> Cash Out Amount</button></p>
                </div>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-flat border-top-success">
                <div class="panel-heading">
                    <h6 class="panel-title">Cash Book</h6>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-striped datatable">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Cr.</th>
                            <th>Dr.</th>
                            <th>Balance</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $i=0;
                        @endphp
                        @foreach($table as $row)
                            <tr>
                                <td>{{date('d/m/Y', strtotime($row->date))}}</td>
                                <td>TK. {{$row->cr}}</td>
                                <td>TK. {{$row->dr}}</td>
                                @php
                                    $tbalance = $row->cr - $row->dr;
                                @endphp
                                    <td>TK. {{$tbalance}}</td>
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