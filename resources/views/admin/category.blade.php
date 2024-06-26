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
        padding-bottom: 40px;
    }

    .input_color{
        color: black;
    }

    td {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }
    .center{
      margin: auto;
      width: 50%;
      text-align: center;
      margin-top: 30px;
      border: 3px solid white;
    }

    .th_color{
        background:skyblue;
    }

    .th_deg{
        padding: 10px 20px 10px 20px;
    }

    .btn_container {
    display: flex;
    gap: 10px; 
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
                    <h2 class="h2_font">Add Category</h2>

                    <form action="{{url('/add_category')}}" method="POST">
                        @csrf
                        <input class="input_color" type="text" name="category" placeholder="Write Category Name">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                    </form>
                </div>
<div class="table-responsive w-60 text-center">


                <table class="table">
                  <thead>
                    <tr class="">
                      <th class="">Category Name</th>
                      <th class="">Action</th>
                    </tr>
                  </thead>
                 
              <tbody>

            
                  @foreach ($data as $data)
                  <tr>
                    <td>{{$data->category_name}}</td>
                    <td>
                      <div class="">
                        <a class="btn btn-success" href="{{url('edit_category', $data->id)}}">Edit</a>
                        <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category', $data->id)}}">Delete</a>
                      </div>
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