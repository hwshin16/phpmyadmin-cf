<?php
/* $Id$ */

/**
 * Translated by Gosha Sakovich <gt2 at users.sourceforge.net>
 *               Artyom Rabzonov <tyomych at gmx.net>
 *               Nicolay Zakharov <info at melody.org.ru> 16-Dec-2002
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
//$byteUnits = array('Байт', 'кБ', 'МБ', 'ГБ');
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
$month = array('Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y г., %H:%M';
$timespanfmt = '%s дней, %s часов, %s минут и %s секунд';
$strAPrimaryKey = 'Был добавлен первичный ключ к %s';
$strAbortedClients = 'Отменены';
$strAccessDenied = 'В доступе отказано';
$strAction = 'Действие';
$strAddDeleteColumn = 'Добавить/удалить столбец критерия';
$strAddDeleteRow = 'Добавить/удалить ряд критерия';
$strAddNewField = 'Добавить новое поле';
$strAddPriv = 'Добавить новые привилегии';
$strAddPrivMessage = 'Была добавлена новая привилегия';
$strAddSearchConditions = 'Добавить условия поиска (тело для условия "where"):';
$strAddToIndex = 'Добавить к индексу&nbsp;%s&nbsp;колонку(и)';
$strAddUser = 'Добавить нового пользователя';
$strAddUserMessage = 'Был добавлен новый пользователь.';
$strAffectedRows = 'Затронутые ряды:';
$strAfter = 'После %s';
$strAfterInsertBack = 'Возврат';
$strAfterInsertNewInsert = 'Вставить новую запись';
$strAll = 'Все';
$strAllTableSameWidth = 'показать все таблицы с такой шириной?';
$strAlterOrderBy = 'Изменить порядок таблицы';
$strAnIndex = 'Был добавлен индекс для %s';
$strAnalyzeTable = 'Анализ таблицы';
$strAnd = 'И';
$strAny = 'Любой';
$strAnyColumn = 'Любая колонка';
$strAnyDatabase = 'Любая база данных';
$strAnyHost = 'Любой хост';
$strAnyTable = 'Любая таблица';
$strAnyUser = 'Любой пользователь';
$strAscending = 'По возрастанию';
$strAtBeginningOfTable = 'В начало таблицы';
$strAtEndOfTable = 'В конец таблицы';
$strAttr = 'Атрибуты';

$strBack = 'Назад';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' Двоичный ';
$strBinaryDoNotEdit = ' Двоичные данные - не редактируются ';
$strBookmarkDeleted = 'Закладка была удалена.';
$strBookmarkLabel = 'Метка';
$strBookmarkQuery = 'Закладка на SQL-запрос';
$strBookmarkThis = 'Закладка на данный SQL-запрос';
$strBookmarkView = 'Только просмотр';
$strBrowse = 'Обзор';
$strBzError = 'phpMyAdmin не может сжать дамп из-за проблем с Bz2 extension в текущей версии PHP. Строго рекомендуется установить переменной <code>$cfg[\'BZipDump\']</code> в Вашем конфигурационном файле phpMyAdmin значение <code>FALSE</code>. Если Вы хотите использовать Bz2-компрессию, Вам необходимо обновить PHP. Смотрите PHP bug report %s для более подробной информации.';
$strBzip = 'архивировать в bzip';

$strCannotLogin = 'Невозможно войти в MySQL';
$strCantLoadMySQL = 'расширение MySQL не загружено,<br />проверьте конфигурацию PHP.';
$strCantLoadRecodeIconv = 'Не могу загрузить iconv или recode, необходимые для перекодирования символов. Проверьте php-конфигурацию и разрешите их использование или запретите перекодирование символов в phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Невозможно переименовать индекс в PRIMARY!';
$strCantUseRecodeIconv = 'Не могу использовать iconv функции: ни libiconv, ни recode_string, пока не будут загружены extension reports. Проверьте php-конфигурацию.';
$strCardinality = 'Количество элементов';
$strCarriage = 'Возврат каретки: \\r';
$strChange = 'Изменить';
$strChangeDisplay = 'Выберите поле для отображения';
$strChangePassword = 'Изменить пароль';
$strCharsetOfFile = 'Кодировка файла:';
$strCheckAll = 'Отметить все';
$strCheckDbPriv = 'Проверить привилегии БД';
$strCheckTable = 'Проверить таблицу';
$strChoosePage = 'Выберите страницу для редактирования';
$strColComFeat = 'Показать комментария столбцов';
$strColumn = 'Колонка';
$strColumnNames = 'Названия колонок';
$strCommand = 'Команда';
$strComments = 'Комментарии';
$strCompleteInserts = 'Полная вставка';
$strCompression = 'Сжатие';
$strConfigFileError = 'phpMyAdmin не может прочитать данные из конфигурационного файла!  <br />Возможная причина - синтаксическая ошибка.<br />Вызовите этот файл (config.inc.php) непосредственно из браузера. Если будут сообщения об ошибках - исправьте их. Если пустая страница - все в порядке';
$strConfigureTableCoord = 'Измените координаты таблицы %s';
$strConfirm = 'Вы действительно хотите сделать это?';
$strConnections = 'Соединения';
$strCookiesRequired = 'Cookies должны быть включены после этого места.';
$strCopyTable = 'Скопировать таблицу в (база данных<b>.</b>таблица):';
$strCopyTableOK = 'Таблица %s была скопирована в %s.';
$strCouldNotKill = 'phpMyAdmin не смог удалить thread %s. Возможно, он уже закрыт.';
$strCreate = 'Создать';
$strCreateIndex = 'Создать индекс на&nbsp;%s&nbsp;колонках';
$strCreateIndexTopic = 'Создать новый индекс';
$strCreateNewDatabase = 'Создать новую БД';
$strCreateNewTable = 'Создать новую таблицу в БД %s';
$strCreatePage = 'Создать новую страницу';
$strCreatePdfFeat = 'Создание PDF-схемы';
$strCriteria = 'Критерий';

$strData = 'Данные';
$strDataDict = 'Словарь данных';
$strDataOnly = 'Только данные';
$strDatabase = 'БД ';
$strDatabaseHasBeenDropped = 'База данных %s была удалена.';
$strDatabaseWildcard = 'База данных (возможно использование шаблонов):';
$strDatabases = 'Базы Данных';
$strDatabasesStats = 'Статистика баз данных';
$strDefault = 'По умолчанию';
$strDelete = 'Удалить';
$strDeleteFailed = 'Неудачное удаление!';
$strDeleteUserMessage = 'Был удален пользователь %s.';
$strDeleted = 'Ряд был удален';
$strDeletedRows = 'Следующие ряды были удалены:';
$strDescending = 'По убыванию';
$strDisabled = 'Недоступно';
$strDisplay = 'Показать';
$strDisplayFeat = 'Показать дополнительные возможности';
$strDisplayOrder = 'Порядок просмотра:';
$strDisplayPDF = 'Показать PDF-схему';
$strDoAQuery = 'Выполнить "запрос по примеру" (символ подстановки: "%")';
$strDoYouReally = 'Вы действительно желаете ';
$strDocu = 'Документация';
$strDrop = 'Уничтожить';
$strDropDB = 'Уничтожить БД %s';
$strDropTable = 'Удалить таблицу';
$strDumpXRows = 'Дамп %s записей, начиная с %s.';
$strDumpingData = 'Дамп данных таблицы';
$strDynamic = 'динамический';

$strEdit = 'Правка';
$strEditPDFPages = 'Изменить PDF-страницы';
$strEditPrivileges = 'Редактирование привилегий';
$strEffective = 'Эффективность';
$strEmpty = 'Очистить';
$strEmptyResultSet = 'MySQL вернула пустой результат (т.е. ноль рядов).';
$strEnabled = 'Доступно';
$strEnd = 'Конец';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglishPrivileges = ' Примечание: привилегии MySQL задаются по-английски ';
$strError = 'Ошибка';
$strExplain = 'Описать SQL';
$strExport = 'Экспорт';
$strExportToXML = 'Экспорт в XML-формат';
$strExtendedInserts = 'Расширенные вставки';
$strExtra = 'Дополнительно';

$strFailedAttempts = 'Неудачные попытки';
$strField = 'Поле';
$strFieldHasBeenDropped = 'Поле %s было удалено';
$strFields = 'Поля';
$strFieldsEmpty = ' Пустой счетчик полей! ';
$strFieldsEnclosedBy = 'Поля заключены в';
$strFieldsEscapedBy = 'Поля экранируются';
$strFieldsTerminatedBy = 'Поля разделены';
$strFixed = 'фиксированный';
$strFlushTable = 'Сбросить кэш таблицы ("FLUSH")';
$strFormEmpty = 'Требуется значение для формы!';
$strFormat = 'Формат';
$strFullText = 'Полные тексты';
$strFunction = 'Функция';

$strGenBy = 'Созданный';
$strGenTime = 'Время создания';
$strGeneralRelationFeat = 'Основные возможности связей';
$strGlobalValue = 'Глобальное значение';
$strGo = 'Пошел';
$strGrants = 'Права';
$strGzip = 'архивировать в gzip';

$strHasBeenAltered = 'была изменена.';
$strHasBeenCreated = 'была создана.';
$strHaveToShow = 'Вы должны выбрать не менее одной колонки для отображения';
$strHome = 'К началу';
$strHomepageOfficial = 'Официальная страница phpMyAdmin';
$strHomepageSourceforge = 'Загрузка phpMyAdmin на Sourceforge';
$strHost = 'Хост';
$strHostEmpty = 'Пустое имя хоста!';

$strId = 'ID';
$strIdxFulltext = 'ПолнТекст';
$strIfYouWish = 'Если Вы желаете загрузить только некоторые столбцы таблицы, укажите разделенный запятыми список полей.';
$strIgnore = 'Игнорировать';
$strImportDocSQL = 'Импорт docSQL файлов';
$strInUse = 'используется';
$strIndex = 'Индекс';
$strIndexHasBeenDropped = 'Индекс %s был удален';
$strIndexName = 'Имя индекса&nbsp;:';
$strIndexType = 'Тип индекса&nbsp;:';
$strIndexes = 'Индексы';
$strInsecureMySQL = 'Ваш конфигурационный файл содержит настройки (пользователь root без пароля), которые относятся к привилегированному пользователю MySQL (по умолчанию). Ваш MySQL сервер запущен с этими настройками по умолчанию, открытый для вторжений, поэтому Вам настоятельно рекомендуется устранить эту дыру в безопасности.';
$strInsert = 'Вставить';
$strInsertAsNewRow = 'Вставить новый ряд';
$strInsertNewRow = 'Вставить новый ряд';
$strInsertTextfiles = 'Вставить текстовые файлы в таблицу';
$strInsertedRows = 'Добавлены ряды:';
$strInstructions = 'Инструкции';
$strInvalidName = '"%s" - является зарезервированным словом, вы не можете использовать его в качестве имени базы данных/таблицы/поля.';

$strKeepPass = 'Не менять пароль';
$strKeyname = 'Имя ключа';
$strKill = 'Убить';

$strLaTeX = 'LaTeX';
$strLandscape = 'Ландшафт';
$strLength = 'Длина';
$strLengthSet = 'Длины/Значения*';
$strLimitNumRows = 'записей на страницу';
$strLineFeed = 'Символ окончания линии: \\n';
$strLines = 'Линии';
$strLinesTerminatedBy = 'Строки разделены';
$strLinkNotFound = 'Связь не найдена';
$strLinksTo = 'Связь с';
$strLocationTextfile = 'Месторасположение текстового файла';
$strLogPassword = 'Пароль:';
$strLogUsername = 'Пользователь:';
$strLogin = 'Вход в систему';
$strLogout = 'Выйти из системы';

$strMissingBracket = 'Пропущена скобка';
$strModifications = 'Модификации были сохранены';
$strModify = 'Изменить';
$strModifyIndexTopic = 'Изменить индекс';
$strMoreStatusVars = 'Другие статусные переменные';
$strMoveTable = 'Переместить таблицы в (база данных<b>.</b>таблица):';
$strMoveTableOK = 'Таблица %s была перемещена в %s.';
$strMySQLCharset = 'MySQL-кодировка';
$strMySQLReloaded = 'MySQL перезагружена.';
$strMySQLSaid = 'Ответ MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% на %pma_s2% как %pma_s3%';
$strMySQLShowProcess = 'Показать процессы';
$strMySQLShowStatus = 'Показать состояние MySQL';
$strMySQLShowVars = 'Показать системные переменные MySQL';

$strName = 'Имя';
$strNext = 'Далее';
$strNo = 'Нет';
$strNoDatabases = 'БД отсутствуют';
$strNoDescription = 'нет описания';
$strNoDropDatabases = 'Команда "Удалить БД" отключена.';
$strNoExplain = 'Прекратить описание SQL';
$strNoFrames = 'Для работы phpMyAdmin нужен браузер с поддержкой <b>фреймов</b>.';
$strNoIndex = 'Индекс не определен!';
$strNoIndexPartsDefined = 'Части индекса не определены!';
$strNoModification = 'Нет изменений';
$strNoPassword = 'Без пароля';
$strNoPhp = 'без PHP-кода';
$strNoPrivileges = 'Без привилегий';
$strNoQuery = 'Нет SQL-запроса!';
$strNoRights = 'Вы не имеете достаточно прав для этого!';
$strNoTablesFound = 'В БД не обнаружено таблиц.';
$strNoUsersFound = 'Не найден пользователь.';
$strNoValidateSQL = 'Не проверять SQL';
$strNone = 'Нет';
$strNotNumber = 'Это не число!';
$strNotOK = 'Не готово';
$strNotSet = 'Таблица <b>%s</b> не найдена';
$strNotValidNumber = ' недопустимое количество рядов!';
$strNull = 'Ноль';
$strNumSearchResultsInTable = '%s записи(ей) в таблице <i>%s</i>';
$strNumSearchResultsTotal = '<b>Итого:</b> <i>%s</i> записи(ей)';
$strNumTables = 'Таблиц';

$strOK = 'Готово';
$strOftenQuotation = 'Обычно кавычки. "По выбору" означает, что только поля char и varchar заключаются в кавычки.';
$strOperations = 'Операции';
$strOptimizeTable = 'Оптимизировать таблицу';
$strOptionalControls = 'По выбору. Контролирует как читать или писать специальные символы.';
$strOptionally = 'По выбору';
$strOptions = 'Опции';
$strOr = 'Или';
$strOverhead = 'Накладные расходы';

$strPHP40203 = 'Вы используете версию PHP 4.2.3, которая содержит серьезные ошибки при работе с много-байтовыми строками (mbstring). Смотрите PHP bug report 19404. Данная версия PHP не рекомендуется для использования с phpMyAdmin.';
$strPHPVersion = 'Версия PHP';
$strPageNumber = 'Номер страницы:';
$strPartialText = 'Частичные тексты';
$strPassword = 'Пароль';
$strPasswordEmpty = 'Пустой пароль!';
$strPasswordNotSame = 'Пароли не одинаковы!';
$strPdfDbSchema = 'Структура базы "%s" - страница %s';
$strPdfInvalidPageNum = 'Неопределенный номер PDF-страницы!';
$strPdfInvalidTblName = 'Таблица "%s" не существует!';
$strPdfNoTables = 'Нет таблиц';
$strPerHour = 'в час';
$strPhp = 'Создать PHP-код';
$strPmaDocumentation = 'Документация по phpMyAdmin';
$strPmaUriError = 'Директива <tt>$cfg[\'PmaAbsoluteUri\']</tt> должна быть установлена в Вашем конфигурационном файле!';
$strPortrait = 'Портрет';
$strPos1 = 'Начало';
$strPrevious = 'Назад';
$strPrimary = 'Первичный';
$strPrimaryKey = 'Первичный ключ';
$strPrimaryKeyHasBeenDropped = 'Первичный ключ был удален';
$strPrimaryKeyName = 'Имя первичного ключа должно быть PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>должно</b> быть признаком <b>только</b> первичного ключа!)';
$strPrint = 'Печать';
$strPrintView = 'Версия для печати';
$strPrivileges = 'Привилегии';
$strProcesslist = 'Список процессов';
$strProperties = 'Свойства';
$strPutColNames = 'Укажите наименования полей в первой строке';

$strQBE = 'Запрос&nbsp;по&nbsp;примеру';
$strQBEDel = 'Удалить';
$strQBEIns = 'Вставить';
$strQueryOnDb = 'SQL-запрос БД <b>%s</b>:';
$strQueryStatistics = '<b>Статистика запросов</b>: Со времени запуска %s запросов было послано на сервер.';
$strQueryType = 'Тип запроса';

$strReType = 'Подтверждение';
$strReceived = 'Принято';
$strRecords = 'Записи';
$strReferentialIntegrity = 'Проверить целостность данных:';
$strRelationNotWorking = 'Дополнительные возможности для работы со связанными таблицами недоступны. Для определения причины нажмите %sсюда%s.';
$strRelationView = 'Связанный вид';
$strRelationalSchema = 'Реляционная схема';
$strReloadFailed = 'Не удалось перезагрузить MySQL.';
$strReloadMySQL = 'Перезагрузить MySQL';
$strRememberReload = 'Не забудьте перезагрузить сервер.';
$strRenameTable = 'Переименовать таблицу в';
$strRenameTableOK = 'Таблица %s была переименована в %s';
$strRepairTable = 'Починить таблицу';
$strReplace = 'Заместить';
$strReplaceTable = 'Заместить данные таблицы данными из файла';
$strReset = 'Переустановить';
$strRevoke = 'Отменить';
$strRevokeGrant = 'Отменить предоставление прав';
$strRevokeGrantMessage = 'Было отменено предоставление прав для %s';
$strRevokeMessage = 'Вы изменили привилегии для %s';
$strRevokePriv = 'Отменить привилегии';
$strRowLength = 'Длина ряда';
$strRowSize = ' Размер ряда ';
$strRows = 'Ряды';
$strRowsFrom = 'рядов от';
$strRowsModeHorizontal = 'горизонтальном';
$strRowsModeOptions = 'в %s режиме, заголовки после каждых %s ячеек';
$strRowsModeVertical = 'вертикальном';
$strRowsStatistic = 'Статистика ряда';
$strRunQuery = 'Выполнить Запрос';
$strRunSQLQuery = 'Выполнить SQL запрос(ы) на БД %ы';
$strRunning = 'на %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Возможно у Вас ошибка в SQL-парсере. Пожалуйста, проверьте внимательно Ваш запрос и соответствие кавычек. Возможно также, что Вы пытаетесь закачать бинарный файл вне поля quoted text area. Вы можете попробовать выполнить свой запрос через интерфейс командной строки MySQL. Описание ошибки MySQL сервера дано ниже, возможно оно поможет понять, что же произошло. Если у Вас все равно возникают проблемы или если парсер выдает ошибки там, где интерфейс командной строки работает успешно, попробуйте изменить свой SQL запрос до простых запросов и определить, какой именно вызывает проблемы. Вы можете также прислать отчет об ошибке вместе с блоком данных (секция CUT):';
$strSQLParserUserError = 'Кажется возникла ошибка в Вашем SQL запросе. Описание ошибки от MySQL сервера дано ниже, возможно, оно поможет Вам разобраться';
$strSQLQuery = 'SQL-запрос';
$strSQLResult = 'SQL-результат';
$strSQPBugInvalidIdentifer = 'Неправильный идентификатор';
$strSQPBugUnclosedQuote = 'Незакрытая кавычка';
$strSQPBugUnknownPunctuation = 'Неизвестная строка с пунктуацией';
$strSave = 'Сохранить';
$strScaleFactorSmall = 'Масштаб слишком маленький для отображения всей таблицы на одной странице';
$strSearch = 'Искать';
$strSearchFormTitle = 'Искать в базе данных';
$strSearchInTables = 'В таблице(ах):';
$strSearchNeedle = 'Слово(а) или значение(я) для поиска (включая "%") в:';
$strSearchOption1 = 'хоть одно слово';
$strSearchOption2 = 'все слова';
$strSearchOption3 = 'точное соответствие';
$strSearchOption4 = 'регулярное выражение';
$strSearchResultsFor = 'Искать в "<i>%s</i>" %s:';
$strSearchType = 'Искать:';
$strSelect = 'Выбрать';
$strSelectADb = 'Выберите БД';
$strSelectAll = 'Отметить все';
$strSelectFields = 'Выбрать поля (минимум одно):';
$strSelectNumRows = 'по запросу';
$strSelectTables = 'Выберите таблицу(ы)';
$strSend = 'послать';
$strSent = 'Послано';
$strServer = 'Сервер %s';
$strServerChoice = 'Выбор сервера';
$strServerStatus = 'Текущая информация';
$strServerStatusUptime = 'Этот MySQL сервер работает %s. Он был запущен %s.';
$strServerTabProcesslist = 'Процессы';
$strServerTabVariables = 'Переменные';
$strServerTrafficNotes = '<b>Трафик</b>: Эти таблицы показывают статистику по сетевому трафику MySQL сервера со времени его запуска.';
$strServerVars = 'Переменные и настройки сервера';
$strServerVersion = 'Версия сервера';
$strSessionValue = 'Значение сессии';
$strSetEnumVal = 'Для типов поля "enum" и "set", введите значения по этому формату: \'a\',\'b\',\'c\'...<br />Если вам понадобиться ввести обратную косую черту ("\"") или одиночную кавычку ("\'") среди этих значений, поставьте перед ними обратную косую черту (например, \'\\\\xyz\' или \'a\\\'b\').';
$strShow = 'Показать';
$strShowAll = 'Показать все';
$strShowColor = 'Показать цвет';
$strShowCols = 'Показать колонки';
$strShowDatadictAs = 'Формат словаря данных';
$strShowGrid = 'Показать сетку';
$strShowPHPInfo = 'Показать информацию о PHP';
$strShowTableDimension = 'Показать размерность таблицы';
$strShowTables = 'Показать таблицы';
$strShowThisQuery = ' Показать данный запрос снова ';
$strShowingRecords = 'Показывает записи ';
$strSingly = '(отдельно)';
$strSize = 'Размер';
$strSort = 'Отсортировать';
$strSpaceUsage = 'Используемое пространство';
$strSplitWordsWithSpace = 'Слова, разделенные пробелом (" ").';
$strStatement = 'Выражения';
$strStatus = 'Статус';
$strStrucCSV = 'CSV данные';
$strStrucData = 'Структура и данные';
$strStrucDrop = 'Добавить удаление таблицы';
$strStrucExcelCSV = 'CSV для данных Ms Excel';
$strStrucOnly = 'Только структуру';
$strStructPropose = 'Предлагаемая структура таблицы';
$strStructure = 'Структура';
$strSubmit = 'Выполнить';
$strSuccess = 'Ваш SQL-запрос был успешно выполнен';
$strSum = 'Всего';

$strTable = 'таблица ';
$strTableComments = 'Комментарий к таблице';
$strTableEmpty = 'Пустое название таблицы!';
$strTableHasBeenDropped = 'Таблица %s была удалена';
$strTableHasBeenEmptied = 'Таблица %s была очищена';
$strTableHasBeenFlushed = 'Был сброшен кэш таблицы %s';
$strTableMaintenance = 'Обслуживание таблицы';
$strTableOfContents = 'Оглавление';
$strTableStructure = 'Структура таблицы';
$strTableType = 'Тип таблицы';
$strTables = '%s таблиц(ы)';
$strTextAreaLength = ' Из-за большой длины,<br /> это поле не может быть отредактированно ';
$strTheContent = 'Содержимое файла было импортировано.';
$strTheContents = 'Содержимое файла замещает содержимое таблицы для рядов с идентичными первичными или уникальными ключами.';
$strTheTerminator = 'Символ окончания полей.';
$strThreadSuccessfullyKilled = 'Thread %s был удален.';
$strTime = 'Время';
$strTotal = 'всего';
$strTotalUC = 'Всего';
$strTraffic = 'Трафик';
$strType = 'Тип';

$strUncheckAll = 'Снять отметку со всех';
$strUnique = 'Уникальное';
$strUnselectAll = 'Снять отметку со всех';
$strUpdatePrivMessage = 'Были изменены привилегии для';
$strUpdateProfile = 'Обновить профиль:';
$strUpdateProfileMessage = 'Профиль был обновлен.';
$strUpdateQuery = 'Дополнить запрос';
$strUsage = 'Использование';
$strUseBackquotes = 'Обратные кавычки в названиях таблиц и полей';
$strUseTables = 'Использовать таблицы';
$strUser = 'Пользователь';
$strUserEmpty = 'Пустое имя пользователя!';
$strUserName = 'Имя пользователя';
$strUsers = 'Пользователи';

$strValidateSQL = 'Проверить SQL';
$strValidatorError = 'Проверка SQL не может быть инициализирована. Проверьте, установлены ли необходимые модули расширений для PHP, описанные в %sдокументации%s.';
$strValue = 'Значение';
$strVar = 'Переменная';
$strViewDump = 'Просмотреть дамп таблицы';
$strViewDumpDB = 'Просмотреть дамп БД';

$strWebServerUploadDirectory = 'директория, куда помещаются закачанные файлы от web-сервера';
$strWebServerUploadDirectoryError = 'директория, которую Вы установили как "upload" не может быть открыта';
$strWelcome = 'Добро пожаловать в %s';
$strWithChecked = 'С отмеченными:';
$strWrongUser = 'Ошибочный логин/пароль. В доступе отказано.';

$strYes = 'Да';

$strZip = 'архивировать в zip';

// To translate
$strAdministration = 'Administration'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strGlobalPrivileges = 'Global privileges'; //to translate
$strGrantOption = 'Grant'; //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strUserOverview = 'User overview'; //to translate
$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate

$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate

$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleting = 'Deleting %s'; //to translate
$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate

$strAddPrivilegesOnDb = 'Add privileges on the following database'; //to translate
$strAddPrivilegesOnTbl = 'Add privileges on the following table'; //to translate
$strColumnPrivileges = 'Column-specific privileges'; //to translate
$strDbPrivileges = 'Database-specific privileges'; //to translate
$strLocalhost = 'Local';
$strLoginInformation = 'Login Information'; //to translate
$strTblPrivileges = 'Table-specific privileges'; //to translate
$strThisHost = 'This Host'; //to translate
$strUserNotFound = 'The selected user was not found in the privilege table.'; //to translate
$strUserAlreadyExists = 'The user %s already exists!'; //to translate
$strUseTextField = 'Use text field'; //to translate

$strNoUsersSelected = 'No users selected.'; //to translate
$strDropUsersDb = 'Drop the databases that have the same names as the users.'; //to translate
$strAddedColumnComment = 'Added comment for column';  //to translate
$strWritingCommentNotPossible = 'Writing of comment not possible';  //to translate
$strAddedColumnRelation = 'Added relation for column';  //to translate
$strWritingRelationNotPossible = 'Writing of relation not possible';  //to translate
$strImportFinished = 'Import finished';  //to translate
$strFileCouldNotBeRead = 'File could not be read';  //to translate
$strIgnoringFile = 'Ignoring file %s';  //to translate
$strThisNotDirectory = 'This was not a directory';  //to translate
$strAbsolutePathToDocSqlDir = 'Please enter the absolute path on webserver to docSQL directory';  //to translate
$strImportFiles = 'Import files';  //to translate
$strDBGModule = 'Module';  //to translate
$strDBGLine = 'Line';  //to translate
$strDBGHits = 'Hits';  //to translate
$strDBGTimePerHitMs = 'Time/Hit, ms';  //to translate
$strDBGTotalTimeMs = 'Total time, ms';  //to translate
$strDBGMinTimeMs = 'Min time, ms';  //to translate
$strDBGMaxTimeMs = 'Max time, ms';  //to translate
$strDBGContextID = 'Context ID';  //to translate
$strDBGContext = 'Context';  //to translate
$strCantLoad = 'cannot load %s extension,<br />please check PHP Configuration';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strCheckPrivs = 'Check Privileges';  //to translate
$strCheckPrivsLong = 'Check privileges for database &quot;%s&quot;.';  //to translate
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the Database statistics here might cause heavy traffic between the webserver and the MySQL one.';  //to translate
$strDatabasesStatsDisable = 'Disable Statistics';  //to translate
$strDatabasesStatsEnable = 'Enable Statistics';  //to translate
$strJumpToDB = 'Jump to database &quot;%s&quot;.';  //to translate
$strDropSelectedDatabases = 'Drop Selected Databases';  //to translate
$strNoDatabasesSelected = 'No databases selected.';  //to translate
$strDatabasesDropped = '%s databases have been dropped successfully.';  //to translate
$strGlobal = 'global';  //to translate
$strDbSpecific = 'database-specific';  //to translate
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strWildcard = 'wildcard';  //to translate
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate
$strDBComment = 'Database comment: ';//to translate
$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_file = 'Filename';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strInnodbStat = 'InnoDB Status';  //to translate
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strSQLOptions = 'SQL options';//to translate
$strXML = 'XML';//to translate
$strCSVOptions = 'CSV options';//to translate
$strNoOptions = 'This format has no options';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatUpdateTime = 'Last update';//to translate
$strStatCheckTime = 'Last check';//to translate
$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate
$strAutomaticLayout = 'Automatic layout';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strFileNameTemplate = 'File name template';//to translate
$strFileNameTemplateRemember = 'remember template';//to translate
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strAutodetect = 'Autodetect';  //to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strUseHostTable = 'Use Host Table';  //to translate
$strShowFullQueries = 'Show Full Queries';  //to translate
$strTruncateQueries = 'Truncate Shown Queries';  //to translate
$strSwitchToTable = 'Switch to copied table';  //to translate
$strCharset = 'Charset';  //to translate
$strLaTeXOptions = 'LaTeX options';  //to translate
$strRelations = 'Relations';  //to translate
$strMoveTableSameNames = 'Can\'t move table to same one!';  //to translate
$strCopyTableSameNames = 'Can\'t copy table to same one!';  //to translate
$strMustSelectFile = 'You should select file which you want to insert.';  //to translate
$strSaveOnServer = 'Save on server in %s directory';  //to translate
$strOverwriteExisting = 'Overwrite existing file(s)';  //to translate
$strFileAlreadyExists = 'File %s already exists on server, change filename or check overwrite option.';  //to translate
$strDumpSaved = 'Dump has been saved to file %s.';  //to translate
$strNoPermission = 'The web server does not have permission to save the file %s.';  //to translate
$strNoSpace = 'Insufficient space to save the file %s.';  //to translate
$strInsertedRowId = 'Inserted row id:';  //to translate
$strLoadMethod = 'LOAD method';  //to translate
$strLoadExplanation = 'The best method is checked by default, but you can change if it fails.';  //to translate
$strExecuteBookmarked = 'Execute bookmarked query';  //to translate
$strExcelOptions = 'Excel options';  //to translate
$strReplaceNULLBy = 'Replace NULL by';  //to translate
$strQueryWindowLock = 'Do not overwrite this query from outside the window';  //to translate
$strPaperSize = 'Paper size';  //to translate
$strDatabaseNoTable = 'This database contains no table!';//to translate
$strViewDumpDatabases = 'View dump (schema) of databases';//to translate
$strAddIntoComments = 'Add into comments';//to translate
$strDatabaseExportOptions = 'Database export options';//to translate
$strAddDropDatabase = 'Add DROP DATABASE';//to translate
$strToggleScratchboard = 'toggle scratchboard';  //to translate
$strTableOptions = 'Table options';  //to translate
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';  //to translate
$strAccessDeniedExplanation = 'phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in config.inc.php and make sure that they correspond to the information given by the administrator of the MySQL server.';  //to translate
$strAddAutoIncrement = 'Add AUTO_INCREMENT value';  //to translate
$strCharsets = 'Charsets';  //to translate
$strDescription = 'Description';  //to translate
$strCharsetsAndCollations = 'Character Sets and Collations';  //to translate
$strCollation = 'Collation';  //to translate
$strMultilingual = 'multilingual';  //to translate
$strGerman = 'German';  //to translate
$strPhoneBook = 'phone book';  //to translate
$strDictionary = 'dictionary';  //to translate
$strSwedish = 'Swedish';  //to translate
$strDanish = 'Danish';  //to translate
$strCzech = 'Czech';  //to translate
$strTurkish = 'Turkish';  //to translate
$strEnglish = 'English';  //to translate
$strHungarian = 'Hungarian';  //to translate
$strCroatian = 'Croatian';  //to translate
$strBulgarian = 'Bulgarian';  //to translate
$strLithuanian = 'Lithuanian';  //to translate
$strEstonian = 'Estonian';  //to translate
$strCaseInsensitive = 'case-insensitive';  //to translate
$strCaseSensitive = 'case-sensitive';  //to translate
$strUkrainian = 'Ukrainian';  //to translate
$strHebrew = 'Hebrew';  //to translate
$strWestEuropean = 'West European';  //to translate
$strCentralEuropean = 'Central European';  //to translate
$strTraditionalChinese = 'Traditional Chinese';  //to translate
$strCyrillic = 'Cyrillic';  //to translate
$strArmenian = 'Armenian';  //to translate
$strArabic = 'Arabic';  //to translate
$strRussian = 'Russian';  //to translate
$strUnknown = 'unknown';  //to translate
$strBaltic = 'Baltic';  //to translate
$strUnicode = 'Unicode';  //to translate
$strSimplifiedChinese = 'Simplified Chinese';  //to translate
$strKorean = 'Korean';  //to translate
$strGreek = 'Greek';  //to translate
$strJapanese = 'Japanese';  //to translate
$strThai = 'Thai';  //to translate
$strUseThisValue = 'Use this value';  //to translate
$strWindowNotFound = 'The target browser window could not be updated. Maybe you have closed the parent window or your browser is blocking cross-window updates of your security settings';  //to translate
$strBrowseForeignValues = 'Browse foreign values';  //to translate
$strInternalRelations = 'Internal relations';  //to translate
$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strUpgradeMySQL = 'You should upgrade to MySQL %s or later.';  //to translate
?>
