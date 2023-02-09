<x-main-layout>
    <x-slot:header>
        Navigation With Slot
    </x-slot:header>

    @if(count($posts) > 0)
        <x-card class="bg-indigo-400">
            @forelse($posts as $post)
                <x-post-card :post="$post" />
            @empty
                <li>No Post</li>
            @endforelse
        </x-card>
    @endif

    <x-slot:footer>
        <div class="mt-12">
            Footer
        </div>
    </x-slot:footer>
</x-main-layout>
