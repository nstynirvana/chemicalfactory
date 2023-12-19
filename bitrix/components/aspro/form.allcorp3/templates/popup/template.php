<?if( !defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true ) die();?>
<?$this->setFrameMode(false);?>
<?use \Bitrix\Main\Localization\Loc;?>
<div class="flexbox">
	<div class="form popup<?=($arResult['isFormNote'] == 'Y' ? ' success' : '')?><?=($arResult['isFormErrors'] == 'Y' ? ' error' : '')?>">
		<?if($arResult["isFormNote"] == "Y"){?>
			<div class="form-header">
				<div class="text">
					<div class="title switcher-title font_24 color_333"><?=$arResult["IBLOCK_TITLE"]?></div>
				</div>
			</div>
			<div class="form-body">
				<div class="form-inner form-inner--popup flex-1">
					<div class="form-send rounded-4 bordered">
						<div class="flexbox flexbox--direction-row">
							<div class="form-send__icon form-send--mr-30">
								<?=CAllcorp3::showIconSvg('send', SITE_TEMPLATE_PATH.'/images/svg/Form_success.svg');?>
							</div>
							<div class="form-send__info form-send--mt-n4">
								<div class="form-send__info-title switcher-title font_18"><?=Loc::getMessage("PHANKS_TEXT") ?></div>
								<div class="form-send__info-text">
									<?if ($arResult["isFormErrors"] == "Y"):?>
										<?=$arResult["FORM_ERRORS_TEXT"]?>
									<?else:?>
										<?$successNoteFile = SITE_DIR."include/form/success_{$arResult["arForm"]["SID"]}.php";?>
										<?if (\Bitrix\Main\IO\File::isFileExists(\Bitrix\Main\Application::getDocumentRoot().$successNoteFile)):?>
											<?$APPLICATION->IncludeFile($successNoteFile, array(), array("MODE" => "html", "NAME" => "Form success note"));?>
										<?elseif($arParams["SUCCESS_MESSAGE"]):?>
											<?=$arParams["~SUCCESS_MESSAGE"];?>
										<?else:?>
											<?=Loc::getMessage("SUCCESS_SUBMIT_FORM");?>
										<?endif;?>
										<script>
											if (arAllcorp3Options['THEME']['USE_FORMS_GOALS'] !== 'NONE') {
												var id = '_'+'<?=$arParams["IBLOCK_ID"]?>';
												var eventdata = {goal: 'goal_webform_success' + (arAllcorp3Options['THEME']['USE_FORMS_GOALS'] === 'COMMON' ? '' : id), params: <?=CUtil::PhpToJSObject($arParams, false)?>};
												BX.onCustomEvent('onCounterGoals', [eventdata]);
											}
											$('.ocb_frame').addClass('success');
										</script>
									<?endif;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-footer">
				<?if ( $arParams["DISPLAY_CLOSE_BUTTON"] != "N" ):?>
					<div class="btn btn-transparent-border btn-lg jqmClose"><?=($arParams["CLOSE_BUTTON_NAME"] ? $arParams["CLOSE_BUTTON_NAME"] : Loc::getMessage("SEND_MORE"));?></div>
				<?endif;?>
			</div>
		<?}else{?>
			<?=$arResult["FORM_HEADER"]?>
				<div class="form-header">
					<div class="text">
						<?if( $arResult["isIblockTitle"] ){?>
							<div class="title switcher-title font_24 color_333"><?=$arResult["IBLOCK_TITLE"]?></div>
						<?}?>
						<?if( $arResult["isIblockDescription"] && $arResult["IBLOCK_DESCRIPTION"]){
							if( $arResult["IBLOCK_DESCRIPTION_TYPE"] == "text" ){?>
								<div class="form_desc form_14 color_666"><p><?=$arResult["IBLOCK_DESCRIPTION"]?></p></div>
							<?}else{?>
								<div class="form_desc form_14 color_666"><?=$arResult["IBLOCK_DESCRIPTION"]?></div>
							<?}
						}?>
					</div>
				</div>
				<?if($arResult['isFormErrors'] == 'Y'):?>
					<div class="form-error alert alert-danger">
						<?=$arResult['FORM_ERRORS_TEXT']?>
					</div>
				<?endif;?>
				<div class="form-body">
					<?if(is_array($arResult["QUESTIONS"])):?>
						<?foreach( $arResult["QUESTIONS"] as $FIELD_SID => $arQuestion ){
							if( $arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden' ){
								echo $arQuestion["HTML_CODE"];
							}else{?>
								<div class="row <?=(strpos($FIELD_SID, 'HIDDEN') !== false ? 'hidden' : '');?>" data-SID="<?=$FIELD_SID?>">
									<div class="col-md-12 <?=($arQuestion['FIELD_TYPE'] == 'checkbox' ? 'style_check bx_filter' : '');?>">
										<div class="form-group  <?=( $arQuestion['VALUE'] || (in_array($arQuestion['FIELD_TYPE'], array('list', 'file', 'date', 'datetime', 'video', 'directory', 'sequence'))) ? "input-filed" : "");?>">
											
											<?=str_replace('for="', 'for="POPUP_', $arQuestion["CAPTION"]);?>
											<div class="input">
												<?=str_replace('id="', 'id="POPUP_', $arQuestion["HTML_CODE"])?>
												<?if($arQuestion['FIELD_TYPE'] == "file" && $arQuestion['MULTIPLE'] == 'Y'):?>
													<div class="add_file color-theme"><span><?=GetMessage('JS_FILE_ADD');?></span></div>
												<?endif;?>
											</div>
											<?if( !empty( $arQuestion["HINT"] ) ){?>
												<div class="hint"><?=$arQuestion["HINT"]?></div>
											<?}?>
										</div>
									</div>
								</div>
							<?}
						}?>
					<?endif;?>
					<?if($arResult["isUseCaptcha"] === "Y"):?>
						<div class="form-control captcha-row">
							<?=$arResult["CAPTCHA_CAPTION"];?>
							<div class="captcha_image">
								<img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"])?>" class="captcha_img" />
								<input type="hidden" name="captcha_sid" class="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"])?>" />
								<div class="captcha_reload"></div>
								<span class="refresh"><a href="javascript:;" rel="nofollow"><?=GetMessage("REFRESH")?></a></span>
							</div>
							<div class="captcha_input">
								<input type="text" class="inputtext form-control captcha" name="captcha_word" size="30" maxlength="50" value="" required />
							</div>
						</div>
					<?endif;?>
				</div>
				<div class="form-footer clearfix">
					<?if($arParams["SHOW_LICENCE"] == "Y"):?>
						<div class="licence_block form-checkbox">
							<input type="checkbox" class="form-checkbox__input form-checkbox__input--visible" id="licenses_popup_<?=$arParams["IBLOCK_ID"];?>" <?=(COption::GetOptionString("aspro.allcorp3", "LICENCE_CHECKED", "N") == "Y" ? "checked" : "");?> name="licenses_popup" required value="Y">
							<label for="licenses_popup_<?=$arParams["IBLOCK_ID"];?>" class="form-checkbox__label">
								<span>
									<?include(str_replace('//', '/', $_SERVER['DOCUMENT_ROOT'].SITE_DIR."include/licenses_text.php"));?>
								</span>
								<span class="form-checkbox__box"></span>
							</label>
						</div>
					<?endif;?>
					<div class="">
						<?=str_replace('class="', 'class="btn-lg ', $arResult["SUBMIT_BUTTON"])?>
					</div>
				</div>
			<?=$arResult["FORM_FOOTER"]?>
		<?}?>
	</div>
</div>

<script>
	BX.message({
	FORM_FILE_DEFAULT: '<?= Loc::getMessage('FORM_FILE_DEFAULT') ?>',
	});
	$(document).ready(function(){
		$('.popup form[name="<?=$arResult["IBLOCK_CODE"]?>"]').validate({
			ignore: ".ignore",
			highlight: function( element ){
				$(element).parent().addClass('error');
			},
			unhighlight: function( element ){
				$(element).parent().removeClass('error');
			},
			submitHandler: function( form ){
				if( $('.popup form[name="<?=$arResult["IBLOCK_CODE"]?>"]').valid() ){
					$(form).find('button[type="submit"]').attr('disabled', 'disabled');
					var eventdata = {type: 'form_submit', form: form, form_name: '<?=$arResult["IBLOCK_CODE"]?>'};
					BX.onCustomEvent('onSubmitForm', [eventdata]);
				}
			},
			errorPlacement: function( error, element ){
				error.insertBefore(element);
			},
			messages:{
				licenses_popup: {
					required : BX.message('JS_REQUIRED_LICENSES')
				}
			}
		});

		if(arAllcorp3Options['THEME']['PHONE_MASK'].length){
			var base_mask = arAllcorp3Options['THEME']['PHONE_MASK'].replace( /(\d)/g, '_' );
			$('.popup form[name="<?=$arResult["IBLOCK_CODE"]?>"] input.phone').inputmask('mask', {'mask': arAllcorp3Options['THEME']['PHONE_MASK'], 'showMaskOnHover': false });
			$('.popup form[name="<?=$arResult["IBLOCK_CODE"]?>"] input.phone').blur(function(){
				if( $(this).val() == base_mask || $(this).val() == '' ){
					if( $(this).hasClass('required') ){
						$(this).parent().find('div.error').html(BX.message('JS_REQUIRED'));
					}
				}
			});
		}
		
		if(arAllcorp3Options['THEME']['DATE_MASK'].length)
		{
			$('.popup form[name="<?=$arResult["IBLOCK_CODE"]?>"] input.date').inputmask('datetime', {
				'inputFormat':  arAllcorp3Options['THEME']['DATE_MASK'],
				'placeholder': arAllcorp3Options['THEME']['DATE_PLACEHOLDER'],
				'showMaskOnHover': false
			});
		}

		if(arAllcorp3Options['THEME']['DATETIME_MASK'].length)
		{
			$('.popup form[name="<?=$arResult["IBLOCK_CODE"]?>"] input.datetime').inputmask('datetime', {
				'inputFormat':  arAllcorp3Options['THEME']['DATETIME_MASK'],
				'placeholder': arAllcorp3Options['THEME']['DATETIME_PLACEHOLDER'],
				'showMaskOnHover': false
			});
		}

		$('.jqmClose').closest('.jqmWindow').jqmAddClose('.jqmClose');

		$('input[type=file]').uniform({fileButtonHtml: BX.message('JS_FILE_BUTTON_NAME'), fileDefaultHtml: BX.message('FORM_FILE_DEFAULT')});
		$(document).on('change', 'input[type=file]', function(){
			if($(this).val())
			{
				$(this).closest('.uploader').addClass('files_add');
			}
			else
			{
				$(this).closest('.uploader').removeClass('files_add');
			}
		})
		$('.form .add_file').on('click', function(){
			var container = $(this).closest('.input'),
				index = container.find('input[type=file]').length+1,
				name = container.find('input[type=file]:first').attr('name');
			$('<input type="file" id="POPUP_FILE" name="'+name.replace('n0', 'n'+index)+'"   class="inputfile" value="" />').insertBefore($(this));
			$('input[type=file]').uniform({fileButtonHtml: BX.message('JS_FILE_BUTTON_NAME'), fileDefaultHtml: BX.message('FORM_FILE_DEFAULT')});
		})
	});
</script>