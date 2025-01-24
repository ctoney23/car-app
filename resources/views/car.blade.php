<p>There are currently {{ $numberOfCars }} cars in your list.</p>

@forelse($cars as $car)
    <p>{{ $car }}</p>
@empty
    <p>There are no cars in your list.</p>
@endforelse