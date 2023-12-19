<?
/*
AddEventHandler('main',   'OnEpilog',   '_Check404Error', 1);
function _Check404Error(){
  if(defined('ERROR_404') && ERROR_404=='Y' || CHTTP::GetLastStatus() == "404 Not Found"){
    GLOBAL $APPLICATION;
    $APPLICATION->RestartBuffer();
    $APPLICATION->SetPageProperty("keywords", "Страница не найдена");
    $APPLICATION->SetPageProperty("title", "Страница не найдена");
    $APPLICATION->SetPageProperty("description", "Страница не найдена");
    $APPLICATION->SetTitle("Страница не найдена");
    require $_SERVER['DOCUMENT_ROOT'].'/404.php';
  }
}
*/
?>