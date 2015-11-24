<?php

/*******************************************************************************

 *
 * 	AlterVision Core Framework - CPA platform
 * 	Created by AlterVision - altervision.me
 *  Copyright © 2005-2015 Anton Reznichenko
 *

 *
 *  File: 			core / lang_ru.php
 *  Description:	Language file
 *  Author:			Anton 'AlterVision' Reznichenko - altervision13@gmail.com
 *

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.

*******************************************************************************/

global $lang;
mb_language( 'uni' );
mb_internal_encoding( 'utf-8' );

$lang = array (

	// ************************************
    // Basic
    // ************************************

    'site_name'							=> 'MyCPA',
    'site_descr'						=> 'MyCPA - платформа автоматизации интернет-торговли',
    'site_url'							=> 'http://my.cpa',
    'site_meta_k'						=> '',
    'site_meta_d'						=> '',
    'site_copyright'					=> '© 2014-'.date('Y').'г. MyCPA - платформа автоматизации интернет-торговли',
    'cms_powered_by'					=> '<a href="/help/index.html">Помощь</a> | <a href="/help/faq.html">FAQ</a> | <a href="/help/api.html">API</a>',
    'partner_link'						=> 'http://work.cpa',

	'menu_search'						=> 'Поиск',
	'menu_about'						=> 'О проекте',
	'menu_partner'						=> 'Партнёрам',

    // ************************************
    // Common
    // ************************************

	'action' 					=> 'Действие',
	'active' 					=> 'Активный',
	'activity' 					=> 'Активность',
	'actor'						=> 'Участник',
	'actors'					=> 'Участники',
	'address'					=> 'Адрес',
    'all'						=> 'Все',
    'any'						=> '-- не установлено --',
	'author'					=> 'Автор',
	'art'						=> 'Статья',
	'avatar'					=> 'Аватар',
	'cancel' 					=> 'Отменить',
	'cash'						=> 'Сумма',
	'call'						=> 'Позвонить',
	'check' 					=> 'Проверить',
    'comment'					=> 'Комментарий',
    'comments'					=> 'Комментарии',
    'company'					=> 'Компания',
	'confirm' 					=> 'Вы уверены, что хотите удалить этот объект?',
	'confirma' 					=> 'Вы уверены, что хотите выполнить это действие?',
	'confirms' 					=> 'Вы уверены, что хотите удалить этот объект?\nВведите \"delete\" для подтверждения.',
    'contacts'					=> 'Контакты',
    'control'					=> 'Управление',
	'count' 					=> 'Количество',
	'course' 					=> 'Курс',
    'create'					=> 'Создать',
	'date'						=> 'Дата',
	'default' 					=> 'По умолчанию',
    'del'						=> 'Удалить',
    'dept'						=> 'Отдел',
	'descr' 		   			=> 'Описание',
	'div'						=> 'Раздел',
	'do' 						=> 'Выполнить',
	'done' 						=> 'Выполнено',
	'download' 					=> 'Скачать',
    'edit'						=> 'Правка',
	'email' 					=> 'E-Mail',
	'enter' 					=> 'Вход',
	'exit'						=> 'Выход',
	'file' 						=> 'Файл',
	'filter'					=> 'Отфильтровать',
	'find'						=> 'Найти',
	'flush'						=> 'Очистить',
	'folder' 					=> 'Папка',
	'ftext' 					=> 'Полный текст',
    'gallery'					=> 'Галерея',
	'headline' 		 			=> 'Заголовок',
	'hidden' 		 			=> 'cкрытый',
	'icq' 						=> 'ICQ',
	'id' 						=> 'Идентификатор',
	'image' 					=> 'Картинка',
    'index'						=> 'Индекс',
    'inf'						=> 'Инфо',
    'info'						=> 'Информация',
	'install' 					=> 'Установить',
	'lastvisit' 				=> 'Последний визит',
	'level' 					=> 'Уровень',
	'link' 						=> 'Ссылка',
	'login' 					=> 'Логин',
	'logout'					=> 'Выход',
	'logo' 						=> 'Логотип',
	'message_redirect'			=> 'Если браузер не перенаправляет Вас автоматически, нажмите эту ссылку',
	'more'						=> 'Подробнее',
	'month'						=> 'Месяц',
	'months'					=> array ( 'Нулябрь', 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' ),
	'name'						=> 'Название',
	'no' 						=> 'Нет',
	'next' 						=> 'Далее',
	'ord'						=> 'Порядок',
	'order'						=> 'Заказ',
	'pay'						=> 'Оплатить',
	'pass' 						=> 'Пароль',
    'phone'						=> 'Телефон',
    'price'						=> 'Цена',
    'progress'					=> 'Прогресс',
	'pub' 						=> 'Публичный',
    'published'					=> 'Опубликовано',
	'rating' 					=> 'Рейтинг',
    'read_more'					=> 'Подробнее',
    'recount'					=> 'Пересчитать',
    'register'					=> 'Регистрация',
	'reset' 					=> 'Сбросить',
	'results'					=> 'Результаты',
	'report'					=> 'Отчёт',
	'requests'					=> 'Заявки',
	'save' 						=> 'Сохранить',
	'search'					=> 'Поиск',
	'send' 						=> 'Передать',
	'settings'					=> 'Настройка',
	'shown'						=> 'Показаны с %d по %d из %d',
	'size' 						=> 'Размер',
	'site' 						=> 'Веб-сайт',
	'status'					=> 'Статус',
	'store'						=> 'Склад',
	'subj' 						=> 'Тема',
	'text' 						=> 'Текст',
	'texts' 					=> 'Тексты',
	'time' 						=> 'Время',
    'title'						=> 'Заголовок',
	'today' 					=> 'сегодня в ',
	'total' 					=> 'Итого',
	'track'						=> 'Трек-код',
	'type'						=> 'Тип',
	'update' 					=> 'Обновить',
	'username' 					=> 'Имя',
	'user'						=> 'Пользователь',
	'variants'					=> 'Варианты',
	'view' 						=> 'Просмотреть',
	'views' 					=> 'Просмотры',
	'yes' 						=> 'Да',
	'yesterday' 				=> 'вчера в ',
	'year'						=> 'Год',

	// ***********************************************
	// Interface
	// ***********************************************

	'order_success'				=> '<b>Заказ принят!</b> Менеджер свяжется с Вами в течение часа.',

	'search_h'					=> 'Найти мой заказ',
	'search_t1'					=> 'Подробная информация о Вашем заказе доступна онлайн в режиме реального времени.',
	'search_t2'					=> 'Чтобы узнать всё о своём заказе, укажите его номер, полученный от менеджера, в SMS или на сайте, и нажмите кнопку "Найти".',
	'search_n'					=> 'Номер заказа',

	'promo_h'					=> 'Промо-коды',
	'promo_t1'					=> 'Вы можете заказать товар с помощью промо-кода, получив дополнительную скидку!',
	'promo_t2'					=> 'Для заказа товара со скидкой по промо-коду, введите код с карточки в поле ниже и нажмите кнопку "Далее".',
	'promo_n'					=> 'Промо-код',

	'phone_h'					=> 'Это Ваш заказ? Показать скрытую информацию?',
	'phone_t'					=> 'Для подтверждения того, что этот заказ отправлен Вами, введите последние шесть цифр номера телефона, на который Вам звонил менеджер и пришло SMS-сообщение с номером заказа.',
	'phone_s'					=> 'Показать',

	'offer_h'					=> 'Товар',
	'person_h'					=> 'Получатель',

	'delivery'					=> 'Мониторинг доставки',
	'delivery_manual'			=> 'Проверить статус доставки вручную',
	'delivero'					=> array(
							0	=> 'Самовывоз',
							1	=> 'Почта России',
							2	=> 'Курьерская доставка',
	),
	'delivern'					=> array(
							1	=> '<i class="text-muted">нет информации от Почты России</i>',
							2	=> '<i class="text-muted">нет информации от курьерской службы</i>',
	),
	'deliverc'					=> array(
							1	=> 'http://post-tracker.ru/track/%s',
							2	=> 'http://www.spsr.ru/ru/service/monitoring?barcode=%s',
	),
	'deliverp'					=> array(
							1	=> 300,
							2	=> 300,
	),

	'presentp'							=> array(
									1	=> 990,
									2	=> 990,
									3	=> 690,
									4	=> 990,
	),

	'notfound_h'				=> 'Заказ не найден ...',
	'notfound_t'				=> 'В системе не обнаружен заказ с таким номером. Пожалуйста, уточните номер, укажите его в поле ниже и нажмите кнопку "Найти". Номер заказа был прислан Вам в SMS-сообщении.',

	'nopromo_h'					=> 'Код не найден ...',
	'nopromo_t'					=> 'В системе не обнаружен введённый промо-код. Пожалуйста, уточните код, указанный на карточке, впишите его в поле ниже и нажмите кнопку "Далее".',

	'ona'						=> '<i class="text-muted">информация скрыта</i>',

	'statuso'					=> array(
							0	=> 'Заказ ожидает оплаты',
							1	=> 'Ожидает обработки',
							2	=> 'Заказ находится в обработке',
							3	=> 'Заказ находится в обработке',
							4	=> 'Заказ находится в обработке',
							5	=> 'Заказ отменён',
							6	=> 'Заказ принят, идёт сборка и упаковка',
							7	=> 'Заказ собран и ожидает отправки',
							8	=> 'Заказ доставляется получателю',
							9	=> 'Доставлено на почту/курьеру',
							10	=> 'Заказ выполнен',
							11	=> 'Заказ отменён',
							12	=> 'Заказ отменён',
	),

	'pay_types'					=> array(
							1	=> 'Для продолжения Вы должны оплатить заказ одним из предложенных ниже способов. Вы можете связаться с поставщиком и уточнить необходимую информацию по оплате.',
							2	=> 'Вы можете оплатить заказ сразу же, не дожидаясь отправки и получения товара.',
	),
	'comp_wmi'					=> "WMID: %s\nWMR: %s\nСчёт: %s\nТранзакт: %s",
	'comp_ymi'					=> 'Кошелёк: %s\nПриход: %s\nТранзакт: %s',

);

?>