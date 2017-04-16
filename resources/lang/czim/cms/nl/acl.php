<?php

return [

    'permission'  => 'recht',
    'permissions' => 'rechten',

    'ungrouped-permissions' => 'Overige',

    'users' => [
        'single' => 'gebruiker',
        'plural' => 'gebruikers',

        'index' => [
            'title'      => 'Gebruikers',
            'empty_list' => 'Geen gebruikers',
        ],

        'form' => [
            'email'              => 'E-mailadres',
            'password'           => 'Wachtwoord',
            'password-new'       => 'Nieuw wachtwoord',
            'password-repeat'    => 'Herhaal wachtwoord',
            'name'               => 'Naam',
            'first-name'         => 'Voornaam',
            'last-name'          => 'Achternaam',
            'roles'              => 'Rollen',
            'current-roles'      => 'Toegekende Rollen',
            'available-roles'    => 'Beschikbare Rollen',
            'select-all-roles'   => 'Ken alle rollen toe aan gebruiker',
            'select-roles'       => 'Ken geselecteerde rollen toe aan gebruiker',
            'deselect-all-roles' => 'Verwijder alle rollen van gebruiker',
            'deselect-roles'     => 'Verwijder geselecteerde rollen van gebruiker',
        ],

        'columns' => [
            'email' => 'E-mail',
            'roles' => 'Rollen',
        ],

        'flash' => [
            'success-message-create' => 'Gebruiker :record succesvol toegevoegd.',
            'success-message-edit'   => 'Gebruiker :record succesvol bewerkt.',
            'success-message-delete' => 'Gebruiker :record succesvol verwijderd.',
        ],
    ],

    'roles' => [
        'single' => 'rol',
        'plural' => 'rollen',

        'index' => [
            'title'      => 'Rollen',
            'empty_list' => 'Geen rollen',
        ],

        'form' => [
            'key'                      => 'Id',
            'name'                     => 'Naam',
            'permissions'              => 'Rechten',
            'current-permissions'      => 'Ingestelde Rechten',
            'available-permissions'    => 'Beschikbare Rechten',
            'select-all-permissions'   => 'Alle rechten aan rol toevoegen',
            'select-permissions'       => 'Geselecteerde rechten aan rol toevoegen',
            'deselect-all-permissions' => 'Alle rechten van rol verwijderen',
            'deselect-permissions'     => 'Geselecteerde rechten van rol verwijderen',
        ],

        'columns' => [
            'key'         => 'Id',
            'in-use'      => 'Gebruikt',
            'permissions' => 'Rechten',
        ],

        'flash' => [
            'success-message-create' => 'Rol :record succesvol toegevoegd.',
            'success-message-edit'   => 'Rol :record succesvol bewerkt.',
            'success-message-delete' => 'Rol :record succesvol verwijderd.',
        ],
    ],

];
