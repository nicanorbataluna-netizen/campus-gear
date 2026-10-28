@extends('layouts.app')

@section('title', 'Campus Inventory - Eloquent')

@section('content')
<div class="product-catalog">
    <h1>Campus Gear Inventory</h1>
    <p>Total Items: {{ $totalCount }} | In Stock: {{ $inStockCount }}</p>

    <!-- Dynamic Eloquent Loop -->
    <table border="1" cellpadding="8" cellspacing="0">
        @forelse($products as $product)
            <tr>
                <td>{{ $product->sku }}</td>
                <td>{{ $product->name }}</td>
                <td>₱{{ number_format($product->price, 2) }}</td>
                <td>
                    @if($product->is_available)
                        <span style="color: green;">Available</span>
                    @else
                        <span style="color: red;">Out of Stock</span>
                    @endif
                </td>
            </tr>
        @empty
            <tr><td colspan="4">No records found.</td></tr>
        @endforelse
    </table>
</div>
@endsection