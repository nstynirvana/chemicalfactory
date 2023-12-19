<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use \Bitrix\Main\Localization\Loc;
?>
<div class="contacts-v2" itemscope itemtype="http://schema.org/Organization">
	<?//hidden text for validate microdata?>
	<div class="hidden">
		<?global $arSite;?>
		<span itemprop="name"><?=$arSite["NAME"]?></span>
	</div>

	<?/*
	<div class="contacts-list__section-title switcher-title font_22 color_333">
		<?=$arSection['SECTION']['NAME']?>
	</div>
	*/?>

	<div class="contacts__row">
		<div class="contacts__col contacts__col--left flex-1">
			<div class="contacts__content-wrapper">
				<div class="contacts__panel-wrapper">
					<?
					// tabs
					if($bUseTabs && $bUseMap){
						include realpath(__DIR__.'/../include_tabs.php');
					}
					?>
				</div>

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

						<div class="contacts__desc" itemprop="description">
							<?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-regions-desc.php", Array(), Array("MODE" => "html", "NAME" => "Description"));?>
						</div>
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
			<?ob_start();?>
			<?CAllcorp3::showContactImg();?>
			<?$htmlImage = trim(ob_get_clean());?>

			<div class="contacts__sticky-panel sticky-block rounded-4<?=($htmlImage ? '' : ' contacts__sticky-panel--without-image')?>">
				<?if($htmlImage):?>
					<div class="contacts__sticky-panel__image dark-block-after rounded-4">
						<?=$htmlImage?>
						<?CAllcorp3::showContactAddr(Loc::getMessage('T_CONTACTS_MAIN_OFFICE'), false);?>
					</div>
				<?endif;?>

				<div class="contacts__sticky-panel__info">
					<?CAllcorp3::showContactAddr(Loc::getMessage('T_CONTACTS_MAIN_OFFICE'), false, 'font_18 color_333 switcher-title');?>
					<div class="contacts__sticky-panel__properties">
						<div class="contacts__sticky-panel__property">
							<?CAllcorp3::showContactSchedule(Loc::getMessage('T_CONTACTS_SCHEDULE'), false);?>
						</div>
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