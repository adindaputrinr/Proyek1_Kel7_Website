<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')

    <style type="text/css">

    .title
    {
      color:white; 
      padding-top: 25px; 
      font-size: 25px;
    }
    .label
    {
      display: inline-block;
      width: 200px;
    }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->

      <!-- partial -->
        @include('admin.sidebar')
      @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">
        <h1 class="title">Tambah Produk</h1>

        @if(session()->has('message'))
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
        </div>
        @endif
        <style>
          .inputan{
            background-color: transparent;
            color: white;
          }
        </style>
        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama" class="form-control inputan text-white" placeholder="Nama Produk">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Harga Produk</label>
                <input class="form-control inputan text-white" type="number"  name="harga" placeholder="Masukkan harga produk">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Quantity Produk</label>
                <input class="form-control inputan text-white" type="number"  name="quantity" placeholder="Masukkan jumlah stok produk">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Deskripsi Produk</label>
                <textarea name="des" id="" class="form-control inputan text-white" cols="30" rows="10"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="file" class="form-control-file" name="file">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
              <input class="btn btn-success" type="submit">
              </div>
            </div>
          </div>
        </div>
  </form>
</div>
          <!-- partial -->
      @include('admin.script')
  </body>
</html>