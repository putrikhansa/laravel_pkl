<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::with('product')
            ->where('user_id', auth()->id())
            ->get();

        return view('cart', compact('cartItems'));
    }

    public function addToCart(Request $request, $id)
    {
        if (! Auth::check()) {
            // Jika belum login, redirect dengan alert
            toast('Silakan login terlebih dahulu untuk menambahkan ke keranjang.', 'error');
            return redirect('/login');
        }

        $request->validate([
            'qty' => 'required|integer|min:1',
        ]);

        $cart = Cart::where('user_id', Auth::id())
            ->where('product_id', $id)
            ->first();

        if ($cart) {
            $cart->increment('qty', $request->qty);
        } else {
            Cart::create([
                'user_id'    => Auth::id(),
                'product_id' => $id,
                'qty'        => $request->qty,
            ]);
        }

        toast('Produk berhasil ditambahkan ke keranjang.', 'success');
        return back();
    }
    public function updateCart(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);

        $request->validate([
            'qty' => 'required|integer|min:1|max:' . $cartItem->product->stock,
        ]);

        $cartItem->qty = $request->qty;
        $cartItem->save();

        toast('Jumlah Berhasil Di perbarui.', 'success');
        return redirect()->route('cart.index');
    }

    public function remove($id)
    {
        $cart = Cart::where('id', $id)->where('user_id', auth()->id())->findOrFail($id);
        $cart->delete();
        toast('Produk Berhasil di hapus dari keranjang.', 'success');
        return redirect()->route('cart.index');
    }

    public function checkout()
    {
        $cartItems = Cart::with('product')->where('user_id', auth()->id())->get();
        if ($cartItems->isEmpty()) {
            toast('Keranjang kosong. Tidak bisa Checkout.', 'warning');
            return redirect()->route('cart.index');
        }
        // hitung total harga
        $total = $cartItems->sum(function ($item) {
            return $item->qty * $item->product->price;
        });
        // simpan order
        $order = Order::create([
            'user_id'     => auth()->id(),
            'order_code'  => 'ORD-' . strtoupper(Str::random(8)),
            'total_price' => $total,
            'status'     => 'pending',
        ]);

        // simpan detail order ke pivot 'order_product
        foreach ($cartItems as $item)
        // kurangi stok
        $product = Product::find($item->product_id);
        $product->stock -= $item->qty;
        $product->save();

        $order->products()->attach($item->product_id, [
            'qty'   => $item->qty,
            'price' => $item->product->price,
        ]);

// hapus isi keranjang
        Cart::where('user_id', auth()->id())->delete();

        toast('Pesanan berhasil dibuat!', 'success');
        return redirect()->route('orders.index');

    }

}
