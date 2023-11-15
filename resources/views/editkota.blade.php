
@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kota</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Kota</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('kota.update',['id' => $data->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Form Edit Kota</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form>
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Type</label>
                            <input type="tipe" class="form-control" id="exampleInputEmail1" value="{{ $data->type }}" name="tipe" placeholder="Enter Tipe">
                            @error('tipe')
                                <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kota</label>
                            <input type="kota" class="form-control" id="exampleInputEmail1" value="{{ $data->city }}" name="kota" placeholder="Enter Kota">
                            @error('kota')
                                <small>{{ $message }}</small>
                            @enderror
                          </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                     <!-- /.card -->
        
                  </div>
                  <!--/.col (left) -->
                </div>
            </form>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
   
    <!-- /.content -->
  </div>
@endsection