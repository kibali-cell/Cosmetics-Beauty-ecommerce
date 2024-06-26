<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
</head>
<body>

@include('home.header')

<!--==Product-Details============================-->
<section id="product_details">
    <!--**img*************-->
    <div class="d-product-img">
        <img alt="" src="/product/{{$data->image}}"/>
    </div>
    <!--**text************-->
    <div class="d-product-text">
        <!--category-->
        <span class="category">{{$data->category}} > {{$data->title}}</span>
        <!--title-->
        <strong>{{$data->title}}</strong>
        <!--rating-->
        <span class="rating">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star-half-stroke"></i>
            <span>200 Review's</span>
        </span>
        <!--details-->
        <p>{{$data->description}}</p>
        
        <!--price-->
        <span class="price">{{number_format($data->price)}} <del>{{number_format($data->discount_price)}}</del></span>
        <!--quantity-->
        <form action="{{ url('add_cart', $data->id) }}" method="post">
            @csrf
            <div class="quantity">
                <span>Quantity: </span>
                <input type="number" name="quantity" value="1" min="1"/>
            </div>
            <!--btn-->
            <button type="submit" class="btn btn-md mt-3 btn-icon" style="background-color: #fed2d1; color:#383838; font-weight:500;">Add To Cart</button>
        </form>
    </div>
</section><!--details-end-->

@include('home.footer')

</body>
</html>
