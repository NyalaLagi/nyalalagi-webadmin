
@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kerusakan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Kerusakan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('kerusakan.store') }}" method="POST">
                @csrf
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Form Tambah Kerusakan</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form>
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Kerusakan</label>
                            <input type="nama" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Enter Name">
                            @error('nama')
                                <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Sumber</label>
                            <input type="sumber" class="form-control" id="exampleInputEmail1" name="sumber" placeholder="Enter Sumber">
                            @error('sumber')
                                <small>{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Harga</label>
                            <input type="harga" class="form-control" id="exampleInputEmail1" name="harga" placeholder="Enter Harga">
                            @error('harga')
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