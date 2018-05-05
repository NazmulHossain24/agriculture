@section('box')
    <!-- Basic modal -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-file-plus"></i> Add New Income Transaction</h5>
                </div>

                <form action="{{action('IncomeTransactionController@save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Project Name </span>
                                    <select class="form-control m-input" name="projectsID" >
                                        @foreach($projects as $row)
                                            <option value="{{$row->projectsID}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Income Category</span>
                                    <select class="form-control m-input" name="incexpID" >
                                        @foreach($inexp as $row)
                                            <option value="{{$row->incexpID}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Amount:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="amountIN" placeholder="Amount" type="number" required>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="description" placeholder="Description Here..." ></textarea>
                            </div>
                        </div><br>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i> Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /basic modal -->

    <!-- Basic Edi modal -->
    <div id="ediModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-pencil7"></i> Edit Income Transaction</h5>
                </div>

                <form action="{{action('IncomeTransactionController@edit')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" id="ediID" name="id">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Project Name </span>
                                    <select class="form-control m-input" name="projectsID" >
                                        @foreach($projects as $row)
                                            <option value="{{$row->projectsID}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">Income Category</span>
                                    <select class="form-control m-input" name="incexpID" >
                                        @foreach($inexp as $row)
                                            <option value="{{$row->incexpID}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Amount:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="amountIN" placeholder="Amount" type="number" required>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="description" placeholder="Description Here..." ></textarea>
                            </div>
                        </div><br>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i> Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /basic Edi modal -->
@endsection