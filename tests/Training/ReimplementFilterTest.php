<?php

function filter($items, $callback): array
{
    // Implementation kommt hierher. Einzige Regel
    // ist es kein 'array_filter' zu verwenden.
}

it('removes path not starting correct', function () {
    $paths = [
        '/episode/map.mp4',
        '/tracks/filter.mp3',
        '/episode/sum.mp4',
    ];

    $filtered = filter($paths, function ($path) {
        return str_starts_with($path, '/episode/');
    });

    expect($filtered)->toBe([
        '/episode/map.mp4',
        '/episode/sum.mp4',
    ]);
});

it('removes odd numbers', function ()
{
    $evens = filter([1, 2, 3, 4, 5, 6], function ($number) {
        return $number % 2 == 0;
    });

    expect($evens)->toBe([2, 4, 6]);
});

it('gets engineering employees', function () {
    $employees = [
        ['name' => 'Yannick', 'department' => 'Sales'],
        ['name' => 'Daniel',  'department' => 'Marketing'],
        ['name' => 'Silas',   'department' => 'Marketing'],
        ['name' => 'Niklas',  'department' => 'Engineering'],
        ['name' => 'Kain',    'department' => 'Marketing'],
        ['name' => 'Ruslan',  'department' => 'Engineering'],
    ];

    $engineeringEmployees = filter($employees, function ($employee) {
        return $employee['department'] == 'Engineering';
    });

    expect($engineeringEmployees)->toBe([
        ['name' => 'Niklas', 'department' => 'Engineering'],
        ['name' => 'Ruslan', 'department' => 'Engineering'],
    ]);
});
