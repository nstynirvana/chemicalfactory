<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?global $arRegion?>
<?
$indexPageOptions = $GLOBALS['arTheme']['INDEX_TYPE']['SUB_PARAMS'][ $GLOBALS['arTheme']['INDEX_TYPE']['VALUE'] ];
$blockOptions = $indexPageOptions['COMPANY_TEXT'];
$blockTemplateOptions = $blockOptions['TEMPLATE']['LIST'][ $blockOptions['TEMPLATE']['VALUE'] ];
?>

<?$APPLICATION->IncludeComponent("bitrix:news.detail", "front_company_new", Array(
	"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
		"DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
		"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
		"IBLOCK_TYPE" => "aspro_allcorp3_content",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "31",	// Код информационного блока
		"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_TEXT",
			4 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "COMPANY_NAME",
			1 => "URL",
			2 => "MORE_BUTTON_TITLE",
			3 => "VIDEO_SOURCE",
			4 => "VIDEO_SRC",
			5 => "LINK_BENEFIT",
			6 => "VIDEO",
			7 => "COMPANY_TEXT",
			8 => "IMG2",
			9 => "",
		),
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"SECTION_URL" => "",
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"DISPLAY_PANEL" => "N",
		"SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
		"GROUP_PERMISSIONS" => "N",
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
		"PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
		"CHECK_DATES" => "N",	// Показывать только активные на данный момент элементы
		"ELEMENT_ID" => "",	// ID новости
		"ELEMENT_CODE" => "front_company_item",	// Код новости
		"IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
		"COMPONENT_TEMPLATE" => "front_company",
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа элемента
		"SHOW_ALL_TITLE" => "",
		"MORE_BUTTON_TITLE" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"FILTER_NAME" => "arRegionLink",
		"REGION" => $arRegion,	// Регион
		"TYPE_BLOCK" => "IMG_SIDE2",	// Тип блока
		"IMAGE_POSITION_TIZERS" => "TOP",	// Позиция картинки тизеров
		"SHOW_ADDITIONAL_TEXT" => "Y",
		"IMAGES_TIZERS" => $blockTemplateOptions["ADDITIONAL_OPTIONS"]["IMAGES_TIZERS"]["VALUE"],	// Тип картинки у тизера
		"POSITION_IMAGE_BLOCK" => "RIGHT",
		"SUBTITLE" => "О компании",	// Дополнительный заголовок над основным заголовком блока
		"TIZERS_IBLOCK_ID" => CAllcorp3Cache::$arIBlocks[SITE_ID]["aspro_allcorp3_content"]["aspro_allcorp3_front_tizers"][0],	// ID инфоблока тизеров
		"COUNT_BENEFIT" => "4",	// Количество элементов в блоке "Преимущества"
		"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
	),
	false
);?>