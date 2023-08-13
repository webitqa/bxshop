<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Регистрация");
$APPLICATION->SetPageProperty("title", "Регистрация");
$APPLICATION->SetPageProperty("keywords", "Регистрация");
$APPLICATION->SetPageProperty("description", "Регистрация");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent("bitrix:main.register", "registration", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"SHOW_FIELDS" => "",	// Поля, которые показывать в форме
		"REQUIRED_FIELDS" => "",	// Поля, обязательные для заполнения
		"AUTH" => "Y",	// Автоматически авторизовать пользователей
		"USE_BACKURL" => "Y",	// Отправлять пользователя по обратной ссылке, если она есть
		"SUCCESS_PAGE" => "/personal/",	// Страница окончания регистрации
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"USER_PROPERTY" => "",	// Показывать доп. свойства
		"USER_PROPERTY_NAME" => "",	// Название блока пользовательских свойств
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>