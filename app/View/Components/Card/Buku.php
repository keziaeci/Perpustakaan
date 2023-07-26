<?php

namespace App\View\Components\Card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Buku extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $judul,
        public $id,
            // public string $pengarang,
            // public string $penerbit,
            // public string $genre,
            // public string $status,
            // public int $tahun,
        public string $sinopsis,
        // public string $cover,
        // public int $jumlah,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card.buku');
    }
}
