<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h3>Customer Name : {{$data->name}}</h3>
        <h3>Customer Address : {{$data->rec_address}}</h3>
        <h3>Phone Number : {{$data->phone}}</h3>
        <h2>Product Title: {{$data->product->title}}</h2>
        
        <h3>Price : {{$data->product->price}}</h3>
        <img style="height: 200px; width:200px" src="product/{{$data->product->image}}" alt="">
    </center>
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Glow & Glamour Invoice
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/invoice.css" />
  </head>
  <body>
    <section class="wrapper-invoice">
      <!-- switch mode rtl by adding class rtl on invoice class -->
      <div class="invoice">
        <div class="invoice-information">
          <p><b>Invoice #</b> : {{$data->id}}</p>
          <p><b>Created Date </b>: {{$data->created_at}}</p>
          <p><b>Due Date</b> : May, 09 2022</p>
        </div>
        <!-- logo brand invoice -->
        <div class="invoice-logo-brand">
          <!-- <h2>Tampsh.</h2> -->
          <img src="./assets/image/tampsh.png" alt="" />
        </div>
        <!-- invoice head -->
        <div class="invoice-head">
          <div class="head client-info">
            <p>Glow_n_Glamour, Inc.</p>
            {{-- <p>NPWP: 12.345.678.910.111213.1415</p>
            <p>Bondowoso, Jawa timur</p>
            <p>Jln. Rengganis 05, Bondowoso</p> --}}
          </div>
          <div class="head client-data">
            <p>-</p>
            <p>{{$data->name}}</p>
            <p>{{$data->rec_address}}</p>
            <p>{{$data->phone}}</p>
          </div>
        </div>
        <!-- invoice body-->
        <div class="invoice-body">
          <table class="table">
            <thead>
              <tr>
                <th>Item Description</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Template Invoice</td>
                <td>{{$data->price}}/=</td>
              </tr>
              <tr>
                <td>tax</td>
                <td>0/=</td>
              </tr>
            </tbody>
          </table>
          <div class="flex-table">
            <div class="flex-column"></div>
            <div class="flex-column">
              <table class="table-subtotal">
                <tbody>
                  <tr>
                    <td>Subtotal</td>
                    <td>{{$data->price}}/=</td>
                  </tr>
                  <tr>
                    <td>Tax 0%</td>
                    <td>0/=</td>
                  </tr> 
                  {{-- <tr>
                    <td>Credit</td>
                    <td>Rp.0</td>
                  </tr> --}} 
                </tbody>
              </table>
            </div>
          </div>
          <!-- invoice total  -->
          <div class="invoice-total-amount">
            <p>Total : {{$data->price}}/=</p>
          </div>
        </div>
        <!-- invoice footer -->
        <div class="invoice-footer">
          <p>Thank You, happy shopping again</p>
        </div>
      </div>
    </section>
    <div class="copyright">
      <p>Created by ❤ Jonas Kiwia</p>
    </div>
  </body>
</html> --}}
