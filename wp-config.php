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
define('DB_NAME', 'cj51660_korovets');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Z*3TZMh7e7+1WPYl7--IRvAGV-BItuUm1Pz=e^0J!P*/5lvyxFNBGZ<8zfs3s{Qy');
define('SECURE_AUTH_KEY',  'f*.L T`X1zH/Ao^x3hs(`[hi&@t()$#%UNj7v)x_[IO%MnA].jm+e$Byiw;eUwQL');
define('LOGGED_IN_KEY',    'B.J&/BI8vs-:lEsvr~w%m-f) _t+[xgv1Ua#o5ay4O17k[WW.CJe9ZNET^-rC<WY');
define('NONCE_KEY',        ',6sAa7OyZL1mHE)t2b~&&y{2vPg+i9KJ>[p`1+c0^/K^2^GkZ(bTnVp4Wm)hH+[ ');
define('AUTH_SALT',        'O[fYY2ZKr[ZPZ3=Yty%8zL)YvL|LT85Z 4/Rw]+/tM`}x3QNy6h9LuQe{P6hh7!O');
define('SECURE_AUTH_SALT', 'nf.HQ[ZX ca6K>~^8~<eY!:pW<OB&X3 `$#-id9LTO}&DYC/dfA (pu9Cd@7|bse');
define('LOGGED_IN_SALT',   ']8TcB5%ObGy*Eyf9-_gC;wty4,FWlt5Bst9DzzX{QE-C{*[xQ!Ga6|9N?L/7i[XS');
define('NONCE_SALT',       'qv*qEo&hGfbBe5Qd:MFtDi=knQD3oh(Ff*woLc3u_`a0QC}Hxi+aVZw!OKNZE i!');

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
define( 'WP_MEMORY_LIMIT', '512M' );
define('WP_HOME','http://localhost/');
define('WP_SITEURL','http://localhost/');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
