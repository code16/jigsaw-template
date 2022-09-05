@php
/**
 * @var \Code16\Jigsaw\Page $page
 */
@endphp

<x-layout>
    <div class="p-8">
        <h1 class="text-3xl font-bold">{{ $page->title }}</h1>

        @if($page->cover)
            <img src="{{ $page->cover->thumbnail(500, 500) }}" alt="{{ $page->title }}">
        @endif

        <x-content :image-thumbnail-width="1024">
            {!! $page->getContent() !!}
        </x-content>

        <div class="flex gap-4 mt-16">
            @foreach($page->visuals as $visual)
                <img src="{{ $page->image($visual)->thumbnail(150) }}" alt="">
            @endforeach
        </div>
    </div>
</x-layout>


