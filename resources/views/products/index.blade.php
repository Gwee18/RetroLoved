@extends('layouts.app')

@section('title', 'Produk - RetroLoved')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>🛍️ Produk RetroLoved</h1>
        <p class="lead">Total produk: {{ $products->count() }} item</p>
    </div>
</div>

<div class="row mt-4">
    @foreach($products as $product)
    <div class="col-md-3 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <!-- Gambar produk -->
                @if($product->image_url)
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" 
                     style="height: 120px; object-fit: cover; border-radius: 5px;" 
                     onerror="this.style.display='none'">
                @endif
                
                <!-- Icon fallback jika gambar tidak ada -->
                @if(!$product->image_url)
                <div style="height: 120px; background: #f4f4f4; border-radius: 5px; display: flex; align-items: center; justify-content: center; font-size: 48px;">
                    📦
                </div>
                @endif
                
                <h5 class="card-title mt-3">{{ $product->name }}</h5>
                <p class="card-text text-muted small">{{ Str::limit($product->description, 80) }}</p>
                
                <div class="mb-2">
                    <span class="badge bg-secondary">{{ $product->category }}</span>
                </div>
                
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-primary">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                    <span class="badge bg-{{ $product->stock > 0 ? 'success' : 'danger' }}">
                        Stok: {{ $product->stock }}
                    </span>
                </div>
            </div>
            <div class="card-footer">
                @if($product->stock > 0)
                <button class="btn btn-primary w-100">🛒 Beli Sekarang</button>
                @else
                <button class="btn btn-secondary w-100" disabled>😔 Stok Habis</button>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>

@if($products->isEmpty())
<div class="row">
    <div class="col-12 text-center">
        <div class="alert alert-warning">
            <h4>😞 Produk tidak ditemukan</h4>
            <p>Belum ada produk yang tersedia saat ini.</p>
        </div>
    </div>
</div>
@endif
@endsection