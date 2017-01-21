<?php

return [

	"accepted"             => ":attribute moet worden geaccepteerd.",
	"active_url"           => ":attribute is geen valide URL",
	"after"                => ":attribute moet een datum na :date zijn.",
	"alpha"                => ":attribute mag alleen letters bevatten.",
	"alpha_dash"           => ":attribute mag alleen letters, cijfers en dash (-) bevatten.",
	"alpha_num"            => ":attribute mag alleen letters en cijfers bevatten.",
	"array"                => ":attribute moet een array zijn.",
	"before"               => ":attribute moet een datum voor :date zijn.",
	"between"              => [
		"numeric" => ":attribute moet tussen :min en :max vallen.",
		"file"    => ":attribute moet tussen moet tussen :min en :max kilobytes zijn.",
		"string"  => ":attribute moet tussen :min en :max tekens lang zijn.",
		"array"   => ":attribute moet tussen :min en :max items hebben.",
	],
	"boolean"              => ":attribute moet true of false zijn.",
	"confirmed"            => "bevestiging van :attribute komt niet overeen.",
	"date"                 => ":attribute is geen geldige datum.",
	"date_format"          => ":attribute heeft een incorrect formaat (:format).",
	"different"            => ":attribute en :other moeten van elkaar verschillen.",
	"digits"               => ":attribute moet :digits cijfers hebben.",
	"digits_between"       => ":attribute moet tussen :min en :max cijfers hebben.",
	"email"                => ":attribute moet een geldig e-mailadres zijn.",
	"filled"               => ":attribute is verplicht.",
	"exists"               => "de selectie voor :attribute is ongeldig.",
	"image"                => ":attribute moet een afbeelding zijn.",
	"in"                   => "de selectie van :attribute is incorrect.",
	"integer"              => ":attribute moet een integer zijn.",
	"ip"                   => ":attribute moet een geldig IP-adres zijn",
	"max"                  => [
		"numeric" => ":attribute mag niet groter dan :max zijn.",
		"file"    => ":attribute mag niet groter dan :max kilobytes zijn.",
		"string"  => ":attribute mag niet groter dan :max tekens zijn.",
		"array"   => ":attribute mag niet meer dan :max items hebben.",
	],
	"mimes"                => ":attribute is van het verkeerde bestandstype: :values.",
	"min"                  => [
		"numeric" => ":attribute moet tenminste :min zijn.",
		"file"    => ":attribute moet tenminste :min kilobytes zijn.",
		"string"  => ":attribute moet tenminste :min tekens zijn.",
		"array"   => ":attribute moet tenminste :min items hebben.",
	],
	"not_in"               => "De selectie voor :attribute is ongeldig.",
	"numeric"              => ":attribute moet een getal zijn.",
	"regex"                => ":attribute heeft een onjuist formaat.",
	"required"             => ":attribute is verplicht.",
	"required_if"          => ":attribute is verplicht als :other :value is.",
	"required_with"        => ":attribute is verplicht als :values ingevuld is/zijn.",
	"required_with_all"    => ":attribute is verplicht als :values aanwezig is/zijn.",
	"required_without"     => ":attribute is verplicht als :values niet aanwezig is/zijn.",
	"required_without_all" => ":attribute is verplicht als geen van :values aanwezig zijn.",
	"same"                 => ":attribute en :other moeten overeenkomen.",
	"string"               => ":attribute moet een string zijn.",
	"size"                 => [
		"numeric" => ":attribute moet :size (groot) zijn.",
		"file"    => ":attribute moet :size kilobytes groot zijn.",
		"string"  => ":attribute moet :size tekens lang zijn.",
		"array"   => ":attribute moet precies :size items bevatten.",
	],
	"unique"               => ":attribute is al in gebruik.",
	"url"                  => "Het formaat van :attribute is onjuist.",
	"timezone"             => ":attribute moet een geldige tijdzone zijn.",

	// extended validator: model
	"filter"      => "De parameters van :attribute zijn onjuist voor :friendlyfilter.",
	"dataobject"  => "De parameters van :attribute zijn onjuist voor :friendlydataobject.",


	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => [
		'attribute-name' => [
			'rule-name' => 'custom-message',
		],
	],

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => [
        'email'      => 'e-mail',
        'password'   => 'wachtwoord',
        'name'       => 'naam',
        'first_name' => 'voornaam',
        'last_name'  => 'achternaam',
    ],

];
