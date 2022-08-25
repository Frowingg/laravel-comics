<section class="products-list">
    <div class="container">

        <div class="product-cards-wrapper">
            @foreach ($comics_array as $comic)
                {{-- Single product --}}
                <div class="product-card">
                    <h3>{{ $comic['title'] }}</h3>
                </div>
            @endforeach
        </div>
    </div>
</section>