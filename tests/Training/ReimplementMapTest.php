<?php

function map($items, $callback): array {
    // Implementation kommt hierher. Einzige Regel
    // ist es kein 'array_map' zu verwenden.
}

it('adds prefix to path string', function () {
    $paths = [
        'map.mp4',
        'filter.mp4',
        'sum.mp4',
    ];

    $prefixed = map($paths, function ($path) {
        return "/episode/{$path}";
    });

    expect($prefixed)->toBe([
        '/episode/map.mp4',
        '/episode/filter.mp4',
        '/episode/sum.mp4',
    ]);
});

it('doubles the number', function () {
    $doubled = map([1, 2, 3, 4, 5], function ($number) {
        return $number * 2;
    });

    expect($doubled)->toBe([2, 4, 6, 8, 10]);
});

it('can get users email', function () {
    $users = [
        ['name' => 'Yannick', 'email' => 'yannick@beispiel.de'],
        ['name' => 'Daniel',  'email' => 'daniel@beispiel.de'],
        ['name' => 'Silas',   'email' => 'silas@beispiel.de'],
    ];

    $emails = map($users, function ($user) {
        return $user['email'];
    });

    expect($emails)->toBe([
        'yannick@beispiel.de',
        'daniel@beispiel.de',
        'silas@beispiel.de',
    ]);
});

