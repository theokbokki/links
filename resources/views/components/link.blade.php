<a href="{{ $link->url }}" class="link">
    <span class="link__icon">
        <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="2" height="2" fill="currentColor"/>
        <rect x="2" y="2" width="2" height="2" fill="currentColor"/>
        <rect x="4" y="4" width="2" height="2" fill="currentColor"/>
        <rect x="2" y="6" width="2" height="2" fill="currentColor"/>
        <rect y="8" width="2" height="2" fill="currentColor"/>
        </svg>
    </span>
    <span class="link__text">{{ $link->title }}</span>
</a>
