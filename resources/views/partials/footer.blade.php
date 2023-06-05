@php
    $dcComics = config('menus-db.dcComics');
    $shop     = config('menus-db.shop');
    $dc       = config('menus-db.dc');
    $sites    = config('menus-db.sites');
@endphp
<div class="main-wrapper footer">
    <div class="container">
        <div class="left">

        <div class="col">
            <ul>
                <h4>DC COMICS</h4>

                @foreach ($dcComics as $link)
                <li><a href="#">{{ $link['label'] }}</a></li>
                @endforeach

            </ul>

            <ul>
                <h4>SHOP</h4>

                @foreach ($shop as $link)
                <li><a href="#">{{ $link['label'] }}</a></li>
                @endforeach

            </ul>

        </div>

        <div class="col">
            <ul>
                <h4>DC</h4>

                @foreach ($dc as $link )
                <li><a href="#">{{ $link['label'] }}</a></li>
                @endforeach

            </ul>
        </div>

        <div class="col">
            <ul>
                <h4>SITES</h4>

                @foreach ($sites as $link )
                <li><a href="#">{{ $link['label'] }}</a></li>
                @endforeach
            </ul>

        </div>

        </div>

        <div class="right">
            <img src="{{ Vite::asset('resources/assets/img/dc-logo-bg.png') }}" alt="Dc logo">
        </div>

    </div>
</div>
