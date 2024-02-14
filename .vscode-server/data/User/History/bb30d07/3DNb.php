<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            コート一覧
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        @if (session('message'))
            <div class="text-red-600 font-bold">
                {{ session('message') }}
            </div>
        @endif
        <form id="year_month_select">
            <select name="year_month" id="year_month">
                <option value="1" {{ $select == '1' ? 'selected': '' }}>2024年3月</option>
                <option value="2" {{ $select == '2' ? 'selected': '' }}>2024年4月</option>
                <option value="3" {{ $select == '3' ? 'selected': '' }}>2024年5月</option>
            </select>
        </form>
        <table>
            <tr>
                <th></th>
                @foreach ($postCourts as $p_court)
                    <th>
                        <a href="{{ route('post-court.show', $p_court) }}" class="text-blue-600">
                            {{ $p_court->elected_date }}<br>
                            {{ convertHisToHi($p_court->start_time) }}~{{ convertHisToHi($p_court->end_time) }}<br>
                            {{ $p_court->court->court_name }} {{ $p_court->court_number }}<br>
                            {{ $p_court->user->nickname }}, {{ $p_court->id }}
                        </a>
                    </th>
                @endforeach
            </tr>
            @foreach ($users as $user)
                @if ($user->status != 'exclusion')
                    <tr>
                        <td>
                            {{ $user->nickname }}
                            @if ($user->id === auth()->user()->id)
                                <a href="{{ route('post-attendance.edit', $user->id) }}" class="">
                                    <button class="mt-4">
                                        <i class="fa-solid fa-pencil"></i>
                                    </button>
                                </a>
                            @endif
                            @if (auth()->user()->role == 'admin')
                                <form action="{{ route('post-attendance.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button class="mt-4">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            @endif
                        </td>
                        @foreach ($postCourts as $p_court)
                            @foreach ($attendances as $attendance)
                                @if ($user->id === $attendance->user_id && $p_court->id === $attendance->elected_court_id)
                                    <td>{{ $attendance->attend_flg }}, {{ $p_court->id }}</td>
                                @endif
                            @endforeach
                        @endforeach
                    </tr>
                @endif
            @endforeach
        </table>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const year_month_Input = document.getElementById('year_month');
            if (year_month_Input) {
                year_month_Input.addEventListener('change', function() {
                    document.getElementById('year_month_select').submit();
                });
            }
        });
    </script>
</x-app-layout>