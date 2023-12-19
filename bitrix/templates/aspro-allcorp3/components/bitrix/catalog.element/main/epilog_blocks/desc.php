<?
use \Bitrix\Main\Localization\Loc;

$bTab = isset($tabCode) && $tabCode === 'desc';
?>
<?//show desc block?>
<?if($templateData['DETAIL_TEXT']):?>
    <?if($bTab):?>
        <?if(!isset($bShow_desc)):?>
            <?$bShow_desc = true;?>
        <?else:?>

            <div class="char-side__title font_15 color_333">Описание</div>
            <br>

            <div class="tab-pane <?=(!($iTab++) ? 'active' : '')?>" id="desc">
                <?$APPLICATION->ShowViewContent('PRODUCT_DETAIL_TEXT_INFO')?>
            </div>
        <?endif;?>
    <?else:?>

        <div class="char-side__title font_15 color_333">Описание</div>

        <div class="detail-block ordered-block desc">
            <?$APPLICATION->ShowViewContent('PRODUCT_DETAIL_TEXT_INFO')?>
        </div>
    <?endif;?>
<?endif;?>