@extends('contract.frame')
@section('content')
    <div class="card card-breadcrumb ">
        <div class="card-header">
            <h3 class="card-title">Add Contract</h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <div>
                @foreach ($errors->all() as $error)
                    <span class="fs-10 text-danger">{{ $error }}</span><br/>
                @endforeach
            </div>
            <form action="{{route('contract.save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Contract Name</label>
                            <input type="text" class="form-control" placeholder="Enter ..." name="name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Starting Start</label>
                            <input type="date" class="form-control" placeholder="Enter ..." name="startd">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Ending Date</label>
                            <input type="date" class="form-control" placeholder="Enter ..." name="endd">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Document</label>
                            <input type="file" class="form-control" placeholder="Enter ..." name="document">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-5 pb-3">
                    <button class="btn btn-success btn-load btn-lg save-btn" type="submit">
                                <span class="d-flex align-items-center">
                                    <span class="spinner-border flex-shrink-0 me-2 save-spinner" role="status"
                                          style="display: none"></span>
                                    <span class="flex-grow-1">{{ !isset($location->id) ? 'Save' : 'Update' }}</span>
                                </span>
                    </button>
                </div>
            </form>
            </form>
        </div>
@endsection

