<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Свежие новости и события, происходящие в жизни ООО \"Ставропольская химическая компания\". Участие в выставках и форумах, производство новых продуктов, актуальные предложения для клиентов.");
$APPLICATION->SetPageProperty("title", "Новости - Ставропольская химическая компания");
$APPLICATION->SetTitle("Новости");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"news", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "ID",
			1 => "TAGS",
			2 => "PREVIEW_TEXT",
			3 => "PREVIEW_PICTURE",
			4 => "DETAIL_PICTURE",
			5 => "DATE_ACTIVE_FROM",
			6 => "ACTIVE_TO",
			7 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "FORM_QUESTION",
			1 => "FORM_ORDER",
			2 => "PERIOD",
			3 => "PHOTOPOS",
			4 => "VIDEO_IFRAME",
			5 => "VIDEO",
			6 => "LINK_VACANCY",
			7 => "LINK_PARTNERS",
			8 => "LINK_TIZERS",
			9 => "LINK_GOODS",
			10 => "LINK_GOODS_FILTER",
			11 => "LINK_SERVICES",
			12 => "LINK_SALE",
			13 => "LINK_NEWS",
			14 => "LINK_PROJECTS",
			15 => "LINK_REVIEWS",
			16 => "LINK_STAFF",
			17 => "LINK_FAQ",
			18 => "LINK_ARTICLES",
			19 => "AUTHOR",
			20 => "DATA",
			21 => "TASK_PROJECT",
			22 => "SITE",
			23 => "ORDERER",
			24 => "PRICE",
			25 => "PRICEOLD",
			26 => "ECONOMY",
			27 => "LINK_STUDY",
			28 => "FOR_SHOW_1",
			29 => "FOR_SHOW_5",
			30 => "FOR_SHOW_2",
			31 => "FOR_SHOW_3",
			32 => "FOR_SHOW_4",
			33 => "FOR_SHOW_6",
			34 => "FOR_SHOW_7",
			35 => "FOR_SHOW_8",
			36 => "DOCUMENTS",
			37 => "PHOTOS",
			38 => "STATUS",
			39 => "ARTICLE",
			40 => "LINK_SKU",
			41 => "PRICE_CURRENCY",
			42 => "DEPTH",
			43 => "GRUZ_STRELI",
			44 => "GRUZ",
			45 => "DLINA_STRELI",
			46 => "VOLUME",
			47 => "RECOMMEND",
			48 => "SPEED",
			49 => "WIDTH_PROHOD",
			50 => "WIDTH_PROEZD",
			51 => "DATE_COUNTER",
			52 => "SALE_NUMBER",
			53 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "37",
		"IBLOCK_TYPE" => "aspro_allcorp3_content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "ACTIVE_FROM",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "PERIOD",
			1 => "REDIRECT",
			2 => "SALE_NUMBER",
			3 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "main",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/news/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "Y",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "Y",
		"COMPONENT_TEMPLATE" => "news",
		"SECTION_ELEMENTS_TYPE_VIEW" => "FROM_MODULE",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"SHOW_DETAIL_LINK" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_FILTER_DATE" => "N",
		"SHOW_CATEGORY" => "Y",
		"DETAIL_USE_TAGS" => "Y",
		"PROPERTIES_DISPLAY_TYPE" => "TABLE",
		"T_DESC" => "",
		"T_CHAR" => "",
		"SHOW_BIG_GALLERY" => "Y",
		"TYPE_BIG_GALLERY" => "BIG",
		"T_BIG_GALLERY" => "",
		"BIG_GALLERY_PROP_CODE" => "PHOTOS",
		"T_VIDEO" => "",
		"T_DOCS" => "",
		"DOCS_PROP_CODE" => "DOCUMENTS",
		"T_FAQ" => "",
		"T_REVIEWS" => "",
		"T_VACANCY" => "",
		"T_STAFF" => "",
		"T_SALE" => "",
		"T_NEWS" => "",
		"T_ARTICLES" => "",
		"T_SERVICES" => "",
		"T_PROJECTS" => "",
		"T_PARTNERS" => "",
		"T_GOODS" => "",
		"SHOW_DOPS" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_BLOCKS_ALL_ORDER" => "order_form,desc,big_gallery,char,projects,reviews,tizers,video,services,news,sale,articles,docs,staff,faq,partners,vacancy,goods,dops,comments",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVISE" => "Заказать услугу",
		"FORM_ID_ORDER_SERVISE" => "",
		"NUM_NEWS" => "20",
		"NUM_DAYS" => "30",
		"YANDEX" => "N",
		"T_DOPS" => "",
		"DETAIL_BLOG_USE" => "Y",
		"DETAIL_BLOG_URL" => "catalog_comments",
		"COMMENTS_COUNT" => "5",
		"DETAIL_BLOG_TITLE" => "Комментарии",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "N",
		"DETAIL_VK_USE" => "N",
		"DETAIL_FB_USE" => "N",
		"SKU_IBLOCK_ID" => "20",
		"SKU_PROPERTY_CODE" => array(
			0 => "FORM_ORDER",
			1 => "STATUS",
			2 => "ARTICLE",
			3 => "PRICE_CURRENCY",
			4 => "PRICE",
			5 => "PRICEOLD",
			6 => "ECONOMY",
			7 => "COLOR",
			8 => "GOST",
			9 => "DLINA",
			10 => "VYLET_STRELY",
			11 => "MARK_STEEL",
			12 => "WIDTH",
		),
		"SKU_TREE_PROPS" => array(
			0 => "COLOR",
			1 => "DIAMETER",
			2 => "DLINA",
			3 => "VYLET_STRELY",
			4 => "THICKNESS_STEEL",
			5 => "WIDTH",
		),
		"SKU_SORT_FIELD" => "sort",
		"SKU_SORT_ORDER" => "asc",
		"SKU_SORT_FIELD2" => "name",
		"SKU_SORT_ORDER2" => "asc",
		"USE_REVIEW" => "N",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
			"rss" => "rss/",
			"rss_section" => "#SECTION_ID#/rss/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>