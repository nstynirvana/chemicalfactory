<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use \Bitrix\Main\Localization\Loc;
?>
<div class="contacts-v2" itemscope itemtype="http://schema.org/LocalBusiness">
	<?//hidden text for validate microdata?>
	<div class="hidden">
		<?global $arSite;?>
		<span itemprop="name"><?=$arSite["NAME"]?></span>

        <span itemprop="description">Ставропольская химическая компания является крупнейшим стабильно развивающимся предприятием России по выпуску стабилизаторов ПВХ. ООО «СХК» обладает производственными мощностями, позволяющими ежегодно производить до 18 тысяч тонн продукции: стеаратов металлов термостабилизаторов ПВХ, солей свинца, комплексных стабилизаторов ПВХ, Глета свинцового (оксида свинца).</span>
        <a itemprop="url" href="https://chemicalfactory.ru">https://chemicalfactory.ru</a>
        <span itemprop="priceRange">RUB</span>
        <img itemprop="logo" src="https://chemicalfactory.ru/include/logo_svg.php" alt="Логотип компании">
        <span itemprop="openingHours">Пн - Пт: 8.00 - 17.00
Сб - Вс: выходные</span>

        <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
    <span itemprop="postalCode">355035</span>,
    <span itemprop="addressCountry">Россия</span>,
    <span itemprop="addressLocality">г. Ставрополь</span>,
    <span itemprop="streetAddress">ул. 2-я промышленная д. 3</span>
    </span>

	</div>

	<h3 class="contacts-list__section-title switcher-title font_22 color_333">

		<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/contacts-site-address-page.php"),Array(),Array("MODE"=>"html"));?>

	</h3>
    
    <div class="contacts__row">
		<div class="contacts__col contacts__col--left flex-1">
			<div class="contacts__content-wrapper">
				<?/*
					<div class="contacts__panel-wrapper">
						<?
						// tabs
						if($bUseTabs && $bUseMap){
							include realpath(__DIR__.'/../include_tabs.php');
						}

						// region & city selects
						include realpath(__DIR__.'/../include_filter.php');
						?>
					</div>
				*/?>
				<div class="contacts__ajax_items <?=($bUseTabs && $bUseMap ? 'contacts__tab-content contacts__tab-content--map' : '')?>">
					<?
					// restart buffer if ajax
					CAllcorp3::checkRestartBuffer($bFront = true, $param = '', $reset = true);
					?>
					<?if($itemsCnt):?>
						<?
						if($bUseMap){
							include realpath(__DIR__.'/../include_map.php');
						}
						?>
					<?else:?>
						<div class="alert alert-warning"><?=GetMessage('SECTION_EMPTY')?></div>
					<?endif;?>

					<?@include_once($arParams["SECTION_ELEMENTS_TYPE_VIEW"].'.php');?>

					<?
					// die if ajax
					CAllcorp3::checkRestartBuffer($bFront = true);
					?>
				</div>
			</div>
		</div>
		<div class="contacts__col contacts__col--right">
			<div class="contacts__sticky-panel sticky-block rounded-4 contacts__sticky-panel--without-image">
				<div class="contacts__sticky-panel__info">
					<div class="contacts__sticky-panel__desc contacts__desc" >
						<?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-desc.php", Array(), Array("MODE" => "html", "NAME" => "Description"));?>
					</div>
					<div class="hidden"><?CAllcorp3::showContactAddr(Loc::getMessage('T_CONTACTS_MAIN_OFFICE'), false);?></div>
					<div class="contacts__sticky-panel__properties">
						<div class="contacts__sticky-panel__property">
							<?CAllcorp3::showContactPhones(Loc::getMessage('T_CONTACTS_PHONE'), false);?>
						</div>
						<div class="contacts__sticky-panel__property">
							<?CAllcorp3::showContactEmail(Loc::getMessage('T_CONTACTS_EMAIL'), false);?>
						</div>
					</div>
					<?if($bUseFeedback):?>
						<div class="contacts__sticky-panel__btn-wraper">
							<span>
								<span class="btn btn-default btn-wide btn-transparent-border bg-theme-target border-theme-target animate-load" data-event="jqm" data-param-id="aspro_allcorp3_question" data-name="question"><?=Loc::getMessage('T_CONTACTS_QUESTION2')?></span>
							</span>
						</div>
					<?endif;?>
				</div>
			</div>
		</div>
	</div>
</div>