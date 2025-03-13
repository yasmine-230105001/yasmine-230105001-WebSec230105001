@extends('layouts.master')

@section('title', 'Supermarket Bill')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Supermarket Bill</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price (per unit)</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php $grandTotal = 0; @endphp
            @foreach ($bill as $item)
                @php $total = $item['quantity'] * $item['price']; @endphp
                <tr>
                    <td>{{ $item['item'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>${{ number_format($item['price'], 2) }}</td>
                    <td>${{ number_format($total, 2) }}</td>
                </tr>
                @php $grandTotal += $total; @endphp
            @endforeach
        </tbody>
        <tfoot class="table-warning">
            <tr>
                <th colspan="3" class="text-end">Grand Total:</th>
                <th>${{ number_format($grandTotal, 2) }}</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
