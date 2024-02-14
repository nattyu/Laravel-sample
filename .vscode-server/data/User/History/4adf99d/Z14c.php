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

            @foreach ($elected_court as $e_court)
                <label for="court" class="font-semibold mt-2">
                    {{ $e_court->elected_date }},
                    {{ $e_court->court_number }},
                    {{ $e_court->start_time }}~{{ $e_court->end_time }}
                </label>
                <select type="text" class="form-control" name="attend_flg[]" required>
                    <option disabled style='display:none;' @if (empty($postAttendance->attend_flg)) selected @endif>選択してください</option>
                    <option value="〇">〇</option>
                    <option value="△">△</option>
                    <option value="✕">✕</option>
                </select>
            @endforeach

            <x-primary-button class="mt-4">
                登録
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
