<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::where('usertype', 'user')->get()->count();

        $product = Product::all()->count();

        $order = Order::all()->count();

        $delivered = Order::where('status', 'Delivered')->get()->count();

        $processing = Order::where('status', 'in progress')->get()->count();

        $data = Order::all();
        $total_revenue = 0;
        foreach ($data as $data) {
            $total_revenue = $total_revenue + $data->price;
        }

        return view('admin.index', compact('user', 'product', 'order', 'delivered', 'total_revenue', 'processing'));
    }

    public function home()
    {
        $product = Product::all();

        if (Auth::id()) {
            $user = Auth::user();

            $user_id = $user->id;

            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }
        return view('home.index', compact('product', 'count'));
    }

    public function login_home()
    {
        $product = Product::all();

        if (Auth::id()) {
            $user = Auth::user();

            $user_id = $user->id;

            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }
        return view('home.index', compact('product', 'count'));
    }

    public function product_details($id)
    {
        $data = Product::find($id);

        if (Auth::id()) {
            $user = Auth::user();

            $user_id = $user->id;

            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }

        return view('home.product_details', compact('data', 'count'));
    }

    public function add_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $product_id = $id;
            $user = Auth::user();
            $user_id = $user->id;

            $data = new Cart;
            $product = Product::find($id);
            $data->user_id = $user_id;

            $data->name = $user->name;
            $data->email = $user->email;
            $data->phone = $user->phone;
            $data->address = $user->address;

            $data->product_id = $product_id;

            $data->Product_title = $product->title;

            if ($product->discount_price != null) {
                $data->price = $product->discount_price * $request->quantity;
            } else {
                $data->price = $product->price * $request->quantity;
            }

            $data->image = $product->image;

            $data->quantity = $request->quantity;



            $data->save();

            toastr('Product Added to Cart Successfully');

            return redirect()->back();
        } else {
            return redirect('login');
        }
    }

    public function mycart()
    {
        if (Auth::id()) {
            $user = Auth::user();

            $user_id = $user->id;

            $count = Cart::where('user_id', $user_id)->count();

            $cart = Cart::where('user_id', $user_id)->get();
        } else {
            $count = '';
        }

        return view('home.mycart', compact('count', 'cart'));
    }

    public function delete_cart($id)
    {
        $data = Cart::find($id);

        $data->delete();


        toastr('Cart Items Deleted Successfully');


        return redirect()->back();
    }

    public function confirm_order(Request $request)
    {

        $name = $request->name;

        $address = $request->address;

        $phone = $request->phone;

        $userid = Auth::user()->id;

        $cart = Cart::where('user_id', $userid)->get();

        foreach ($cart as $carts) {

            $order = new Order;

            $order->name = $name;
            $order->rec_address = $address;
            $order->phone = $phone;
            $order->quantity = $carts->quantity;
            $order->price = $carts->price;


            $order->user_id = $userid;

            $order->product_id = $carts->product_id;

            $order->save();
        }

        $cart_remove = Cart::where('user_id', $userid)->get();

        foreach ($cart_remove as $remove) {
            # code...
            $data = Cart::find($remove->id);

            $data->delete();
        }

        toastr('We have Received your Order. We will connect with you soon...');

        return redirect()->back();
    }

    public function myorders()
    {
        $user = Auth::user()->id;

        $count = Cart::where('user_id', $user)->get()->count();

        $order = Order::where('user_id', $user)->get();

        return  view('home.order', compact('count', 'order'));
    }

    public function shop()
    {
        $product = Product::all();

        if (Auth::id()) {
            $user = Auth::user();

            $user_id = $user->id;

            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }
        return view('home.shop', compact('product', 'count'));
    }

    public function faq()
    {
        if (Auth::id()) {
            $user = Auth::user();

            $user_id = $user->id;

            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }
        return view('home.faq', compact('count'));
    }

    public function contact()
    {
        if (Auth::id()) {
            $user = Auth::user();

            $user_id = $user->id;

            $count = Cart::where('user_id', $user_id)->count();
        } else {
            $count = '';
        }
        return view('home.contact', compact('count'));
    }

    public function searchdata(Request $request)
    {
        $searchText = $request->search;

        $product = Product::where('title', 'LIKE', '%' . $searchText . '%')->orWhere('category', 'LIKE', '%' . $searchText . '%')->paginate(3);

        return view('home.shop', compact('product'));
    }
}
