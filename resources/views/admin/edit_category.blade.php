<!DOCTYPE html>
<html lang="en">
    <head>
  @include('admin.css')
  <style type="text/css">
    
    .div_center{
        text-align: center;
        padding-top: 40px;
        
    }

    .h2_font{
        font-size: 40px;
        padding-top: 40px;
    }

    .input_color{
        color: black;
    }

    .center{
      margin: auto;
      width: 50%;
      text-align: center;
      margin-top: 30px;
      border: 3px solid white;
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

                <div class="div_center">
                    <h2 class="h2_font">Update Category</h2>

                    <form action="{{url('/update_category', $data->id)}}" method="POST">
                        @csrf
                        <input class="input_color" type="text" name="category" placeholder="Write Category Name" value="{{$data->category_name}}">
                        <input type="submit" class="btn btn-primary" name="submit" value="Update Category">
                    </form>
                </div>

              
            </div>
        </div>
    </div>
          <!-- partial -->
        
      
   @include('admin.script')
  </body>
</html>