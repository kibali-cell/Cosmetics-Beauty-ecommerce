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

              <h1 class="font_size">Add Product</h1>

              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-description"> Add Product to be Sold </p>
                    <form class="forms-sample" action="{{url('/add_product')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Product Title</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Product Title" name="title" required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Product Description</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Description" name="description" required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Price</label>
                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Price" name="price" required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Discount Price</label>
                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Discount Price" name="dis_price">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Product Quantity</label>
                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Quantity" name="quantity" min="0">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Product Category: </label>
                        <select class="form-control" id="exampleSelectGender" name="category">
                          <option value="" selected="">Add a Category Here</option>
                            @foreach($category as $category)
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label for="">Product Image: </label>
                                           <input  type="file" name="image"  required="">
                    </div>
                      
                      <button type="submit" class="btn btn-primary mr-2">Add Product</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

                {{-- <div class="div_center">
                    
                    <h1 class="font_size">Add Product</h1>

                    <form action="{{url('/add_product')}}" method="post" enctype="multipart/form-data">
                        @csrf
<div class="div_design">
     <label for="">Product Title: </label>
                        <input class="text_color" type="text" name="title" placeholder="Write Product Name" required="">
</div>

<div class="div_design">
    <label for="">Product Description: </label>
                       <input class="text_color" type="text" name="description" placeholder="Write Product Description" required="">
</div>

<div class="div_design">
    <label for="">Product Price: </label>
                       <input class="text_color" type="number" name="price" placeholder="Write Product Price" required="">
</div>

<div class="div_design">
    <label for="">Product Discount Price: </label>
                       <input class="text_color" type="number" name="dis_price">
</div>

<div class="div_design">
    <label for="">Product Quantity: </label>
                       <input class="text_color" type="number" min="0" name="quantity" placeholder="Write Product Quantity" required="">
</div>


<div class="div_design">
    <label for="">Product Category: </label>
    <select class="text_color" name="category" id="" required="">
        <option value="" selected="">Add a Category Here</option>
        @foreach($category as $category)
        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
        @endforeach
    </select>
</div>

<div class="div_design">
    <label for="">Product Image: </label>
                       <input  type="file" name="image"  required="">
</div>

<div class="div_design">
                       <input value="Add Product" class="btn btn-primary"  type="submit">
</div>

                       
                    </form>
                
                </div>                 --}}

             </div>
        </div>
        
             
            </div>
          <!-- partial -->
        
      
   @include('admin.script')
  </body>
</html>