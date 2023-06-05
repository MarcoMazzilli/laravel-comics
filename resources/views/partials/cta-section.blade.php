@php
    $cta_links = config('menus-db.ctaLinks');
@endphp

<div class="main-wrapper cta-section">
    <div class="container">

        <ul>
            @foreach ($cta_links as $item)

            <li>
                <img src="{{ Vite::asset( $item['src'] ) }}" alt="no image">
                <p>{{ $item['label'] }}</p>
            </li>

            @endforeach
        </ul>
    </div>
</div>
