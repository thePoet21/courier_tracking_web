@extends('layouts.app')

@section('content')
    <div class="bg-white shadow p-6 rounded-lg">
        <h2 class="text-2xl font-bold mb-6">Track Your Package</h2>
        <form method="GET" action="{{ route('track') }}">
            <div class="mb-4">
                <input type="text" name="tracking_number" class="w-full p-3 border rounded" placeholder="Enter your tracking number">
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Track</button>
        </form>
        
        @if(isset($trackingInfo))
            <div class="mt-6">
                <h3 class="text-xl font-semibold">Tracking Information:</h3>
                <ul>
                    <li><strong>Status:</strong> {{ $trackingInfo->status }}</li>
                    <li><strong>Last Location:</strong> {{ $trackingInfo->location }}</li>
                    <li><strong>Expected Delivery:</strong> {{ $trackingInfo->expected_delivery }}</li>
                </ul>
            </div>
        @endif
    </div>
@endsection
