<?php

namespace App\Livewire;

use App\Models\Bookmark;
use App\Notifications\AnnoyUser;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Bookmarks extends Component
{
    public string $name = '';
    public string $url = '';

    public function save()
    {
        Bookmark::crete([
            'name' => $this->name,
            'url' => $this->url,
            'user_id' => Auth::user()->id,
        ]);
    }

    public function sendNotification()
    {
        sleep(5);
        Auth::user()->notify(new AnnoyUser());
    }

    public function mount()
    {
        Auth::loginUsingId(2);
    }

    public function delete($id)
    {
        $bookmark = Bookmark::find($id);

        $this->authorize('delete', $bookmark);

        $bookmark->delete();
    }

    public function render()
    {
        return view('livewire.bookmarks', [
            'bookmarks' => Auth::user()->bookmarks,
        ]);
    }
}
