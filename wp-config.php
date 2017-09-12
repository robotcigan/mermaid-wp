<?php
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
define('DB_NAME', 'mermaid');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');
// define('DB_PORT', '3306');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '0w/4U?E[$E3{9u2.h90zV r7K!C1;0^THZv1?xdCWTp,d_CWqm[|s:TZ#.Ac3MYp');
define('SECURE_AUTH_KEY',  '9dqI=]qgmrF2!1w*Z6V:lsh#Y*zfIQ+B$#a+!R@VG<)EwKw~a_#z+~KXN?ck49>^');
define('LOGGED_IN_KEY',    ')0ihuDTmDE;o$av]yC^}^?v it8@|N,Blzhg+Tzpj~Ur7QOWuNY.Uadg,^W._9ca');
define('NONCE_KEY',        'jvD98MT[25tDMim(zef~WLSruFE!}a(r;EUH0U%:NO6MX,CPT`Yn(n+)nqt6SS66');
define('AUTH_SALT',        'GZxP!i<1V6q8Mh8s#a3k;aIyX|$2]ni%S$x4vkJV4]wA-XVVrA$g/JT2e0,z[M.R');
define('SECURE_AUTH_SALT', '2sZ.uil|a&wxAO zS!R3$D)z$)37-f>)GUG2KCM}(U^9{Ex-:6*UM{V ?O2r/=X-');
define('LOGGED_IN_SALT',   '|:/UuK+$)cQ %r^5mB+?dfb#(19AOc(}HmtDRc`h-x#-OgLweoTA4;=pMc>{OG?c');
define('NONCE_SALT',       ']GI}n{kH`aPt,Qx?x`P*]P`?DH,9!+/([Ys1+4-18uJu9/oP1{/9uO@{Fkq=K4tK');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
