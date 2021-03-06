<?php if(!$print) { ?>
<div class="b-layout__txt b-layout__txt_padtop_5 b-layout__txt_float_right">
    <a href="/bill/payment/print/?type=euroset" target="_blank" class="b-layout__link">Распечатать страницу</a>
</div>
<?php }//if?>
<h2 class="b-layout__title b-layout__title_padbot_30">Оплата в «Евросети»</h2>
<table class="b-layout__table b-layout__table_width_full">
    <tbody>
        <tr class="b-layout__tr">
            <?php if(!$print) { ?>
            <td class="b-layout__td b-layout__td_padright_20 b-layout__td_center b-layout__td_width_120">
                <img class="b-layout__pic" alt="" src="/images/euroset.png">
            </td>
            <?php }//if?>
            <td class="b-layout__td b-layout__td_padleft_30">
                <h3 class="b-layout__h3">Описание системы</h3>
                <div class="b-layout__txt b-layout__txt_padbot_15">Платежи в «Евросети» – возможность оплатить услуги через кассу любого магазина сети «Евросеть». Данный способ пополнения доступен только на территории Российской Федерации.</div>
                <div class="b-layout__txt b-layout__txt_padbot_15">Процессинговый центр и телефонная служба поддержки «Евросети» работают круглосуточно. Все платежи зачисляются в режиме онлайн.</div>

                <h3 class="b-layout__h3">Пополнение счета через кассу магазина</h3>
                <div class="b-fon b-fon_padbot_20">
                    <b class="b-fon__b1"></b>
                    <b class="b-fon__b2"></b>
                    <div class="b-fon__body b-fon__body_pad_10_20">
                        <div class="b-layout__txt b-layout__txt_padbot_5">1. Зайдите в своем городе в любой магазин «Евросеть».</div>
                        <div class="b-layout__txt b-layout__txt_padbot_5">2. Сообщите кассиру о необходимости пополнения личного счета на Free-lance.ru.</div>
                        <div class="b-layout__txt b-layout__txt_padbot_5">3. Назовите ваш логин (который вы используете для входа на сайт) и сумму к оплате.</div>
                        <div class="b-layout__txt b-layout__txt_padbot_5">4. Подтвердите правильность номера счета подписью в пречеке.</div>
                        <div class="b-layout__txt b-layout__txt_padbot_5">5. Внесите необходимое количество денежных средств.</div>
                        <div class="b-layout__txt">6. Сохраните чек до поступления денег на счет на Free-lance.ru и списаны в оплату услуг.</div>
                    </div>
                    <b class="b-fon__b2"></b>
                    <b class="b-fon__b1"></b>
                </div>     
                <div class="b-layout__txt b-layout__txt_padbot_15">Обращаем ваше внимание на то, что оплата с помощью кассы «Евросети» доступна только пользователям, находящимся на территории Российской Федерации.</div>
                <div class="b-fon b-fon_bg_fcc b-fon_padbot_20">
                    <b class="b-fon__b1"></b>
                    <b class="b-fon__b2"></b>
                    <div class="b-fon__body b-fon__body_pad_5"><strong>Внимание:</strong> мы не осуществляем возврат денежных средств при оплате в «Евросети».</div>
                    <b class="b-fon__b2"></b>
                    <b class="b-fon__b1"></b>
                </div>
                <h3 class="b-layout__h3">Что делать, если деньги не были перечислены на счет?</h3>
                <div class="b-layout__txt">В случае, если зачисление суммы не произошло, напишите нам в <a class="b-layout__link" href="/about/feedback/">Службу поддержки</a> и пришлите копию чека об оплате (скан). Мы обязательно решим проблему.</div>
                <?php if(!$print) { ?>
                <form method="POST" action="<?= ( is_release() ? "/bill/payment/?type={$type_payment}" : "/bill/test/osmp.php" )?>" id="<?= $type_payment ?>" name="<?= $type_payment ?>">
                    <input type="hidden" name="action" value="osmp" />
                    <input type="hidden" name="sum" value="<?= $payment_sum ?>" />
                </form>
                <? include ( $_SERVER['DOCUMENT_ROOT'] . "/bill/payment/paysystems/tpl.button_buy.php");?>
                <?php }//if?>
            </td>
        </tr>
    </tbody>
</table>
<?php if($print) { ?>
<script type="text/javascript">window.print();</script> 
<?php }//if?>