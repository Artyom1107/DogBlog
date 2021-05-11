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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'doggersman' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'VhS|{G{Z~(Kn6L^PioqQy2;(V51I`9sjOb@K%SgBnCpO^M*kdsllJg-e gL,~[+}' );
define( 'SECURE_AUTH_KEY',  'rnvBh[=(^NTc3IJd,FBgtmg[1x R^tx92,AV3x~WJ+#lT@{U5EXfT?2A;2M9JJ+p' );
define( 'LOGGED_IN_KEY',    'z3^>ToPqm0{xe:9(_7?%OD?e}.Zaj5`V9YI{97w+w=QeImLrKmv]w|rpavsHyOhX' );
define( 'NONCE_KEY',        'n>:1{Z+r`S6D;?4gJj%a(.Bk4UDmi?+@ZE2bxZoZbW,Ij&v1njL=/Zk4/?OK<yL`' );
define( 'AUTH_SALT',        'TcFAUIPq<2r>&9>1I8G&3>IWy@B<HBJWwbk.Ng}#m--k-Bxz;;l8S% RmBl$_==i' );
define( 'SECURE_AUTH_SALT', '4a~}uI#:Aeq]!M+BD}x23BxtuijVN|i2%p;fjI?[OGnf)qhfpH:>S Q0;f36mraD' );
define( 'LOGGED_IN_SALT',   'Tb3q-%_9E&i FD=O9p/.:(Ji9GW]V846$JQvaqro=|q.hL+:/M0$[F_G]x)#-iF^' );
define( 'NONCE_SALT',       '0h`1}^r0Q8Ib|,[ri!I.P77@FQzL<j^>&Jkni$M?4#^wG/>7e[$1^6ctfGk/l<v2' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
