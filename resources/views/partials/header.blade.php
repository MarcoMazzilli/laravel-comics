@php
    $header_link = config('menus-db.headerLink');
@endphp

<div class="container header">



    <img src="{{ Vite::asset('resources/assets/img/dc-logo.png')}}" alt="">

    <ul>
        @foreach ($header_link as $item)

        <li class="{{ Route::currentRouteName() === $item['label'] ? 'active' : '' }}">
            <a href="{{ route($item['url']) }}">{{ $item['label'] }}</a>
        </li>

        @endforeach
    </ul>

</div>
