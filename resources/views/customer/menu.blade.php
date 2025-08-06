@extends('customer.layouts.master')

@section('content')
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-3">
                        <div class="col-lg">
                            <div class="row g-4 justify-content-center">
                                @foreach ($menus as $menu)
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="{{ $menu->gambar ?? 'https://via.placeholder.com/400x300?text=Menu' }}"
                                                    class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white {{ $menu->kategori == 'Minuman' ? 'bg-info' : 'bg-secondary' }} px-3 py-1 rounded position-absolute"
                                                style="top: 10px; left: 10px;">
                                                {{ $menu->kategori ?? 'Makanan' }}
                                            </div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>{{ $menu->nama_makanan }}</h4>
                                                <p class="text-limited">{{ $menu->deskripsi }}</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">
                                                        Rp{{ number_format($menu->harga, 0, ',', '.') }}</p>
                                                    <a href="#"
                                                        class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                            class="fa fa-shopping-bag me-2 text-primary"></i> Tambah
                                                        Keranjang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
