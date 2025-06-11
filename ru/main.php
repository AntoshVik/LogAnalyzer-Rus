<?php
/*
	*********************************************************************
	* LogAnalyzer - http://loganalyzer.adiscon.com
	* -----------------------------------------------------------------
	*
	* Copyright (C) 2008-2010 Adiscon GmbH.
	*
	* Этот файл является частью LogAnalyzer.
	*
	* LogAnalyzer - это свободное программное обеспечение: вы можете его распространять и/или модифицировать
	* в соответствии с условиями GNU General Public License, опубликованной
	* Free Software Foundation, версии 3 лицензии или (по вашему выбору) любой более поздней версии.
	*
	* LogAnalyzer распространяется в надежде, что он будет полезным,
	* но БЕЗ КАКИХ-ЛИБО ГАРАНТИЙ; даже без подразумеваемой гарантии
	* ТОВАРНОГО СОСТОЯНИЯ или ПРИГОДНОСТИ ДЛЯ ОПРЕДЕЛЕННЫХ ЦЕЛЕЙ. Подробнее см. в GNU General Public License.
	*
	* Вы должны были получить копию GNU General Public License
	* вместе с LogAnalyzer. Если нет, см. <http://www.gnu.org/licenses/>.
	*
	* Копия GPL доступна в файле "COPYING" в этом дистрибутиве.
	*********************************************************************
*/
global $content;

// Глобальные элементы
$content['LN_MAINTITLE'] = "Главная LogAnalyzer";
$content['LN_MAIN_SELECTSTYLE'] = "Выбрать стиль";
$content['LN_GEN_LANGUAGE'] = "Выбрать язык";
$content['LN_GEN_SELECTSOURCE'] = "Выбрать источник";
$content['LN_GEN_MOREPAGES'] = "Доступно более одной страницы";
$content['LN_GEN_FIRSTPAGE'] = "Первая страница";
$content['LN_GEN_LASTPAGE'] = "Последняя страница";
$content['LN_GEN_NEXTPAGE'] = "Следующая страница";
$content['LN_GEN_PREVIOUSPAGE'] = "Предыдущая страница";
$content['LN_GEN_RECORDCOUNT'] = "Всего найдено записей";
$content['LN_GEN_PAGERSIZE'] = "Записей на страницу";
$content['LN_GEN_PAGE'] = "Страница";
$content['LN_GEN_PREDEFINEDSEARCHES'] = "Предопределенные поиски";
$content['LN_GEN_SOURCE_DISK'] = "Файл на диске";
$content['LN_GEN_SOURCE_DB'] = "MYSQL Native";
$content['LN_GEN_SOURCE_CLICKHOUSE'] = "ClickHouse DB";
$content['LN_GEN_SOURCE_PDO'] = "База данных (PDO)";
$content['LN_GEN_SOURCE_MONGODB'] = "MongoDB Native";
$content['LN_GEN_RECORDSPERPAGE'] = "записей на страницу";
$content['LN_GEN_PRECONFIGURED'] = "Предустановлено";
$content['LN_GEN_AVAILABLESEARCHES'] = "Доступные поиски";
$content['LN_GEN_DB_MYSQL'] = "Сервер Mysql";
$content['LN_GEN_DB_MSSQL'] = "Microsoft SQL Server";
$content['LN_GEN_DB_ODBC'] = "Источник данных ODBC";
$content['LN_GEN_DB_PGSQL'] = "PostgreSQL";
$content['LN_GEN_DB_OCI'] = "Oracle Call Interface";
$content['LN_GEN_DB_DB2'] = "IBM DB2";
$content['LN_GEN_DB_FIREBIRD'] = "Firebird/Interbase 6";
$content['LN_GEN_DB_INFORMIX'] = "IBM Informix Dynamic Server";
$content['LN_GEN_DB_SQLITE'] = "SQLite 2";
$content['LN_GEN_SELECTVIEW'] = "Выбрать вид";
$content['LN_GEN_CRITERROR_UNKNOWNTYPE'] = "Тип источника '%1' пока не поддерживается LogAnalyzer. Это критическая ошибка, пожалуйста, исправьте конфигурацию.";
$content['LN_GEN_ERRORRETURNPREV'] = "Нажмите здесь, чтобы вернуться на предыдущую страницу.";
$content['LN_GEN_ERRORDETAILS'] = "Детали ошибки:";
$content['LN_SOURCES_ERROR_WITHINSOURCE'] = "Проверка источника '%1' завершилась ошибкой:<br>%2";
$content['LN_SOURCES_ERROR_EXTRAMSG'] = "Дополнительные детали ошибки:<br>%1";
$content['LN_ERROR_NORECORDS'] = "Записи syslog не найдены";
$content['LN_ERROR_FILE_NOT_FOUND'] = "Файл syslog не найден";
$content['LN_ERROR_FILE_NOT_READABLE'] = "Файл syslog нечитаем, возможно, отказано в доступе на чтение";
$content['LN_ERROR_UNKNOWN'] = "Произошла неизвестная или необработанная ошибка (Код ошибки '%1')";
$content['LN_ERROR_FILE_EOF'] = "Достигнут конец файла";
$content['LN_ERROR_FILE_BOF'] = "Достигнуто начало файла";
$content['LN_ERROR_FILE_CANT_CLOSE'] = "Не удается закрыть файл";
$content['LN_ERROR_UNDEFINED'] = "Неопределенная ошибка";
$content['LN_ERROR_EOS'] = "Достигнут конец потока";
$content['LN_ERROR_FILTER_NOT_MATCH'] = "Фильтр не соответствует ни одному результату";
$content['LN_ERROR_DB_CONNECTFAILED'] = "Не удалось подключиться к серверу базы данных";
$content['LN_ERROR_DB_CANNOTSELECTDB'] = "Не удалось найти настроенную базу данных";
$content['LN_ERROR_DB_QUERYFAILED'] = "Не удалось выполнить запрос данных";
$content['LN_ERROR_DB_NOPROPERTIES'] = "Не найдены свойства базы данных";
$content['LN_ERROR_DB_INVALIDDBMAPPING'] = "Неверное сопоставление полей данных";
$content['LN_ERROR_DB_INVALIDDBDRIVER'] = "Выбран неверный драйвер базы данных";
$content['LN_ERROR_DB_TABLENOTFOUND'] = "Не удалось найти настроенную таблицу, возможно, опечатка или имена таблиц чувствительны к регистру";
$content['LN_ERROR_DB_DBFIELDNOTFOUND'] = "Не удалось найти сопоставление поля базы данных хотя бы для одного поля.";
$content['LN_GEN_SELECTEXPORT'] = "&gt; Выбрать формат экспорта &lt;";
$content['LN_GEN_EXPORT_CVS'] = "CSV (разделенные запятыми)";
$content['LN_GEN_EXPORT_XML'] = "XML";
$content['LN_GEN_EXPORT_PDF'] = "PDF";
$content['LN_GEN_ERROR_EXPORING'] = "Ошибка экспорта данных";
$content['LN_GEN_ERROR_INVALIDEXPORTTYPE'] = "Выбран неверный формат экспорта или другие параметры были неверны.";
$content['LN_GEN_ERROR_SOURCENOTFOUND'] = "Источник с ID '%1' не найден.";
$content['LN_GEN_MOREINFORMATION'] = "Дополнительная информация";
$content['LN_FOOTER_PAGERENDERED'] = "Страница сгенерирована за";
$content['LN_FOOTER_DBQUERIES'] = "Запросов к БД";
$content['LN_FOOTER_GZIPENABLED'] = "GZIP включен";
$content['LN_FOOTER_SCRIPTTIMEOUT'] = "Таймаут скрипта";
$content['LN_FOOTER_SECONDS'] = "секунд";
$content['LN_WARNING_LOGSTREAMTITLE'] = "Предупреждение лог-потока";
$content['LN_WARNING_LOGSTREAMDISK_TIMEOUT'] = "При чтении лог-потока таймаут php-скрипта вынудил прервать процесс.<br><br> Если вы хотите избежать этого, увеличьте таймаут скрипта LogAnalyzer в вашем config.php. Если установлена пользовательская система, это можно сделать в Центре администрирования.";
$content['LN_ERROR_FILE_NOMORETIME'] = "Не осталось времени для обработки";
$content['LN_WARNING_DBUPGRADE'] = "Требуется обновление базы данных";
$content['LN_WARNING_DBUPGRADE_TEXT'] = "Текущая установленная версия базы данных '%1'.<br>Доступно обновление до версии '%2'.";
$content['LN_ERROR_REDIRECTABORTED'] = 'Автоматическое перенаправление на <a href="%1">страницу</a> было прервано из-за внутренней ошибки. Пожалуйста, ознакомьтесь с деталями ошибки выше и обратитесь на форумы поддержки, если вам нужна помощь.';
$content['LN_DEBUGLEVEL'] = "Уровень отладки";
$content['LN_DEBUGMESSAGE'] = "Отладочное сообщение";
$content['LN_GEN_REPORT_OUTPUT_HTML'] = "Формат HTML";
$content['LN_GEN_REPORT_OUTPUT_PDF'] = "Формат PDF";
$content['LN_GEN_REPORT_TARGET_STDOUT'] = "Прямой вывод";
$content['LN_GEN_REPORT_TARGET_FILE'] = "Сохранить в файл";
$content['LN_GEN_REPORT_TARGET_EMAIL'] = "Отправить по email";
$content['LN_GEN_UNKNOWN'] = "Неизвестно";
$content['LN_GEN_AUTH_INTERNAL'] = "Внутренняя аутентификация";
$content['LN_GEN_AUTH_LDAP'] = "Аутентификация LDAP";

// Пункты верхнего меню
$content['LN_MENU_SEARCH'] = "Поиск";
$content['LN_MENU_SHOWEVENTS'] = "Показать события";
$content['LN_MENU_HELP'] = "Помощь";
	$content['LN_MENU_DOC'] = "Документация";
	$content['LN_MENU_FORUM'] = "Форум поддержки";
	$content['LN_MENU_WIKI'] = "LogAnalyzer Wiki";
	$content['LN_MENU_PROSERVICES'] = "Профессиональные услуги";
$content['LN_MENU_SEARCHINKB'] = "Поиск в Базе знаний";
$content['LN_MENU_LOGIN'] = "Вход";
$content['LN_MENU_ADMINCENTER'] = "Центр администрирования";
$content['LN_MENU_LOGOFF'] = "Выход";
$content['LN_MENU_LOGGEDINAS'] = "Вы вошли как";
$content['LN_MENU_MAXVIEW'] = "Максимизировать вид";
$content['LN_MENU_NORMALVIEW'] = "Обычный вид";
$content['LN_MENU_STATISTICS'] = "Статистика";
$content['LN_MENU_CLICKTOEXPANDMENU'] = "Нажмите на иконку, чтобы показать меню";
	$content['LN_MENU_REPORTS'] = "Отчеты";

// Главная страница
$content['LN_ERROR_INSTALLFILEREMINDER'] = "Внимание! Вы еще не удалили файл 'install.php' из основной директории LogAnalyzer!";
$content['LN_TOP_NUM'] = "№";
$content['LN_TOP_UID'] = "uID";
$content['LN_GRID_POPUPDETAILS'] = "Детали для сообщения syslog с ID '%1'";

$content['LN_SEARCH_USETHISBLA'] = "Используйте форму ниже, и ваш расширенный поиск появится здесь";
$content['LN_SEARCH_FILTER'] = "Поиск (фильтр):";
$content['LN_SEARCH_ADVANCED'] = "Расширенный поиск";
$content['LN_SEARCH'] = "Поиск";
$content['LN_SEARCH_RESET'] = "Сбросить поиск";
$content['LN_SEARCH_PERFORMADVANCED'] = "Выполнить расширенный поиск";
$content['LN_VIEW_MESSAGECENTERED'] = "Вернуться к нефильтрованному виду с этим сообщением наверху";
$content['LN_VIEW_RELATEDMSG'] = "Просмотреть связанные сообщения syslog";
$content['LN_VIEW_FILTERFOR'] = "Фильтровать сообщения для ";
$content['LN_VIEW_SEARCHFOR'] = "Искать в интернете ";
$content['LN_VIEW_SEARCHFORGOOGLE'] = "Искать в Google ";
$content['LN_GEN_MESSAGEDETAILS'] = "Детали сообщения";
	$content['LN_VIEW_ADDTOFILTER'] = "Добавить '%1' в набор фильтров";
	$content['LN_VIEW_EXCLUDEFILTER'] = "Исключить '%1' из набора фильтров";
	$content['LN_VIEW_FILTERFORONLY'] = "Фильтровать только '%1'";
	$content['LN_VIEW_SHOWALLBUT'] = "Показать все, кроме '%1'";
	$content['LN_VIEW_VISITLINK'] = "Открыть ссылку '%1' в новом окне";

$content['LN_HIGHLIGHT'] = "Подсветка >>";
$content['LN_HIGHLIGHT_OFF'] = "Подсветка <<";
$content['LN_HIGHLIGHT_WORDS'] = "Подсвечивать слова через запятую";

$content['LN_AUTORELOAD'] = "Установить автообновление";
$content['LN_AUTORELOAD_DISABLED'] = "Автообновление отключено";
$content['LN_AUTORELOAD_PRECONFIGURED'] = "Предустановленное автообновление ";
$content['LN_AUTORELOAD_SECONDS'] = "секунд";
$content['LN_AUTORELOAD_MINUTES'] = "минут";

// Опции фильтра
$content['LN_FILTER_DATE'] = "Диапазон дат";
$content['LN_FILTER_DATEMODE'] = "Выбрать режим";
$content['LN_DATEMODE_ALL'] = "Все время";
$content['LN_DATEMODE_RANGE'] = "Временной диапазон";
$content['LN_DATEMODE_LASTX'] = "Время x с сегодняшнего дня";
$content['LN_FILTER_DATEFROM'] = "Диапазон дат с";
$content['LN_FILTER_DATETO'] = "Диапазон дат по";
$content['LN_FILTER_TIMEFROM'] = "Диапазон времени с";
$content['LN_FILTER_TIMETO'] = "Диапазон времени по";
$content['LN_FILTER_DATELASTX'] = "Время с";
$content['LN_FILTER_ADD2SEARCH'] = "Добавить к поиску";
$content['LN_DATE_LASTX_HOUR'] = "Последний час";
$content['LN_DATE_LASTX_12HOURS'] = "Последние 12 часов";
$content['LN_DATE_LASTX_24HOURS'] = "Последние 24 часа";
$content['LN_DATE_LASTX_7DAYS'] = "Последние 7 дней";
$content['LN_DATE_LASTX_31DAYS'] = "Последние 31 день";
$content['LN_FILTER_FACILITY'] = "Учреждение Syslog";
$content['LN_FILTER_SEVERITY'] = "Серьезность Syslog";
$content['LN_FILTER_OTHERS'] = "Другие фильтры";
$content['LN_FILTER_MESSAGE'] = "Сообщение Syslog";
$content['LN_FILTER_SYSLOGTAG'] = "Тег Syslog";
$content['LN_FILTER_SOURCE'] = "Источник (Имя хоста)";
$content['LN_FILTER_MESSAGETYPE'] = "Тип сообщения";

// Страница установки
$content['LN_CFG_DBSERVER'] = "Сервер базы данных";
$content['LN_CFG_DBPORT'] = "Порт базы данных";
$content['LN_CFG_DBNAME'] = "Имя базы данных";
$content['LN_CFG_DBPREF'] = "Префикс таблицы";
$content['LN_CFG_DBUSER'] = "Пользователь базы данных";
$content['LN_CFG_DBPASSWORD'] = "Пароль базы данных";
$content['LN_CFG_PARAMMISSING'] = "Отсутствуют следующие параметры: ";
$content['LN_CFG_SOURCETYPE'] = "Тип источника";
$content['LN_CFG_DISKTYPEOPTIONS'] = "Опции типа диска";
$content['LN_CFG_LOGLINETYPE'] = "Тип строки лога";
$content['LN_CFG_SYSLOGFILE'] = "Файл syslog";
$content['LN_CFG_DATABASETYPEOPTIONS'] = "Опции типа базы данных";
$content['LN_CFG_DBTABLETYPE'] = "Тип таблицы";
$content['LN_CFG_DBSTORAGEENGINE'] = "Движок базы данных";
$content['LN_CFG_DBTABLENAME'] = "Имя таблицы базы данных";
$content['LN_CFG_NAMEOFTHESOURCE'] = "Имя источника";
$content['LN_CFG_FIRSTSYSLOGSOURCE'] = "Первый источник Syslog";
$content['LN_CFG_DBROWCOUNTING'] = "Включить подсчет строк";
$content['LN_CFG_VIEW'] = "Выбрать вид";
$content['LN_CFG_DBUSERLOGINREQUIRED'] = "Требовать вход пользователя";
$content['LN_CFG_MSGPARSERS'] = "Парсеры сообщений (через запятую)";
$content['LN_CFG_NORMALIZEMSG'] = "Нормализовать сообщение в парсерах";
$content['LN_CFG_SKIPUNPARSEABLE'] = "Пропускать неразбираемые сообщения (Работает только если настроены парсеры сообщений!)";
$content['LN_CFG_DBRECORDSPERQUERY'] = "Количество записей для запросов к базе данных";
$content['LN_CFG_LDAPServer'] = "Имя хоста/IP LDAP сервера";
$content['LN_CFG_LDAPPort'] = "Порт LDAP, по умолчанию 389 (636 для SSL)";
$content['LN_CFG_LDAPBaseDN'] = "Базовый DN для поиска LDAP";
$content['LN_CFG_LDAPSearchFilter'] = "Базовый фильтр поиска";
$content['LN_CFG_LDAPUidAttribute'] = "Атрибут имени пользователя LDAP";
$content['LN_CFG_LDAPBindDN'] = "Привилегированный пользователь для запросов LDAP";
$content['LN_CFG_LDAPBindPassword'] = "Пароль привилегированного пользователя";
$content['LN_CFG_LDAPDefaultAdminUser'] = "Имя пользователя LDAP по умолчанию для администратора";
$content['LN_CFG_AUTHTYPE'] = "Метод аутентификации";
$content['LN_GEN_AUTH_LDAP_OPTIONS'] = "Опции аутентификации LDAP";

// Страница деталей
$content['LN_DETAILS_FORSYSLOGMSG'] = "Детали для сообщения syslog с id";
$content['LN_DETAILS_DETAILSFORMSG'] = "Детали для сообщения с id";
$content['LN_DETAIL_BACKTOLIST'] = "Вернуться к списку";
$content['LN_DETAIL_DYNAMIC_FIELDS'] = "Динамические поля";

// Страница входа
$content['LN_LOGIN_DESCRIPTION'] = "Используйте эту форму для входа в LogAnalyzer. ";
$content['LN_LOGIN_TITLE'] = "Вход";
$content['LN_LOGIN_USERNAME'] = "Имя пользователя";
$content['LN_LOGIN_PASSWORD'] = "Пароль";
$content['LN_LOGIN_SAVEASCOOKIE'] = "Оставаться в системе";
$content['LN_LOGIN_ERRWRONGPASSWORD'] = "Неверное имя пользователя или пароль!";
$content['LN_LOGIN_USERPASSMISSING'] = "Имя пользователя или пароль не указаны";
$content['LN_LOGIN_LDAP_USERNOTFOUND'] = "Пользователь '%1' не найден";
$content['LN_LOGIN_LDAP_USERCOULDNOTLOGIN'] = "Не удалось войти под пользователем '%1', ошибка LDAP: %2";
$content['LN_LOGIN_LDAP_PASSWORDFAIL'] = "Пользователь '%1' не смог войти с указанным паролем";
$content['LN_LOGIN_LDAP_SERVERFAILED'] = "Не удалось подключиться к LDAP серверу '%1'";
$content['LN_LOGIN_LDAP_USERBINDFAILED'] = "Не удалось привязаться с DN пользователя поиска '%1'";

// Страница установки
$content['LN_INSTALL_TITLETOP'] = "Установка LogAnalyzer версии %1 - Шаг %2";
$content['LN_INSTALL_TITLE'] = "Шаг установки %1";
$content['LN_INSTALL_ERRORINSTALLED'] = 'LogAnalyzer уже настроен!<br><br> Если вы хотите перенастроить LogAnalyzer, удалите текущий <B>config.php</B> или замените его пустым файлом.<br><br>Нажмите <A HREF="index.php">здесь</A> для возврата на стартовую страницу pgpLogCon.';
$content['LN_INSTALL_FILEORDIRNOTWRITEABLE'] = "По крайней мере один файл или директория (или более) недоступны для записи, пожалуйста, проверьте права доступа (chmod 666)!";
$content['LN_INSTALL_SAMPLECONFIGMISSING'] = "Пример файла конфигурации '%1' отсутствует. Вы не полностью загрузили LogAnalyzer.";
$content['LN_INSTALL_ERRORCONNECTFAILED'] = "Подключение к базе данных '%1' не удалось! Пожалуйста, проверьте имя сервера, порт, пользователя и пароль!";
$content['LN_INSTALL_ERRORACCESSDENIED'] = "Невозможно использовать базу данных '%1'! Если база данных не существует, создайте ее или проверьте права доступа пользователя!";
$content['LN_INSTALL_ERRORINVALIDDBFILE'] = "Ошибка, неверный файл определения базы данных (слишком короткий!), имя файла '%1'! Пожалуйста, проверьте, был ли файл корректно загружен.";
$content['LN_INSTALL_ERRORINSQLCOMMANDS'] = "Ошибка, неверный файл определения базы данных (не найдены sql-запросы!), имя файла '%1'!<br> Пожалуйста, проверьте, был ли файл корректно загружен, или обратитесь на форумы LogAnalyzer за помощью!";
$content['LN_INSTALL_MISSINGUSERNAME'] = "Необходимо указать имя пользователя";
$content['LN_INSTALL_PASSWORDNOTMATCH'] = "Либо пароль не совпадает, либо слишком короткий!";
$content['LN_INSTALL_FAILEDTOOPENSYSLOGFILE'] = "Не удалось открыть файл syslog '%1'! Проверьте, существует ли файл и есть ли у LogAnalyzer достаточные права доступа к нему<br>";
$content['LN_INSTALL_FAILEDCREATECFGFILE'] = "Не удалось создать файл конфигурации в '%1'! Пожалуйста, проверьте права доступа к файлу!";
$content['LN_INSTALL_FAILEDREADINGFILE'] = "Ошибка чтения файла '%1'! Пожалуйста, проверьте, существует ли файл!";
$content['LN_INSTALL_ERRORREADINGDBFILE'] = "Ошибка чтения файла определения базы данных по умолчанию в '%1'! Пожалуйста, проверьте, существует ли файл!";
$content['LN_INSTALL_STEP1'] = "Шаг 1 - Предварительные требования";
$content['LN_INSTALL_STEP2'] = "Шаг 2 - Проверка прав доступа к файлам";
$content['LN_INSTALL_STEP3'] = "Шаг 3 - Базовая конфигурация";
$content['LN_INSTALL_STEP4'] = "Шаг 4 - Создание таблиц";
$content['LN_INSTALL_STEP5'] = "Шаг 5 - Проверка результатов SQL";
$content['LN_INSTALL_STEP6'] = "Шаг 6 - Создание главной учетной записи пользователя";
$content['LN_INSTALL_STEP7'] = "Шаг 7 - Создание первого источника сообщений syslog";
$content['LN_INSTALL_STEP8'] = "Шаг 8 - Готово";
$content['LN_INSTALL_STEP1_TEXT'] = 'Перед началом установки LogAnalyzer, установщик должен проверить несколько вещей.<br>Возможно, вам потребуется сначала исправить некоторые права доступа к файлам. <br><br>Нажмите на <input type="submit" value="Далее"> для начала проверки!';
$content['LN_INSTALL_STEP2_TEXT'] = "Проверены следующие права доступа к файлам. Проверьте результаты ниже! <br>Вы можете использовать скрипт <B>configure.sh</B> из папки <B>contrib</B> для установки прав доступа.";
$content['LN_INSTALL_STEP3_TEXT'] = "На этом шаге вы настраиваете базовую конфигурацию для LogAnalyzer.";
$content['LN_INSTALL_STEP4_TEXT'] = 'Если вы достигли этого шага, подключение к базе данных успешно проверено!<br><br> Следующим шагом будет создание необходимых таблиц базы данных, используемых системой пользователей LogAnalyzer. Это может занять некоторое время!<br> <b>ВНИМАНИЕ</b>, если у вас есть существующая установка LogAnalyzer в этой базе данных с тем же префиксом таблицы, все ваши данные будут <b>ПЕРЕЗАПИСАНЫ</b>! Убедитесь, что вы используете новую базу данных или хотите перезаписать старую базу данных LogAnalyzer. <br><br><b>Нажмите на <input type="submit" value="Далее"> для начала создания таблиц</b>';
$content['LN_INSTALL_STEP5_TEXT'] = "Таблицы созданы. Проверьте список ниже на возможные ошибки";
$content['LN_INSTALL_STEP6_TEXT'] = "Вы сейчас собираетесь создать начальную учетную запись пользователя LogAnalyzer.<br> Это будет первый административный пользователь, который потребуется для входа в LogAnalyzer и доступа к Центру администрирования!";
$content['LN_INSTALL_STEP8_TEXT'] = 'Поздравляем! Вы успешно установили LogAnalyzer :)! <br><br>Нажмите <a href="index.php">здесь</a> для перехода к вашей установке.';
$content['LN_INSTALL_PROGRESS'] = "Прогресс установки: ";
$content['LN_INSTALL_FRONTEND'] = "Опции интерфейса";
$content['LN_INSTALL_NUMOFSYSLOGS'] = "Количество сообщений syslog на страницу";
$content['LN_INSTALL_MSGCHARLIMIT'] = "Ограничение символов сообщения для главного вида";
$content['LN_INSTALL_STRCHARLIMIT'] = "Ограничение отображения символов для всех строковых полей";
$content['LN_INSTALL_SHOWDETAILPOP'] = "Показывать всплывающие детали сообщения";
$content['LN_INSTALL_AUTORESOLVIP'] = "Автоматически разрешать IP адреса (встроенно)";
$content['LN_INSTALL_USERDBOPTIONS'] = "Опции базы данных пользователей";
$content['LN_INSTALL_ENABLEUSERDB'] = "Включить базу данных пользователей";
$content['LN_INSTALL_SUCCESSSTATEMENTS'] = "Успешно выполненные запросы:";
$content['LN_INSTALL_FAILEDSTATEMENTS'] = "Неудачные запросы:";
$content['LN_INSTALL_STEP5_TEXT_NEXT'] = "Теперь вы можете перейти к <B>следующему</B> шагу добавления первого административного пользователя LogAnalyzer!";
$content['LN_INSTALL_STEP5_TEXT_FAILED'] = "По крайней мере один запрос завершился неудачей, см. причины ошибок ниже";
$content['LN_INSTALL_ERRORMSG'] = "Сообщение об ошибке";
$content['LN_INSTALL_SQLSTATEMENT'] = "SQL-запрос";
$content['LN_INSTALL_CREATEUSER'] = "Создать учетную запись пользователя";
$content['LN_INSTALL_PASSWORD'] = "Пароль";
$content['LN_INSTALL_PASSWORDREPEAT'] = "Повторите пароль";
$content['LN_INSTALL_SUCCESSCREATED'] = "Учетная запись пользователя успешно создана";
$content['LN_INSTALL_RECHECK'] = "Проверить снова";
$content['LN_INSTALL_FINISH'] = "Завершить!";
$content['LN_INSTALL_LDAPCONNECTFAILED'] = "Не удалось подключиться к вашему LDAP серверу '%1'.";
$content['LN_INSTALL_WARNINGMYSQL'] = "Для этой функции требуется сервер базы данных MYSQL. Другие системы баз данных не поддерживаются для системы пользовательской базы данных. Однако для источников логов есть поддержка других систем баз данных.";
$content['LN_INSTALL_'] = "";

// Страница конвертера
$content['LN_CONVERT_TITLE'] = "Конвертер конфигурации Шаг %1";
$content['LN_CONVERT_NOTALLOWED'] = "Вход";
$content['LN_CONVERT_ERRORINSTALLED'] = 'LogAnalyzer не разрешено конвертировать ваши настройки в базу данных пользователей.<br><br> Если вы хотите конвертировать ваши настройки, добавьте следующую переменную в ваш config.php: <br><b>$CFG[\'UserDBConvertAllowed\'] = true;</b><br><br> Нажмите <A HREF="index.php">здесь</A> для возврата на стартовую страницу pgpLogCon.';
$content['LN_CONVERT_STEP1'] = "Шаг 1 - Информация";
$content['LN_CONVERT_STEP2'] = "Шаг 2 - Создание таблиц";
$content['LN_CONVERT_STEP3'] = "Шаг 3 - Проверка результатов SQL";
$content['LN_CONVERT_STEP4'] = "Шаг 4 - Создание главной учетной записи пользователя";
$content['LN_CONVERT_STEP5'] = "Шаг 5 - Импорт настроек в UserDB";
$content['LN_CONVERT_TITLETOP'] = "Конвертация настроек LogAnalyzer - Шаг ";
$content['LN_CONVERT_STEP1_TEXT'] = 'Этот скрипт позволяет вам импортировать вашу существующую конфигурацию из файла <b>config.php</b>. Это включает настройки интерфейса, источники данных, пользовательские виды и пользовательские поиски. Выполняйте эту конвертацию только если вы установили LogAnalyzer без системы UserDB и решили включить ее сейчас. <br><br><b>ЛЮБАЯ СУЩЕСТВУЮЩАЯ ИНСТАНЦИЯ USERDB БУДЕТ ПЕРЕЗАПИСАНА!</b><br><br><input type="submit" value="Нажмите здесь"> для начала первого шага конвертации!';
$content['LN_CONVERT_STEP2_TEXT'] = 'Подключение к базе данных успешно проверено! <br><br>Следующим шагом будет создание необходимых таблиц базы данных для системы пользователей LogAnalyzer. Это может занять некоторое время! <br><b>ВНИМАНИЕ</b>, если у вас есть существующая установка LogAnalyzer в этой базе данных с тем же префиксом таблицы, все ваши данные будут <b>ПЕРЕЗАПИСАНЫ</b>!<br> Убедитесь, что вы используете новую базу данных или хотите перезаписать старую базу данных LogAnalyzer.<br><br><b>Нажмите на <input type="submit" value="Далее"> для начала создания таблиц</b>';
$content['LN_CONVERT_STEP5_TEXT'] = '<input type="submit" value="Нажмите здесь"> для начала последнего шага конвертации. На этом шаге ваша существующая конфигурация из <b>config.php</b> будет импортирована в базу данных.';
$content['LN_CONVERT_STEP6'] = "Шаг 8 - Готово";
$content['LN_CONVERT_STEP6_TEXT'] = 'Поздравляем! Вы успешно конвертировали вашу существующую установку LogAnalyzer :)!<br><br>Важно! Не забудьте УДАЛИТЬ ПЕРЕМЕННЫЕ <b>$CFG[\'UserDBConvertAllowed\'] = true;</b> из вашего config.php файла! <br><br>Вы можете нажать <a href="index.php">здесь</a> для перехода к вашей установке LogAnalyzer.';
$content['LN_CONVERT_PROCESS'] = "Прогресс конвертации:";
$content['LN_CONVERT_ERROR_SOURCEIMPORT'] = "Критическая ошибка при импорте источников в базу данных: тип источника '%1' не поддерживается этой версией LogAnalyzer.";

// Статистика
    $content['LN_STATS_CHARTTITLE'] = "Топ %1 '%2' по количеству сообщений";
    $content['LN_STATS_COUNTBY'] = "Количество сообщений по '%1'";
    $content['LN_STATS_OTHERS'] = "Все остальные";
    $content['LN_STATS_TOPRECORDS'] = "Максимум записей: %1";
    $content['LN_STATS_GENERATEDAT'] = "Сформировано: %1";
    $content['LN_STATS_GRAPH'] = "График";
    $content['LN_GEN_ERROR_INVALIDFIELD'] = "Недопустимое имя поля";
    $content['LN_GEN_ERROR_MISSINGCHARTFIELD'] = "Отсутствует имя поля";
    $content['LN_GEN_ERROR_INVALIDTYPE'] = "Недопустимый или неизвестный тип диаграммы.";
    $content['LN_ERROR_CHARTS_NOTCONFIGURED'] = "Диаграммы не настроены.";
    $content['LN_CHART_TYPE'] = "Тип диаграммы";
    $content['LN_CHART_WIDTH'] = "Ширина диаграммы";
    $content['LN_CHART_FIELD'] = "Поле диаграммы";
    $content['LN_CHART_MAXRECORDS'] = "Количество топ-записей";
    $content['LN_CHART_SHOWPERCENT'] = "Показывать данные в процентах";
    $content['LN_CHART_TYPE_CAKE'] = "Круговая (пирог)";
    $content['LN_CHART_TYPE_BARS_VERTICAL'] = "Вертикальные столбцы";
    $content['LN_CHART_TYPE_BARS_HORIZONTAL'] = "Горизонтальные столбцы";
    $content['LN_STATS_WARNINGDISPLAY'] = "Генерация графиков для больших источников данных в настоящее время требует много времени. Это будет улучшено в будущих версиях. Если обработка занимает слишком много времени, вы можете отменить запрос.";

// asktheoracle
$content['LN_ORACLE_TITLE'] = "Запрос к оракулу для '%1'";
$content['LN_ORACLE_HELP_FOR'] = "Вот ссылки, которые нашел оракул";
$content['LN_ORACLE_HELP_TEXT'] = "<br><h3>Вы запросили у оракула информацию о значении '%1' - '%2'.</h3>
<p align=\"left\">Эта страница позволяет выполнять поиск по нескольким источникам логов. %3
<br>Основная идея - упростить поиск информации по конкретному объекту во всех возможных местах.
</p>
<p align=\"left\">Практический пример: вы видите попытку взлома в веб-логах. Нажав на IP атакующего, вы попадете на эту страницу поиска. Теперь вы можете проверить информацию об этом IP-диапазоне, а также найти упоминания в других логах (например, firewall или mail). Мы надеемся, что это упростит ваш анализ.
</p>
";
$content['LN_ORACLE_HELP_TEXT_EXTERNAL'] = "Также доступен поиск по внешним базам данных";
$content['LN_ORACLE_HELP_DETAIL'] = "Матрица ссылок для значения '%1' - '%2'";
$content['LN_ORACLE_SEARCH'] = "Поиск"; // в поле '%1'";
$content['LN_ORACLE_SOURCENAME'] = "Имя источника";
$content['LN_ORACLE_FIELD'] = "Поле";
$content['LN_ORACLE_ONLINESEARCH'] = "Поиск в интернете";
$content['LN_ORACLE_WHOIS'] = "WHOIS запрос для значения '%1' - '%2'";

// Отчеты
$content['LN_GEN_ERROR_INVALIDOP'] = "Недопустимый или отсутствующий тип операции";
$content['LN_GEN_ERROR_INVALIDREPORTID'] = "Недопустимый или отсутствующий ID отчета";
$content['LN_GEN_ERROR_MISSINGSAVEDREPORTID'] = "Недопустимый или отсутствующий ID сохраненного отчета";
$content['LN_GEN_ERROR_REPORTGENFAILED'] = "Ошибка генерации отчета '%1': %2";
$content['LN_GEN_ERROR_WHILEREPORTGEN'] = "Ошибка при генерации отчета"; 
$content['LN_GEN_ERROR_REPORT_NODATA'] = "Нет данных для генерации отчета"; 
$content['LN_GEN_ALL_OTHER_EVENTS'] = "Все остальные события";
$content['LN_REPORT_FOOTER_ENDERED'] = "Отчет сформирован за";
$content['LN_REPORT_FILTERS'] = "Список использованных фильтров";
$content['LN_REPORT_FILTERTYPE_DATE'] = "Дата";
$content['LN_REPORT_FILTERTYPE_NUMBER'] = "Число";
$content['LN_REPORT_FILTERTYPE_STRING'] = "Строка";
$content['LN_GEN_SUCCESS_WHILEREPORTGEN'] = "Отчет успешно сгенерирован";
$content['LN_GEN_ERROR_REPORTFAILEDTOGENERATE'] = "Ошибка генерации отчета: %1";
$content['LN_GEN_SUCCESS_REPORTWASGENERATED_DETAILS'] = "Отчет успешно сгенерирован: %1";
$content['LN_ERROR_PATH_NOT_ALLOWED'] = "Файл находится вне списка разрешенных директорий (по умолчанию разрешена только /var/log)."; 
$content['LN_ERROR_PATH_NOT_ALLOWED_EXTRA'] = "Файл '%1' не находится в одной из этих директорий: '%2'"; 

$content['LN_CMD_RUNREPORT'] = "Генерация сохраненного отчета '%1'";
$content['LN_CMD_REPORTIDNOTFOUND'] = "Недопустимый ID отчета '%1'";
$content['LN_CMD_SAVEDREPORTIDNOTFOUND'] = "Недопустимый ID сохраненного отчета '%1'";
$content['LN_CMD_NOREPORTID'] = "Отсутствует ID отчета";
$content['LN_CMD_NOSAVEDREPORTID'] = "Отсутствует ID сохраненного отчета";
$content['LN_CMD_NOCMDPROMPT'] = "Ошибка: этот скрипт может выполняться только из командной строки.";
$content['LN_REPORT_GENERATEDTIME'] = "Отчет сгенерирован: ";

$content['LN_REPORT_ACTIONS'] = "Действия с отчетами";
$content['LN_REPORTS_CAT'] = "Категория отчета";
$content['LN_REPORTS_ID'] = "ID отчета";
$content['LN_REPORTS_NAME'] = "Название отчета";
$content['LN_REPORTS_DESCRIPTION'] = "Описание отчета";
$content['LN_REPORTS_HELP'] = "Помощь";
$content['LN_REPORTS_HELP_CLICK'] = "Нажмите для подробного описания отчета";
$content['LN_REPORTS_INFO'] = "Дополнительная информация";
$content['LN_REPORTS_SAVEDREPORTS'] = "Сохраненные отчеты";
$content['LN_REPORTS_ADMIN'] = "Управление отчетами";
$content['LN_REPORTMENU_LIST'] = "Список установленных отчетов";
$content['LN_REPORTMENU_ONLINELIST'] = "Все доступные отчеты";
$content['LN_REPORTS_INFORMATION'] = "На этой странице показан список установленных и доступных отчетов, включая сохраненные конфигурации.
<br/>Для запуска отчета нажмите на кнопки справа от сохраненных отчетов.
<br/>Внимание! Генерация отчетов может занять много времени в зависимости от размера вашей базы данных.
";
$content['LN_REPORTS_CHECKLOGSTREAMSOURCE'] = "Проверить оптимизацию лог-потока";
$content['LN_REPORTS_RUNNOW'] = "Запустить сохраненный отчет сейчас!";
$content['LN_REPORTS_ERROR_ERRORCHECKINGSOURCE'] = "Ошибка при проверке источника сохраненного отчета: %1";


?>
