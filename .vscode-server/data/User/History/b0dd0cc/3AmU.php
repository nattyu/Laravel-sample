<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            コート一覧
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        <table>
            <tr>
                <td>作成者</td>
                <td>{{ $postCourt->user->nickname }}</td>
            </tr>
            <tr>
                <td>日付</td>
                <td>{{ $postCourt->elected_date }}</td>
            </tr>
            <tr>
                <td>時間</td>
                <td>{{ \Carbon\Carbon::parse($postCourt->start_time)->format('H:i') }}~{{ \Carbon\Carbon::parse($postCourt->end_time)->format('H:i') }}</td>
            </tr>
            <tr>
                <td>コート</td>
                <td>{{ $postCourt->court->court_name }}</td>
            </tr>
            <tr>
                <td>コート番号</td>
                <td>{{ $postCourt->court_number }}</td>
            </tr>
        </table>
        <a href="{{ route('post-court.edit', $postCourt) }}">
            <x-primary-button class="mt-4">
                編集
            </x-primary-button>
        </a>
        
    </div>
</x-app-layout>