@extends('products.frame')
@section('content')
    <!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">INSERT PRODUCT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form method="post" action="">
        @csrf
        @method('post')
        <div class="card-body">
          <div class="form-group">
              <label for="name">name</label>
              <input type="text" class="form-control" name= "name" placeholder="product name">
          </div>
          <div class="form-group">
              <label for="quantity">quantity</label>
              <input type="number" class="form-control" name= "qty" placeholder="quantity">
          </div>
          <div class="form-group">
              <label for="price">price</label>
              <input type="number" class="form-control" name= "price" placeholder="price">
          </div>
          <div class="form-group">
              <label for="description">description</label>
              <input type="text" class="form-control" name= "description" placeholder="description">
          </div>
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-primary" name= "save" value="save product">
        </div>
    </form>
@endsection
