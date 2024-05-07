<?php

it('lists all emails of the engineers', function () {
    $employees = collect([
        ['name' => 'Yannick', 'department' => 'Sales',       'email' => 'yannick@beispiel.de'],
        ['name' => 'Daniel',  'department' => 'Marketing',   'email' => 'daniel@beispiel.de'],
        ['name' => 'Silas',   'department' => 'Marketing',   'email' => 'silas@beispiel.de'],
        ['name' => 'Niklas',  'department' => 'Engineering', 'email' => 'niklas@beispiel.de'],
        ['name' => 'Kain',    'department' => 'Marketing',   'email' => 'kain@beispiel.de'],
        ['name' => 'Ruslan',  'department' => 'Engineering', 'email' => 'ruslan@beispiel.de'],
    ]);

    /*
     * Gib alle E-Mail-Adressen der Mitarbeiter in der "Engineering" Abteilung zurück.
     *
     * Verwende keine Schleifen oder if-Anweisungen.
     *
     * Viel Erfolg!
     *
     * $emails = $employees->...
     */



    expect($emails->toArray())->toBe([
        'niklas@beispiel.de',
        'ruslan@beispiel.de',
    ]);
});
