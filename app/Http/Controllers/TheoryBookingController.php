<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TheoryBookingController extends Controller
{
    public function month()
    {
        $firstDayNumber = date('N', strtotime(date('Y-m-1', time())));
        $lastDayInMonth = date('t', strtotime(date('Y-m-1', time())));

        $monthNamesRu = [
            'Январь',
            'Февраль',
            'Март',
            'Апрель',
            'Май',
            'Июнь',
            'Июль',
            'Август',
            'Сентябрь',
            'Октябрь',
            'Ноябрь',
            'Декабрь',
        ];

        $nameDaysWeek = [
            ['Понедельник', 'Пн'],
            ['Вторник', 'Вт'],
            ['Среда', 'Ср'],
            ['Четверг', 'Чт'],
            ['Пятница', 'Пт'],
            ['Суббота', 'Сб'],
            ['Воскресенье', 'Вс'],
        ];

        return view('theory-booking.month', [
            'nameDaysWeek' => $nameDaysWeek,
            'monthNamesRu' => $monthNamesRu,
            'firstDayNumber' => $firstDayNumber,
            'lastDayInMonth' => $lastDayInMonth,
        ]);
    }
}
