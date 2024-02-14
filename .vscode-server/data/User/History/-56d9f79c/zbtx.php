<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            フォーム
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        <form>
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">件名</label>
                    <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="title">
                </div>
            </div>

            <div class="w-full flex flex-col">
                <label for="body" class="font-semibold mt-4">本文</label>
                <textarea name="body" class="w-auto py-2 border border-gray-300 rounded-md" id="body" cols="30" rows="5"></textarea>
            </div>
        </form>
    </div>
</x-app-layout>