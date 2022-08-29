<section class="products-list">
    <div class="container">

        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <p>{{$comic['title']}}</p>
            </div>
        @endforeach

    </div>
</section>

