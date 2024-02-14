<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            個別表示
        </h2>
    </x-slot>

    <div class="mx-auto px-6">
        @foreach ($posts as $post)
        <div class="mt-4 p-8 bg-white w-full rounded-2xl">
            <h1 class="p-4 text-lg font-semibold">
                {{ $post->title }}
            </h1>
            <hr class="w-full">
            <p class="mt-4 p-4">
                {{ $post->body }}
            </p>
            <div class="p-4 text-sm font-semibold">
                <p>
                    {{ $post->created_at }} / {{ $post->user->name??'NoName' }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>