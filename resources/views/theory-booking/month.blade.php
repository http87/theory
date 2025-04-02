<x-layout>
    <x-slot:title>
        Месяц
    </x-slot:title>

    <div class="mx-w-100% mt-10">
        <div class="wrapper bg-white rounded shadow w-full ">
            <div class="header flex justify-between p-2">
                <span class="text-lg font-bold">
                    {{ $monthNamesRu[(int) date('m', time()) - 1] }}
                    {{ date('Y', time()) }} <span class="text-xs font-normal text-gray-300">{{ date('t') }}
                        дней</span>
                </span>
                <div class="buttons">
                    <button class="btn btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>
                    </button>
                    <button class="btn btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>
            <table class="w-full">
                <thead>
                    <tr>
                        @foreach ($nameDaysWeek as $day)
                            <x-theory-booking.week-day-cell :fullDay="$day[0]" :shortDay="$day[1]" />
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @php
                        $day = 1;
                        $weekNums = 5;
                    @endphp
                    @if ($firstDayNumber == 6 || $firstDayNumber == 7)
                        {{ $weekNums = 6 }}
                    @endif
                    @for ($w = 0; $w < $weekNums; ++$w)
                        <tr class="text-center h-20">
                            @for ($d = 1; $d < 8; ++$d)
                                <td
                                    class="border-1 border-gray-300 p-1 max-w-100% overflow-auto transition cursor-pointer duration-300 ease hover:bg-gray-100 ">
                                    @if (--$firstDayNumber < 1 && $day <= $lastDayInMonth)
                                        <div
                                            class="flex flex-col h-40 mx-w-100% overflow-hidden">
                                            <div class="flex flex-row-reverse mt-1 mb-1 h-5 w-full">
                                                <x-theory-booking.num-day :active="$day == date('d', time()) ">
                                                    {{ $day++ }}
                                                </x-theory-booking.num-day>
                                            </div>
                                            <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer">
                                                <x-theory-booking.month-booking />
                                            </div>
                                        </div>
                                    @endif
                                </td>
                            @endfor
                        </tr>
                    @endfor

                </tbody>
            </table>
        </div>
    </div>

</x-layout>
