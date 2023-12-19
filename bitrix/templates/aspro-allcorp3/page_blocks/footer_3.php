<?
include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
include($_SERVER['DOCUMENT_ROOT'].SITE_DIR.'include/footer/settings.php');
?>
<footer id="footer" class="footer-3 footer footer--color-<?=$footerColor?>">
	<div class="footer__main-part">
		<div class="maxwidth-theme">
			<div class="footer__main-part-inner footer__main-part-inner--pb42">
				<div class="footer__part footer--menu-padding flex-50-991 flex-100-767">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
						array(
							"COMPONENT_TEMPLATE" => ".default",
							"PATH" => SITE_DIR."include/footer/menu/menu_bottom6.php",
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "",
							"AREA_FILE_RECURSIVE" => "Y",
							"EDIT_TEMPLATE" => "include_area.php"
						),
						false, array("HIDE_ICONS" => "Y")
					);?>

					<div class="line-block line-block--48 line-block--flex-wrap">
						<?//show social?>
						<?$blockOptions = array(
							'PARAM_NAME' => 'FOOTER_TOGGLE_SOCIAL',
							'BLOCK_TYPE' => 'SOCIAL',
							'IS_AJAX' => $bAjax,
							'AJAX_BLOCK' => $ajaxBlock,
							'VISIBLE' => $bShowSocial,
							'HIDE_MORE' => false,
							'WRAPPER' => 'footer__social line-block__item footer__info-item social-'.$footerColor,
						);?>
						<?=\Aspro\Functions\CAsproAllcorp3::showFooterBlock($blockOptions);?>

						<?//check subscribe text?>
						<?$blockOptions = array(
							'PARAM_NAME' => 'FOOTER_TOGGLE_SUBSCRIBE',
							'BLOCK_TYPE' => 'SUBSCRIBE',
							'COMPACT' => true,
							'IS_AJAX' => $bAjax,
							'AJAX_BLOCK' => $ajaxBlock,
							'VISIBLE' => $bShowSubscribe && \Bitrix\Main\ModuleManager::isModuleInstalled("subscribe"),
							'SUBSCRIBE_PARAMS' => array(),
							'WRAPPER' => 'line-block__item footer__info-item',
						);?>
						<?=\Aspro\Functions\CAsproAllcorp3::showFooterBlock($blockOptions);?>
						
						<?//show lang?>
						<?
						$arShowSites = \Aspro\Functions\CAsproAllcorp3::getShowSites();
						$countSites = count($arShowSites);
						$blockOptions = array(
							'PARAM_NAME' => 'FOOTER_TOGGLE_LANG',
							'BLOCK_TYPE' => 'LANG',
							'IS_AJAX' => $bAjax,
							'AJAX_BLOCK' => $ajaxBlock,
							'VISIBLE' => $bShowLang && $countSites > 1,
							'DROPDOWN_TOP' => true,
							'WRAPPER' => 'footer__lang line-block__item footer__info-item',
							'SITE_SELECTOR_NAME' => $siteSelectorName,
							'TEMPLATE' => 'main',
							'SITE_LIST' => $arShowSites,
						);?>
						<?=\Aspro\Functions\CAsproAllcorp3::showFooterBlock($blockOptions);?>
					</div>
				</div>

				<?//show phone, address, email wrapper?>
				<?$visible = (($bShowPhone && $bPhone) || $bShowEmail || $bShowAddress);?>
				<?
				$arDropdownCallback = explode(",", $arTheme['SHOW_DROPDOWN_CALLBACK']['VALUE']);
				$bDropdownCallback =  in_array('FOOTER', $arDropdownCallback) ? 'Y' : 'N';
				
				$arDropdownEmail = explode(",", $arTheme['SHOW_DROPDOWN_EMAIL']['VALUE']);
				$bDropdownEmail =  in_array('FOOTER', $arDropdownEmail) ? 'Y' : 'N';
				
				$arDropdownSocial = explode(",", $arTheme['SHOW_DROPDOWN_SOCIAL']['VALUE']);
				$bDropdownSocial =  in_array('FOOTER', $arDropdownSocial) ? 'Y' : 'N';
				
				$arDropdownAddress = explode(",", $arTheme['SHOW_DROPDOWN_ADDRESS']['VALUE']);
				$bDropdownAddress =  in_array('FOOTER', $arDropdownAddress) ? 'Y' : 'N';
				
				$arDropdownSchedule = explode(",", $arTheme['SHOW_DROPDOWN_SCHEDULE']['VALUE']);
				$bDropdownSchedule =  in_array('FOOTER', $arDropdownSchedule) ? 'Y' : 'N';
				
				$blockOptions = array(
					'PARAM_NAME' => 'FOOTER_ALL_BLOCK',
					'BLOCK_TYPE' => 'FOOTER_ALL_BLOCK',
					'IS_AJAX' => $bAjax,
					'AJAX_BLOCK' => $ajaxBlock,
					'VISIBLE' => $visible,
					'WRAPPER' => 'footer__part footer--mw500 flex-50-991 flex-100-767',
					'INNER_WRAPPER' => 'footer__info footer__info--pt-2',
					'ITEMS' => [
						[ //show phone and callback
							'PARAM_NAME' => 'FOOTER_TOGGLE_PHONE',
							'BLOCK_TYPE' => 'PHONE',
							'VISIBLE' => $bShowPhone && $bPhone,
							'DROPDOWN_TOP' => true,
							'WRAPPER' => 'footer__phone footer__info-item',
							'CALLBACK' => $bShowCallback && $bCallback,
							'MESSAGE' => GetMessage("S_CALLBACK"),
							'DROPDOWN_CALLBACK' =>  $bDropdownCallback,
							'DROPDOWN_EMAIL' => $bDropdownEmail,
							'DROPDOWN_SOCIAL' =>  $bDropdownSocial,
							'DROPDOWN_ADDRESS' =>  $bDropdownAddress,
							'DROPDOWN_SCHEDULE' =>  $bDropdownSchedule,
						],
						[ //show email
							'PARAM_NAME' => 'FOOTER_TOGGLE_EMAIL',
							'BLOCK_TYPE' => 'EMAIL',
							'VISIBLE' => $bShowEmail,
							'WRAPPER' => 'footer__info-item',
						],
						[ //show address
							'PARAM_NAME' => 'FOOTER_TOGGLE_ADDRESS',
							'BLOCK_TYPE' => 'ADDRESS',
							'VISIBLE' => $bShowAddress,
							'WRAPPER' => 'footer__address footer__info-item',
						]
					]
				);?>
				<?=\Aspro\Functions\CAsproAllcorp3::showFooterBlock($blockOptions);?>
			</div>			
		</div>
	</div>

	<div class="footer__bottom-part">
		<div class="maxwidth-theme">
			<div class="footer__bottom-part-inner">
				<div class="footer__bottom-part-items-wrapper">
					<div class="footer__part-item">
						<div class="footer__copy font_13 color_999">
							<?$APPLICATION->IncludeFile(SITE_DIR."include/footer/copy.php", Array(), Array(
									"MODE" => "php",
									"NAME" => "Copyright",
									"TEMPLATE" => "include_area.php",
								)
							);?>
						</div>
					</div>

					<div class="footer__part-item">
						<div class="footer__license font_13">
							<?$APPLICATION->IncludeFile(SITE_DIR."include/footer/confidentiality.php", Array(), Array(
									"MODE" => "php",
									"NAME" => "Confidentiality",
									"TEMPLATE" => "include_area.php",
								)
							);?>
						</div>
					</div>

					<?//show eyed block?>
					<?$blockOptions = array(
						'PARAM_NAME' => 'FOOTER_TOGGLE_EYED',
						'BLOCK_TYPE' => 'EYED',
						'IS_AJAX' => $bAjax,
						'AJAX_BLOCK' => $ajaxBlock,
						'VISIBLE' => $bShowEyed,
						'WRAPPER' => 'footer__part-item fill-theme-parent-all color-theme-parent-all',
					);?>
					<?=\Aspro\Functions\CAsproAllcorp3::showFooterBlock($blockOptions);?>

					<?//show sitemap block?>
					<?$blockOptions = array(
						'PARAM_NAME' => 'FOOTER_TOGGLE_SITEMAP',
						'BLOCK_TYPE' => 'SITEMAP',
						'IS_AJAX' => $bAjax,
						'AJAX_BLOCK' => $ajaxBlock,
						'VISIBLE' => $bShowSitemap,
						'WRAPPER' => 'footer__part-item footer__part-item-sitemap fill-theme-parent-all color-theme-parent-all font_13',
					);?>
					<?=\Aspro\Functions\CAsproAllcorp3::showFooterBlock($blockOptions);?>

					<?if($arTheme['PRINT_BUTTON'] == 'Y'):?>
						<div class="footer__part-item">
							<div class="footer__print font_13 color_999">
								<?=CAllcorp3::ShowPrintLink();?>
							</div>
						</div>
					<?endif;?>
					
					<?//show pay systems?>
					<?$blockOptions = array(
						'PARAM_NAME' => 'FOOTER_TOGGLE_PAY_SYSTEMS',
						'BLOCK_TYPE' => 'PAY_SYSTEMS',
						'IS_AJAX' => $bAjax,
						'AJAX_BLOCK' => $ajaxBlock,
						'VISIBLE' => $bShowPaySystems,
						'WRAPPER' => 'footer__pays footer__pays footer__part-item',
					);?>
					<?=\Aspro\Functions\CAsproAllcorp3::showFooterBlock($blockOptions);?>

					<div id="bx-composite-banner" class="footer__part-item"></div>

					<?//show developer block?>
					<?$blockOptions = array(
						'PARAM_NAME' => 'FOOTER_TOGGLE_DEVELOPER',
						'BLOCK_TYPE' => 'DEVELOPER',
						'IS_AJAX' => $bAjax,
						'AJAX_BLOCK' => $ajaxBlock,
						'VISIBLE' => $bShowDeveloper,
						'WRAPPER' => 'footer__developer footer__part-item font_12 color_999',
					);?>
					<?=\Aspro\Functions\CAsproAllcorp3::showFooterBlock($blockOptions);?>
				</div>
			</div>
		</div>
	</div>
</footer>