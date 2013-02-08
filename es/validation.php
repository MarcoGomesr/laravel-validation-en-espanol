<?php 

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used
	| by the validator class. Some of the rules contain multiple versions,
	| such as the size (max, min, between) rules. These versions are used
	| for different input types such as strings and files.
	|
	| These language lines may be easily changed to provide custom error
	| messages in your application. Error messages for custom validation
	| rules may also be added to this file.
	|
	*/

	"accepted"       => "El :attribute debe ser aceptado.",
	"active_url"     => "El :attribute no es una URL válida.",
	"after"          => "El :attribute debe ser una fecha después de :date.",
	"alpha"          => "El :attribute sólo puede contener letras.",
	"alpha_dash"     => "El :attribute sólo puede contener letras, números y guiones.",
	"alpha_num"      => "El :attribute sólo puede contener letras y números.",
	"before"         => "El :attribute debe ser una fecha antes :date.",
	"between"        => array(
		"numeric" => "El :attribute debe estar entre :min - :max.",
		"file"    => "El :attribute debe estar entre :min - :max kilobytes.",
		"string"  => "El :attribute debe estar entre :min - :max caracteres.",
	),
	"confirmed"      => "La :attribute confirmación no coincide.",
	"different"      => "El :attribute and :other debe ser diferente.",
	"email"          => "El formato del :attribute  es invalido.",
	"exists"         => "El :attribute seleccionado  is invalid.",
	"image"          => "El :attribute debe ser una imagen.",
	"in"             => "El :attribute seleccionado  is invalid.",
	"integer"        => "El :attribute debe ser un entero.",
	"ip"             => "El :attribute Debe ser una dirección IP válida.",
	"match"          => "El formato :attribute es invalido.",
	"max"            => array(
		"numeric" => "El :attribute debe ser menor que :max.",
		"file"    => "El :attribute debe ser menor que :max kilobytes.",
		"string"  => "El :attribute debe ser menor que :max caracteres.",
	),
	"mimes"          => "El :attribute debe ser un archivo de tipo :values.",
	"min"            => array(
		"numeric" => "El :attribute debe tener al menos :min.",
		"file"    => "El :attribute debe tener al menos :min kilobytes.",
		"string"  => "El :attribute debe tener al menos :min caracteres.",
	),
	"not_in"         => "El :attribute seleccionado es invalido.",
	"numeric"        => "El :attribute debe ser un numero.",
	"required"       => "El :attribute es requerido",
	"same"           => "El :attribute y :other debe coincidir.",
	"size"           => array(
		"numeric" => "El :attribute must be :size.",
		"file"    => "El :attribute must be :size kilobyte.",
		"string"  => "El :attribute must be :size caracteres.",
	),
	"unique"         => "El :attribute ya ha sido tomado.",
	"url"            => "El formato de :attribute es invalido.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute_rule" to name the lines. This helps keep your
	| custom validation clean and tidy.
	|
	| So, say you want to use a custom validation message when validating that
	| the "email" attribute is unique. Just add "email_unique" to this array
	| with your custom message. The Validator will handle the rest!
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as "E-Mail Address" instead
	| of "email". Your users will thank you.
	|
	| The Validator class will automatically search this array of lines it
	| is attempting to replace the :attribute place-holder in messages.
	| It's pretty slick. We think you'll like it.
	|
	*/

	'attributes' => array(),

);