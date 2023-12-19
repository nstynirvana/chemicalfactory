<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true ) die();

$bShowChilds = $arParams['SHOW_CHILD_SECTIONS'] !== 'N';
$bShowPreviewText = $arParams['SECTIONS_LIST_PREVIEW_DESCRIPTION'] !== 'N';
if($arParams['SECTIONS_TYPE_VIEW'] === 'FROM_MODULE'){
	$blockTemplateOptions = $GLOBALS['arTheme']['SECTIONS_TYPE_VIEW_CATALOG']['LIST'][$GLOBALS['arTheme']['SECTIONS_TYPE_VIEW_CATALOG']['VALUE']];
	$bItemsOffset = $blockTemplateOptions['ADDITIONAL_OPTIONS']['SECTIONS_ITEMS_OFFSET_CATALOG']['VALUE'] === 'Y';
	$elementsCount = $blockTemplateOptions['ADDITIONAL_OPTIONS']['SECTIONS_ELEMENTS_COUNT_CATALOG']['VALUE'];
	$images = $blockTemplateOptions['ADDITIONAL_OPTIONS']['SECTIONS_IMAGES_CATALOG']['VALUE'];
	$imagePosition = $blockTemplateOptions['ADDITIONAL_OPTIONS']['SECTIONS_IMAGE_POSITION_CATALOG']['VALUE'];
}
else{
	$bItemsOffset = $arParams['SECTIONS_ITEMS_OFFSET'] === 'Y';
	$elementsCount = $arParams['SECTIONS_ELEMENTS_COUNT'];
	$images = $arParams['SECTIONS_IMAGES'];
	$imagePosition = $arParams['SECTIONS_IMAGE_POSITION'];
}
?>
<?$APPLICATION->IncludeComponent("aspro:catalog.section.list.allcorp3", "catalog-sections-template", Array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],	// Тип инфоблока
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],	// Инфоблок
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],	// Тип кеширования
		"CACHE_TIME" => $arParams["CACHE_TIME"],	// Время кеширования (сек.)
		"CACHE_FILTER" => $arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],	// Учитывать права доступа
		"COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],	// Показывать количество элементов в разделе
		"FILTER_NAME" => $arParams["FILTER_NAME"],	// Имя фильтра
		"TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],	// Максимальная отображаемая глубина разделов
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],	// URL, ведущий на страницу с содержимым раздела
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"COMPONENT_TEMPLATE" => ".default",
		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],	// ID раздела
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],	// Код раздела
		"SECTION_FIELDS" => array(	// Поля разделов
			0 => "NAME",
			1 => "DESCRIPTION",
			2 => "PICTURE",
			3 => "",
		),
		"SECTION_USER_FIELDS" => array(	// Свойства разделов
			0 => "UF_TOP_SEO",
			1 => "UF_SECTION_ICON",
			2 => "UF_MIN_PRICE",
			3 => "UF_TRANSPARENT_PICTURE",
			4 => "",
		),
		"ROW_VIEW" => true,
		"BORDER" => true,
		"ITEM_HOVER_SHADOW" => true,
		"DARK_HOVER" => false,
		"ROUNDED" => true,
		"ROUNDED_IMAGE" => true,
		"ITEM_PADDING" => true,
		"SECTION_COUNT" => "999",	// Количество выводимых разделов
		"ELEMENTS_ROW" => $elementsCount,
		"MAXWIDTH_WRAP" => false,
		"MOBILE_SCROLLED" => $bMobileSectionsCompact,
		"NARROW" => true,
		"ITEMS_OFFSET" => $bItemsOffset,
		"IMAGES" => $images,
		"IMAGE_POSITION" => $imagePosition,
		"SHOW_PREVIEW" => $bShowPreviewText,
		"SHOW_CHILDS" => $bShowChilds,
		"CHECK_REQUEST_BLOCK" => CAllcorp3::checkRequestBlock("catalog_sections"),
		"IS_AJAX" => CAllcorp3::checkAjaxRequest(),
		"NAME_SIZE" => "18",
		"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
	),
	false
);?>