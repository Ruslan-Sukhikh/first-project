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
define( 'DB_NAME', 'wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'ruslan' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y@grqo)5wFgM#_T4ES!fO!3MDK[/s lGm+338UaI{bYf$,n]lSnQKGs&#L.k`Gs4' );
define( 'SECURE_AUTH_KEY',  'NnCcRN_J:W%g}C47f%,,l,0j<qSgp3cmUm0-G/;aZHx{?56kCTUzQnBSb_2n{dgW' );
define( 'LOGGED_IN_KEY',    'pJ$;g=iv.oHko70{JppqnCQ6@^W8/~@3JO)%,>E^fFwVaF?QVgNVT/]^7Xlx]Av3' );
define( 'NONCE_KEY',        ':d^fMQZ >UTO*OGVrL+g*4]_YqN@fF$z_b*B[yXiY@rDTS beIe0D|bKjZyo)8#O' );
define( 'AUTH_SALT',        '4HX_}$ysT9Q?m&CIp=O%P#(0aoFG&|I#qbHqCUHi-KRU;h2 E487K|-<wg{k75d[' );
define( 'SECURE_AUTH_SALT', '%1BTdV(^#&gXR=T#H%1f&pwe3wwOB<_ |i5IF[gAidZ|o[:HIQ7e-Q c^anzh{S?' );
define( 'LOGGED_IN_SALT',   '#M+tDFT$J#.:@,BL20f%QE;H;}8PC`Aw[G]Gll}P]:x8wx0[,n!Zu7:SD2uZ(v;w' );
define( 'NONCE_SALT',       'Y|;4wNHb8@8Kt$&~5q&J+3X(tq+wa]7@WF7Dg9l4T#v:B3p2hC*QE%K [%FWkp|R' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
