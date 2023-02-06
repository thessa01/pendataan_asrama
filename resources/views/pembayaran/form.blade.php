@extends('layouts.master')
@section('judul' , 'Form Pendataan Asrama')
@section('content-header')
@section('content')
<section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            <h3>Form Pendataan Asrama</h3>
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Title</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <form method="POST" action="/pembayaran">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ID Pendaftaran</label>
                      <input type="number" name="Id_pembayaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ID Pembayaran</label>
                      <input type="number" name="id_Pendaftaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ID Pihak Asrama</label>
                      <input type="number" name="Id_pihakAsrama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Tanggal Masuk</label>
                      <input type="date" name="Tanggal_masuk"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Biaya</label>
                      <input type="number" name="biaya"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
@endsection
