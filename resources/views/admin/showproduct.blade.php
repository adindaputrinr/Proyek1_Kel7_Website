<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.css')

</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
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

        <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">

            <div class="container" align="center">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <div class="container">
                    <div class="row table-responsive">
                        <table id="table_produk" >
                            <thead>
                                <tr>
                                    <td>Nama Produk</td>
                                    <td>Deskripsi</td>
                                    <td>Quantity</td>
                                    <td>Harga</td>
                                    <td>Image</td>
                                    <td>Update</td>
                                    <td>Delete</td>
                                </tr>

                            </thead>
                            <tbody>
                            @foreach($data as $product)
                            <tr align="center" style="background-color: black;">
                                <td>{{$product->title}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->price}}</td>
                                <td><img height="100" width="100" src="/productimage/{{$product->image}}">
                                </td>

                                <td>
                                    <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Update</a>
                                </td>

                                <td>
                                    <a class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial -->
        @include('admin.script')
</body>

</html>
