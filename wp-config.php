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
define( 'DB_NAME', 'commit' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ib`zi l;a9 )HX?k(f{!h(7Ak@elaibuIjA6kqPko:f]wYk=?v^$Xh0|oLL!jUv>' );
define( 'SECURE_AUTH_KEY',  'IMMs168Sd`>CJ?0!xDf.&_cxSp>vn&5Vp%nG_1%)y5rRF,Qn_H=#iBe#Kr-g6/_y' );
define( 'LOGGED_IN_KEY',    '%cilJk>g6E|vndRM_<&<@}MV9BU[m5@zD0>!kSqqb]%h&v*:wsap*gzsW48A~`Kx' );
define( 'NONCE_KEY',        'HiJ%Ws[3Sppg#~ThS..~3Yw8px`vRqZUnPrvRM<!+f$^G^$fDNwq|]oK3zfQf41?' );
define( 'AUTH_SALT',        '7hHkxJq^2pOjVbFx,obD6IfsPy]D/ufM^Pl=!EtGs{>zgMk1oimCqeWzO62#w/b(' );
define( 'SECURE_AUTH_SALT', '=#d&fKC%AU<RqA]uf59t] I~q[G?IeSycrTs6qGk?uRhyTyBuDkjw*Q~s[P5BO>E' );
define( 'LOGGED_IN_SALT',   'E;[[Ti+BPAZ~[[L^5)/x3#0l7LmwK-G0N:0M<y88lVog<WeNYD>1&U&HuH4#l>(2' );
define( 'NONCE_SALT',       'hz(.b%d@2bWe9n;D&NGcPs_z@g&yD_++n*=c38XAV3RP#;>=KJ-_%lC&8Fz!NyLb' );

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
