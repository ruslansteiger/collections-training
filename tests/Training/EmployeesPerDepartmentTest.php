<?php

it('counts the employees of each department', function () {
    $employees = collect([
        ['name' => 'Yannick', 'department' => 'Sales',        'email' => 'yannick@beispiel.de'],
        ['name' => 'Daniel',  'department' => 'Marketing',    'email' => 'daniel@beispiel.de'],
        ['name' => 'Silas',   'department' => 'Marketing',    'email' => 'silas@beispiel.de'],
        ['name' => 'Niklas',  'department' => 'Engineering',  'email' => 'niklas@beispiel.de'],
        ['name' => 'Kain',    'department' => 'Marketing',    'email' => 'kain@beispiel.de'],
        ['name' => 'Ruslan',  'department' => 'Engineering',  'email' => 'ruslan@beispiel.de'],
        ['name' => 'Lavinia', 'department' => 'Sales',        'email' => 'lavinia@beispiel.de'],
        ['name' => 'Maia',    'department' => 'Engineering',  'email' => 'maia@beispiel.de'],
        ['name' => 'Sika',    'department' => 'Marketing',    'email' => 'sika@beispiel.de'],
    ]);

    /*
     * Wie viele Mitarbeiter sind in jeder einzelnen Abteilungen.
     *
     * Verwende keine Schleifen oder if-Anweisungen.
     *
     * Viel Erfolg!
     *
     * $departmentCounts = $employees->...
     */



    expect($departmentCounts->toArray())->toBe([
        'Sales' => 2,
        'Marketing' => 4,
        'Engineering' => 3,
    ]);
});
