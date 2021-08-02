@if ($sponsors->count())
<div class="donar-area padding-top-80 padding-bottom-120">
    <div class="container">
        <h2 style="margin-bottom: 50px;" align="center">Sponsor Brands</h2>
        <div class="donar-slider">
            @foreach ($sponsors as $sponsor)
                <div class="single-donar">
                    <img src="{{ $sponsor->filePath() }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif
