<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$APPLICATION->IncludeComponent(
    "aspro:theme.allcorp3", 
    ".default", 
    array(
        'SHOW_TEMPLATE' => 'Y'
    ), 
    false, 
    array(
        'HIDE_ICONS' => 'Y'
    )
);
?>
<?\Aspro\Allcorp3\Notice::showOnAuth();?>    
<?@include_once('bottom_footer_custom.php');?>