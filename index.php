<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "\"Ставропольская химическая компания\" - крупнейший Российский производитель стабилизаторов полимеров. Низкие цены, гарантированное качество сертифицированной продукции, индивидуальный подход к каждому клиенту! Подробности можете узнать на нашем сайте или по телефону: +7 8652 23-90-23");
$APPLICATION->SetPageProperty("title", "Производство стабилизаторов полимеров - Ставропольская химическая компания");
$APPLICATION->SetTitle("Главная");
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

<?
AddEventHandler("main", "OnEpilog", "My404PageInSiteStyle");
function My404PageInSiteStyle()
{
    if(defined('ERROR_404') && ERROR_404 == 'Y')
    {
        global $APPLICATION;
        $APPLICATION->RestartBuffer();
        include $_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php";
        include $_SERVER['DOCUMENT_ROOT'].'/404.php';
        include $_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php";
    }
}

?>
