<?
namespace Aspro\Allcorp3\Components;

use Bitrix\Main\Loader,
    Bitrix\Main\Localization\Loc,
    Bitrix\Main\SystemException,
    CAllcorp3 as Solution;

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
Loc::loadMessages(__FILE__);

class EyedController extends \Bitrix\Main\Engine\Controller {
	public function configureActions(){
        return array(
            'getEyed' => array(
                'prefilters' => array(),
            ),
        );
    }

    public function getEyedAction($siteId, $lang, $signedParameters = ''){
    	$this->includeModules();

        $this->checkSite($siteId);

        $componentName = Solution::partnerName.':eyed.'.Solution::solutionName;

        try{
	        $signer = new \Bitrix\Main\Component\ParameterSigner;
			$arParams = $signer->unsignParameters(str_replace(':', '.', $componentName), $signedParameters);
        }
        catch(\Bitrix\Main\Security\Sign\BadSignatureException $e){
			die();
		}

        $template = $arParams['COMPONENT_TEMPLATE'] ?: '';

        $arParams['CUSTOM_SITE_ID'] = $siteId;
        $arParams['CUSTOM_LANGUAGE_ID'] = $lang;

        $GLOBALS['APPLICATION']->RestartBuffer();

        $arResult = $GLOBALS['APPLICATION']->IncludeComponent(
			$componentName,
			$template,
			$arParams
		);

       \CMain::FinalActions();
        flush();
        die();
    }

    protected function includeModules(){
        if(!Loader::includeModule(Solution::moduleID)){
            throw new SystemException(Loc::getMessage('EA_C_ERROR_MODULE_NOT_INSTALLED'));
        }
    }

    protected function checkSite($siteId){
        if(!$siteId){
            throw new SystemException(Loc::getMessage('EA_C_ERROR_BAD_SITE_PARAMS'));
        }
    }
}