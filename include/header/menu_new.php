<?
global $arTheme;
$currentHeaderOptions = $arTheme['HEADER_TYPE']['LIST'][ $arTheme['HEADER_TYPE']['VALUE'] ];
$bNarrowHeader = $currentHeaderOptions['ADDITIONAL_OPTIONS']['HEADER_NARROW']['VALUE'] == 'Y';
$bTariffsUseDetail = $GLOBALS['arTheme']['TARIFFS_USE_DETAIL']['VALUE'] === 'Y';

// items cache hack
$_GET['__SHOW_TARIFFS_DETAIL_LINK__'] = $bTariffsUseDetail;
?>
<?$APPLICATION->IncludeComponent("bitrix:menu", "header-menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"COMPONENT_TEMPLATE" => "top",
		"COUNT_ITEM" => "6",
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => CAllcorp3::GetFrontParametrValue("MAX_DEPTH_MENU"),	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "__SHOW_TARIFFS_DETAIL_LINK__",
		),
		"MENU_CACHE_TIME" => "3600000",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"NARROW" => $bNarrowHeader
	),
	false
);?>
<?
unset($_GET['__SHOW_TARIFFS_DETAIL_LINK__']);
?>