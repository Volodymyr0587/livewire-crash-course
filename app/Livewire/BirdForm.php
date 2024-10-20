<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;

class BirdForm extends Component
{
    public int $birdCount;
    public string $notes;

    public function submit()
    {
        Entry::create([
            'bird_count' => $this->birdCount,
            'notes' => $this->notes,
        ]);

        $this->reset();
    }

    // public function mount($birdCount)
    // {
    //     $this->birdCount = $birdCount;
    // }

    public function render()
    {
        return view('livewire.bird-form', [
            'entries' => Entry::all(),
        ]);
    }
}
