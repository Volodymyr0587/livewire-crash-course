<div>
    <form wire:submit='submit'>
        <div>
            <label for="birdCount">Bird Count</label>
            <input wire:model='birdCount' type="number" />
        </div>
        <div>
            <label for="notes">Notes</label>
            <textarea wire:model='notes'></textarea>
        </div>
        <div>
            <button>A a New Bird Count Entry</button>
        </div>
    </form>
</div>
