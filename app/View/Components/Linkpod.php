<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;
use Closure;

class Linkpod extends Component
{
    public Collection $links;

    public function __construct()
    {
        $this->links = collect();

        $this->addLink(
            'Adrien Leloup\'s personal website',
            'https://leloup.dev'
        );

        $this->addLink(
            'Toon Van den Bos\' personal website',
            'https://toonvandenbos.com/'
        );

        $this->addLink(
            'Jonathan Rixhon\'s personal website',
            'https://jonathanrixhon.dev/'
        );

        $this->addLink(
            'GJP Henry\'s personal website',
            'https://gjphenry.be/fr/accueil/'
        );

        $this->addLink(
            'Making space for a handmade web',
            'https://www.figma.com/blog/making-space-for-a-handmade-web/',
        );
    }

    public function addLink(string $title, string $url): void
    {
        $link = (object) [
            'title' => $title,
            'url' => $url,
        ];

        $this->links->push($link);
    }

    public function render(): View|Closure|string
    {
        return view('components.linkpod');
    }
}
