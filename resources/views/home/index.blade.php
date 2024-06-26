  <!--DOCTYPE html-->
  <html lang="en">
    <head>
        
        @include('home.css')

    </head>
    <body>
    
@include('home.header')



        @include('home.slider')
    

         <!--==product-grid-3=======================-->
    <section class="product-grid-3">

        <!--**box*************-->
        <div class="product-grid-box product-grid-box1">
            <!--img-->
            <img src="images/s1.jpg" />
            <!--text-->
            <div class="product-grid-text">
                <strong>Natural Green Lotion</strong>
                <span>Skin Care Product</span>
                <a href="">Shop Now</a>
            </div>
        </div>

        <!--**box*************-->
        <div class="product-grid-box product-grid-box2">
            <!--img-->
            <img src="images/s2.jpg" />
            <!--text-->
            <div class="product-grid-text">
                <strong>3 in 1 Novage Lotion's</strong>
                <span>Skin Care Product</span>
                <a href="">Shop Now</a>
            </div>
        </div>

        <!--**box*************-->
        <div class="product-grid-box product-grid-box3">
            <!--img-->
            <img src="images/s3.jpg" />
            <!--text-->
            <div class="product-grid-text">
                <strong>Gold FaceWash & Perfume</strong>
                <span>Skin Care Product</span>
                <a href="">Shop Now</a>
            </div>
        </div>

    </section>
    
        <!--==New-Products-->
       @include('home.product')
    
    
       @include('home.footer')
  

    </body>
    </html>
    
       
    