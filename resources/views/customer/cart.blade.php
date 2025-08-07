@extends('customer.layouts.master')

@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Gambar</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($cart as $id => $item)
                            <tr>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ $item['img'] ?? 'https://images.unsplash.com/photo-1591325418441-ff678baf78ef' }}"
                                            class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;"
                                            alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4">{{ $item['name'] }}</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">Rp{{ number_format($item['price'], 0, ',', '.') }},00</p>
                                </td>
                                <td>
                                    <div class="input-group quantity mt-4" style="width: 100px;">
                                        <button type="button" class="btn btn-sm btn-minus rounded-circle bg-light border"
                                            onclick="updateQty({{ $id }}, {{ max(1, $item['qty'] - 1) }})">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <input type="text" readonly
                                            class="form-control form-control-sm text-center border-0"
                                            value="{{ $item['qty'] }}">
                                        <button type="button" class="btn btn-sm btn-plus rounded-circle bg-light border"
                                            onclick="updateQty({{ $id }}, {{ $item['qty'] + 1 }})">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">
                                        Rp{{ number_format($item['price'] * $item['qty'], 0, ',', '.') }},00
                                    </p>
                                </td>
                                <td>
                                    <form action="{{ route('cart.remove', $id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-md rounded-circle bg-light border mt-4">
                                            <i class="fa fa-times text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Keranjang kosong.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @php
                $subtotal = collect($cart)->sum(fn($item) => $item['price'] * $item['qty']);
                $tax = $subtotal * 0.1; // pajak 10%
                $total = $subtotal + $tax;
            @endphp

            <div class="row g-4 justify-content-end mt-1">
                <div class="col-8"></div>
                <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                    <div class="bg-light rounded">
                        <div class="p-4">
                            <h2 class="display-6 mb-4">Total <span class="fw-normal">Pesanan</span></h2>
                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="mb-0 me-4">Subtotal</h5>
                                <p class="mb-0">Rp{{ number_format($subtotal, 0, ',', '.') }},00</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-0 me-4">Pajak (10%)</p>
                                <div class="">
                                    <p class="mb-0">Rp{{ number_format($tax, 0, ',', '.') }},00</p>
                                </div>
                            </div>
                        </div>
                        <div class="py-4 mb-4 border-top d-flex justify-content-between">
                            <h4 class="mb-0 ps-4 me-4">Total</h4>
                            <h5 class="mb-0 pe-4">Rp{{ number_format($total, 0, ',', '.') }},00</h5>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="mb-0 mb-3">
                            <a href="{{ route('checkout') }}"
                                class="btn border-secondary py-3 text-primary text-uppercase mb-4" type="button">
                                Lanjut ke Pembayaran
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Script AJAX untuk update qty --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 

    <script>
        function updateQty(id, qty) {
            $.ajax({
                url: '/cart/update/' + id,
                type: 'POST',
                data: {
                    qty: qty,
                    _token: '{{ csrf_token() }}'
                },
                success: function() {
                    location.reload();
                }
            });
        }
    </script>
@endsection