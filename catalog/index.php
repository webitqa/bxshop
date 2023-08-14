<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Игрушки");
?><?$APPLICATION->IncludeComponent("bitrix:catalog", "catalog", Array(
	"SECTIONS_VIEW_MODE" => "LIST",	// Вид списка подразделов
		"SECTIONS_SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
		"FILTER_VIEW_MODE" => "VERTICAL",	// Вид отображения умного фильтра
		"FILTER_HIDE_ON_MOBILE" => "N",	// Скрывать умный фильтр на мобильных устройствах
		"INSTANT_RELOAD" => "N",	// Мгновенная фильтрация при включенном AJAX
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"SEARCH_PAGE_RESULT_COUNT" => "50",	// Максимальное число результатов
		"SEARCH_RESTART" => "N",	// Искать без учета морфологии (при отсутствии результата поиска)
		"SEARCH_NO_WORD_LOGIC" => "N",	// Отключить обработку слов как логических операторов
		"SEARCH_USE_LANGUAGE_GUESS" => "N",	// Включить автоопределение раскладки клавиатуры
		"SEARCH_CHECK_DATES" => "N",	// Искать только в активных по дате документах
		"SEARCH_USE_SEARCH_RESULT_ORDER" => "N",	// Использовать сортировку результатов по релевантности
		"DETAIL_USE_VOTE_RATING" => "N",	// Включить рейтинг товара
		"DETAIL_USE_COMMENTS" => "N",	// Включить отзывы о товаре
		"DETAIL_BRAND_USE" => "N",	// Использовать компонент "Бренды"
		"DETAIL_DISPLAY_NAME" => "N",	// Выводить название элемента
		"DETAIL_IMAGE_RESOLUTION" => "16by9",	// Соотношение сторон изображения товара
		"DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",	// Порядок отображения блоков информации о товаре
		"DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",	// Порядок отображения блоков покупки товара
		"DETAIL_SHOW_SLIDER" => "N",	// Показывать слайдер для товаров
		"DETAIL_DETAIL_PICTURE_MODE" => array(	// Режим показа детальной картинки
			0 => "POPUP",
		),
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",	// Добавлять детальную картинку в слайдер
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",	// Показ описания для анонса на детальной странице
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",	// Одинаковые настройки показа кнопок добавления в корзину или покупки на всех страницах
		"COMMON_ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки
		"COMMON_SHOW_CLOSE_POPUP" => "Y",	// Показывать кнопку продолжения покупок во всплывающих окнах
		"MESS_PRICE_RANGES_TITLE" => "Цены",	// Название блока c расширенными ценами
		"MESS_DESCRIPTION_TAB" => "Описание",	// Текст вкладки "Описание"
		"MESS_PROPERTIES_TAB" => "Характеристики",	// Текст вкладки "Характеристики"
		"MESS_COMMENTS_TAB" => "Комментарии",	// Текст вкладки "Комментарии"
		"TOP_ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки на странице с top'ом товаров
		"SECTION_ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки на странице списка товаров
		"DETAIL_ADD_TO_BASKET_ACTION" => array(	// Показывать кнопки добавления в корзину и покупки на детальной странице товара
			0 => "ADD",
		),
		"PRODUCT_SUBSCRIPTION" => "Y",	// Разрешить оповещения для отсутствующих товаров
		"SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
		"SHOW_OLD_PRICE" => "N",	// Показывать старую цену
		"SHOW_MAX_QUANTITY" => "N",	// Показывать остаток товара
		"LAZY_LOAD" => "Y",	// Показать кнопку ленивой загрузки Lazy Load
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",	// Текст кнопки "Показать ещё"
		"LOAD_ON_SCROLL" => "N",	// Подгружать товары при прокрутке до конца
		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
		"MESS_BTN_COMPARE" => "Сравнение",	// Текст кнопки "Сравнение"
		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
		"MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",	// Сообщение о недоступности услуги
		"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
		"USE_SALE_BESTSELLERS" => "Y",	// Показывать список лидеров продаж
		"USE_BIG_DATA" => "N",	// Показывать персональные рекомендации
		"BIG_DATA_RCM_TYPE" => "personal",
		"SIDEBAR_SECTION_SHOW" => "Y",	// Показывать боковую панель в списке товаров
		"SIDEBAR_DETAIL_SHOW" => "N",	// Показывать боковую панель на детальной странице
		"SIDEBAR_PATH" => "",	// Путь к включаемой области для вывода информации в боковой панели
		"USE_ENHANCED_ECOMMERCE" => "N",	// Включить отправку данных в электронную торговлю
		"DETAIL_SHOW_POPULAR" => "Y",	// Показывать блок "Популярное в разделе"
		"DETAIL_SHOW_VIEWED" => "N",	// Показывать блок "Просматривали"
		"HIDE_USE_ALSO_BUY" => "",
		"USER_CONSENT" => "N",	// Запрашивать согласие
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
		"IBLOCK_TYPE" => "knit_shop",	// Тип инфоблока
		"IBLOCK_ID" => "4",	// Инфоблок
		"USE_FILTER" => "N",	// Показывать фильтр
		"USE_COMPARE" => "N",	// Разрешить сравнение товаров
		"SHOW_TOP_ELEMENTS" => "Y",	// Выводить топ элементов
		"SECTION_COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
		"SECTION_TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
		"PAGE_ELEMENT_COUNT" => "27",	// Количество элементов на странице
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке таблицы
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем товары в разделе
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки товаров в разделе
		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки товаров в разделе
		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки товаров в разделе
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
		"DETAIL_STRICT_SECTION_CHECK" => "Y",	// Строгая проверка раздела для детального показа элемента
		"LIST_META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства раздела
		"LIST_META_DESCRIPTION" => "-",	// Установить описание страницы из свойства раздела
		"LIST_BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства раздела
		"SECTION_BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
		"DETAIL_META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"DETAIL_META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"DETAIL_BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"DETAIL_SET_CANONICAL_URL" => "Y",	// Устанавливать канонический URL
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",	// Использовать код группы из переменной, если не задан раздел элемента
		"DETAIL_BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
		"SHOW_DEACTIVATED" => "N",	// Показывать деактивированные товары
		"SHOW_SKU_DESCRIPTION" => "N",	// Отображать описание для каждого торгового предложения
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_NOTES" => "",
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"SET_LAST_MODIFIED" => "Y",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"ADD_ELEMENT_CHAIN" => "Y",	// Включать название элемента в цепочку навигации
		"PRICE_CODE" => array(	// Тип цены
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"PRICE_VAT_INCLUDE" => "N",	// Включать НДС в цену
		"PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
		"BASKET_URL" => "/personal/cart/",	// URL, ведущий на страницу с корзиной покупателя
		"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"LINK_IBLOCK_TYPE" => "",	// Тип инфоблока, элементы которого связаны с текущим элементом
		"LINK_IBLOCK_ID" => "",	// ID инфоблока, элементы которого связаны с текущим элементом
		"LINK_PROPERTY_SID" => "",	// Свойство, в котором хранится связь
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL на страницу, где будет показан список связанных элементов
		"USE_ALSO_BUY" => "N",	// Показывать блок "С этим товаром покупают"
		"USE_GIFTS_DETAIL" => "N",	// Показывать блок "Подарки" в детальном просмотре
		"USE_GIFTS_SECTION" => "N",	// Показывать блок "Подарки" в списке
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "N",	// Показывать блок "Товары к подарку" в детальном просмотре
		"USE_STORE" => "N",	// Показывать блок "Количество товара на складе"
		"COMPATIBLE_MODE" => "N",	// Включить режим совместимости
		"USE_ELEMENT_COUNTER" => "Y",	// Использовать счетчик просмотров
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Товары",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
		"SHOW_404" => "Y",	// Показ специальной страницы
		"MESSAGE_404" => "",
		"TOP_ELEMENT_COUNT" => "9",	// Количество выводимых элементов
		"TOP_LINE_ELEMENT_COUNT" => "3",	// Количество элементов, выводимых в одной строке таблицы
		"TOP_ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем товары в разделе
		"TOP_ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки товаров в разделе
		"TOP_ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки товаров в разделе
		"TOP_ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки товаров в разделе
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
		"HIDE_NOT_AVAILABLE" => "N",	// Недоступные товары
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",	// Недоступные торговые предложения
		"CONVERT_CURRENCY" => "Y",	// Показывать цены в одной валюте
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",	// Включить сохранение информации о просмотре товара на детальной странице для старых шаблонов
		"USER_CONSENT_ID" => "0",	// Соглашение
		"USER_CONSENT_IS_CHECKED" => "Y",	// Галка по умолчанию проставлена
		"USER_CONSENT_IS_LOADED" => "N",	// Загружать текст сразу
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"COMPONENT_TEMPLATE" => "bootstrap_v4",
		"ADD_PICT_PROP" => "MORE_PHOTO",	// Дополнительная картинка основного товара
		"LABEL_PROP" => array(	// Свойство меток товара
			0 => "ATT_MATERIAL",
		),
		"SIDEBAR_SECTION_POSITION" => "right",	// Расположение боковой панели в списке товаров
		"SIDEBAR_DETAIL_POSITION" => "right",	// Расположение боковой панели на детальной странице
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => "",	// Выделять кнопки добавления в корзину и покупки на детальной странице товара
		"TOP_VIEW_MODE" => "SECTION",	// Показ элементов top'а
		"TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",	// Порядок отображения блоков товара
		"TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",	// Вариант отображения товаров
		"TOP_ENLARGE_PRODUCT" => "STRICT",	// Выделять товары в списке
		"TOP_SHOW_SLIDER" => "Y",	// Показывать слайдер для товаров
		"TOP_SLIDER_INTERVAL" => "3000",	// Интервал смены слайдов, мс
		"TOP_SLIDER_PROGRESS" => "N",	// Показывать полосу прогресса
		"LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",	// Порядок отображения блоков товара
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",	// Вариант отображения товаров
		"LIST_ENLARGE_PRODUCT" => "STRICT",	// Выделять товары в списке
		"LIST_SHOW_SLIDER" => "N",	// Показывать слайдер для товаров
		"LIST_SLIDER_INTERVAL" => "3000",
		"LIST_SLIDER_PROGRESS" => "N",
		"SEF_FOLDER" => "/catalog/",	// Каталог ЧПУ (относительно корня сайта)
		"CURRENCY_ID" => "RUB",	// Валюта, в которую будут сконвертированы цены
		"FILE_404" => "",	// Страница для показа (по умолчанию /404.php)
		"LABEL_PROP_MOBILE" => "",	// Свойства меток товара, отображаемые на мобильных устройствах
		"LABEL_PROP_POSITION" => "top-left",	// Расположение меток товара
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"compare" => "",
			"smart_filter" => "",
		)
	),
	false
);?><textarea id="BFI_DATA" style="width: 1px; height: 1px; display: none;"></textarea>
<title> </title>

<div id="WidgetFloaterPanels" translate="no" style="display: none; text-align: left; direction: ltr; visibility: hidden;" class="LTRStyle"> 
  <div id="WidgetFloater" style="display: none;" onmouseover="Microsoft.Translator.OnMouseOverFloater()" onmouseout="Microsoft.Translator.OnMouseOutFloater()"> 
    <div id="WidgetLogoPanel"> <span id="WidgetTranslateWithSpan"><span>TRANSLATE with </span><img id="FloaterLogo" /></span> <span id="WidgetCloseButton" title="Exit Translation" onclick="Microsoft.Translator.FloaterOnClose()">x</span></div>
   
    <div id="LanguageMenuPanel"> 
      <div class="DDStyle_outer"><input name="LanguageMenu_svid" type="text" id="LanguageMenu_svid" style="display: none;" autocomplete="on" value="en" onclick="this.select()" /> <input name="LanguageMenu_textid" type="text" id="LanguageMenu_textid" style="display: none;" autocomplete="on" onclick="this.select()" /> <span onselectstart="return false" tabindex="0" class="DDStyle" id="__LanguageMenu_header" onclick="return LanguageMenu &amp;&amp; !LanguageMenu.Show('__LanguageMenu_popup', event);" onkeydown="return LanguageMenu &amp;&amp; !LanguageMenu.Show('__LanguageMenu_popup', event);">English</span> 
        <div style="position: relative; text-align: left; left: 0px;">
          <div style="position: absolute; left: 0px;">
            <div class="DDStyle" style="display: none;" id="__LanguageMenu_popup"> 
              <table id="LanguageMenu" border="0"> 
                <tbody>
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('ar');" ondragstart="LanguageMenu.ondragstart(event);" href="#ar">Arabic</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('he');" ondragstart="LanguageMenu.ondragstart(event);" href="#he">Hebrew</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('pl');" ondragstart="LanguageMenu.ondragstart(event);" href="#pl">Polish</a></td> </tr>
                
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('bg');" ondragstart="LanguageMenu.ondragstart(event);" href="#bg">Bulgarian</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('hi');" ondragstart="LanguageMenu.ondragstart(event);" href="#hi">Hindi</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('pt');" ondragstart="LanguageMenu.ondragstart(event);" href="#pt">Portuguese</a></td> </tr>
                
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('ca');" ondragstart="LanguageMenu.ondragstart(event);" href="#ca">Catalan</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('mww');" ondragstart="LanguageMenu.ondragstart(event);" href="#mww">Hmong Daw</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('ro');" ondragstart="LanguageMenu.ondragstart(event);" href="#ro">Romanian</a></td> </tr>
                
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('zh-CHS');" ondragstart="LanguageMenu.ondragstart(event);" href="#zh-CHS">Chinese Simplified</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('hu');" ondragstart="LanguageMenu.ondragstart(event);" href="#hu">Hungarian</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('ru');" ondragstart="LanguageMenu.ondragstart(event);" href="#ru">Russian</a></td> </tr>
                
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('zh-CHT');" ondragstart="LanguageMenu.ondragstart(event);" href="#zh-CHT">Chinese Traditional</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('id');" ondragstart="LanguageMenu.ondragstart(event);" href="#id">Indonesian</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('sk');" ondragstart="LanguageMenu.ondragstart(event);" href="#sk">Slovak</a></td> </tr>
                
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('cs');" ondragstart="LanguageMenu.ondragstart(event);" href="#cs">Czech</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('it');" ondragstart="LanguageMenu.ondragstart(event);" href="#it">Italian</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('sl');" ondragstart="LanguageMenu.ondragstart(event);" href="#sl">Slovenian</a></td> </tr>
                
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('da');" ondragstart="LanguageMenu.ondragstart(event);" href="#da">Danish</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('ja');" ondragstart="LanguageMenu.ondragstart(event);" href="#ja">Japanese</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('es');" ondragstart="LanguageMenu.ondragstart(event);" href="#es">Spanish</a></td> </tr>
                
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('nl');" ondragstart="LanguageMenu.ondragstart(event);" href="#nl">Dutch</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('tlh');" ondragstart="LanguageMenu.ondragstart(event);" href="#tlh">Klingon</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('sv');" ondragstart="LanguageMenu.ondragstart(event);" href="#sv">Swedish</a></td> </tr>
                
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('en');" ondragstart="LanguageMenu.ondragstart(event);" href="#en">English</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('ko');" ondragstart="LanguageMenu.ondragstart(event);" href="#ko">Korean</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('th');" ondragstart="LanguageMenu.ondragstart(event);" href="#th">Thai</a></td> </tr>
                
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('et');" ondragstart="LanguageMenu.ondragstart(event);" href="#et">Estonian</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('lv');" ondragstart="LanguageMenu.ondragstart(event);" href="#lv">Latvian</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('tr');" ondragstart="LanguageMenu.ondragstart(event);" href="#tr">Turkish</a></td> </tr>
                
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('fi');" ondragstart="LanguageMenu.ondragstart(event);" href="#fi">Finnish</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('lt');" ondragstart="LanguageMenu.ondragstart(event);" href="#lt">Lithuanian</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('uk');" ondragstart="LanguageMenu.ondragstart(event);" href="#uk">Ukrainian</a></td> </tr>
                
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('fr');" ondragstart="LanguageMenu.ondragstart(event);" href="#fr">French</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('ms');" ondragstart="LanguageMenu.ondragstart(event);" href="#ms">Malay</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('ur');" ondragstart="LanguageMenu.ondragstart(event);" href="#ur">Urdu</a></td> </tr>
                
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('de');" ondragstart="LanguageMenu.ondragstart(event);" href="#de">German</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('mt');" ondragstart="LanguageMenu.ondragstart(event);" href="#mt">Maltese</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('vi');" ondragstart="LanguageMenu.ondragstart(event);" href="#vi">Vietnamese</a></td> </tr>
                
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('el');" ondragstart="LanguageMenu.ondragstart(event);" href="#el">Greek</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('no');" ondragstart="LanguageMenu.ondragstart(event);" href="#no">Norwegian</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('cy');" ondragstart="LanguageMenu.ondragstart(event);" href="#cy">Welsh</a></td> </tr>
                
                  <tr> <td><a tabindex="-1" onclick="return LanguageMenu.onclick('ht');" ondragstart="LanguageMenu.ondragstart(event);" href="#ht">Haitian Creole</a></td><td><a tabindex="-1" onclick="return LanguageMenu.onclick('fa');" ondragstart="LanguageMenu.ondragstart(event);" href="#fa">Persian</a></td><td></td> </tr>
                 </tbody>
              </table>
             <img alt="" style="height: 7px; width: 17px; border-width: 0px; left: 20px;" /> </div>
          </div>
        </div>
      </div>
     
      <script type="text/javascript"> var LanguageMenu; var LanguageMenu_keys=[&quot;ar&quot;,&quot;bg&quot;,&quot;ca&quot;,&quot;zh-CHS&quot;,&quot;zh-CHT&quot;,&quot;cs&quot;,&quot;da&quot;,&quot;nl&quot;,&quot;en&quot;,&quot;et&quot;,&quot;fi&quot;,&quot;fr&quot;,&quot;de&quot;,&quot;el&quot;,&quot;ht&quot;,&quot;he&quot;,&quot;hi&quot;,&quot;mww&quot;,&quot;hu&quot;,&quot;id&quot;,&quot;it&quot;,&quot;ja&quot;,&quot;tlh&quot;,&quot;ko&quot;,&quot;lv&quot;,&quot;lt&quot;,&quot;ms&quot;,&quot;mt&quot;,&quot;no&quot;,&quot;fa&quot;,&quot;pl&quot;,&quot;pt&quot;,&quot;ro&quot;,&quot;ru&quot;,&quot;sk&quot;,&quot;sl&quot;,&quot;es&quot;,&quot;sv&quot;,&quot;th&quot;,&quot;tr&quot;,&quot;uk&quot;,&quot;ur&quot;,&quot;vi&quot;,&quot;cy&quot;]; var LanguageMenu_values=[&quot;Arabic&quot;,&quot;Bulgarian&quot;,&quot;Catalan&quot;,&quot;Chinese Simplified&quot;,&quot;Chinese Traditional&quot;,&quot;Czech&quot;,&quot;Danish&quot;,&quot;Dutch&quot;,&quot;English&quot;,&quot;Estonian&quot;,&quot;Finnish&quot;,&quot;French&quot;,&quot;German&quot;,&quot;Greek&quot;,&quot;Haitian Creole&quot;,&quot;Hebrew&quot;,&quot;Hindi&quot;,&quot;Hmong Daw&quot;,&quot;Hungarian&quot;,&quot;Indonesian&quot;,&quot;Italian&quot;,&quot;Japanese&quot;,&quot;Klingon&quot;,&quot;Korean&quot;,&quot;Latvian&quot;,&quot;Lithuanian&quot;,&quot;Malay&quot;,&quot;Maltese&quot;,&quot;Norwegian&quot;,&quot;Persian&quot;,&quot;Polish&quot;,&quot;Portuguese&quot;,&quot;Romanian&quot;,&quot;Russian&quot;,&quot;Slovak&quot;,&quot;Slovenian&quot;,&quot;Spanish&quot;,&quot;Swedish&quot;,&quot;Thai&quot;,&quot;Turkish&quot;,&quot;Ukrainian&quot;,&quot;Urdu&quot;,&quot;Vietnamese&quot;,&quot;Welsh&quot;]; var LanguageMenu_callback=function(){ }; var LanguageMenu_popupid='__LanguageMenu_popup'; </script>
     </div>
   
    <div id="CTFLinksPanel"> <span id="ExternalLinksPanel"><a id="HelpLink" title="Help" target="_blank" href="https://go.microsoft.com/?linkid=9722454"> <img id="HelpImg" /></a> <a id="EmbedLink" href="javascript:Microsoft.Translator.FloaterShowEmbed()" title="Get this widget for your own site"> <img id="EmbedImg" /></a> <a id="ShareLink" title="Share translated page with friends" href="javascript:Microsoft.Translator.FloaterShowSharePanel()"> <img id="ShareImg" /></a> </span> </div>
   
    <div id="FloaterProgressBar"> <span id="ProgressFill"></span> </div>
   </div>
 
  <div id="WidgetFloaterCollapsed" style="display: none;" onmouseover="Microsoft.Translator.OnMouseOverFloater()"> <span>TRANSLATE with </span><img id="CollapsedLogoImg" /></div>
 
  <div id="FloaterSharePanel" style="display: none;"> 
    <div id="ShareTextDiv"> <span id="ShareTextSpan"> COPY THE URL BELOW </span> </div>
   
    <div id="ShareTextboxDiv"> <input name="ShareTextbox" type="text" id="ShareTextbox" readonly="readonly" onclick="this.select()" />  <a id="EmailLink" title="Email this translation"> <img id="EmailImg" /></a> </div>
   
    <div id="ShareFooter"> <span id="ShareHelpSpan"><a id="ShareHelpLink"> <img id="ShareHelpImg" /></a></span> <span id="ShareBackSpan"><a id="ShareBack" href="javascript:Microsoft.Translator.FloaterOnShareBackClick()" title="Back To Translation"> Back</a></span> </div>
   <input name="EmailSubject" type="hidden" id="EmailSubject" value="Check out this page in {0} translated from {1}" /> <input name="EmailBody" type="hidden" id="EmailBody" value="Translated: {0}%0d%0aOriginal: {1}%0d%0a%0d%0aAutomatic translation powered by Microsoft&reg; Translator%0d%0ahttp://www.bing.com/translator?ref=MSTWidget" /> <input type="hidden" id="ShareHelpText" value="This link allows visitors to launch this page and automatically translate it to {0}." /> </div>
 
  <div id="FloaterEmbed" style="display: none;"> 
    <div id="EmbedTextDiv"> <span id="EmbedTextSpan">EMBED THE SNIPPET BELOW IN YOUR SITE</span> <a id="EmbedHelpLink" title="Copy this code and place it into your HTML."> <img id="EmbedHelpImg" /></a> </div>
   
    <div id="EmbedTextboxDiv"> <input name="EmbedSnippetTextBox" type="text" id="EmbedSnippetTextBox" readonly="readonly" value="&lt;div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'&gt;&lt;/div&gt;&lt;script type='text/javascript'&gt;setTimeout(function(){var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location &amp;&amp; location.href &amp;&amp; location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&amp;ctf=true&amp;ui=true&amp;settings=manual&amp;from=en';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); },0);&lt;/script&gt;" onclick="this.select()" /> </div>
   
    <div id="EmbedNoticeDiv"><span id="EmbedNoticeSpan">Enable collaborative features and customize widget: <a href="http://www.bing.com/widget/translator" target="_blank">Bing Webmaster Portal</a></span></div>
   
    <div id="EmbedFooterDiv"><span id="EmbedBackSpan"><a href="javascript:Microsoft.Translator.FloaterOnEmbedBackClick()" title="Back To Translation">Back</a></span></div>
   </div>
 
  <script type="text/javascript"> var intervalId = setInterval(function () { if (MtPopUpList) { LanguageMenu = new MtPopUpList(); var langMenu = document.getElementById(LanguageMenu_popupid); var origLangDiv = document.createElement(&quot;div&quot;); origLangDiv.id = &quot;OriginalLanguageDiv&quot;; origLangDiv.innerHTML = &quot;&lt;span id='OriginalTextSpan'&gt;ORIGINAL: &lt;/span&gt;&lt;span id='OriginalLanguageSpan'&gt;&lt;/span&gt;&quot;; langMenu.appendChild(origLangDiv); LanguageMenu.Init('LanguageMenu', LanguageMenu_keys, LanguageMenu_values, LanguageMenu_callback, LanguageMenu_popupid); window[&quot;LanguageMenu&quot;] = LanguageMenu; clearInterval(intervalId); } }, 1); </script>
 </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>