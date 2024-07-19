<x-app-layout>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <div class="note-container single-note">
        <h1 class="text-2xl py-4">Edit your note</h1>
        <form action="{{ route('note.update', $note) }}" class="note" method="POST">
            @csrf
            @method('PUT')
            <textarea name="note" class="note-body" placeholder="Enter your note here" rows="10">{{ $note->note }}</textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Update</button>
            </div>

        </form>
    </div>
</x-app-layout>
