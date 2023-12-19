<?
if(!class_exists('CHTTP')){
	include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
}
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");



require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->AddHeadString('<meta name="robots" content="noindex, follow" />', true);
$APPLICATION->SetTitle("Страница не найдена");
$APPLICATION->SetPageProperty("title", "Страница не найдена");
$APPLICATION->SetPageProperty("description", "Страница не найдена");
?>
<style>.right_block.wide_, .right_block.wide_N{float:none !important;width:100% !important;}.page-top{display: none;}</style>
<div class="maxwidth-theme">
	<div class="page_error_block">
		<div class="page_not_found" width="100%" border="0" cellpadding="0" cellspacing="0">
			<div class="image">
				<svg width="317" height="113" viewBox="0 0 317 113" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g opacity="0.1">
					<path d="M74.5291 28.1476C77.209 30.0966 77.8015 33.8491 75.8524 36.529L42.7826 82H69V70C69 66.6863 71.6863 64 75 64C78.3137 64 81 66.6863 81 70V82H93C96.3137 82 99 84.6863 99 88C99 91.3137 96.3137 94 93 94H81V107C81 110.314 78.3137 113 75 113C71.6863 113 69 110.314 69 107V94H31C28.7433 94 26.6774 92.7337 25.6533 90.7227C24.6293 88.7116 24.8203 86.2961 26.1476 84.471L66.1476 29.471C68.0966 26.7911 71.8491 26.1985 74.5291 28.1476Z" fill="#3761E9"/>
					<path d="M292.529 28.1476C295.209 30.0966 295.801 33.8491 293.852 36.529L260.783 82H287V70C287 66.6863 289.686 64 293 64C296.314 64 299 66.6863 299 70V82H311C314.314 82 317 84.6863 317 88C317 91.3137 314.314 94 311 94H299V107C299 110.314 296.314 113 293 113C289.686 113 287 110.314 287 107V94H249C246.743 94 244.677 92.7337 243.653 90.7227C242.629 88.7116 242.82 86.2961 244.148 84.471L284.148 29.471C286.097 26.7911 289.849 26.1985 292.529 28.1476Z" fill="#3761E9"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M171 27C147.252 27 128 46.2518 128 70C128 93.7482 147.252 113 171 113C194.748 113 214 93.7482 214 70C214 46.2518 194.748 27 171 27ZM140 70C140 52.8792 153.879 39 171 39C188.121 39 202 52.8792 202 70C202 87.1208 188.121 101 171 101C153.879 101 140 87.1208 140 70Z" fill="#3761E9"/>
					</g>
					<path class="fill-theme-svg" d="M55.5018 1.1279C58.1926 3.0619 58.8061 6.81103 56.8721 9.50181L17.7015 64H51V47C51 43.6863 53.6863 41 57 41C60.3137 41 63 43.6863 63 47V64H78C81.3137 64 84 66.6863 84 70C84 73.3137 81.3137 76 78 76H63V92C63 95.3137 60.3137 98 57 98C53.6863 98 51 95.3137 51 92V76H6.00002C3.74932 76 1.6879 74.7404 0.660974 72.7376C-0.365956 70.7348 -0.185663 68.3258 1.12793 66.4982L47.1279 2.49818C49.0619 -0.192605 52.8111 -0.806099 55.5018 1.1279Z" fill="#3761E9"/>
					<path class="fill-theme-svg" fill-rule="evenodd" clip-rule="evenodd" d="M102 49C102 21.938 123.938 -6.76274e-06 151 -6.76274e-06C178.062 -6.76274e-06 200 21.938 200 49C200 76.0619 178.062 98 151 98C123.938 98 102 76.0619 102 49ZM151 12C130.565 12 114 28.5655 114 49C114 69.4345 130.565 86 151 86C171.435 86 188 69.4345 188 49C188 28.5655 171.435 12 151 12Z" fill="#3761E9"/>
					<path class="fill-theme-svg" d="M274.872 9.50181C276.806 6.81103 276.193 3.0619 273.502 1.1279C270.811 -0.806099 267.062 -0.192605 265.128 2.49818L219.128 66.4982C217.814 68.3258 217.634 70.7348 218.661 72.7376C219.688 74.7404 221.749 76 224 76H269V92C269 95.3137 271.686 98 275 98C278.314 98 281 95.3137 281 92V76H296C299.314 76 302 73.3137 302 70C302 66.6863 299.314 64 296 64H281V47C281 43.6863 278.314 41 275 41C271.686 41 269 43.6863 269 47V64H235.702L274.872 9.50181Z" fill="#3761E9"/>
				</svg>
			</div>
			<div class="description">
				<div class="subtitle404 option-font-bold">Страница не найдена</div>
				<div class="descr_text404">Неправильно набран адрес или такой страницы не существует</div>
				<a class="btn btn-transparent-border btn-lg btn-mainpage" onclick="history.back()">Вернуться назад</a>
				<a class="btn btn-default btn-lg btn-mainpage" href="<?=SITE_DIR?>"><span>На главную</span></a>
			</div>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>