<?php
/*
	*********************************************************************
	* LogAnalyzer - http://loganalyzer.adiscon.com
	* -----------------------------------------------------------------
	*
	* Copyright (C) 2008-2010 Adiscon GmbH.
	*
	* This file is part of LogAnalyzer.
	*
	* LogAnalyzer is free software: you can redistribute it and/or modify
	* it under the terms of the GNU General Public License as published by
	* the Free Software Foundation, either version 3 of the License, or
	* (at your option) any later version.
	*
	* LogAnalyzer is distributed in the hope that it will be useful,
	* but WITHOUT ANY WARRANTY; without even the implied warranty of
	* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	* GNU General Public License for more details.
	*
	* You should have received a copy of the GNU General Public License
	* along with LogAnalyzer. If not, see <http://www.gnu.org/licenses/>.
	*
	* A copy of the GPL can be found in the file "COPYING" in this
	* distribution.
	*********************************************************************
*/
global $content;

// Global Stuff
$content['LN_ADMINMENU_HOMEPAGE'] = "Вернуться к просмотру событий";
$content['LN_ADMINMENU_GENOPT'] = "Настройки";
$content['LN_ADMINMENU_SOURCEOPT'] = "Источники";
$content['LN_ADMINMENU_VIEWSOPT'] = "Представления";
$content['LN_ADMINMENU_SEARCHOPT'] = "Поиски";
$content['LN_ADMINMENU_USEROPT'] = "Пользователи";
$content['LN_ADMINMENU_GROUPOPT'] = "Группы";
$content['LN_ADMINMENU_CHARTOPT'] = "Диаграммы";
$content['LN_ADMINMENU_FIELDOPT'] = "Поля";
$content['LN_ADMINMENU_DBMAPPINGOPT'] = "Сопоставления БД";
$content['LN_ADMINMENU_MSGPARSERSOPT'] = "Парсеры сообщений";
$content['LN_ADMINMENU_REEPORTSOPT'] = "Модули отчетов";
$content['LN_ADMIN_CENTER'] = "Центр администрирования";
$content['LN_ADMIN_UNKNOWNSTATE'] = "Неизвестное состояние";
$content['LN_ADMIN_ERROR_NOTALLOWED'] = "У вас недостаточно прав для доступа к этой странице.";
$content['LN_DELETEYES'] = "Да";
$content['LN_DELETENO'] = "Нет";
$content['LN_GEN_ACTIONS'] = "Доступные действия";
$content['LN_ADMIN_SEND'] = "Применить изменения";
$content['LN_GEN_USERONLY'] = "Только пользователь";
$content['LN_GEN_USERONLYNAME'] = "Пользователь '%1'";
$content['LN_GEN_GROUPONLY'] = "Только группа";
$content['LN_GEN_GLOBAL'] = "Глобально";
$content['LN_GEN_USERONLY_LONG'] = "Только для меня <br>(Доступно только вашему пользователю)";
$content['LN_GEN_GROUPONLY_LONG'] = "Для этой группы <br>(Доступно только выбранной группе)";
$content['LN_GEN_GROUPONLYNAME'] = "Группа '%1'";
$content['LN_ADMIN_POPUPHELP'] = "Подробности об этой функции";
$content['LN_ADMIN_DBSTATS'] = "Показать статистику БД";
$content['LN_ADMIN_CLEARDATA'] = "Используйте эту функцию для удаления старых записей";
$content['LN_UPDATE_AVAILABLE'] = "Доступно обновление";
$content['LN_UPDATE_INSTALLEDVER'] = "Установленная версия: ";
$content['LN_UPDATE_AVAILABLEVER'] = "Доступная версия: ";
$content['LN_UPDATE_LINK'] = "Нажмите для получения обновления";
$content['LN_ADMIN_RESULTREDIRECT'] = "Вы будете перенаправлены на <A HREF='%1'>эту страницу</A> через %2 секунд.";
$content['LN_ADMIN_RESULTCLICK'] = "Нажмите <A HREF='%1'>здесь</A> для продолжения.";
$content['LN_ADMIN_GOBACK'] = "Назад";

// Общие настройки
$content['LN_ADMIN_GLOBFRONTEND'] = "Глобальные настройки интерфейса";
$content['LN_ADMIN_USERFRONTEND'] = "Персональные настройки интерфейса";
$content['LN_ADMIN_MISC'] = "Разные настройки";
$content['LN_GEN_SHOWDEBUGMSG'] = "Показывать отладочные сообщения";
$content['LN_GEN_DEBUGGRIDCOUNTER'] = "Показывать счетчик отладки сетки";
$content['LN_GEN_SHOWPAGERENDERSTATS'] = "Показывать статистику генерации страниц";
$content['LN_GEN_ENABLEGZIP'] = "Включить сжатие GZIP";
$content['LN_GEN_DEBUGUSERLOGIN'] = "Отладка входа пользователей";
$content['LN_GEN_WEBSTYLE'] = "Стиль по умолчанию";
$content['LN_GEN_SELLANGUAGE'] = "Язык по умолчанию";
$content['LN_GEN_PREPENDTITLE'] = "Добавлять эту строку к заголовку";
$content['LN_GEN_USETODAY'] = "Использовать 'Сегодня' и 'Вчера' в полях времени";
$content['LN_GEN_DETAILPOPUPS'] = "Использовать всплывающие окна для деталей сообщений";
$content['LN_GEN_MSGCHARLIMIT'] = "Ограничение длины сообщения в основном виде";
$content['LN_GEN_STRCHARLIMIT'] = "Ограничение длины для всех строковых полей";
$content['LN_GEN_ENTRIESPERPAGE'] = "Количество записей на страницу";
$content['LN_GEN_AUTORELOADSECONDS'] = "Автоперезагрузка через (секунд)";
$content['LN_GEN_ADMINCHANGEWAITTIME'] = "Время перезагрузки в панели администрирования";
$content['LN_GEN_IPADRRESOLVE'] = "Разрешать IP-адреса через DNS";
$content['LN_GEN_CUSTBTNCAPT'] = "Текст кнопки пользовательского поиска";
$content['LN_GEN_CUSTBTNSRCH'] = "Строка пользовательского поиска";
$content['LN_GEN_SUCCESSFULLYSAVED'] = "Настройки успешно сохранены";
$content['LN_GEN_INTERNAL'] = "Внутренний";
$content['LN_GEN_DISABLED'] = "Функция отключена";
$content['LN_GEN_CONFIGFILE'] = "Файл конфигурации";
$content['LN_GEN_ACCESSDENIED'] = "Доступ к этой функции запрещен";
$content['LN_GEN_DEFVIEWS'] = "Представление по умолчанию";
$content['LN_GEN_DEFSOURCE'] = "Источник по умолчанию";
$content['LN_GEN_DEFFONT'] = "Шрифт по умолчанию";
$content['LN_GEN_DEFFONTSIZE'] = "Размер шрифта по умолчанию";
$content['LN_GEN_SUPPRESSDUPMSG'] = "Скрывать дублирующиеся сообщения";
$content['LN_GEN_TREATFILTERSTRUE'] = "Считать фильтры для отсутствующих полей истинными";
$content['LN_GEN_INLINESEARCHICONS'] = "Показывать иконки поиска в полях";
$content['LN_GEN_OPTIONNAME'] = "Название опции";
$content['LN_GEN_GLOBALVALUE'] = "Глобальное значение";
$content['LN_GEN_PERSONALVALUE'] = "Персональное значение";
$content['LN_GEN_DISABLEUSEROPTIONS'] = "Отключить персональные настройки";
$content['LN_GEN_ENABLEUSEROPTIONS'] = "Включить персональные настройки";
$content['LN_ADMIN_GLOBALONLY'] = "Только глобальные настройки";
$content['LN_GEN_DEBUGTOSYSLOG'] = "Отправлять отладочную информацию в локальный syslog";
$content['LN_GEN_POPUPMENUTIMEOUT'] = "Таймаут всплывающего меню (мс)";
$content['LN_ADMIN_SCRIPTTIMEOUT'] = "Таймаут PHP-скриптов (секунд)";
$content['LN_GEN_INJECTHTMLHEADER'] = "Добавить этот HTML-код в &lt;head&gt;";
$content['LN_GEN_INJECTBODYHEADER'] = "Добавить этот HTML-код в начало &lt;body&gt;";
$content['LN_GEN_INJECTBODYFOOTER'] = "Добавить этот HTML-код в конец &lt;body&gt;";
$content['LN_ADMIN_PHPLOGCON_LOGOURL'] = "URL логотипа LogAnalyzer (оставьте пустым для логотипа по умолчанию)";
$content['LN_ADMIN_ERROR_READONLY'] = "Вы имеете доступ только для чтения и не можете вносить изменения.";
$content['LN_ADMIN_ERROR_NOTALLOWEDTOEDIT'] = "У вас нет прав для редактирования этого элемента.";
$content['LN_ADMIN_USEPROXYSERVER'] = "Оставьте пустым, если не используете прокси. Пример: '127.0.0.1:8080'";
$content['LN_ADMIN_DEFAULTENCODING'] = "Кодировка по умолчанию"; 
$content['LN_GEN_CONTEXTLINKS'] = "Включить контекстные ссылки (знаки вопроса)";
$content['LN_GEN_DISABLEADMINUSERS'] = "Отключить панель администрирования для обычных пользователей";

// Управление пользователями
$content['LN_USER_CENTER'] = "Управление пользователями";
$content['LN_USER_ID'] = "ID";
$content['LN_USER_NAME'] = "Имя пользователя";
$content['LN_USER_ADD'] = "Добавить пользователя";
$content['LN_USER_EDIT'] = "Редактировать пользователя";
$content['LN_USER_DELETE'] = "Удалить пользователя";
$content['LN_USER_PASSWORD1'] = "Пароль";
$content['LN_USER_PASSWORD2'] = "Подтверждение пароля";
$content['LN_USER_ERROR_IDNOTFOUND'] = "Ошибка: пользователь с ID '%1' не найден";
$content['LN_USER_ERROR_DONOTDELURSLF'] = "Ошибка: вы не можете удалить себя!";
$content['LN_USER_ERROR_DELUSER'] = "Ошибка удаления пользователя с ID '%1'!";
$content['LN_USER_ERROR_INVALIDID'] = "Ошибка: неверный ID пользователя";
$content['LN_USER_ERROR_HASBEENDEL'] = "Пользователь '%1' успешно удален!";
$content['LN_USER_ERROR_USEREMPTY'] = "Ошибка: имя пользователя не может быть пустым";
$content['LN_USER_ERROR_USERNAMETAKEN'] = "Ошибка: это имя пользователя уже занято!";
$content['LN_USER_ERROR_PASSSHORT'] = "Ошибка: пароль слишком короткий или не совпадает";
$content['LN_USER_ERROR_HASBEENADDED'] = "Пользователь '%1' успешно добавлен";
$content['LN_USER_ERROR_HASBEENEDIT'] = "Пользователь '%1' успешно изменен";
$content['LN_USER_ISADMIN'] = "Администратор?";
$content['LN_USER_ADDEDIT'] = "Добавить/Изменить пользователя";
$content['LN_USER_WARNREMOVEADMIN'] = "Вы собираетесь отозвать свои административные права. Вы уверены?";
$content['LN_USER_WARNDELETEUSER'] = "Вы уверены, что хотите удалить пользователя '%1'? Все его персональные настройки также будут удалены.";
$content['LN_USER_ERROR_INVALIDSESSIONS'] = "Неверная сессия пользователя.";
$content['LN_USER_ERROR_SETTINGFLAG'] = "Ошибка установки флага: неверный ID или пользователь не найден";
$content['LN_USER_WARNRADYONLYADMIN'] = "Вы собираетесь установить свою учетную запись в режим только для чтения! Это предотвратит любые изменения настроек! Вы уверены, что хотите продолжить?";
$content['LN_USER_ISREADONLY'] = "Только чтение?";
$content['LN_USER_SETISADMIN'] = "Переключить статус администратора";
$content['LN_USER_SETISREADONLY'] = "Переключить режим только для чтения";

// Управление группами
$content['LN_GROUP_CENTER'] = "Управление группами";
$content['LN_GROUP_ID'] = "ID";
$content['LN_GROUP_NAME'] = "Название группы";
$content['LN_GROUP_DESCRIPTION'] = "Описание группы";
$content['LN_GROUP_TYPE'] = "Тип группы";
$content['LN_GROUP_ADD'] = "Добавить группу";
$content['LN_GROUP_EDIT'] = "Редактировать группу";
$content['LN_GROUP_DELETE'] = "Удалить группу";
$content['LN_GROUP_NOGROUPS'] = "Группы еще не добавлены";
$content['LN_GROUP_ADDEDIT'] = "Добавить/Изменить группу";
$content['LN_GROUP_ERROR_GROUPEMPTY'] = "Название группы не может быть пустым.";
$content['LN_GROUP_ERROR_GROUPNAMETAKEN'] = "Это название группы уже используется.";
$content['LN_GROUP_HASBEENADDED'] = "Группа '%1' успешно добавлена.";
$content['LN_GROUP_ERROR_IDNOTFOUND'] = "Группа с ID '%1' не найдена.";
$content['LN_GROUP_ERROR_HASBEENEDIT'] = "Группа '%1' успешно изменена.";
$content['LN_GROUP_ERROR_INVALIDGROUP'] = "Ошибка: неверный ID группы";
$content['LN_GROUP_WARNDELETEGROUP'] = "Вы уверены, что хотите удалить группу '%1'? Все настройки группы также будут удалены.";
$content['LN_GROUP_ERROR_DELGROUP'] = "Ошибка удаления группы с ID '%1'!";
$content['LN_GROUP_ERROR_HASBEENDEL'] = "Группа '%1' успешно удалена!";
$content['LN_GROUP_MEMBERS'] = "Участники группы: ";
$content['LN_GROUP_ADDUSER'] = "Добавить пользователя в группу";
$content['LN_GROUP_ERROR_USERIDMISSING'] = "Отсутствует ID пользователя.";
$content['LN_GROUP_USERHASBEENADDEDGROUP'] = "Пользователь '%1' успешно добавлен в группу '%2'";
$content['LN_GROUP_ERRORNOMOREUSERS'] = "Нет доступных пользователей для добавления в группу '%1'";
$content['LN_GROUP_USER_ADD'] = "Добавить пользователя в группу";
$content['LN_GROUP_USERDELETE'] = "Удалить пользователя из группы";
$content['LN_GROUP_ERRORNOUSERSINGROUP'] = "Нет пользователей для удаления в группе '%1'";
$content['LN_GROUP_ERROR_REMUSERFROMGROUP'] = "Не удалось удалить пользователя '%1' из группы '%2'";
$content['LN_GROUP_USERHASBEENREMOVED'] = "Пользователь '%1' успешно удален из группы '%2'";

// Пользовательские поиски
$content['LN_SEARCH_CENTER'] = "Пользовательские поиски";
$content['LN_SEARCH_ADD'] = "Добавить новый поиск";
$content['LN_SEARCH_ID'] = "ID";
$content['LN_SEARCH_NAME'] = "Название поиска";
$content['LN_SEARCH_QUERY'] = "Запрос поиска";
$content['LN_SEARCH_TYPE'] = "Назначено";
$content['LN_SEARCH_EDIT'] = "Редактировать поиск";
$content['LN_SEARCH_DELETE'] = "Удалить поиск";
$content['LN_SEARCH_ADDEDIT'] = "Добавить/Изменить поиск";
$content['LN_SEARCH_SELGROUPENABLE'] = ">> Выберите группу для включения <<";
$content['LN_SEARCH_ERROR_DISPLAYNAMEEMPTY'] = "Название не может быть пустым";
$content['LN_SEARCH_ERROR_SEARCHQUERYEMPTY'] = "Запрос поиска не может быть пустым";
$content['LN_SEARCH_HASBEENADDED'] = "Пользовательский поиск '%1' успешно добавлен";
$content['LN_SEARCH_ERROR_IDNOTFOUND'] = "Поиск с ID '%1' не найден";
$content['LN_SEARCH_ERROR_INVALIDID'] = "Неверный ID поиска";
$content['LN_SEARCH_HASBEENEDIT'] = "Пользовательский поиск '%1' успешно изменен";
$content['LN_SEARCH_WARNDELETESEARCH'] = "Вы уверены, что хотите удалить пользовательский поиск '%1'? Это действие нельзя отменить!";
$content['LN_SEARCH_ERROR_DELSEARCH'] = "Ошибка удаления поиска с ID '%1'";
$content['LN_SEARCH_ERROR_HASBEENDEL'] = "Пользовательский поиск '%1' успешно удален";

// Пользовательские представления
$content['LN_VIEWS_CENTER'] = "Настройки представлений";
$content['LN_VIEWS_ID'] = "ID";
$content['LN_VIEWS_NAME'] = "Название представления";
$content['LN_VIEWS_COLUMNS'] = "Колонки представления";
$content['LN_VIEWS_TYPE'] = "Назначено";
$content['LN_VIEWS_ADD'] = "Добавить новое представление";
$content['LN_VIEWS_EDIT'] = "Редактировать представление";
$content['LN_VIEWS_ERROR_IDNOTFOUND'] = "Представление с ID '%1' не найдено";
$content['LN_VIEWS_ERROR_INVALIDID'] = "Неверный ID представления";
$content['LN_VIEWS_WARNDELETEVIEW'] = "Вы уверены, что хотите удалить представление '%1'? Это действие нельзя отменить!";
$content['LN_VIEWS_ERROR_DELSEARCH'] = "Ошибка удаления представления с ID '%1'";
$content['LN_VIEWS_ERROR_HASBEENDEL'] = "Представление '%1' успешно удалено";
$content['LN_VIEWS_ADDEDIT'] = "Добавить/Изменить представление";
$content['LN_VIEWS_COLUMNLIST'] = "Настроенные колонки";
$content['LN_VIEWS_ADDCOLUMN'] = "Добавить колонку в список";
$content['LN_VIEWS_ERROR_DISPLAYNAMEEMPTY'] = "Название не может быть пустым";
$content['LN_VIEWS_COLUMN'] = "Колонка";
$content['LN_VIEWS_COLUMN_REMOVE'] = "Удалить колонку";
$content['LN_VIEWS_HASBEENADDED'] = "Пользовательское представление '%1' успешно добавлено";
$content['LN_VIEWS_ERROR_NOCOLUMNS'] = "Необходимо добавить хотя бы одну колонку";
$content['LN_VIEWS_HASBEENEDIT'] = "Пользовательское представление '%1' успешно изменено";

// Сопоставления полей БД
$content['LN_DBMP_CENTER'] = "Настройки сопоставлений полей БД";
$content['LN_DBMP_ID'] = "ID";
$content['LN_DBMP_NAME'] = "Название сопоставления";
$content['LN_DBMP_DBMAPPINGS'] = "Сопоставления БД";
$content['LN_DBMP_ADD'] = "Добавить новое сопоставление";
$content['LN_DBMP_EDIT'] = "Редактировать сопоставление";
$content['LN_DBMP_DELETE'] = "Удалить сопоставление";
$content['LN_DBMP_ERROR_IDNOTFOUND'] = "Сопоставление с ID '%1' не найдено";
$content['LN_DBMP_ERROR_INVALIDID'] = "Неверный ID сопоставления";
$content['LN_DBMP_WARNDELETEMAPPING'] = "Вы уверены, что хотите удалить сопоставление '%1'? Это действие нельзя отменить!";
$content['LN_DBMP_ERROR_DELSEARCH'] = "Ошибка удаления сопоставления с ID '%1'";
$content['LN_DBMP_ERROR_HASBEENDEL'] = "Сопоставление '%1' успешно удалено";
$content['LN_DBMP_ADDEDIT'] = "Добавить/Изменить сопоставление";
$content['LN_DBMP_DBMAPPINGSLIST'] = "Настроенные сопоставления";
$content['LN_DBMP_ADDMAPPING'] = "Добавить сопоставление полей";
$content['LN_DBMP_ERROR_DISPLAYNAMEEMPTY'] = "Название не может быть пустым";
$content['LN_DBMP_MAPPING'] = "Сопоставление";
$content['LN_DBMP_MAPPING_REMOVE'] = "Удалить сопоставление";
$content['LN_DBMP_MAPPING_EDIT'] = "Редактировать сопоставление";
$content['LN_DBMP_MAPPING_MOVEUP'] = "Переместить вверх";
$content['LN_DBMP_MAPPING_MOVEDOWN'] = "Переместить вниз";
$content['LN_DBMP_HASBEENADDED'] = "Пользовательское сопоставление '%1' успешно добавлено";
$content['LN_DBMP_ERROR_NOCOLUMNS'] = "Необходимо добавить хотя бы одну колонку";
$content['LN_DBMP_HASBEENEDIT'] = "Пользовательское сопоставление '%1' успешно изменено";
$content['LN_DBMP_ERROR_MISSINGFIELDNAME'] = "Отсутствует сопоставление для поля '%1'";
$content['LN_SOURCES_FILTERSTRING'] = "Пользовательский фильтр поиска";
$content['LN_SOURCES_FILTERSTRING_HELP'] = "Используйте тот же синтаксис, что и в поле поиска. Например: source:=server1";

// Управление источниками
$content['LN_SOURCES_CENTER'] = "Настройки источников";
$content['LN_SOURCES_EDIT'] = "Редактировать источник";
$content['LN_SOURCES_DELETE'] = "Удалить источник";
$content['LN_SOURCES_ID'] = "ID";
$content['LN_SOURCES_NAME'] = "Название источника";
$content['LN_SOURCES_TYPE'] = "Тип источника";
$content['LN_SOURCES_ASSIGNTO'] = "Назначено";
$content['LN_SOURCES_DISK'] = "Файл на диске";
$content['LN_SOURCES_DB'] = "База данных MySQL";
$content['LN_SOURCES_CLICKHOUSE'] = "База данных ClickHouse";
$content['LN_SOURCES_PDO'] = "Источник данных PDO";
$content['LN_SOURCES_MONGODB'] = "Источник данных MongoDB";
$content['LN_SOURCES_ADD'] = "Добавить новый источник";
$content['LN_SOURCES_ADDEDIT'] = "Добавить/Изменить источник";
$content['LN_SOURCES_TYPE'] = "Тип источника";
$content['LN_SOURCES_DISKTYPEOPTIONS'] = "Опции для файловых источников";
$content['LN_SOURCES_ERROR_MISSINGPARAM'] = "Отсутствует параметр '%1'";
$content['LN_SOURCES_ERROR_NOTAVALIDFILE'] = "Не удалось открыть файл syslog '%1'! Проверьте существование файла и права доступа";
$content['LN_SOURCES_ERROR_UNKNOWNSOURCE'] = "Обнаружен неизвестный источник '%1'";
$content['LN_SOURCE_HASBEENADDED'] = "Новый источник '%1' успешно добавлен";
$content['LN_SOURCES_EDIT'] = "Редактировать источник";
$content['LN_SOURCES_ERROR_INVALIDORNOTFOUNDID'] = "Неверный или несуществующий ID источника";
$content['LN_SOURCES_ERROR_IDNOTFOUND'] = "ID источника не найден в базе данных";
$content['LN_SOURCES_HASBEENEDIT'] = "Источник '%1' успешно изменен";
$content['LN_SOURCES_WARNDELETESEARCH'] = "Вы уверены, что хотите удалить источник '%1'? Это действие нельзя отменить!";
$content['LN_SOURCES_ERROR_DELSOURCE'] = "Ошибка удаления источника с ID '%1'";
$content['LN_SOURCES_ERROR_HASBEENDEL'] = "Источник '%1' успешно удален";
$content['LN_SOURCES_DESCRIPTION'] = "Описание источника (опционально)";
$content['LN_SOURCES_ERROR_INVALIDVALUE'] = "Неверное значение параметра '%1'";
$content['LN_SOURCES_STATSNAME'] = "Название";
$content['LN_SOURCES_STATSVALUE'] = "Значение";
$content['LN_SOURCES_DETAILS'] = "Детали этого источника логов";
$content['LN_SOURCES_STATSDETAILS'] = "Статистика этого источника логов";
$content['LN_SOURCES_ERROR_NOSTATSDATA'] = "Не удалось получить статистическую информацию";
$content['LN_SOURCES_ERROR_NOCLEARSUPPORT'] = "Этот источник не поддерживает удаление данных";
$content['LN_SOURCES_ROWCOUNT'] = "Всего записей";
$content['LN_SOURCES_CLEARDATA'] = "Доступные операции обслуживания БД";
$content['LN_SOURCES_CLEAROPTIONS'] = "Выберите способ очистки данных";
$content['LN_SOURCES_CLEARALL'] = "Удалить все данные";
$content['LN_SOURCES_CLEAR_HELPTEXT'] = "Внимание! Удаленные данные невозможно восстановить!";
$content['LN_SOURCES_CLEARSINCE'] = "Удалить данные старше...";
$content['LN_SOURCES_CLEARDATE'] = "Удалить данные до...";
$content['LN_SOURCES_CLEARDATA_SEND'] = "Очистить выбранный диапазон";
$content['LN_SOURCES_ERROR_INVALIDCLEANUP'] = "Неверный тип очистки данных";
$content['LN_SOURCES_WARNDELETEDATA'] = "Вы уверены, что хотите очистить данные источника '%1'? Это действие нельзя отменить!";
$content['LN_SOURCES_ERROR_DELDATA'] = "Не удалось удалить данные из источника '%1'";
$content['LN_SOURCES_HASBEENDELDATA'] = "Данные из источника '%1' успешно удалены, затронуто '%2' записей";

// Обновление БД
$content['LN_DBUPGRADE_TITLE'] = "Обновление базы данных LogAnalyzer";
$content['LN_DBUPGRADE_DBFILENOTFOUND'] = "Файл обновления БД '%1' не найден! Проверьте загрузку всех файлов.";
$content['LN_DBUPGRADE_DBDEFFILESHORT'] = "Файлы обновления БД пусты или не содержат SQL-команд! Проверьте загрузку всех файлов.";
$content['LN_DBUPGRADE_WELCOME'] = "Добро пожаловать в процесс обновления БД";
$content['LN_DBUPGRADE_BEFORESTART'] = "Перед началом обновления рекомендуется создать <b>ПОЛНУЮ РЕЗЕРВНУЮ КОПИЮ БАЗЫ ДАННЫХ</b>.";
$content['LN_DBUPGRADE_CURRENTINSTALLED'] = "Текущая версия БД";
$content['LN_DBUPGRADE_TOBEINSTALLED'] = "Версия для установки";
$content['LN_DBUPGRADE_HASBEENDONE'] = "Обновление БД выполнено, результаты ниже";
$content['LN_DBUPGRADE_SUCCESSEXEC'] = "Успешно выполненные команды";
$content['LN_DBUPGRADE_FAILEDEXEC'] = "Неудачные команды";
$content['LN_DBUPGRADE_ONESTATEMENTFAILED'] = "Ошибка выполнения команды, возможно требуется ручное исправление";
$content['LN_DBUPGRADE_ERRMSG'] = "Сообщение об ошибке";
$content['LN_DBUPGRADE_ULTRASTATSDBVERSION'] = "Версия БД LogAnalyzer";

// Настройки диаграмм
$content['LN_CHARTS_CENTER'] = "Настройки диаграмм";
$content['LN_CHARTS_EDIT'] = "Редактировать диаграмму";
$content['LN_CHARTS_DELETE'] = "Удалить диаграмму";
$content['LN_CHARTS_ADD'] = "Добавить новую диаграмму";
$content['LN_CHARTS_ADDEDIT'] = "Добавить/Изменить диаграмму";
$content['LN_CHARTS_NAME'] = "Название диаграммы";
$content['LN_CHARTS_ENABLED'] = "Диаграмма активна";
$content['LN_CHARTS_ENABLEDONLY'] = "Активна";
$content['LN_CHARTS_ERROR_INVALIDORNOTFOUNDID'] = "Неверный или несуществующий ID диаграммы";
$content['LN_CHARTS_WARNDELETESEARCH'] = "Вы уверены, что хотите удалить диаграмму '%1'? Это действие нельзя отменить!";
$content['LN_CHARTS_ERROR_DELCHART'] = "Ошибка удаления диаграммы с ID '%1'";
$content['LN_CHARTS_ERROR_HASBEENDEL'] = "Диаграмма '%1' успешно удалена";
$content['LN_CHARTS_ERROR_MISSINGPARAM'] = "Отсутствует параметр '%1'";
$content['LN_CHARTS_HASBEENADDED'] = "Новая диаграмма '%1' успешно добавлена";
$content['LN_CHARTS_ERROR_IDNOTFOUND'] = "ID диаграммы не найден в БД";
$content['LN_CHARTS_HASBEENEDIT'] = "Диаграмма '%1' успешно изменена";
$content['LN_CHARTS_ID'] = "ID";
$content['LN_CHARTS_ASSIGNTO'] = "Назначено";
$content['LN_CHARTS_PREVIEW'] = "Предпросмотр диаграммы в новом окне";
$content['LN_CHARTS_FILTERSTRING'] = "Пользовательский фильтр";
$content['LN_CHARTS_FILTERSTRING_HELP'] = "Используйте тот же синтаксис, что и в поле поиска. Например: source:=server1";
$content['LN_CHARTS_ERROR_CHARTIDNOTFOUND'] = "Диаграмма с ID '%1' не найдена";
$content['LN_CHARTS_ERROR_SETTINGFLAG'] = "Ошибка установки флага: неверный ID или операция";
$content['LN_CHARTS_SETENABLEDSTATE'] = "Переключить состояние активности";

// Настройки полей
$content['LN_FIELDS_CENTER'] = "Настройки полей";
$content['LN_FIELDS_EDIT'] = "Редактировать поле";
$content['LN_FIELDS_DELETE'] = "Удалить поле";
$content['LN_FIELDS_ADD'] = "Добавить новое поле";
$content['LN_FIELDS_ID'] = "ID поля";
$content['LN_FIELDS_NAME'] = "Отображаемое имя";
$content['LN_FIELDS_DEFINE'] = "Внутренний ID поля";
$content['LN_FIELDS_DELETE_FROMDB'] = "Удалить поле из БД";
$content['LN_FIELDS_ADDEDIT'] = "Добавить/Изменить поле";
$content['LN_FIELDS_TYPE'] = "Тип поля";
$content['LN_FIELDS_ALIGN'] = "Выравнивание в списке";
$content['LN_FIELDS_SEARCHONLINE'] = "Включить онлайн-поиск";
$content['LN_FIELDS_DEFAULTWIDTH'] = "Ширина строки в списке";
$content['LN_FIELDS_ERROR_IDNOTFOUND'] = "Поле с ID '%1' не найдено";
$content['LN_FIELDS_ERROR_INVALIDID'] = "Неверный ID поля";
$content['LN_FIELDS_SEARCHFIELD'] = "Имя фильтра поиска";
$content['LN_FIELDS_WARNDELETESEARCH'] = "Вы уверены, что хотите удалить поле '%1'? Это действие нельзя отменить!";
$content['LN_FIELDS_ERROR_DELSEARCH'] = "Поле с ID '%1' не найдено в БД";
$content['LN_FIELDS_ERROR_HASBEENDEL'] = "Поле '%1' успешно удалено";
$content['LN_FIELDS_ERROR_FIELDCAPTIONEMPTY'] = "Отсутствует название поля";
$content['LN_FIELDS_ERROR_FIELDIDEMPTY'] = "Отсутствует ID поля";
$content['LN_FIELDS_ERROR_SEARCHFIELDEMPTY'] = "Отсутствует фильтр поиска";
$content['LN_FIELDS_ERROR_FIELDDEFINEEMPTY'] = "Отсутствует внутренний ID поля";
$content['LN_FIELDS_HASBEENEDIT'] = "Настройки поля '%1' успешно изменены";
$content['LN_FIELDS_HASBEENADDED'] = "Настройки поля '%1' успешно добавлены";
$content['LN_ALIGN_CENTER'] = "по центру";
$content['LN_ALIGN_LEFT'] = "по левому краю";
$content['LN_ALIGN_RIGHT'] = "по правому краю";
$content['LN_FILTER_TYPE_STRING'] = "Строка";
$content['LN_FILTER_TYPE_NUMBER'] = "Число";
$content['LN_FILTER_TYPE_DATE'] = "Дата";

// Настройки парсеров
$content['LN_PARSERS_EDIT'] = "Редактировать парсер сообщений";
$content['LN_PARSERS_DELETE'] = "Удалить парсер сообщений";
$content['LN_PARSERS_ID'] = "ID парсера";
$content['LN_PARSERS_NAME'] = "Название парсера";
$content['LN_PARSERS_DESCRIPTION'] = "Описание парсера";
$content['LN_PARSERS_ERROR_NOPARSERS'] = "Не найдено ни одного парсера сообщений";
$content['LN_PARSERS_HELP'] = "Помощь";
$content['LN_PARSERS_HELP_CLICK'] = "Нажмите для подробного описания";
$content['LN_PARSERS_INFO'] = "Подробная информация";
$content['LN_PARSERS_INIT'] = "Инициализировать настройки";
$content['LN_PARSERS_REMOVE'] = "Удалить настройки";
$content['LN_PARSERS_ERROR_IDNOTFOUND'] = "Парсер с ID '%1' не найден";
$content['LN_PARSERS_ERROR_INVALIDID'] = "Неверный ID парсера";
$content['LN_PARSERS_DETAILS'] = "Детали парсера";
$content['LN_PARSERS_CUSTOMFIELDS'] = "Необходимые пользовательские поля";
$content['LN_PARSERS_WARNREMOVE'] = "Вы собираетесь удалить настройки парсера '%1'";
$content['LN_PARSERS_ERROR_HASBEENREMOVED'] = "Настройки парсера '%1' удалены (%2 полей)";
$content['LN_PARSERS_ERROR_HASBEENADDED'] = "Настройки парсера '%1' добавлены (%2 полей)";
$content['LN_PARSERS_ERROR_NOFIELDS'] = "Парсер '%1' не требует пользовательских полей";
$content['LN_PARSERSMENU_LIST'] = "Список установленных парсеров";
$content['LN_PARSERS_ONLINELIST'] = "Все доступные парсеры";

// Командная строка
$content['LN_CMD_NOOP'] = "Отсутствует параметр операции";
$content['LN_CMD_NOLOGSTREAM'] = "Отсутствует параметр источника логов";
$content['LN_CMD_LOGSTREAMNOTFOUND'] = "Источник логов с ID '%1' не найден!";
$content['LN_CMD_COULDNOTGETROWCOUNT'] = "Не удалось получить количество записей из источника '%1'";
$content['LN_CMD_SUBPARAM1MISSING'] = "Отсутствует подпараметр 1 (должен быть 'all', 'since' или 'date')";
$content['LN_CMD_WRONGSUBOPORMISSING'] = "Неверная подоперация или отсутствует параметр";
$content['LN_CMD_FAILEDTOCLEANDATA'] = "Ошибка очистки данных источника '%1'";
$content['LN_CMD_CLEANINGDATAFOR'] = "Очистка данных источника '%1'";
$content['LN_CMD_ROWSFOUND'] = "Найдено '%1' записей в источнике";
$content['LN_CMD_DELETINGOLDERTHEN'] = "Удаление записей старше '%1'";
$content['LN_CMD_DELETEDROWS'] = "Успешно удалено '%1' записей";
$content['LN_CMD_'] = "";

// Report Options
$content['LN_REPORTS_EDIT'] = "Редактировать отчет";
$content['LN_REPORTS_DELETE'] = "Удалить отчет";
$content['LN_REPORTS_REQUIREDFIELDS'] = "Обязательные поля";
$content['LN_REPORTS_ERROR_NOREPORTS'] = "В вашей установке не найдено ни одного отчета.";
$content['LN_REPORTS_INIT'] = "Инициализировать настройки";
$content['LN_REPORTS_REMOVE'] = "Удалить настройки";
$content['LN_REPORTS_ERROR_IDNOTFOUND'] = "Отчет с ID '%1' не найден.";
$content['LN_REPORTS_ERROR_INVALIDID'] = "Неверный ID отчета.";
$content['LN_REPORTS_DETAILS'] = "Подробности об этом отчете";
$content['LN_REPORTS_WARNREMOVE'] = "Вы собираетесь удалить пользовательские настройки для отчета '%1'. Вы сможете добавить их снова, если передумаете.";
$content['LN_REPORTS_ERROR_HASBEENREMOVED'] = "Все настройки для отчета '%1' были удалены.";
$content['LN_REPORTS_ERROR_HASBEENADDED'] = "Все необходимые настройки для отчета '%1' были добавлены.";
$content['LN_REPORTS_ERROR_NOFIELDS'] = "Отчет '%1' не требует дополнительных настроек.";
$content['LN_REPORTS_ERROR_REPORTDOESNTNEEDTOBEREMOVED'] = "Отчет '%1' не требует удаления или инициализации.";
$content['LN_REPORTS_REMOVESAVEDREPORT'] = "Удалить сохраненный отчет";
$content['LN_REPORTS_CUSTOMTITLE'] = "Название отчета";
$content['LN_REPORTS_CUSTOMCOMMENT'] = "Комментарий / Описание";
$content['LN_REPORTS_FILTERSTRING'] = "Строка фильтра";
$content['LN_REPORTS_OUTPUTFORMAT'] = "Формат вывода";
$content['LN_REPORTS_OUTPUTTARGET'] = "Цель вывода";
$content['LN_REPORTS_HASBEENADDED'] = "Сохраненный отчет '%1' успешно добавлен.";
$content['LN_REPORTS_HASBEENEDIT'] = "Сохраненный отчет '%1' успешно изменен.";
$content['LN_REPORTS_SOURCEID'] = "Источник логов";
$content['LN_REPORTS_ERROR_SAVEDREPORTIDNOTFOUND'] = "Сохраненный отчет с ID '%1' не найден.";
$content['LN_REPORTS_ERROR_INVALIDSAVEDREPORTID'] = "Неверный ID сохраненного отчета.";
$content['LN_REPORTS_WARNDELETESAVEDREPORT'] = "Вы уверены, что хотите удалить сохраненный отчет '%1'?";
$content['LN_REPORTS_ERROR_DELSAVEDREPORT'] = "Не удалось удалить сохраненный отчет с ID '%1'!";
$content['LN_REPORTS_ERROR_HASBEENDEL'] = "Сохраненный отчет '%1' успешно удален!";
$content['LN_REPORTS_FILTERLIST'] = "Список фильтров";
$content['LN_REPORTS_FILTER'] = "Фильтр";
$content['LN_REPORTS_ADDFILTER'] = "Добавить фильтр";
$content['LN_REPORTS_FILTER_EDIT'] = "Редактировать фильтр";
$content['LN_REPORTS_FILTER_MOVEUP'] = "Переместить фильтр вверх";
$content['LN_REPORTS_FILTER_MOVEDOWN'] = "Переместить фильтр вниз";
$content['LN_REPORTS_FILTER_REMOVE'] = "Удалить фильтр";
$content['LN_REPORTS_FILTEREDITOR'] = "Редактор фильтров";
$content['LN_REPORTS_FILTERSTRING_ONLYEDITIF'] = "Редактируйте строку фильтра только если понимаете что делаете! Изменения в строке фильтра перезапишут изменения в редакторе фильтров!";
$content['LN_REPORTS_ADVANCEDFILTERS'] = "Расширенные фильтры";
$content['LN_REPORTS_ADVANCEDFILTERLIST'] = "Список расширенных фильтров отчетов";
$content['LN_REPORTS_OUTPUTTARGET_DETAILS'] = "Настройки цели вывода";
$content['LN_REPORTS_OUTPUTTARGET_FILE'] = "Путь и имя файла для сохранения";
$content['LN_REPORTS_CRONCMD'] = "Команда для локального отчета";
$content['LN_REPORTS_LINKS'] = "Связанные ссылки";
$content['LN_REPORTS_INSTALLED'] = "Установлен";
$content['LN_REPORTS_NOTINSTALLED'] = "Не установлен";
$content['LN_REPORTS_DOWNLOAD'] = "Ссылка для скачивания";
$content['LN_REPORTS_SAMPLELINK'] = "Пример отчета";
$content['LN_REPORTS_DETAILSFOR'] = "Подробности об отчете '%1'";
$content['LN_REPORTS_PERFORMANCE_WARNING'] = "Предупреждение о производительности";
$content['LN_REPORTS_OPTIMIZE_LOGSTREAMSOURCE'] = "Да, оптимизировать источник логов!";
$content['LN_REPORTS_OPTIMIZE_INDEXES'] = "Источник данных '%1' не оптимизирован для этого отчета. Отсутствует как минимум один ИНДЕКС. Создание ИНДЕКСОВ ускорит генерацию отчета. <br><br>Хотите, чтобы LogAnalyzer создал необходимые ИНДЕКСЫ сейчас? Это может занять несколько минут!";
$content['LN_REPORTS_ERROR_FAILED_CREATE_INDEXES'] = "Не удалось создать ИНДЕКСЫ для источника данных '%1' (ошибка: '%2')";
$content['LN_REPORTS_INDEX_CREATED'] = "ИНДЕКСЫ для логов созданы";
$content['LN_REPORTS_INDEX_CREATED_SUCCESS'] = "ИНДЕКСЫ для источника данных '%1' успешно созданы.";
$content['LN_REPORTS_OPTIMIZE_TRIGGER'] = "В источнике данных '%1' отсутствует ТРИГГЕР для автоматического создания контрольной суммы при INSERT. Создание ТРИГГЕРА ускорит генерацию отчета. <br><br>Хотите, чтобы LogAnalyzer создал ТРИГГЕР сейчас?";
$content['LN_REPORTS_TRIGGER_CREATED'] = "ТРИГГЕР для логов создан";
$content['LN_REPORTS_TRIGGER_CREATED_SUCCESS'] = "ТРИГГЕР для источника данных '%1' успешно создан.";
$content['LN_REPORTS_ERROR_FAILED_CREATE_TRIGGER'] = "Не удалось создать ТРИГГЕР для источника данных '%1' (ошибка: '%2')";
$content['LN_REPORTS_CHANGE_CHECKSUM'] = "Поле Checksum в источнике данных '%1' не имеет типа UNSIGNED INT. Для корректной работы отчета необходимо изменить тип поля на UNSIGNED INT! <br><br>Хотите, чтобы LogAnalyzer изменил тип поля сейчас? Это может занять несколько минут!";
$content['LN_REPORTS_ERROR_FAILED_CHANGE_CHECKSUM'] = "Не удалось изменить поле Checksum для источника данных '%1' (ошибка: '%2')";
$content['LN_REPORTS_CHECKSUM_CHANGED'] = "Тип поля Checksum изменен";
$content['LN_REPORTS_CHECKSUM_CHANGED_SUCCESS'] = "Тип поля Checksum для источника данных '%1' успешно изменен.";
$content['LN_REPORTS_LOGSTREAM_WARNING'] = "Предупреждение о лог-потоке";
$content['LN_REPORTS_ADD_MISSINGFIELDS'] = "В источнике данных '%1' отсутствуют необходимые поля. <br><br>Хотите, чтобы LogAnalyzer создал недостающие поля сейчас?";
$content['LN_REPORTS_ERROR_FAILED_ADDING_FIELDS'] = "Не удалось добавить недостающие поля в источнике данных '%1' (ошибка: '%2')";
$content['LN_REPORTS_FIELDS_CREATED'] = "Недостающие поля добавлены";
$content['LN_REPORTS_FIELDS_CREATED_SUCCESS'] = "Недостающие поля для источника данных '%1' успешно добавлены.";
$content['LN_REPORTS_RECHECKLOGSTREAMSOURCE'] = "Хотите проверить источник логов снова?";
$content['LN_REPORTS_ADDSAVEDREPORT'] = "Добавить сохраненный отчет и сохранить изменения";
$content['LN_REPORTS_EDITSAVEDREPORT'] = "Сохранить изменения";
$content['LN_REPORTS_ADDSAVEDREPORTANDRETURN'] = "Добавить сохраненный отчет и вернуться к списку";
$content['LN_REPORTS_EDITSAVEDREPORTANDRETURN'] = "Сохранить изменения и вернуться к списку";
$content['LN_REPORTS_SOURCE_WARNING'] = "Предупреждение об источнике логов";	
$content['LN_REPORTS_ERROR_FAILED_SOURCE_CHECK'] = "Не удалось проверить источник данных '%1' (ошибка: '%2')";
$content['LN_REPORTS_'] = "";


?>
