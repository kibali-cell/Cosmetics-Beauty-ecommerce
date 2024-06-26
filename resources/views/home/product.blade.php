 <!--==New-Products-->
 <section id="new_products">
    
    <!--**heading*********************-->
    <div class="new-p-heading">
        <!--heading-->
        <h3>New Product's</h3>
        <!--filter-->
        <ul>
            <li class="filter-list active" data-filter="all">All</li>
            
        @foreach ($product as $products)
            <li class="filter-list" data-filter="{{$products->category}}">{{$products->category}}</li>
            @endforeach
        </ul>
    </div>

    <!--**container******************-->
    <div class="new-product-container">

        @foreach ($product as $products)
            
        <!--**box**-->
        <div class="new-product-box-wrapper skin">
            <div class="new-product-box">
                <!--img-->
                <a href="{{url('product_details', $products->id)}}" class="new-product-img">
                    <img src="product/{{$products->image}}" />
                    <span>{{$products->category}}</span>
                </a>
                <!--text-->
                <div class="new-product-text">
                    <a href="{{url('product_details', $products->id)}}" class="new-product-title">{{$products->title}}</a>
                    <span>{{number_format($products->price) }}/=</span>
                    
                </div>
                <div class="row">
                    <div class="">
                        <form action="{{ url('add_cart', $products->id) }}" method="post">
                            @csrf
                            {{-- <div class="">
                                <input type="number" name="quantity" value="1" min="1" 
                                       style="width: 40px; height: 30px; background-color: #f3f3f3; text-align: center; border: 1px solid #ebebeb; border-radius: 3px;" />
                            </div>
                            <div class="col-md-2 px-50" style="display: inline-block;">
                                <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                                    <i class="fa-solid fa-cart-shopping" style="color: #8b3d74"></i>
                                </button>
                            </div> --}}
                            <div class="row" style="display: flex; justify-content:space-between; align-items:center">
                                <div class="col-md-6 ml-3">
                                  <div class="form-group row">
                                    <div class="col-sm-9">
                                        <input type="number" name="quantity" value="1" min="1" 
                                        style="width: 40px; height: 30px; background-color: #f3f3f3; text-align: center; border: 1px solid #ebebeb; border-radius: 3px;" />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group row">
                                    <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                                        <i class="fa-solid fa-cart-shopping" style="color: #8b3d74"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                        </form>
                    </div>
                </div>
                
            </div>
            </div><!--end-box-->
        @endforeach
                

</section>
 
 
 <!--==popular-products=============================-->
 <section id="popular-product">
            
    <!--**heading*******************-->
    <div class="popular-heading">
        <h3>Popular Product</h3>
        <a>All</a>
    </div>

    <!--**container****************-->
    <div class="popular-container">

       

        <!--**box**********-->
        <div class="popular-box">
            <!--img-->
            <a href="#" class="popular-box-img">
                <img alt="" src="images/n7.png">
            </a>
            <!--text-->
            <div class="popular-box-text">
                <a href="#">Women Red LipStick For Sell, Buy Now</a>
                <span class="p-category">Hair Product's</span>
                <span class="p-price">10$ <del>15$</del></span>
            </div>
        </div>

        <!--**box**********-->
        <div class="popular-box">
            <!--img-->
            <a href="#" class="popular-box-img">
                <img alt="" src="images/n8.png">
            </a>
            <!--text-->
            <div class="popular-box-text">
                <a href="#">FaceWash For Heathly Skin For Women</a>
                <span class="p-category">Hair Product's</span>
                <span class="p-price">10$ <del>15$</del></span>
            </div>
        </div>

        <!--**box**********-->
        <div class="popular-box">
            <!--img-->
            <a href="#" class="popular-box-img">
                <img alt="" src="images/n9.png">
            </a>
            <!--text-->
            <div class="popular-box-text">
                <a href="#">Hair Shampo For Heathly Hair For Women</a>
                <span class="p-category">Hair Product's</span>
                <span class="p-price">10$ <del>15$</del></span>
            </div>
        </div>

        <!--**box**********-->
        <div class="popular-box">
            <!--img-->
            <a href="#" class="popular-box-img">
                <img alt="" src="images/n8.png">
            </a>
            <!--text-->
            <div class="popular-box-text">
                <a href="#">FaceWash For Heathly Skin For Women</a>
                <span class="p-category">Hair Product's</span>
                <span class="p-price">10$ <del>15$</del></span>
            </div>
        </div>

        <!--**box**********-->
        <div class="popular-box">
            <!--img-->
            <a href="#" class="popular-box-img">
                <img alt="" src="images/n1.png">
            </a>
            <!--text-->
            <div class="popular-box-text">
                <a href="#">Hair Shampo For Heathly Hair For Women</a>
                <span class="p-category">Hair Product's</span>
                <span class="p-price">10$ <del>15$</del></span>
            </div>
        </div>

        <!--**box**********-->
        <div class="popular-box">
            <!--img-->
            <a href="#" class="popular-box-img">
                <img alt="" src="images/n3.png">
            </a>
            <!--text-->
            <div class="popular-box-text">
                <a href="#">Mix Color Nail Polish Avalibale For Sell, Buy Now</a>
                <span class="p-category">Hair Product's</span>
                <span class="p-price">10$ <del>15$</del></span>
            </div>
        </div>

    </div>

</section><!--popular-end-->


<!--==Partnre-logo================================-->
<!-- <section id="partner"> -->

    <!--**heading****************-->
    <!-- <div class="partner-heading">
        <h3>Our Trusted Partner</h3>
    </div> -->

    <!--**logo-container*******-->
    <!-- <div class="logo-container">
        <img alt="logo" src="images/logo-1.png">
        <img alt="logo" src="images/logo-2.png">
        <img alt="logo" src="images/logo-3.png">
        <img alt="logo" src="images/logo-4.png">
    </div> -->

<!-- </section> -->
<!--**logo-section-end**-->

<!--==product-grid-2=======================-->
<section class="product-grid-2">

    <!--**box*************-->
    <div class="product-grid-box product-grid-box3">
        <!--img-->
        <img src="images/g1.jpg" />
        <!--text-->
        <div class="product-grid-text">
            <strong>Mackup Collection</strong>
            <span>Skin Care Product</span>
            <a href="">Shop Now</a>
        </div>
    </div>

    <!--**box*************-->
    <div class="product-grid-box product-grid-box2">
        <!--img-->
        <img src="images/g2.jpg" />
        <!--text-->
        <div class="product-grid-text">
            <strong>Discounted Product's</strong>
            <span>Skin Care Product</span>
            <a href="">Shop Now</a>
        </div>
    </div>

</section>