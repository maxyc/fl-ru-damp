<?php
/**
 * П-1 – Фрилансеру, за сутки до завершения срока закрепления
 */

/**
 * Тема письма
 */
$smail->subject = "Заканчивается срок закрепления вашей услуги";

$link = $GLOBALS['host'] . $link;

?>
Завтра в <?=$time?> завершается срок закрепления вашей услуги &laquo;<?=$title?>&raquo; <?=$kind?>.

Пожалуйста, не забудьте продлить закрепление: на неделю или более длительный срок.

<a href="<?=$link?>">Продлить закрепление</a>