@php
    $icons = config('menus-db.footerSocialIcons');
@endphp

<div class="main-wrapper social-footer">
    <div class="container">

        <div class="button-container">
            <div id="button">SING-UP NOW!</div>
        </div>

        <div class="social-icons">
            <h3>follow us</h3>
            <ul>
                @foreach ($icons as $icon)
                <li>
                    <img src="{{ Vite::asset($icon) }}" alt="">
                </li>
                @endforeach
            </ul>
        </div>

    </div>
</div>
