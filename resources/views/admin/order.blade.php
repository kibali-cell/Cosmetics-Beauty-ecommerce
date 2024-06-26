<!DOCTYPE html>
<html lang="en">
    <head>
  @include('admin.css')
    </head>
  <body>
    <div class="container-scroller">
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Orders</h4>
                        <p class="card-description"> List of Orders
                        </p>
                        <div class="table-responsive">
                          <table class="table table-striped ">
                            <thead>
                              <tr>
                                <th> Customer Name </th>
                                <th> Address </th>
                                <th> Phone </th>
                                <th> Product Title </th>
                                <th> Quantity </th> 
                                <th> Price </th> 
                                <th> Image </th>
                                <th>Status</th>
                                <th>Change Status</th>
                                <th>Print PDF</th>
                              </tr>
                            </thead>

                            @foreach ($data as $data)
                                
                            <tbody>
                              <tr>
                                {{-- <td class="py-1">
                                  <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                                </td> --}}
                                <td> {{$data->name}} </td>
                                <td> {{$data->rec_address}} </td>
                                <td> {{$data->phone}} </td>
                                <td> {{$data->product->title}} </td>
                                <td> {{$data->quantity}} </td>
                                <td> {{$data->price}} </td>
                                <td> 
                                    <img style="height: 150px; width:150px" src="product/{{$data->product->image}}" alt="">    
                                </td>
                                <td> 
                                    @if ($data->status == 'in progress')
                                        <span style="color: red">{{$data->status}}</span>
                                        @elseif($data->status == 'On the Way')
                                        <span style="color: skyblue">{{$data->status}}</span>
                                        @else
                                        <span style="color: yellow">{{$data->status}}</span>

                                    @endif    
                                </td>
                                <td>
                                    <a class="btn btn-outline-danger" href="{{url('on_the_way', $data->id)}}">On the Way</a>     
                                    <a class="btn btn-outline-success" href="{{url('delivered', $data->id)}}">Delivered</a>    
                                </td>
                                <td >
                                  <a class="btn btn-secondary" href="{{url('print_pdf', $data->id)}}">Print PDF</a> 
                                </td>
                              </tr>
                            </tbody>
                            @endforeach
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>


            </div>
        </div>
              
            </div>
          <!-- partial -->
        
      
   @include('admin.script')
  </body>
</html>