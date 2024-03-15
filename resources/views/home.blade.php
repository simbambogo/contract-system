@extends('contract.frame')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">CONTRACT LIST</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <a class="btn btn-primary btn-block" data-toggle="modal" data-target="#largemodal">add contract</a>
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
    @php($na=1)
    <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>N/A</th>
                    <th>T1</th>
                    <th>T2</th>
                    <th>T3</th>
                    <th>T4</th>
                    <th>T5</th> 
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>{{$na++}}</td>
                      <td>a</td>
                      <td>b</td>
                      <td>c</td>
                      <td>d</td>
                      <td><a href="#" class="btn btn-success "><i class="fa fa-edit"></i></a>
                      <form method="post" action="#">
                        <button class="btn btn-danger" type="submit" value=""><i class="fa fa-trash"></i></button>
                      </form>
                      </td>
                      
                  </tr>
                  </tbody>
                </table>
@endsection
