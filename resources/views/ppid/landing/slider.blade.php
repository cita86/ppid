<div id="slider" class="">
    <div id="carouselExampleIndicators" class="carousel slide"  data-bs-ride="carousel">
        <div class="carousel-indicators mb-5">
        @foreach ($listSlider as $key => $item)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index}}" class="{{$key == 1 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $loop->index}}"></button>
        @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($listSlider as $key => $item)
            <div class="carousel-item {{ $key == 0 ? 'active':''}}">
                
                <img src="{{ asset('/storage/dokumen/sliders/'.$item->nama_file)}}" class="d-block w-100" alt="...">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>