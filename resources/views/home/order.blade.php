<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
</head>
<body>
@include('home.header')

<div class="container mt-5">
   

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">My Orders</h4>
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Product Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Delivery Status</th>
                        <th>Image</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($order as $order)
                <tr class="align-middle">
                    <td>{{$order->product->title}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->status}}</td>
                    {{-- <td>{{number_format($cart->product->price * $cart->quantity)}}</td> --}}
                     <td class="py-1">
                        <img style="height: 80px; width:80px" src="/product/{{$order->product->image}}" alt="">
                    </td>
                    {{--
                    <td>
                        <a class="btn btn-danger" href="{{url('delete_cart', $cart->id)}}">Remove</a>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
       
</div>

@include('home.footer')

</body>
</html>
