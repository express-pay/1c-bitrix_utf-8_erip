<?
	if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

	include(GetLangFileName(dirname(__FILE__)."/", "/payment.php"));

	$psTitle = GetMessage("SPCP_DTITLE");
	$psDescription = GetMessage("SPCP_DTITLE");

	$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

	$arPSCorrespondence = array(
		"IS_TEST_API" => array(
			"SORT" => 10,
			"NAME" => "Работа в тестовом режиме",
			"DESCR"	=> "Взаимодействие выполняется с тестовым стендом",
			"INPUT" => array(
				'TYPE' => 'Y/N'
			),
			'DEFAULT' => array(
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			)
		),
		"TOKEN"	=> array(
			"SORT" => 20,
			"NAME"	=> "API-ключ (токен) доступа к API",
			"DESCR"	=> "Задается в личном кабинете",
			"VALUE"	=> "",
			"TYPE"	=> ""
		),
		"SERVICE_ID"	=> array(
			"SORT" => 30,
			"NAME"	=> "Номер услуги в сервисе \"Экспресс Платежи\"",
			"DESCR"	=> "Можно узнать в личном кабинете в настройках услуги",
			"VALUE"	=> "",
			"TYPE"	=> ""
		),
		"SECRET_WORD"	=> array(
			"SORT" => 40,
			"NAME"	=> "Секретное слово для цифровой подписи",
			"DESCR"	=> "Задается в личном кабинете",
			"DEFAULT" => array(
				"PROVIDER_VALUE" => "",
				"PROVIDER_KEY" => "VALUE"
			)
		),
		"NOTIFICATION_URL"	=> array(
			"SORT" => 45,
			"NAME"	=> "Адрес для получения уведомлений",
			"DESCR"	=> "Необходим для обновления статуса счета при оплате",
			"DEFAULT" => array(
				"PROVIDER_VALUE" => $url. "/bitrix/tools/expresspay_notify.php",
				"PROVIDER_KEY" => "VALUE"
			)
		),
		"IS_USE_SIGNATURE_FROM_NOTIFICATION" => array(
			"SORT" => 50,
			"NAME" => "Использовать цифровую подпись при получении уведомлений",
			"DESCR"	=> "Значение должно соотвествовать значению, установленному в личном кабинете",
			"INPUT" => array(
				'TYPE' => 'Y/N'
			),
			'DEFAULT' => array(
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			)
		),
		"SECRET_WORD_FROM_NOTIFICATION"	=> array(
			"SORT" => 55,
			"NAME"	=> "Секретное слово для цифровой подписи уведомлений",
			"DESCR"	=> "Задается в личном кабинете",
			"DEFAULT" => array(
				"PROVIDER_VALUE" => "",
				"PROVIDER_KEY" => "VALUE"
			)
		),
		"INFO_TEMPLATE"	=> array(
			"SORT" => 60,
			"NAME"	=> "Шаблон назначения платежа",
			"DESCR"	=> "Не должен превышать 1024 символа",
			"DEFAULT" => array(
				"PROVIDER_VALUE" => "Оплата заказа ##ORDER_ID##",
				"PROVIDER_KEY" => "VALUE"
			)
		),
		"ERIP_PATH"	=> array(
			"SORT" => 70,
			"NAME"	=> "Путь ветки ЕРИП услуги",
			"DESCR"	=> "Задается при подключении. Указано в личном кабинете",
			"DEFAULT"	=> array(
				"PROVIDER_VALUE" => "Интернет-магазины/сервисы->[Первая буква сайта]->[Имя сайта]",
				"PROVIDER_KEY" => "VALUE"
				),
		),
		"PERSONAL_ACCOUNT_NAME"	=> array(
			"SORT" => 80,
			"NAME"	=> "Наименование лицевого счета",
			"DESCR"	=> "Задается при подключении. Указано в личном кабинете",
			"DEFAULT"	=> array(
				"PROVIDER_VALUE" => "Номер заказа",
				"PROVIDER_KEY" => "VALUE"
				),
		),
		"IS_NAME_EDITABLE" => array(
			"SORT" => 90,
			"NAME" => "Разрешено изменять ФИО плательщика",
			"DESCR"	=> "Разрешено изменять ФИО плательшика при оплате в системе ЕРИП",
			"INPUT" => array(
				'TYPE' => 'Y/N'
			),
			'DEFAULT' => array(
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			)
		),
		"IS_ADDRESS_EDITABLE" => array(
			"SORT" => 95,
			"NAME" => "Разрешено изменять адрес плательщика",
			"DESCR"	=> "Разрешено изменять адрес плательшика при оплате в системе ЕРИП",
			"INPUT" => array(
				'TYPE' => 'Y/N'
			),
			'DEFAULT' => array(
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			)
		),
		"IS_AMOUNT_EDITABLE" => array(
			"SORT" => 100,
			"NAME" => "Разрешено изменять сумму оплаты",
			"DESCR"	=> "Разрешено изменять сумму оплаты при оплате в системе ЕРИП",
			"INPUT" => array(
				'TYPE' => 'Y/N'
			),
			'DEFAULT' => array(
				"PROVIDER_VALUE" => "N",
				"PROVIDER_KEY" => "INPUT"
			)
		),
	);
?>