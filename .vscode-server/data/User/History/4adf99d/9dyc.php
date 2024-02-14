<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            日程調整フォーム
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        @if (session('message'))
            <div class="text-red-600 font-bold">
                {{ session('message') }}
            </div>
        @endif
        <form method="post" action="{{ route('post-attendance.store') }}">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="user_name" class="font-semibold mt-4">回答者 {{ auth()->user()->nickname }}</label>
                </div>
            </div>

            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="court_id" class="font-semibold mt-4">コート選択</label>
                    <x-input-error :messages="$errors->get('court_id')" class="mt-2" />
                    <select type="text" class="form-control" name="court_id" required>
                        <option disabled style='display:none;' @if (empty($postCourt->court_id)) selected @endif>選択してください</option>
                        @foreach($registed_courts as $r_court)
                            <option value="{{ $r_court->id }}" @if (isset($r_court->court_id) && ($r_court->court_id === $postCourt->court_id)) selected @endif>{{ $r_court->court_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <x-primary-button class="mt-4">
                登録
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
