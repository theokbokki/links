<article class="linkpod">
    <h2 class="linkpod__title sro">LinkPod</h2>
    <div class="linkpod__main linkpod__screen">
        <x-readmore/>
        <div class="linkpod__links">
            @foreach($links as $link)
                <x-link :$link/>
            @endforeach
        </div>
    </div>
    <div class="linkpod__count linkpod__screen">
        <p class="linkpod__text">Links count: {{ count($links) }}</p>
    </div>
    <div class="linkpod__loader linkpod__screen">
        <span class="linkpod__crt"></span>
    </div>
</article>
