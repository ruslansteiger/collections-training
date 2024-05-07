<?php

it('can find most valuable customer', function () {
    $employees = collect([
        [
            'name' => 'Yannick',
            'email' => 'yannick@beispiel.de',
            'sales' => [
                ['customer' => 'Die Blaue Kaninchenfirma', 'order_total' => 7444],
                ['customer' => 'Schwarze Melone',          'order_total' => 1445],
                ['customer' => 'Gelber Kuchen',            'order_total' => 700],
            ],
        ],
        [
            'name' => 'Daniel',
            'email' => 'daniel@beispiel.de',
            'sales' => [
                ['customer' => 'Die Graue Apfelfirma',     'order_total' => 203],
                ['customer' => 'Gelber Kuchen',            'order_total' => 8730],
                ['customer' => 'Die Blaue Kaninchenfirma', 'order_total' => 3337],
                ['customer' => 'Grünes Mobiltelefon',      'order_total' => 5310],
            ],
        ],
        [
            'name' => 'Silas',
            'email' => 'silas@beispiel.de',
            'sales' => [
                ['customer' => 'Die Scharfe Toasterfirma', 'order_total' => 1091],
                ['customer' => 'Grünes Mobiltelefon',      'order_total' => 2370],
            ],
        ],
        [
            'name' => 'Niklas',
            'email' => 'niklas@beispiel.de',
            'sales' => [
                ['customer' => 'Grünes Mobiltelefon',      'order_total' => 203],
                ['customer' => 'Gelber Kuchen',            'order_total' => 8730],
                ['customer' => 'Die Pfeifende Stierfirma', 'order_total' => 3337],
                ['customer' => 'Die Wolkige Hundfirma',    'order_total' => 5310],
            ],
        ],
        [
            'name' => 'Kain',
            'email' => 'kain@beispiel.de',
            'sales' => [
                ['customer' => 'Die Graue Apfelfirma', 'order_total' => 1091],
                ['customer' => 'Grünes Mobiltelefon',  'order_total' => 2370],
            ],
        ],
    ]);


    /*
     * Finde den Kunden, dessen Gesamtauftragswert am höchsten ist.
     *
     * Verwende keine Schleifen oder if-Anweisungen.
     *
     * Viel Erfolg!
     *
     * $mostValuableCustomer = $employees->...
     */



    expect($mostValuableCustomer)->toBe('Gelber Kuchen');
});
