<!DOCTYPE html>
<html lang="en">
    <head>
  @include('admin.css')

  <style type="text/css">

    .center{
        margin: auto;
        width: 50%;
        border: 2px solid white;
        text-align: center;
        margin-top: 20px;
    }

    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
    }

    .font_size{
        text-align: center;
        font-size: 40px;
        padding-top: 20px;
    }

    .img_size{
        width: 150px;
        height: 150px;
    }

    .th_color{
        background:skyblue;
    }

    .th_deg{
        padding: 10px 20px 10px 20px;
    }
</style>
    </head>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if (session()->has('message'))
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

                    {{session()->get('message')}}
                  </div>
              @endif

                <h2 class="font_size">All Products</h2>
<div class="table-responsive">


                <table class="table table-striped" style="overflow-y: hidden">
                    <thead>
                        <tr class="">
                        <th class="">Product Title</th>
                        <th class="">Description</th>
                        <th class="">Quantity</th>
                        <th class="">Category</th>
                        <th class="">Price</th>
                        <th class="">Discount Price</th>
                        <th class="">Product Image</th>
                        <th class="">Edit</th>
                        <th class="">Delete</th>
                    </tr>
                    </thead>
                    
<tbody>
    
@foreach ($product as $products)
    
                    <tr>
                        <td>{{$products->title}}</td>
                        <td>{!!Str::limit($products->description, 50)!!}</td>
                        <td>{{$products->quantity}}</td>
                        <td>{{$products->category}}</td>
                        <td>{{$products->price}}</td>
                        <td>{{$products->discount_price}}</td>
                        <td class="py-1">

                            <img class="img_size" style="height: 150px; width:150px" src="/product/{{$products->image}}" alt="">

                        </td>
                        <td>
                            <a class="btn btn-success" href="{{url('update_product', $products->id)}}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are you Sure to Delete this?')" href="{{url('delete_product', $products->id)}}">Delete</a>
                        </td>

                    </tr>

                    @endforeach
                    
</tbody>
                </table>
            </div>
                <div class="div_deg">
                    {{$product->onEachSide(1)->links()}}
        
                    </div>

            </div>
            
            </div>
            
        </div>
              
            </div>
          <!-- partial -->
        
      
   @include('admin.script')
  </body>
</html>