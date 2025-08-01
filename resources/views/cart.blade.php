@extends('layouts.frontend')

@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb_title">
                        <h1>Cart</h1>
                    </div>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="color_blue">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-end -->

    <!-- cart-area -->
    <div class="cartarea sp_bottom_100 sp_top_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cartarea_table_content table-responsive">
                        <table class="table table-bordered text-center align-middle">
                            <thead class="thead-dark bg-dark text-white">
                                <tr>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($cartItems as $item)
                                    <tr>
                                        {{-- <td class="cartarea_product_thumbnail">
                                            <a href="#">
                                                <img src="{{ Storage::exists($item->product->image) ? Storage::url($item->product->image) : asset('assets/frontend/img/grid/grid_1.png') }}"
                                                    alt="{{ $item->product->name }}" width="80">
                                            </a>
                                        </td> --}}
                                        <td>
                                            <img src="{{ Storage::url($item->product->image) }}"
                                                alt="{{ $item->product->name }}" width="80">
                                        </td>
                                        <td class="cartarea_product_name">
                                            <a href="#">{{ $item->product->name }}</a>
                                        </td>
                                        <td class="cartarea_product_price_cart">
                                            <span class="amount">Rp
                                                {{ number_format($item->product->price, 0, ',', '.') }}</span>
                                        </td>
                                        <td class="cartarea_product_quantity">
                                            <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="input-group">
                                                    <input type="number" name="qty" value="{{ $item->qty }}"
                                                        max="{{ $item->product->stock }}" class="form-control"
                                                        style="max-width: 70px;">
                                                    <button type="submit"
                                                        class="btn btn-sm btn-success ms-2">Update</button>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="cartarea_product_subtotal">
                                            Rp {{ number_format($item->qty * $item->product->price, 0, ',', '.') }}
                                        </td>
                                        <td class="cartarea_product_remove">
                                            <form action="{{ route('cart.remove', $item->id) }}" method="POST"
                                                onsubmit="return confirm('Hapus item ini dari keranjang?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Keranjang masih kosong.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                @php
                                    $total = $cartItems->sum(fn($item) => $item->qty * $item->product->price);
                                @endphp
                                <tr>
                                    <th colspan="5" class="text-end">Total</th>
                                    <th>Rp {{ number_format($total, 0, ',', '.') }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Continue Shopping -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="cartarea_shipping_update_wrapper">
                        <div class="cartarea_shipping_update">
                            <a class="default_button" href="{{ route('cart.checkout') }}">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
