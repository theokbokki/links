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

        // $this->addLink(
        //     'Adrien Leloup\'s personal website',
        //     'https://leloup.dev'
        // );

        $this->addLink(
            'Cap, a screen recording app.',
            'https://leloup.dev'
        );

        $this->addLink(
            'Hiker landing page',
            'https://leloup.dev'
        );

        $this->addLink(
            'Henry from online\'s personal website',
            'https://leloup.dev'
        );

        $this->addLink(
            'Too Much World: Is the Internet Dead?',
            'https://leloup.dev'
        );

        $this->addLink(
            'Ghostty terminal emulator',
            'https://leloup.dev'
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
