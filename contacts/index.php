<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "ООО \"Ставропольская Химическая Компания\" расположена по адресу: г. Ставрополь, ул. Промышленная 2, дом 3. Контактный телефон: +7 8652 23-90-23");
$APPLICATION->SetPageProperty("title", "Контакты - Ставропольская Химическая Компания");
$APPLICATION->SetTitle("Контакты");
?>
<?$APPLICATION->IncludeComponent("bitrix:news", "contacts-new", Array(
	"IBLOCK_TYPE" => "aspro_allcorp3_content",	// Тип инфоблока
		"IBLOCK_ID" => "29",	// Инфоблок
		"NEWS_COUNT" => "999",	// Количество новостей на странице
		"USE_SEARCH" => "N",	// Разрешить поиск
		"USE_RSS" => "N",	// Разрешить RSS
		"USE_RATING" => "N",	// Разрешить голосование
		"USE_CATEGORIES" => "N",	// Выводить материалы по теме
		"USE_FILTER" => "Y",	// Показывать фильтр
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "ID",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
		"SEF_FOLDER" => "/contacts/",	// Каталог ЧПУ (относительно корня сайта)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "Y",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",	// Формат показа даты
		"LIST_FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(	// Свойства
			0 => "ADDRESS",
			1 => "METRO",
			2 => "PHONE",
			3 => "EMAIL",
			4 => "SCHEDULE",
			5 => "PAY_TYPE",
			6 => "MAP",
			7 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",	// Формат показа даты
		"DETAIL_FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_TEXT",
			3 => "DETAIL_PICTURE",
			4 => "DATE_ACTIVE_FROM",
			5 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(	// Свойства
			0 => "ADDRESS",
			1 => "METRO",
			2 => "PHONE",
			3 => "EMAIL",
			4 => "SCHEDULE",
			5 => "PAY_TYPE",
			6 => "MAP",
			7 => "MORE_PHOTOS",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DETAIL_PAGER_TITLE" => "",	// Название категорий
		"DETAIL_PAGER_TEMPLATE" => "",	// Название шаблона
		"DETAIL_PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_TEMPLATE" => "main",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"USE_SHARE" => "N",
		"USE_REVIEW" => "N",	// Разрешить отзывы
		"ADD_ELEMENT_CHAIN" => "Y",	// Включать название элемента в цепочку навигации
		"SHOW_DETAIL_LINK" => "Y",
		"COMPONENT_TEMPLATE" => "contacts",
		"SET_LAST_MODIFIED" => "Y",	// Устанавливать в заголовках ответа время модификации страницы
		"DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SHOW_404" => "Y",	// Показ специальной страницы
		"MESSAGE_404" => "",
		"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
		"INCLUDE_SUBSECTIONS" => "Y",
		"FILTER_NAME" => "arFilterContacts",	// Фильтр
		"FILTER_FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"STRICT_SECTION_CHECK" => "Y",	// Строгая проверка раздела
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"СHOOSE_REGION_TEXT" => "",
		"FILE_404" => "",	// Страница для показа (по умолчанию /404.php)
		"SECTIONS_TYPE_VIEW" => "FROM_MODULE",	// Шаблон страницы блока списка разделов
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_1",	// Шаблон страницы блока списка элементов
		"ELEMENT_TYPE_VIEW" => "element_1",	// Шаблон страницы блока детальной страницы
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE#/",
			"detail" => "#SECTION_CODE#/#ELEMENT_ID#/",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>