

<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
              <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding: 10px;">

              @csrf
                <input class="form-control" type="search" name="search" placeholder="Cari Produk">
                <input type="submit" value="Cari" class="btn btn-success">
              </form>
            </div>
          </div>
        <div class="container">
          <div class="row">
          @foreach($data as $product)

<div class="col-md-4">
  <div class="product-item">
    <a href="#"><img height="300" width="150" src="/productimage/{{$product->image}}" alt=""></a>
    <div class="down-content">
      <a href="#"><h4>{{$product->title}}</h4></a>
      <h6>Rp. {{number_format($product->price)}},-</h6>
      <p>{{$product->description}}</p>

      <form action="{{url('addcart',$product->id)}}" method="POST">

      @csrf
      <div class="row">
        <div class="col-md-12 mt-3">
        <label>QTY</label>

    <select class="form-control" id="exampleFormControlSelect1"  name="quantity">
      <option disabled selected value>Banyaknya Produk</option>
    @for($i = 1; $i <= 10; $i++) 
    <option>{{$i}}</option>
    @endfor
     
    </select>
        </div>
        <div class="col-md-12 mt-3">
        <input type="submit" class="btn btn-outline-primary btn-block"  value="Tambah ke Keranjang">
        </div>
      </div>
    
       
      </form>

    </div>
  </div>
</div>

@endforeach

@if(method_exists($data,'links'))

<div class="d-flex justify-content-center">

{!! $data->links() !!}

</div>

@endif
          </div>
        </div>
        

        </div>
      </div>
    </div>
