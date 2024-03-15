@extends('contract.frame')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0">Contract List</h4>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a class="btn btn-primary btn-block"  href="{{route('contract.create')}}">add
                            contract</a>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>N/A</th>
            <th>Contract Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Duration</th>
            <th>Remain Time</th>
            <th>Document</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
        @php($count=1)
        @foreach($contracts as $c)
            <tr>
                <td>{{$count++}}</td>
                <td>{{$c->name}}</td>
                <td>{{$c->startd}}</td>
                <td>{{$c->endd}}</td>
                <td>{{$c->duration}}</td>
                <td>{{$currentTime->diffAsCarbonInterval($c->endd)}}</td>
                <td>{{$c->document}}</td>
            <td><a href="#" class="btn btn-success "><i class="fa fa-edit"></i></a>
                <form method="post" action="{{route('contract.destroy',$c->id)}}">
                    @csrf
                    <button class="btn btn-danger" type="submit" value=""><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
