<?php

return [

    'no-records-found' => 'Geen :name gevonden.',

    'button' => [
        'new-record'    => 'Voeg :name toe',
        'delete-record' => 'Verwijder :name',
    ],

    'pagination' => [
        'page-size' => 'per pagina',
    ],

	'filter' => [
	    'title'          => 'Filter:',
	    'button-label'   => 'Filter',
        'anything-label' => 'Elk veld',
    ],

    'scope' => [
        'all' => 'Alles',
    ],

    'counts' => [
        'out-of' => '/',
        'total'  => 'totaal',
    ],

    'activatable' => [
        'activated'   => 'actief',
        'deactivated' => 'inactief',
        'activate'    => 'activeren',
        'deactivate'  => 'deactiveren',
    ],

    'orderable' => [
        'drag-to-order'            => 'klik en sleep om positie te veranderen',
        'drag-disabled-for-column' => 'slepen is alleen mogelijk als op deze kolom is gesorteerd',
        'move'                     => 'verplaatsen',
        'move-one-up'              => 'verplaats omhoog',
        'move-one-down'            => 'verplaats omlaag',
        'move-to-top'              => 'naar eerste plaats',
        'move-to-bottom'           => 'naar laatste plaats',
        'move-to-position'         => 'naar specifieke plaats',
        'position'                 => 'positie',
        'not-in-list'              => 'niet in lijst',
        'none'                     => 'geen',
        'add-to-list-at-top'       => 'vooraan invoegen',
        'add-to-list-at-bottom'    => 'achteraan toevoegen',
        'insert-at-position'       => 'invoegen op plaats',
    ],

    'list-parents' => [
        'back-to'                     => 'Terug naar',
        'back-to-all-models'          => 'Terug naar alle :models',
        'back-to-top-models'          => 'Terug naar top-niveau :models',
        'all-models'                  => 'Alle :models',
        'top-models'                  => 'Top-niveau :models',
        'children-for-parent-with-id' => ':children van :parent :id',
        'children-list-link'          => 'lijst met :children (:count)',
        'models'                      => 'records',
    ],

    'upload' => [
        'browse'           => 'selecteer',
        'remove'           => 'verwijder huidige selectie',
        'nothing-uploaded' => 'Geen bestand geüploadet',
    ],

    'delete' => [
        'success-message' => ':record succesvol verwijderd.',
        'failure' => [
            'not-authorized' => 'Verwijderen niet toegestaan voor dit gebruikersaccount',
            'disallowed'     => 'Records van dit type mogen niet worden verwijderd',
            'in-use'         => 'Dit record is in gebruik en kan niet worden verwijderd',
            'is-active'      => 'Dit record is actief en kan niet worden verwijderd',
            'unknown'        => 'Het record kon niet worden verwijderd',
        ],
    ],

    'store' => [
        'success-message-create'     => ':record succesvol toegevoegd.',
        'success-message-edit'       => ':record succesvol bewerkt.',
        'success-message-position'   => ':record succesvol verplaatst.',
        'success-message-activate'   => ':record geactiveerd.',
        'success-message-deactivate' => ':record gedeactiveerd.',
        'general-error'              => 'Er ging iets mis bij het opslaan. Probeer het nog eens.',
    ],

    'export' => [
        'buttons-title' => 'Exporteer dit overzicht:',
    ],

    'location' => [
        'type-location'  => 'Type locatie',
        'pick-location'  => 'Kies locatie',
        'drag-location'  => 'Sleep de pin om een locatie te kiezen',
        'lat-long-label' => 'Breedte- / lengtegraad',
        'location'       => 'locatie',
        'latitude'       => 'breedtegraad',
        'longitude'      => 'lengtegraad',
    ],

];
