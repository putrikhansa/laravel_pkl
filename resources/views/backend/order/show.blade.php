@extends('layouts.backend')

@section('content')
    <div class="container-fluid">

        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <i class="fas fa-info-circle"></i> Detail Pesanan
            </div>

            <div class="card-body">

                {{-- Informasi Pemesan --}}
                <h5 class="text-uppercase fw-bold text-muted mb-4">Informasi Pemesan</h5>
                <div class="row">
                    <div class="col-md-4">
                        <div class="border rounded p-3 bg-light">
                            <strong>Nama:</strong> <br>{{ $order->user->name }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded p-3 bg-light">
                            <strong>Email:</strong> <br>{{ $order->user->email }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded p-3 bg-light">
                            <strong>Tanggal Pesanan:</strong> <br>{{ $order->created_at->format('d M Y, H:i') }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded p-3 bg-light">
                            <strong>Kode Order:</strong> <br>{{ $order->order_code }}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded p-3 bg-light">
                            <strong>Status:</strong><br>
                            <span
                                class="badge 
                            {{ $order->status == 'pending' ? 'bg-warning' : ($order->status == 'success' ? 'bg-success' : 'bg-danger') }}">
                                {{ ucfirst($order->status) }}
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Daftar Produk --}}
                <h5 class="text-uppercase fw-bold text-muted mt-5">Daftar Produk</h5>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                                <th>Harga Satuan</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->products as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->pivot->qty }}</td>
                                    <td>Rp {{ number_format($item->pivot->price, 0, ',', '.') }}</td>
                                    <td>Rp {{ number_format($item->pivot->qty * $item->pivot->price, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                            <tr class="fw-bold">
                                <td colspan="4" class="text-end">Total</td>
                                <td>Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- Ubah Status --}}
                <div class="mt-5">
                    <h5 class="text-uppercase fw-bold text-muted mb-3">Ubah Status Order</h5>
                    <form action="{{ route('backend.orders.update', $order->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <select name="status" class="form-select rounded">
                                    <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="success" {{ $order->status == 'success' ? 'selected' : '' }}>Success
                                    </option>
                                    <option value="cancel" {{ $order->status == 'cancel' ? 'selected' : '' }}>Cancel
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-4 d-grid">
                                <button type="submit" class="btn btn-primary">Update Status</button>
                            </div>
                        </div>
                    </form>
                </div>

                <a href="{{ route('backend.orders.index') }}" class="btn btn-secondary">
                    Kembali ke Daftar Pesanan
                </a>

            </div>
        </div>
    </div>
@endsection
