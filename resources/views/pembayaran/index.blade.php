@extends('layouts.master')
@section('judul' , ' Form Pendataan Asrama')
@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-12">
          <h3>Pendataan Asrama</h3>
   @section('content')
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <a href="/pembayaran/form" class="btn btn-primary">Tambah Data</a>

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
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col"> ID Pembayaran</th>
                    <th scope="col"> ID Pendaftaran</th>
                    <th scope="col"> ID Pihak asrama</th>
                    <th scope="col"> Tanggal Masuk</th>
                    <th scope="col"> Biaya</th>
                    <th scope="col"> Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach ($pembayaran as $item)
                      <th scope="row">{{$nomor++}}</th>
                      <td>{{$item->id_pembayaran}}</td>
                      <td>{{$item->id_pendaftaran}}</td>
                      <td>{{$item->id_pihakasrama}}</td>
                      <td>{{$item->tgl_masuk}}</td>
                      <td>{{$item->biaya}}</td>
                      <td> 
                        <button type="button" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                      </td>
                  @endforeach
                  </tr>
                </tbody>
              </table>
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
  
