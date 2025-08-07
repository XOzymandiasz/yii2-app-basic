<?php

use app\modules\postal\models\ShipmentDirectionInterface;

return [
    'address_1' => [
        'id' => 1,
        'name' => 'Jan Kowalski',
        'postal_code' => '00123',
        'city' => 'Warszawa',
        'country' => 'PL',
        'option' => ShipmentDirectionInterface::DIRECTION_IN,
        'city_id' => 101,
        'street' => 'Marszałkowska',
        'apartment_number' => '5',
        'house_number' => '12A',
        'name_2' => 'Biuro',
        'phone' => '123456789',
        'mobile' => '987654321',
        'contact_person' => '123456789',
        'email' => 'jan@example.com',
        'taxID' => '1234567890',
    ],
    'address_2' => [
        'id' => 2,
        'name' => 'Firma ABC',
        'house_number' => '8',
        'postal_code' => '54321',
        'city' => 'Kraków',
        'country' => 'PL',
        'option' => ShipmentDirectionInterface::DIRECTION_OUT,
        'city_id' => 202,
        'street' => 'Floriańska',
        'apartment_number' => '10',
        'name_2' => null,
        'phone' => null,
        'mobile' => null,
        'contact_person' => '011222333',
        'email' => 'kontakt@firmaabc.pl',
        'taxID' => '9876543210',
    ],
];
