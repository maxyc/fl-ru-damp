<?php

	include('_header.php');

	# http://wiki.webmoney.ru/wiki/show/Interfeys_X19
	$res = $wmxi->X19(
		'cash',        # тип операции
		'output',      # направление операции
		'WMZ',         # тип WM-кошелька, с/на которого произведен перевод
		10.99,         # сумма перевода
		ANOTHER_WMID,  # WMID пользователя
		'AA111111',    # Номер паспорта
		'Иванов',      # Фамилия пользователя
		'Иван',        # Имя пользователя
		'',            # Название банка
		'',            # Номер банковского счета
		'',            # Номер банковской карты
		'',            # Название платежной системы
		''             # ID пользователя в платежной системе
	);

	print_r($res->toObject());


?>