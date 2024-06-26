<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
</head>
<body>
@include('home.header')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Product Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <?php $value = 0; ?>
                <tbody>
                    @foreach ($cart as $cart)
                    <tr class="align-middle">
                        <td>{{$cart->product->title}}</td>
                        <td>{{$cart->quantity}}</td>
                        <td>{{number_format($cart->price )}}</td>
                        <td class="py-1">
                            <img style="height: 80px; width:80px" src="/product/{{$cart->image}}" alt="">
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('delete_cart', $cart->id)}}">Remove</a>
                        </td>
                    </tr>
                    <?php $value = $value + $cart->price  ?>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample" action="{{url('confirm_order')}}" method="POST">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="exampleInputUsername1">Receiver Name: </label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="name" value="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Receiver Address: </label>
                            <input type="text" class="form-control" name="address" id="" value="{{Auth::user()->address}}">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputUsername1">Receiver Phone: </label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="phone" value="{{Auth::user()->phone}}">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2 mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5 mb-5">
        <h3 class="">Total Price: <strong>{{number_format($value)}}</strong>/=</h3>
    </div>
</div>

@include('home.footer')

</body>
</html>
