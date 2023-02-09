<x-main-layout>
    <x-slot:header>
        Edit Post
    </x-slot:header>

    <div class="max-w-md mx-auto mt-12">
        <form class="bg-slate-200 m-4 p-4" method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PUT')
            <div class="m-2 p-2">
                <label>Title</label>
                <input type="text" name="title" value="{{ old('title', $post->title) }}">
            </div>
            <div class="m-2 p-2">
                @error('title')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="m-2 p-2">
                <label>Body</label>
                <input type="text" name="body" value="{{ old('body', $post->body) }}">
            </div>
            <div class="m-2 p-2">
                @error('body')
                <span class="text-red-400 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="m-2 p-2">
                <button type="submit" class="bg-indigo-500 m-2 p-2">Create</button>
            </div>
        </form>
    </div>

    <x-slot:footer>
        <div class="mt-12">
            Footer
        </div>
    </x-slot:footer>
</x-main-layout>
