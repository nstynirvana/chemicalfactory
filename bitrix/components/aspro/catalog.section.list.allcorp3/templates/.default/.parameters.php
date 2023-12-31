<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	'TITLE' => array(
		'NAME' => GetMessage('T_TITLE'),
		'TYPE' => 'STRING',
		'DEFAULT' => GetMessage('V_TITLE'),
	),
	'SUBTITLE' => array(
		'NAME' => GetMessage('T_SUBTITLE'),
		'TYPE' => 'STRING',
		'DEFAULT' => '',
	),
	'RIGHT_TITLE' => array(
		'NAME' => GetMessage('T_RIGHT_TITLE'),
		'TYPE' => 'STRING',
		'DEFAULT' => GetMessage('V_RIGHT_TITLE'),
	),
	'RIGHT_LINK' => array(
		'NAME' => GetMessage('T_RIGHT_LINK'),
		'TYPE' => 'STRING',
		'DEFAULT' => 'company/reviews/',
	),
	"SECTION_COUNT" => Array(
		"NAME" => GetMessage("SECTION_COUNT_NAME"),
		"TYPE" => "STRING",
		"DEFAULT" => "4",
	),
	'SHOW_PREVIEW_TEXT' => array(
		'NAME' => GetMessage('T_SHOW_PREVIEW_TEXT'),
		'TYPE' => 'CHECKBOX',
		'DEFAULT' => 'Y',
	),
);
?>
