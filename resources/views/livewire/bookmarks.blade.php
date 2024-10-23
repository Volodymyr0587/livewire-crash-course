<div>
    <h1>Bookmarks</h1>
    <p>User: {{ Auth::user()->name }}</p>
    <form wire:submit='save'>
        <input type="text" wire:model='name'>
        <input type="text" wire:model='url'>
        <button type="submit">Save</button>
    </form>

    <form wire:submit='sendNotification'  wire:confirm='Are you sure you want to send this notification?'>
        <p wire:loading wire:target='sendNotification'>This is being sent to {{ Auth::user()->name }} ...</p>
        <button type="submit">Send Notification</button>
    </form>

    <div>
        @foreach ($bookmarks as $bookmark)
        <div wire:key='{{ $bookmark->id }}'>
            <p>{{ $bookmark->name }}</p>
            <p>{{ $bookmark->url }}</p>
            <button type="submit" wire:click='delete({{ $bookmark->id }})'>Delete</button>
        </div>
        @endforeach
    </div>
</div>
