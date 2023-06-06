<?php

namespace App\Http\Controllers\frontend;

use Stripe;
use Session;
use Stripe\Charge;
use App\Models\Cart;
use App\Models\User;
use Stripe\Customer;
use App\Models\Cupon;
use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Http\Request;
use App\Models\DiscountPrice;
use App\Models\ProductWishlist;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CartController extends Controller
{
    public function addToWishts(Request $request)
    {
        $productData = Product::with('productPrice')
            ->where('id', $request->productId)
            ->first();

        $wish = ProductWishlist::where('product_id', $request->productId)->first();

        if (Auth::check()) {
            if ($wish == null) {
                $wishList = new ProductWishlist();
                $wishList->user_id = Auth::user()->id;
                $wishList->product_id = $request->productId;
                $wishList->product_price = $productData->productPrice->id;
                $wishList->price = $productData->productPrice->price;
                $wishList->product_qty = 1;
                $wishList->save();
                $allWishListsData = ProductWishlist::with('product')
                    ->where('user_id', Auth::user()->id)
                    ->get();
                $count = ProductWishlist::with('product')
                    ->where('user_id', Auth::user()->id)
                    ->count();
                $total = ProductWishlist::where('user_id', Auth::user()->id)->sum('price');
                return response()->json(['allWishListsData' => $allWishListsData, 'count' => $count, 'total' => $total]);
            } else {
                return response()->json(['error_wish' => 'product alerady seleceted']);
            }
        } else {
            return response()->json(['error_auth' => 'Please login first']);
        }
    }

    public function viewToWishts($id)
    {
        $cartItmes = ProductWishlist::with('product')
            ->where('user_id', $id)
            ->latest()
            ->get();
        return view('frontend.wishlists.wish_lists', compact('cartItmes'));
    }

    public function addToCart(Request $request)
    {
        $product = Product::with('productPrice')
            ->where('id', $request->productId)
            ->first();
        $productCart = Cart::where('product_id', $request->productId)->first();
        if (Auth::check()) {
            if ($productCart == true) {
                $productCart->product_qty = $productCart->product_qty + 1;
                $productCart->price += $product->productPrice->price;
                $productCart->save();
                $allCartData = Cart::with('product')
                    ->where('user_id', Auth::user()->id)
                    ->get();
                $count = Cart::with('product')
                    ->where('user_id', Auth::user()->id)
                    ->count();

                $total = Cart::where('user_id', Auth::user()->id)->sum('price');
                return response()->json([
                    'status' => 'Succeessfully Add to Cart',
                    'allData' => $allCartData,
                    'totalPrice' => $total,
                    'count' => $count,
                ]);
            } else {
                $productCart = new Cart();
                $productCart->user_id = Auth::user()->id;
                $productCart->product_id = $product->id;
                $productCart->product_qty = 1;
                $productCart->product_price += $product->productPrice->id;
                $productCart->price = $product->productPrice->price;
                $productCart->save();
                $allCartData = Cart::with('product')
                    ->where('user_id', Auth::user()->id)
                    ->get();
                $count = Cart::with('product')
                    ->where('user_id', Auth::user()->id)
                    ->count();
                $total = Cart::where('user_id', Auth::user()->id)->sum('price');
                return response()->json([
                    'status' => 'Succeessfully Add to Cart',
                    'allData' => $allCartData,
                    'count' => $count,
                    'totalPrice' => $total,
                ]);
            }
        } else {
            return response()->json([
                'error' => 'please login first',
            ]);
        }
    }

    public function viewCart($id)
    {
        $cartItmes = Cart::with('product')
            ->where('user_id', $id)
            ->latest()
            ->get();

        $discount_data = DiscountPrice::where('user_id', Auth::user()->id)->first();
        return view('frontend.cart.viewCart', compact('cartItmes', 'discount_data'));
    }

    public function addToCartProduct(Request $request, $id)
    {
        if (Auth::check()) {
            $product = Product::with('productPrice')
                ->where('id', $id)
                ->first();

            $productPrice = $product->productPrice->price;

            $cartData = Cart::with('product')
                ->where('user_id', Auth::user()->id)
                ->where('product_id', $id)
                ->first();

            if ($request->qty > 1) {
                $cart = new Cart();
                $cart->product_id = $id;
                $cart->user_id = Auth::user()->id;
                $cart->product_qty = $request->qty;
                $cart->product_price = $product->productPrice->id;
                $cart->price = $request->qty * $productPrice;
                $cart->save();
                $notification = [
                    'message' => 'Product Successfully Cart',
                    'alert-type' => 'success',
                ];
                return back()->with($notification);
            } else {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $id;
                $cart->product_qty = $request->qty;
                $cart->product_price = $product->productPrice->id;
                $cart->price = $product->productPrice->price;
                $cart->save();
                $notification = [
                    'message' => 'Product Successfully Cart',
                    'alert-type' => 'success',
                ];
                return back()->with($notification);
            }
        } else {
            $notification = [
                'message' => 'Please login first',
                'alert-type' => 'error',
            ];
            return back()->with($notification);
        }
    }

    public function deleteCart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        $notification = [
            'message' => 'Product Successfully Deleted',
            'alert-type' => 'success',
        ];
        return back()->with($notification);
    }

    public function updataCart(Request $request, $id)
    {
        $cart = Cart::where('user_id', Auth::user()->id)
            ->where('id', $id)
            ->first();

        $product = Product::with('productPrice')
            ->where('id', $cart->product_id)
            ->first();

        $cart->product_qty = $request->product_qty;
        $cart->price = $request->product_qty * $product->productPrice->price;
        $cart->save();
        $notification = [
            'message' => 'Product Cart Successfully updated',
            'alert-type' => 'success',
        ];
        return back()->with($notification);
    }

    public function cartProduct(Request $request)
    {
        if (Auth::check()) {
            $product = Product::with('productPrice')
                ->where('id', $request->product_id)
                ->first();

            $productPrice = $product->productPrice->price;

            $cartData = Cart::with('product')
                ->where('user_id', Auth::user()->id)
                ->where('product_id', $request->product_id)
                ->first();

            if ($request->product_qty > 1) {
                $cart = new Cart();
                $cart->product_id = $request->product_id;
                $cart->user_id = Auth::user()->id;
                $cart->product_qty = $request->product_qty;
                $cart->product_price = $product->productPrice->id;
                $cart->price = $request->product_qty * $productPrice;
                $cart->save();
                $notification = [
                    'message' => 'Product Successfully Cart',
                    'alert-type' => 'success',
                ];
                return back()->with($notification);
            } else {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $request->product_id;
                $cart->product_qty = $request->product_qty;
                $cart->product_price = $product->productPrice->id;
                $cart->price = $product->productPrice->price;
                $cart->save();
                $notification = [
                    'message' => 'Product Successfully Cart',
                    'alert-type' => 'success',
                ];
                return back()->with($notification);
            }
        } else {
            $notification = [
                'message' => 'Please login first',
                'alert-type' => 'error',
            ];
            return back()->with($notification);
        }
    }
    public function offer(Request $request)
    {
        $cuponName = Cupon::where('name', $request->offer)->first();
        $cartUpdatePrice = Cart::where('user_id', Auth::user()->id)->first();
        if ($cuponName == true) {
            if ($cuponName->cupon_used) {
                if ($cuponName->type == 'Discount') {
                    $total = Cart::where('user_id', Auth::user()->id)->sum('price');

                    $cartItmes = Cart::with('product')
                        ->where('user_id', Auth::user()->id)
                        ->latest()
                        ->get();
                    $cuponName->cupon_used = 1;
                    $cuponName->save();

                    $discountPrice = $cuponName->discount;
                    $notification = [
                        'message' => 'Successfully updated price',
                        'alert-type' => 'success',
                    ];
                    return view('frontend.cart.viewCart', compact('cartItmes', 'total', 'discountPrice'))->with($notification);
                } elseif ($cuponName->type == 'Fixed') {
                    $total = Cart::where('user_id', Auth::user()->id)->sum('price');
                    $cuponName->cupon_used = 1;
                    $cuponName->save();
                    $FixedDiscountPrice = $cuponName->discount;

                    $cartItmes = Cart::with('product')
                        ->where('user_id', Auth::user()->id)
                        ->latest()
                        ->get();
                    $notification = [
                        'message' => 'Successfully updated price',
                        'alert-type' => 'success',
                    ];
                    return view('frontend.cart.viewCart', compact('cartItmes', 'total', 'FixedDiscountPrice'))->with($notification);
                } else {
                    $notification = [
                        'message' => 'Invalid Cupon',
                        'alert-type' => 'error',
                    ];
                    return back()->with($notification);
                }
            } else {
                $notification = [
                    'message' => 'Cupon alerady used',
                    'alert-type' => 'error',
                ];
                return back()->with($notification);
            }
        } else {
            $notification = [
                'message' => 'Cupon name error',
                'alert-type' => 'error',
            ];
            return back()->with($notification);
        }
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'discount_price' => 'required',
        ]);
        $discountPrice = new DiscountPrice();
        $discountPrice->user_id = Auth::user()->id;
        $discountPrice->discount_price = $request->discount_price;
        $discountPrice->save();

        $price = DiscountPrice::find($discountPrice->id);

        $cartItems = Cart::with('product', 'productPrice')
            ->where('user_id', Auth::user()->id)
            ->get();
        return view('frontend.payment-gateway.index', compact('price', 'cartItems'));
    }

    public function stripe(Request $request)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $customer = Customer::create([
            'address' => [
                'line1' => $request->billing_address,

                'postal_code' => $request->zipcode,

                'city' => $request->city,

                'state' => 'GJ',

                'country' => $request->country,
            ],

            'email' => $request->email,

            'name' => $request->fname,

            'source' => $request->stripeToken,
        ]);

        Charge::create([
            'amount' => $request->total_ammount * 100,

            'currency' => 'usd',

            'customer' => $customer->id,

            'description' => 'Thanks for your services',

            'shipping' => [
                'name' => $request->fname,

                'address' => [
                    'line1' => $request->billing_address,

                    'postal_code' => $request->zipcode,

                    'city' => $request->city,

                    'state' => 'CA',

                    'country' =>  $request->country,
                ],
            ],
        ]);

        Session::flash('success', 'Payment successful!');

        return redirect()->route('home.create');
    }
}
