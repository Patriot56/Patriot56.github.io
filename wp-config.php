<?php

// BEGIN iThemes Security - Не меняйте и не удаляйте эту строку
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Отключить редактор файлов - Безопасность > Настройки > Подстройки WordPress > Редактор файлов
// END iThemes Security - Не меняйте и не удаляйте эту строку

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'fitexe');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dCi?:aU,BWIAG*;/p&o+UJ}MFrKxUE^y=!29>W4<ZdKryVI/pqh*w^<39;_/&ls~');
define('SECURE_AUTH_KEY',  'qE]~io:g$_m9T`<a{1Xb|n$ hRPk{GkJT5CwNCoizT!O>hU}}0*J=#0 6$<.P)82');
define('LOGGED_IN_KEY',    'P$YLxK!XP79A@FDpgVLu(#HqZe$AVD4f`6B9;Df%|Ee3v5PEUYoyjdP,-xP@T&p,');
define('NONCE_KEY',        '=MZ<TffcLmmV858|g3<^#r^c$py<fq!QZP@g&Ihp>zJlW%?M$,UG(!PS?nC9_HOF');
define('AUTH_SALT',        '9k cz}ODH<W(x.+ajk7Tgm;-^537Tgc7d#8%t{CZI<!+wr5WqQ<X6h51vaK+=CRz');
define('SECURE_AUTH_SALT', '~]W->2]wM-W5$>:xC1bIwPg}Xxj Y4RU>pXRK7_~i~(8Yy4>{jz *$RrCmU]5Vd4');
define('LOGGED_IN_SALT',   'MT;k~}l@I}>n^XyfIL|j$k0%p{t*i8(:J<7[D@J_E8~1`?adv!es}ULKXBXH#^ G');
define('NONCE_SALT',       '.,1KP&vq3ssd#vgh|=Wdp9w);@m<sHcKUm&T&_S-iLF11nkj],o7J:mi/GiHJ:]t');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ggwp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
