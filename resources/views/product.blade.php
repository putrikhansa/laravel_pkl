@extends('layouts.frontend')
@section('content')
    <!-- shop_section_start -->
    <div class="shop_top bg_80">
        <div class="container">
            <div class="row grid__responsive">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                    <div class="sidebar sidebar-collapse-hide">
                        <div class="sidebar__widget widget_collapse-show">
                            <div class="sidebar__title">
                                <h4>Categories</h4>
                                <i class="fas fa-angle-down"></i>
                            </div>

                            <div class="sidebar__menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('product.index') }}"
                                            class="{{ !isset($selectedCategory) ? 'fw-bold text-primary' : '' }}">
                                            All Categories
                                        </a>
                                    </li>
                                    @foreach ($category as $cat)
                                        <li>
                                            <a href="{{ route('product.filter', $cat->slug) }}"
                                                class="{{ isset($selectedCategory) && $selectedCategory->id == $cat->id ? 'fw-bold text-primary' : '' }}">
                                                {{ $cat->name }} <span>({{ $cat->product->count() }})</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="projects_one" role="tabpanel"
                            aria-labelledby="projects_one">
                            <div class="row grid_responsive">
                                @if (isset($query))
                                    <h5 class="mb-4">Hasil pencarian untuk: <strong>{{ $query }}</strong></h5>
                                @endif
                                @if ($product->isEmpty())
                                    <p class="text-muted">Tidak ada produk yang cocok dengan pencarian.</p>
                                @else
                                    @foreach ($product as $data)
                                        <div class="col-xl-4 col-md-6 col-sm-6 col-6">
                                            <div class="grid_wraper">
                                                <div class="grid_wraper_img">
                                                    <div class="grid_wraper_img_inner">
                                                        <a href="{{ url('/product/' . $data->slug) }}">
                                                            <img class="primary_image"
                                                                src="{{ Storage::url($data->image) }}"
                                                                alt="{{ $data->name }} " width="200">
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="grid_wraper_icon">
                                                    <li>
                                                        <a href="{{ route('cart.add', $data->id) }}"
                                                            onclick="event.preventDefault(); document.getElementById('add-to-cart-form-{{ $data->id }}').submit();"
                                                            data-bs-toggle="tooltip" title="Add to Cart">
                                                            <i class="fas fa-shopping-cart"></i>
                                                        </a>
                                                        <form id="add-to-cart-form-{{ $data->id }}"
                                                            action="{{ route('cart.add', $data->id) }}" method="POST"
                                                            class="d-none">
                                                            @csrf
                                                            <input type="hidden" name="qty" value="1">
                                                        </form>
                                                    </li>
                                                </ul>
                                                <div class="grid_wraper_badge">
                                                    <span class="sale_badge">New</span>
                                                </div>
                                                <div class="grid_wraper_info">
                                                    <h3 class="grid_wraper_title">
                                                        <a
                                                            href="{{ url('/product/' . $data->slug) }}">{{ $data->name }}</a>
                                                    </h3>
                                                    <div class="grid_wraper_price">
                                                        <span>Rp {{ number_format($data->price, 0, ',', '.') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
