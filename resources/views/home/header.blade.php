        <!--==navigation=======================-->
        <nav class="navigation">
    
            <!--**logo*****************-->
            <a href="{{url('/')}}" class="logo">
                <img alt=""  src="{{asset('images/logo.png')}}">
            </a>

    <input type="checkbox" id="check">
<span class="menu">
                    <li><a href="{{url('/dashboard')}}" class="active">Home</a></li>
                    <li><a href="{{url('shop')}}">Products</a></li>
                    <li><a href="{{url('faq')}}">FAQ</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                    <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
                    
</span>
                
<label for="check" class="open-menu"><i class="fas fa-bars"></i></label>


            
            <!--**search***************-->
            <form class="search-box" action="{{url('search')}}" method="get">
                @csrf
                <input type="text" name="search" placeholder="Search Product's Here" required/>
                <button>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
            <!--**btns*****************-->
            <div class="nav-btns">
               

                @if (Route::has('login'))
        
    @auth

    <a href="{{url('myorders')}}" class="" style="text-decoration: none">
        {{-- My Orders --}}
        <i class="fa-solid fa-receipt"></i>
    </a>

    <a href="{{url('mycart')}}" class="nav-cart" style="text-decoration: none">
        <i class="fa-solid fa-cart-shopping"></i>
        
        <sup>{{$count}}</sup>
    </a>
    
    
        <form style="padding: 10px" method="POST" action="{{ route('logout') }}">
    @csrf

    <input type="submit" value="logout" class="fa-regular btn btn-success" style="background-color: #fed2d1; border:none; color:#383838">
</form> 
    
    @else
    <a href="{{url('/login')}}" class="nav-cart">
        <i class="fa-solid fa-cart-shopping"></i>
    </a>
    <a href="{{url('/login')}}" class="nav-user">
        <i class="fa-regular fa-user"></i>
    </a>
    <a href="{{url('/register')}}" class="nav-user">
        <i class="fa-regular fa-vcard"></i>
    </a>
    @endauth
    @endif

                
            </div>
            
    
        </nav>