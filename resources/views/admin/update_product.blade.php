<!DOCTYPE html>
<html lang="en">
    <head>
  @include('admin.css')
  <style type="text/css">
    
    .div_center{
        text-align: center;
        padding-top: 40px;
        
    }

    .font_size{
        font-size: 40px;
        padding-bottom: 40px;
    }

    .text_color{
        color: black;
    }

    .center{
      margin: auto;
      width: 50%;
      text-align: center;
      margin-top: 30px;
      border: 3px solid white;
    }

    label{
        display: inline-block;
        width: 200px;
    }

    .div_design{
        padding-bottom: 15px;
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

                <div class="div_center">
                    
                    <h1 class="font_size">Update Product</h1>

                    <form action="{{url('/update_product_confirm', $product->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
<div class="div_design">
     <label for="">Product Title: </label>
                        <input class="text_color" type="text" name="title" placeholder="Write Product Name" required="" value="{{$product->title}}">
</div>

<div class="div_design">
    <label for="">Product Description: </label>
                       <input class="text_color" type="text" name="description" placeholder="Write Product Description" required="" value="{{$product->description}}" >
</div>

<div class="div_design">
    <label for="">Product Price: </label>
                       <input class="text_color" type="number" name="price" placeholder="Write Product Price" required="" value="{{$product->price}}">
</div>

<div class="div_design">
    <label for="">Product Discount Price: </label>
                       <input class="text_color" type="number" name="dis_price"  value="{{$product->discount_price}}">
</div>

<div class="div_design">
    <label for="">Product Quantity: </label>
                       <input class="text_color" type="number" min="0" name="quantity" placeholder="Write Product Quantity" required="" value="{{$product->quantity}}">
</div>


<div class="div_design">
    <label for="">Product Category: </label>
    <select class="text_color" name="category" id="" required="">
        <option value="{{$product->category}}" selected="">{{$product->category}}</option>
        @foreach($category as $category)
        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
        @endforeach
    </select>
</div>

<div class="div_design">
  <label for="">Current Product Image: </label>
      <img style="margin:auto;" height="100" width="100" src="/product/{{$product->image}}" alt="">
</div>

<div class="div_design">
    <label for="">Change Product Image: </label>
                       <input  type="file" name="image"  >
</div>

<div class="div_design">
                       <input value="Update Product" class="btn btn-primary"  type="submit">
</div>

                       
                    </form>
                
                </div>                

             </div>
        </div>
        
             
            </div>
          <!-- partial -->
        
      
   @include('admin.script')
  </body>
</html>