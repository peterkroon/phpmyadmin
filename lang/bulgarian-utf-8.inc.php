<?php
/* $Id$ */

/**
 * Translated by Stanislav Yordanov <stanprog at stanprog.com>
 * Based on translation made by Georgi Georgiev <chutz at chubaka.homeip.net>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('байта', 'КБ', 'МБ', 'ГБ', 'ТБ', 'ПБ', 'ЕБ');

$day_of_week = array('нд', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб');
$month = array('януари', 'февруари', 'март', 'април', 'май', 'юни', 'юли', 'август', 'септември', 'окомври', 'ноември', 'декември');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%e %B %Y в %H:%M';

$timespanfmt = '%s дена, %s часа, %s минути и %s секунди';

$strAPrimaryKey = 'Бeшe добавен първичен ключ към ';
$strAbortedClients = 'Прекъснати';
$strAbsolutePathToDocSqlDir = 'Моля въведете абсолютния път на уеб сървъра до docSQL директорията';
$strAccessDenied = 'Отказан достъп';
$strAccessDeniedExplanation = 'phpMyAdmin се опита да се свърже към MySQL сървъра, но сървъра отхвърли конекцията. Трябва да проверите хоста, потребителското име и паролата в config.inc.php файла и да се уверите, че те отговарят на информацията предоставена от администратора на MySQL сървъра.';
$strAction = 'Действие';
$strAddAutoIncrement = 'Добавяне на AUTO_INCREMENT';
$strAddConstraints = 'Добавяне на ограничение';
$strAddDeleteColumn = 'Добави/изтрий колона по критерий';
$strAddDeleteRow = 'Добави/изтрий ред по критерий';
$strAddDropDatabase = 'Добавяне на DROP DATABASE';
$strAddHeaderComment = 'Добавяне на коментар в хедъра (\\n нов ред)';
$strAddIfNotExists = 'Добавяне на IF NOT EXISTS'; 
$strAddIntoComments = 'Добави в коментарите';
$strAddNewField = 'Добавяне на ново поле';
$strAddPrivilegesOnDb = 'Добави привилегии към следната база данни';
$strAddPrivilegesOnTbl = 'Добави привилегии към следната таблица';
$strAddSearchConditions = 'Добавете условие за търсене (тяло за "where" условие):';
$strAddToIndex = ' &nbsp;%s&nbsp;колона(и) беше(яха)добавени към индекса ';
$strAddUser = 'Добавяне на нов потребител.';
$strAddUserMessage = 'Вие добавихте нов потребител.';
$strAddedColumnComment = 'Добавен коментар към колона';
$strAddedColumnRelation = 'Добавена релациа към колона';
$strAdministration = 'Администрация';
$strAffectedRows = 'Засегнати редове:';
$strAfter = 'След %s';
$strAfterInsertBack = 'се върни';
$strAfterInsertNewInsert = 'вмъкни нов запис';
$strAfterInsertSame = 'Назад към тази страница';
$strAll = 'всички';
$strAllTableSameWidth = 'показване на всички Таблици с една и съща ширина?';
$strAlterOrderBy = 'Подреждане на таблицата по';
$strAnIndex = 'Беше добавен индекс на %s';
$strAnalyzeTable = 'Анализиране на таблицата';
$strAnd = 'и';
$strAny = 'всеки';
$strAnyHost = 'Всеки хост';
$strAnyUser = 'Всеки потребител';
$strArabic = 'Арабски';
$strArmenian = 'Арменски';
$strAscending = 'Възходящо';
$strAtBeginningOfTable = 'в началото на таблицата';
$strAtEndOfTable = 'в края на таблицата';
$strAttr = 'Атрибути';
$strAutodetect = 'автоматично откриване';
$strAutomaticLayout = 'Автоматичен лейаут';

$strBack = 'Назад';
$strBaltic = 'Балтийски';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' Двоично ';
$strBinaryDoNotEdit = ' Двоично - не се редактира ';
$strBookmarkAllUsers = 'Нека всеки потребител има достъп до този bookmark';
$strBookmarkDeleted = 'Bookmark беше изтрит.';
$strBookmarkLabel = 'Етикет';
$strBookmarkOptions = 'Bookmark опции';
$strBookmarkQuery = 'Запазване на SQL-запитване';
$strBookmarkThis = 'Запази това SQL-запитване';
$strBookmarkView = 'Само показване';
$strBrowse = 'Прелистване';
$strBrowseForeignValues = 'Преглеждане на външните(foreign) стойности';
$strBulgarian = 'Български';
$strBzError = 'phpMyAdmin не може да компресира схемата(dump) заради грешка в Bz2 разширението в тази версия на PHP. Горещо се препоръчва да установите стойността на <code>$cfg[\'BZipDump\']</code> директивата в конкугурационния файл на вашия phpMyAdmin на <code>FALSE</code>. Ако искате да се използвате възможностите на Bz2 компресията, ще трябва да ъпгрейтнете до по-нова версия на PHP. Вижте съобщение %s за повече информация.';
$strBzip = '"bzip-нато"';

$strCSVOptions = 'CSV опции';
$strCalendar = 'Календар'; 
$strCannotLogin = 'Не мога да се логна към MySQL сървъра';
$strCantLoad = 'не мога да заредя разширението %s,<br />моля проверете конфигурацията на PHP';
$strCantLoadRecodeIconv = 'Не може да се заредят iconv или recode разширенията необходими за конвертиране на набора от символи(charset), конфигурурайте PHP така, че да позволява използване на тези разширения или отменете конвертирането на набора от символи(charset) в phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Не мога да преименувам индекса на PRIMARY!';
$strCantUseRecodeIconv = 'Не може да се използва нито iconv нито libiconv нито recode_string функцията докато протолколите за разширенията са заредени. Проверете конфигурацията на PHP.';
$strCardinality = 'надеждност';
$strCarriage = 'Символ за край на ред: \\r';
$strCaseInsensitive = 'нечувствително към регистъра';
$strCaseSensitive = 'чувствително към регистъра';
$strCentralEuropean = 'Централно европейски';
$strChange = 'Променяне';
$strChangeCopyMode = 'Създай нов потребител със същите привилегии и ...';
$strChangeCopyModeCopy = '... запази стария.';
$strChangeCopyModeDeleteAndReload = ' ... изтрий стария от таблицата на потрбителите и след това презареди привилегиите.';
$strChangeCopyModeJustDelete = ' ... изтрий стария от таблицата на потребителите.';
$strChangeCopyModeRevoke = ' ... отмени всички активни привилегии от стария и след това го изтрий.';
$strChangeCopyUser = 'Промяна на логин информацията / Копиране на потребител';
$strChangeDisplay = 'Изберете Полета за показване';
$strChangePassword = 'Смяна на паролата';
$strCharset = 'Набор от символи';
$strCharsetOfFile = 'Набор от символи(Charset) на файла:';
$strCharsets = 'Набори от символи';
$strCharsetsAndCollations = 'Набори от символи и колации';
$strCheckAll = 'Маркирай всичко';
$strCheckPrivs = 'Проверка на привилегиите';
$strCheckPrivsLong = 'Провери привилегиите за база данни &quot;%s&quot;.';
$strCheckTable = 'Проверка на таблицата';
$strChoosePage = 'Моля изберете страница за редактиране';
$strColComFeat = 'Показване на коментари към Колоните';
$strCollation = 'Колация';
$strColumnNames = 'Име на колона';
$strColumnPrivileges = 'Привилегии специфични за колоната';
$strCommand = 'Команда';
$strComments = 'Коментари';
$strCommentsForTable = 'КОМЕНТАРИ ЗА ТАБЛИЦА';
$strCompleteInserts = 'Пълни INSERT-и';
$strCompression = 'Компресия';
$strConfigFileError = 'phpMyAdmin не може да прочете конфигурационният Ви файл!<br />Това може да се случи ако PHP открие синтактична грешка в него или не може да открие файла.<br />Моля извикайте конфигурационния файл директно като използвате линка по-долу и прочетете съобщението за грешка което PHP връща. В по-голяма част от случаите, някъде липсват кавички или точка и запетая.<br />Ако се изведе празна страница, всички е наред.';
$strConfigureTableCoord = 'Моля конфигурирайте координатите за таблица %s';
$strConnectionError = 'Връзката не може да бъде осъществена: невалидни настройки.';
$strConnections = 'Конекции';
$strConstraintsForDumped = 'Ограничения за дъмпнати таблици';
$strConstraintsForTable = 'Ограничения за таблица';
$strCookiesRequired = 'Оттук нататък са необходими "Cookies".';
$strCopyTable = 'Копиране на таблица (база от данни<b>.</b>таблица):';
$strCopyTableOK = 'Таблица %s беше копирана в %s.';
$strCopyTableSameNames = 'Не може да се копира таблицата към себе си!';
$strCouldNotKill = 'phpMyAdmin не можа да отстрани нишката %s. Вероятно вече е била затворена.';
$strCreate = 'Създай';
$strCreateIndex = 'Създаване на индекс върху &nbsp;%s&nbsp;колони';
$strCreateIndexTopic = 'Създай нов индекс';
$strCreateNewDatabase = 'Създаване на нова БД';
$strCreateNewTable = 'Създай нова таблица в БД %s';
$strCreatePage = 'Създай нова Страница';
$strCreatePdfFeat = 'Създаване на PDF-и';
$strCreationDates = 'Създаване/Обновяване/Проверка на дати';
$strCriteria = 'Критерий';
$strCroatian = 'Хърватски';
$strCyrillic = 'Кирилица';
$strCzech = 'Чешки';
$strCzechSlovak = 'Чехословашки';

$strDBComment = 'Коментар към базата от данни: ';
$strDBGContext = 'Контекст';
$strDBGContextID = 'Контекстно ID';
$strDBGHits = 'Попадения';
$strDBGLine = 'Линия';
$strDBGMaxTimeMs = 'Макс. време, ms';
$strDBGMinTimeMs = 'Мин. време, ms';
$strDBGModule = 'Модул';
$strDBGTimePerHitMs = 'Време/Попадение, ms';
$strDBGTotalTimeMs = 'Общо време, ms';
$strDBRename = 'Преименуване на базата данни на'; 
$strDanish = 'Датски';
$strData = 'Данни';
$strDataDict = 'Речник на данните';
$strDataOnly = 'Само данни';
$strDatabase = 'БД';
$strDatabaseEmpty = 'Името на базата данни е празно!';
$strDatabaseExportOptions = 'Опции за експортиране на база данни';
$strDatabaseHasBeenDropped = 'Базата данни %s беше изтрита.';
$strDatabaseNoTable = 'Базата данни не съдържа таблица!';
$strDatabases = 'Бази от данни';
$strDatabasesDropped = '%s бази данни бяха изтрити успешно.';
$strDatabasesStats = ' Статистика за базите данни';
$strDatabasesStatsDisable = 'Забрани статистика';
$strDatabasesStatsEnable = 'Разреши статистика';
$strDatabasesStatsHeavyTraffic = 'Забележка: Разрешаването на статистика на базата данни може да коства много голям трафик между уеб сървъра и MySQL сървъра.';
$strDbPrivileges = 'Привилегии специфични за базата данни';
$strDbSpecific = 'специфични за базата данни';
$strDefault = 'По подразбиране';
$strDefaultValueHelp = 'За стойностите по подразбиране, моля въведете само една стойност, без обратни черти или апостроф, използвайки следния формат: a';
$strDefragment = 'Дефеагментиране на таблица';
$strDelOld = 'Текущата Страница има Референции към Таблици които вече не съществуват. Желаете ли да изтриете тези Референции?';
$strDelayedInserts = 'Използване на отложени вмъквания';
$strDelete = 'Изтрий';
$strDeleteAndFlush = 'Изтриване на потребителите и след това презареждане на привилегиите.';
$strDeleteAndFlushDescr = 'Това е най-чистия начин, но презареждането на привилегиите може да отнеме известно време.';
$strDeleted = 'Редът беше изтрит';
$strDeletedRows = 'Изтрити редове:';
$strDeleting = 'Изтриване на %s';
$strDescending = 'Низходящо';
$strDescription = 'Описание';
$strDictionary = 'речник';
$strDisableForeignChecks = 'Забраняване на проверките за външен ключ (foreign key)';
$strDisabled = 'Забранено';
$strDisplayFeat = 'Покажи възможностите';
$strDisplayOrder = 'Показване подредено:';
$strDisplayPDF = 'Покажи PDF схема';
$strDoAQuery = 'Изпълни "запитване по заявка" (символ за  заместване: "%")';
$strDoYouReally = 'Действително ли желаете да изпълните заявката';
$strDocu = 'Документация';
$strDrop = 'Унищожаване';
$strDropDatabaseStrongWarning = 'Вие ще УНИЩОЖИТЕ цялата база данни!';
$strDropSelectedDatabases = 'Изтрий избраните бази данни';
$strDropUsersDb = 'Изтриване на базаите данни които имат имена като тези на потребителите.';
$strDumpSaved = 'Схемата(дъмп) беше записана във файл %s.';
$strDumpXRows = 'Дъмп-ни %s реда като започнеш от %s.';
$strDumpingData = 'Дъмп (схема) на данните в таблицата';
$strDynamic = 'динамичен';

$strEdit = 'Редактиране';
$strEditPDFPages = 'Редактиране на PDF Страници';
$strEditPrivileges = 'Редактиране на привилегиите';
$strEffective = 'Ефективни';
$strEmpty = 'Изпразване';
$strEmptyResultSet = 'MySQL върна празен резултат (т.е. нула редове).';
$strEnabled = 'Позволено';
$strEncloseInTransaction = 'Изолиране на експорта в транзакция';
$strEnd = 'Край';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglish = 'Английски';
$strEnglishPrivileges = ' Забележка: Имената на привилегиите на MySQL са показани на английски. ';
$strError = 'Грешка';
$strEstonian = 'Естонски';
$strExcelEdition = 'Excel-ска редакция';
$strExcelOptions = 'Опции на Excel';
$strExecuteBookmarked = 'Стартиране на запазена SQL-заявка';
$strExplain = 'Explain SQL';
$strExport = 'Експортиране';
$strExtendedInserts = 'Разширени INSERT-и';
$strExtra = 'Допълнително';

$strFailedAttempts = 'Провалили се опити';
$strField = 'Поле';
$strFieldHasBeenDropped = 'Полето %s беше изтрито';
$strFields = 'Полета';
$strFieldsEmpty = ' Брояча на полетата е празен! ';
$strFieldsEnclosedBy = 'Полетата са оградени със';
$strFieldsEscapedBy = 'Представка на специалните символи';
$strFieldsTerminatedBy = 'Полетата завършват със';
$strFileAlreadyExists = 'Файлът %s вече съществува на сървъра, сменете името на файла или включете опцията за препокриване.';
$strFileCouldNotBeRead = 'Файлът не може да бъде прочетен';
$strFileNameTemplate = 'Шаблон на файловото име';
$strFileNameTemplateHelp = 'Използвайте __DB__ за име на базата данни, __TABLE__ за име на таблицата и опциите на %sstrftime%s за указавне на формата на времето, като разширенито ще бъде добавено автоматично. Всеки друг текст ще бъде запазен.';
$strFileNameTemplateRemember = 'запомняне на шаблона';
$strFixed = 'Фиксиран';
$strFlushPrivilegesNote = 'Забележка: phpMyAdmin взема потребителските привилегии директно от таблицата на привилегиите на MySQL. Съдържанието на тази таблица може да се различава от привилегиите които използва сървъра ако към него са направени промени на ръка. В този случай, трябва да %sпрезаредите привилегиите%s преди да продължите.';
$strFlushTable = 'Изпразни кеша на таблицата ("FLUSH")';
$strFormEmpty = 'Липсва стойност във полето на формата!';
$strFormat = 'Формат';
$strFullText = 'Пълни текстове';
$strFunction = 'Функция';

$strGenBy = 'Генерирано от';
$strGenTime = 'Време на генериране';
$strGeneralRelationFeat = 'Общи възможности на релациите';
$strGeorgian = 'Грузински';
$strGerman = 'Немски';
$strGlobal = 'глобален';
$strGlobalPrivileges = 'Глобални привилегии';
$strGlobalValue = 'Глобална стойност';
$strGo = 'Изпълнение';
$strGrantOption = 'Дадени';
$strGreek = 'Гръцки';
$strGzip = '"gzip-нато"';

$strHasBeenAltered = 'беше променена.';
$strHasBeenCreated = 'беше създадена.';
$strHaveToShow = 'Трябва да изберете поне една Колона за показване';
$strHebrew = 'Иврит';
$strHome = 'Начало';
$strHomepageOfficial = 'Официалната уеб страница на phpMyAdmin ';
$strHost = 'Хост';
$strHostEmpty = 'Името на хоста е празно!';
$strHungarian = 'Унгарски';

$strIcelandic = 'Исландски';
$strId = 'ID';
$strIdxFulltext = 'Пълнотекстово';
$strIfYouWish = 'Ако желаете да заредите само някои колони от таблицата, укажете списък на полетата разделени със запетаи.';
$strIgnore = 'Игнорирай';
$strIgnoringFile = 'Игнориране на файл %s';
$strImportDocSQL = 'Импортирай docSQL файловете';
$strImportFiles = 'Импортиране на файлове';
$strImportFinished = 'Импортирането завърши';
$strInUse = 'Заето';
$strIndex = 'Индекс';
$strIndexHasBeenDropped = 'Индекса %s беше изтрит';
$strIndexName = 'Име на индекса&nbsp;:';
$strIndexType = 'Тип на индекса&nbsp;:';
$strIndexes = 'Индекси';
$strInnodbStat = 'InnoDB Състояние';
$strInsecureMySQL = 'Вашият конфигурационен файл съдържа настройки (root без парола), които съответстват на привилигирования акаунт на MySQL по подразбиране. Вашият MySQL сървър е стартиран с това по подразбиране и може да бъде лесно хакнат. Tрябва да оправите тази дупка в сигурността.';
$strInsert = 'Вмъкване';
$strInsertAsNewRow = 'Вмъкни като нов ред';
$strInsertNewRow = 'Вмъкни нов ред';
$strInsertTextfiles = 'Вмъкване на текстови файлове в таблицата';
$strInsertedRowId = 'Вмъкнато ID на реда:';
$strInsertedRows = 'Вмъкнати реда:';
$strInstructions = 'Инструкции';
$strInternalNotNecessary = '* Вътрешната релация не е необходина когато съществува също в InnoDB.';
$strInternalRelations = 'Вътрешни релации';

$strJapanese = 'Японски';
$strJumpToDB = 'Скочи към база данни &quot;%s&quot;.';
$strJustDelete = 'Изтрийване на потребителите от таблицата с привилегиите.';
$strJustDeleteDescr = '&quot;Изтритите&quot; потребители ще имат достъп до сървъра както обикновено, докато не се презаредят привилегиите.';

$strKeepPass = 'Да не се сменя паролата';
$strKeyname = 'Име на ключа';
$strKill = 'СТОП';
$strKorean = 'Корейски';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX опции';
$strLandscape = 'Пейзажно';
$strLatexCaption = 'Заглавие на таблицата';
$strLatexContent = 'Съдържание на таблица __TABLE__';
$strLatexContinued = '(продължение)';
$strLatexContinuedCaption = 'Продължение на заглавието на таблицата';
$strLatexIncludeCaption = 'Включване на заглавие на таблицата';
$strLatexLabel = 'Етикет на ключа';
$strLatexStructure = 'Структура на таблица __TABLE__';
$strLatvian = 'Латвийски';
$strLengthSet = 'Дължина/Стойност*';
$strLimitNumRows = 'реда на страница';
$strLineFeed = 'Символ за край на ред: \\n';
$strLinesTerminatedBy = 'Редовете завършват с';
$strLinkNotFound = 'Връзките не са намерени';
$strLinksTo = 'Сочи към';
$strLithuanian = 'Литовски';
$strLoadExplanation = 'Този метод е избран по подразбиране, но можете да го промените ако не работи коректно.';
$strLoadMethod = 'LOAD метод';
$strLocalhost = 'Локален';
$strLocationTextfile = 'Местоположение на текстовия файл';
$strLogPassword = 'Парола:';
$strLogServer = 'Сървър';
$strLogUsername = 'Име:';
$strLogin = 'Вход';
$strLoginInformation = 'Информация за логване';
$strLogout = 'Изход от системата';

$strMIMETypesForTable = 'MIME ТИПОВЕ ЗА ТАБЛИЦА';
$strMIME_MIMEtype = 'MIME-тип';
$strMIME_available_mime = 'Достъпни MIME-типове';
$strMIME_available_transform = 'Достъпни трансформации';
$strMIME_description = 'Описание';
$strMIME_nodescription = 'Няма Описание за тази трансформация.<br />Моля обърнете се към автора относно това какво прави %s.';
$strMIME_transformation = 'Браузърна трансформация';
$strMIME_transformation_note = 'За списъка на достъпните опции на трансформацията и техните MIME-type трансформации кликнете на %sописания на трансформацията%s';
$strMIME_transformation_options = 'Опции на трансформацията';
$strMIME_transformation_options_note = 'Моля въведете стойностите за опциите на трансформацията като използвате следния формат: \'a\',\'b\',\'c\'...<br />Ако трябва да поставите обратно наклонена черта ("\") или еденична кавичка ("\'") между тези стойности, поставете пред тях допълнителна обратно наклонена черта (например \'\\\\xyz\' или \'a\\\'b\').';
$strMIME_without = 'MIME-types показани в наклонен шрифт не притежават отделна функция за трансформация';
$strMaximumSize = 'Максимален размер: %s%s';
$strModifications = 'Промените бяха съхранени';
$strModify = 'Промени';
$strModifyIndexTopic = 'Промяна на индекс';
$strMoreStatusVars = 'Други променливи на състоянието';
$strMoveTable = 'Преместване на таблица към (база от данни<b>.</b>таблица):';
$strMoveTableOK = 'Таблицата %s беше преместена към %s.';
$strMoveTableSameNames = 'Не може да се премести таблицата към себе си!';
$strMultilingual = 'многоезичен';
$strMustSelectFile = 'Трябва да изберете файл за вмъкване.';
$strMySQLCharset = 'MySQL набор от символи';
$strMySQLReloaded = 'MySQL е презареден.';
$strMySQLSaid = 'MySQL отговори: ';
$strMySQLServerProcess = 'MySQL %pma_s1% е стартиран на %pma_s2% като %pma_s3%';
$strMySQLShowProcess = 'MySQL процеси';
$strMySQLShowStatus = 'Информация за състоянието на MySQL сървъра';
$strMySQLShowVars = 'Системни променливи на MySQL';

$strName = 'Име';
$strNeedPrimaryKey = 'Трябва да дефинирате първичен ключ(primary key) за тази таблица.';
$strNext = 'Следващ';
$strNo = 'не';
$strNoDatabases = 'Няма бази от данни';
$strNoDatabasesSelected = 'Няма избрани бази данни.';
$strNoDescription = 'няма Описание';
$strNoDropDatabases = '"DROP DATABASE" зявката е забранена.';
$strNoExplain = 'Пропусни Explain SQL';
$strNoFrames = 'phpMyAdmin е по дружелюбен ако използвате браузър, който поддържа <b>frames</b>.';
$strNoIndex = 'Не е дефиниран индекс!';
$strNoIndexPartsDefined = 'Не са дефинирани части на индекс!';
$strNoModification = 'Няма промяна';
$strNoOptions = 'Този формат няма опции';
$strNoPassword = 'Няма парола';
$strNoPermission = 'Уеб сървъра няма права за запис на файла %s.';
$strNoPhp = 'без PHP код';
$strNoPrivileges = 'Няма привилегии';
$strNoQuery = 'Няма SQL заявка!';
$strNoRights = 'В момента не разполагате с достатъчно права за да се намирате тук!';
$strNoRowsSelected = 'Няма върнати редове';
$strNoSpace = 'Недостатъчно свободно пространство за записване на файла %s.';
$strNoTablesFound = 'В базата данни няма таблици.';
$strNoUsersFound = 'Няма потребител(и).';
$strNoValidateSQL = 'Пропусни Validate SQL';
$strNone = 'Няма';
$strNotNumber = 'Това не е число!';
$strNotOK = 'не е OK';
$strNotSet = 'таблица  <b>%s</b> не е намерена или не е установена в %s';
$strNotValidNumber = ' не е валиден номер на ред!';
$strNull = 'Празно';
$strNumSearchResultsInTable = '%s съвпадение(я) в таблица <i>%s</i>';
$strNumSearchResultsTotal = '<b>Общо:</b> <i>%s</i> съвпадение(я)';
$strNumTables = 'Таблици';

$strOK = 'OK';
$strOftenQuotation = 'Обикновено кавички. ПО ИЗБОР означава, че само полета char и varchar се заграждат в кавички.';
$strOperations = 'Операции';
$strOperator = 'Оператор';
$strOptimizeTable = 'Оптимизиране на таблицата';
$strOptionalControls = 'По избор. Контролира как да се четат или пишат специални символи.';
$strOptionally = 'ПО ИЗБОР';
$strOr = 'или';
$strOverhead = 'Загубено място';
$strOverwriteExisting = 'Препокриване на съществуващите файлове';

$strPHP40203 = 'Вие използвате PHP 4.2.3, който има сериозен бъг с много-байтови стрингове (mbstring). Вижте сведението за PHP бъга 19404. Не е препоръчително да използвате тази версия на PHP с phpMyAdmin.';
$strPHPVersion = 'Версия на PHP';
$strPageNumber = 'Номер на страницата:';
$strPaperSize = 'Размер на хартията';
$strPartialText = 'Частични текстове';
$strPassword = 'Парола';
$strPasswordChanged = 'Паролата на %s беше променена успешно.';
$strPasswordEmpty = 'Паролата е празна!';
$strPasswordNotSame = 'Паролата не е същата!';
$strPdfDbSchema = 'Схемата на база данни "%s" - Страница %s';
$strPdfInvalidTblName = 'Таблица "%s" не съществува!';
$strPdfNoTables = 'Няма таблици';
$strPerHour = 'на час';
$strPerMinute = 'на минута';
$strPerSecond = 'на секунда';
$strPhoneBook = 'Телефонен бележник';
$strPhp = 'Създай PHP код';
$strPmaDocumentation = 'phpMyAdmin документация';
$strPmaUriError = 'На <tt>$cfg[\'PmaAbsoluteUri\']</tt> ТРЯБВА да се зададе стойност в конфигурационния файл!';
$strPolish = 'Полски';
$strPortrait = 'Потртетно';
$strPos1 = 'Начало';
$strPrevious = 'Предишен';
$strPrimary = 'PRIMARY';
$strPrimaryKeyHasBeenDropped = ' Главния ключ беше изтрит.';
$strPrimaryKeyName = 'Името на главния ключ трябва да е... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>трябва</b> да е името на <b>и единствено на</b> главния ключ!)';
$strPrint = 'Изпечатай';
$strPrintView = 'Изглед за печат';
$strPrintViewFull = 'Преглед за печат (с пълните текстове)';
$strPrivDescAllPrivileges = 'Включва всички привилегии освен GRANT.';
$strPrivDescAlter = 'Позволява променяне на структурата на съществуващи таблици.';
$strPrivDescCreateDb = 'Позволява създаване на нови бази данни и таблици.';
$strPrivDescCreateTbl = 'Позволява създаване на нови таблици.';
$strPrivDescCreateTmpTable = 'Позволява създаването на временни таблици.';
$strPrivDescDelete = 'Позволява изтриване на данни.';
$strPrivDescDropDb = 'Позволява изтриване на бази данни и таблици.';
$strPrivDescDropTbl = 'Позволява изтриване на таблици.';
$strPrivDescExecute = 'Позволява стартирането на съхранени процедури; Няма ефект в тази версия на MySQL.';
$strPrivDescFile = 'Позволява импортиране на данни от и експортиране на данни във файлове.';
$strPrivDescGrant = 'Позволява добавяне на потребители и привилегии без презареждане на таблицата с привилегиите.';
$strPrivDescIndex = 'Позволява създаване и премахване на индекси.';
$strPrivDescInsert = 'Позволява вмъкване и заменяне на данни.';
$strPrivDescLockTables = 'Позволява заключване на таблици за текущата нишка.';
$strPrivDescMaxConnections = 'Ограничава броя на новите конекции, които потребителя може да отвори на час.';
$strPrivDescMaxQuestions = 'Ограничава броя на заявките, които потребителя може да изпрати към сървъра на час.';
$strPrivDescMaxUpdates = 'Органичава броя на командите, които променят някоя таблица или база данни, които даден потребител може да стартира за час.';
$strPrivDescProcess3 = 'Позволява спирането на процеси на други потребители.';
$strPrivDescProcess4 = 'Позволява преглед на целите заявки в списъка с процесите.';
$strPrivDescReferences = 'Няма ефект в тази версия на MySQL.';
$strPrivDescReload = 'Позволява презареждане на сървърните настройки и изчистване(flashing) на кеша на сървъра.';
$strPrivDescReplClient = 'Дава правото на потребител да знае къде са slaves / masters.';
$strPrivDescReplSlave = 'Нужно за replication slaves.';
$strPrivDescSelect = 'Позволява четене на данни.';
$strPrivDescShowDb = 'Дава достъп до пълния списък на базите данни.';
$strPrivDescShutdown = 'Позволява спиране на сървъра.';
$strPrivDescSuper = 'Позвалява конектвне, дори ако е достигнат максималния брой на конекциите; Изисква се за повечето административни операции, като установяване на глобални променливи или спиране на нишка на други потребители.';
$strPrivDescUpdate = 'Позволява промяна на данни.';
$strPrivDescUsage = 'Няма привилегии.';
$strPrivileges = 'Привилегии';
$strPrivilegesReloaded = 'Привилегиите бяха презаредени успешно.';
$strProcesslist = 'Списък на процесите';
$strProperties = 'Свойства';
$strPutColNames = 'Постави имената на полетата на първия ред';

$strQBE = 'Запитване по пример';
$strQBEDel = 'Изтрий';
$strQBEIns = 'Вмъкни';
$strQueryFrame = 'Прозорец за заявки';
$strQueryOnDb = 'SQL-заявка към базата от данни <b>%s</b>:';
$strQuerySQLHistory = 'SQL-хронология';
$strQueryStatistics = '<b>Статистика на заявките</b>: От както е стартиран, %s заявки са изпратени към сървъра.';
$strQueryTime = 'Заявката отне %01.4f секунди';
$strQueryType = 'Тип на заявката';
$strQueryWindowLock = 'Не препокривайте тази заявка извън този прозорец';

$strReType = 'Отново';
$strReceived = 'Получени';
$strRecords = 'Записи';
$strReferentialIntegrity = 'Проверка на интегритета на връзките';
$strRefresh = 'Презареждане';
$strRelationNotWorking = 'Допълнителните възможности за работа със свързани (linked) таблици са деактивирани. За да разберете защо кликнете %sтук%s.';
$strRelationView = 'Изглед на релациите';
$strRelationalSchema = 'Релационна схема';
$strRelations = 'Релации';
$strRelationsForTable = 'РЕЛАЦИИ ЗА ТАБЛИЦА';
$strReloadFailed = 'Неуспешен опит за презареждане на MySQL.';
$strReloadMySQL = 'Презареждане на MySQL';
$strReloadingThePrivileges = 'Презареждане на привилегиите';
$strRemoveSelectedUsers = 'Отстраняване на избраните потребители';
$strRenameDatabaseOK = 'Базата данни %s беше преименувана на %s';
$strRenameTable = 'Преименуване на наблицата на';
$strRenameTableOK = 'Таблица %s беше преименувана на %s';
$strRepairTable = 'Поправяне на таблицата';
$strReplace = 'Замести';
$strReplaceNULLBy = 'Заменяй NULL с';
$strReplaceTable = 'Замести данните от таблицата с данните от файла';
$strReset = 'Изчисти';
$strResourceLimits = 'Ресурсни ограничения';
$strRevoke = 'Отмени';
$strRevokeAndDelete = 'Отмяна на висички активни привилегии от потребителите и след това изтриване.';
$strRevokeAndDeleteDescr = 'Потребителите все още ще имат USAGE привилегия докато не се презаредят привилегиите.';
$strRevokeMessage = 'Вие отменихте привилегиите за %s';
$strRomanian = 'Румънски';
$strRowLength = 'Дължина на реда';
$strRowSize = ' Размер на ред ';
$strRows = 'Редове';
$strRowsFrom = 'реда започвайки от';
$strRowsModeFlippedHorizontal = 'хоризинтален (обърнати хедъри)';
$strRowsModeHorizontal = 'хоризонтален';
$strRowsModeOptions = 'в %s вид и повтаряй имената на колоните през всеки %s<br />';
$strRowsModeVertical = 'вертикален';
$strRowsStatistic = 'Статистика за редовете';
$strRunQuery = 'Изпълни заявката';
$strRunSQLQuery = 'Стартиране SQL заявка/заявки към база от данни %s';
$strRunning = 'работи на %s';
$strRussian = 'Руски';

$strSQL = 'SQL';
$strSQLExportType = 'Тип на експортирането';
$strSQLOptions = 'SQL опции';
$strSQLParserBugMessage = 'Има известна вероятност да сте намерили бъг в SQL парсера. Моля проучете по-добре, и проверете коректността на кавичките. Друга вероятна причина за грепката може да бъде, че ъплоудвате файл с изпълним код извън областта заградена с кавички. Можете също када да се опитате да изпълните заявката чрез инртерфейса за команден ред на MySQL. Грешката генерирана от MySQL сървъра по-долу, ако има такава, може също да ви помогне при откриването на проблема. Ако все още имате проблеми или парсера дава грешка там където интерфейса на командния ред не връща такава, моля ограничете вашите SQL заявки само до проблемната заявка, и изпратете съобщение за бъг с парчето от данните в CUT секцията по-долу:';
$strSQLParserUserError = 'Изглжда, че има грешка в SQL заявката ви. Грешката върната от MySQL сървъра по долу, ако има такава, би могала да ви помогне в диагностирането на проблема';
$strSQLQuery = 'SQL-запитване';
$strSQLResult = 'SQL резултат';
$strSQPBugInvalidIdentifer = 'Невалиден идентификатор';
$strSQPBugUnclosedQuote = 'Незатворени кавички';
$strSQPBugUnknownPunctuation = 'Непозната пунктоация на стринг';
$strSave = 'Запиши';
$strSaveOnServer = 'Записване на сървъра в директория %s';
$strScaleFactorSmall = 'Мащаба е твърде малък за да се събере схемата на една страница';
$strSearch = 'Търсене';
$strSearchFormTitle = 'Търсене в базата данни';
$strSearchInTables = 'В таблиците:';
$strSearchNeedle = 'Думи или стойности за търсене (символ за заместване: "%"):';
$strSearchOption1 = 'поне една от думите';
$strSearchOption2 = 'всички думи';
$strSearchOption3 = 'точната фраза';
$strSearchOption4 = 'като регулярен израз';
$strSearchResultsFor = 'Резултати от търсенето на "<i>%s</i>" %s:';
$strSearchType = 'Намери:';
$strSecretRequired = 'Конфигурационния файл има нужда от тайна парола (blowfish_secret).';
$strSelectADb = 'Моля изберете база от данни';
$strSelectAll = 'Селектирай всичко';
$strSelectFields = 'Изберете поле (минимум едно):';
$strSelectNumRows = 'в запитването';
$strSelectTables = 'Избери таблици';
$strSend = 'Изпращане';
$strSent = 'Изпратени';
$strServer = 'Сървър';
$strServerChoice = 'Избор на сървър';
$strServerNotResponding = 'Няма отговор от сървъра';
$strServerStatus = 'Информация за състоянието на MySQL сървъра';
$strServerStatusUptime = 'Този MySQL сървър работи от %s. Стартиран е на %s.';
$strServerTabProcesslist = 'Процеси';
$strServerTabVariables = 'Променливи';
$strServerTrafficNotes = '<b>Трафик на сървъра</b>: Тези таблици показват статистика за мрежовия трафик на MySQL сървъра от както е стартиран.';
$strServerVars = 'Сървърни променливи и настройки';
$strServerVersion = 'Версия на сървъра';
$strSessionValue = 'Стойност на сесията';
$strSetEnumVal = 'Ако типа на полето е "enum" или "set", моля въведете стойностите използвайки този формат: \'a\',\'b\',\'c\'...<br />Ако е необходимо да сложите обратна черта ("\") или апостроф ("\'") между тези стойности, сложите обратна черта пред тях (например:  \'\\\\xyz\' или \'a\\\'b\').';
$strShow = 'Покажи';
$strShowAll = 'Покажи всички';
$strShowColor = 'Покажи цвят';
$strShowDatadictAs = 'Формат на речника на данните';
$strShowFullQueries = 'Показване на пълните заявки';
$strShowGrid = 'Покажи мрежа';
$strShowPHPInfo = 'Информация за PHP ';
$strShowTableDimension = 'Покажи размерността на таблиците';
$strShowTables = 'Покажи таблиците';
$strShowThisQuery = ' Показване на заявката отново';
$strShowingRecords = 'Показва записи ';
$strSimplifiedChinese = 'Опростен китайски';
$strSingly = '(еднократно)';
$strSize = 'Размер';
$strSlovak = 'Словашки';
$strSlovenian = 'Словенски';
$strSort = 'Сортиране';
$strSortByKey = 'Сортиране по ключ';
$strSpaceUsage = 'Използвано място';
$strSpanish = 'Испански';
$strSplitWordsWithSpace = 'Думите трябва да се разделят с интервал (" ").';
$strStatCheckTime = 'Последна проверка';
$strStatCreateTime = 'Създаване';
$strStatUpdateTime = 'Последно обновление';
$strStatement = 'Заявление';
$strStatus = 'Състоние';
$strStrucCSV = 'CSV данни';
$strStrucData = 'Структурата и данните';
$strStrucDrop = 'Добавяне на \'изтрий таблицата\'';
$strStrucExcelCSV = 'CSV за MS Excel данни';
$strStrucOnly = 'Само структурата';
$strStructPropose = 'Предложи структура на таблицата';
$strStructure = 'Структура';
$strSubmit = 'Изпълнение';
$strSuccess = 'Вашето SQL-запитване беше изпълнено успешно';
$strSum = 'Сума';
$strSwedish = 'Шведски';
$strSwitchToTable = 'Превключване към копираната таблица';

$strTable = 'Таблица ';
$strTableComments = 'Коментари към таблицата';
$strTableEmpty = 'Името на таблицата е празно!';
$strTableHasBeenDropped = 'Таблицата %s беше изтрита';
$strTableHasBeenEmptied = 'Таблицата %s беше изпразнена';
$strTableHasBeenFlushed = 'Кеша на таблица %s беше изпразнен';
$strTableMaintenance = 'Поддръжка на таблицата';
$strTableOfContents = 'Съдържание';
$strTableOptions = 'Опции на таблицата';
$strTableStructure = 'Структура на таблица';
$strTableType = 'Тип на таблицата';
$strTables = '%s таблица(и)';
$strTblPrivileges = 'Специфични за таблицата привилегии';
$strTextAreaLength = ' Поради дължината си,<br /> това поле може да не е редактируемо ';
$strThai = 'Тайландски';
$strTheContent = 'Съдържанието на файла беше импортирано.';
$strTheContents = 'Съдържанието на файла замества съдържанието на таблицата за редове с идентични първични или уникални ключове.';
$strTheTerminator = 'Символ за край на поле.';
$strTheme = 'Тема / Стил';
$strThisHost = 'Този Хост';
$strThisNotDirectory = 'Това не беше директория';
$strThreadSuccessfullyKilled = 'Нишка %s беше успешно отстранена.';
$strTime = 'Време';
$strTotal = 'Общо';
$strTotalUC = 'Общо';
$strTraditionalChinese = 'Традиционен китайски';
$strTraditionalSpanish = 'Традиционен Испански';
$strTraffic = 'Трафик';
$strTransformation_application_octetstream__download = 'Показва връзка за сваляне на двоичните данни н аполето. Първата опция е файловото име на двоичния файл. Втората опция е вероятното име на полето на реда на таблицата съдържащо файловото име. Ако напишете втора опция, трябва първата ви опция да е установена на празен низ.';
$strTransformation_image_jpeg__inline = 'Показва thumbnail; опции: ширина, височина в пиксели (запазва оригиналната пропорция)';
$strTransformation_image_jpeg__link = 'Показва връзката на това изображение (за директно сваляне, i.e.).';
$strTransformation_image_png__inline = 'Виж image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Взема поле TIME, TIMESTAMP или DATETIME и го форматира като използва локалния формат за дата. Първата опция е отместването (в часове) която ще бъде добавена към времето (По подразбиране: 0). Втората опция представлява различен формат на датата в зависимост от параметрите на функцията на PHP - strftime().';
$strTransformation_text_plain__external = 'САМО ЗА ЛИНУКС: Стартира външното приложение и попълва данните в полетата чрез стандартния вход. Връща стандартния изход на проложението. По подразбиране е Tidy, за да покаже HTML кода. От съображения за сигурност, трябва ръчно да редактирате файла libraries/transformations/text_plain__external.inc.php и да вмъкнете програмите на които вие позволявате да бъдат стартирани. Първата опция тогава е номера на програмата която бихте искали да използвате а втората опция са параметрите за програмата. Ако третият параметъро е установен в 1, ще конвертира изхода използвайки htmlspecialchars() (По подразбиране е 1). Ако четвъртият параметър е установен в 1, ще постави NOWRAP на клетката на съдържанието, така че целия изход ще бъде показан без преформатиране (По подразбиране е 1)';
$strTransformation_text_plain__formatted = 'Запазва оригиналното форматиране на полето.';
$strTransformation_text_plain__imagelink = 'Показва изображение и връзка на полето съдържащо файлово име; първата опция е префикс като "http://domain.com/", втората опция е ширината в пиксели, третата е височината.';
$strTransformation_text_plain__link = 'Показва връзката на полето съдържащо файлово име; първата опция е префикс като "http://domain.com/", втората опция е заглавието на връзката.';
$strTransformation_text_plain__substr = 'Показва част от низ. Първата опция е отместването от което ще се изхвежда вашият текст (По подразбиране е 0). Втората опция указва колко текст ще се изведе. Ако е празна, се връща целия оставащ текст. Третата опция указва кои символи ще бъдат изведени (По подразбиране: ...) .';
$strTransformation_text_plain__unformatted = 'Показва HTML кода като HTML еденица. Без HTML форматиране.';
$strTruncateQueries = 'Съкращаване на показаните заявки';
$strTurkish = 'Турски';
$strType = 'Тип';

$strUkrainian = 'Украински';
$strUncheckAll = 'Размаркирай всичко';
$strUnicode = 'Unicode';
$strUnique = 'Уникално';
$strUnknown = 'непознат';
$strUnselectAll = 'Деселектирай всичко';
$strUpdComTab = 'Моля прегледайте информацията в Документацията относно това как да обновите вашата Column_comments таблица';
$strUpdatePrivMessage = 'Вие променихте привилегиите за %s.';
$strUpdateProfileMessage = 'Профила беше обновен.';
$strUpdateQuery = 'Допълни Запитването';
$strUpgrade = 'Трябда да ъпгрейднете към %s %s или по-късно.';
$strUsage = 'Използвани';
$strUseBackquotes = 'Използване на обратни кавички около имена на таблици и полета';
$strUseHostTable = 'Използвай таблица Host';
$strUseTables = 'Използвай таблицата';
$strUseTextField = 'Използвай текстовото поле';
$strUseThisValue = 'Използвахте тази стойност';
$strUser = 'Потребител';
$strUserAlreadyExists = 'Потребител %s вече съществува!';
$strUserEmpty = 'Потребителското име е празно!';
$strUserName = 'Потребителско име';
$strUserNotFound = 'Избрания потребител не беше открит в таблицата с привилегиите.';
$strUserOverview = 'Преглед на потребителите';
$strUsersDeleted = 'Избраните потребители бяха изтрити успешно.';
$strUsersHavingAccessToDb = 'Потребители които имат достъп до &quot;%s&quot;';

$strValidateSQL = 'Валидирай SQL-а';
$strValidatorError = 'SQL валидатора не може да бъде инициализиран. Моля проверете дали сте инсталирали необходимите PHP разширения, така както е описано в %sдокументацията%s.';
$strValue = 'Стойност';
$strVar = 'Променлива';
$strViewDump = 'Дъмп (схема) на таблицата';
$strViewDumpDB = 'Дъмп (схема) на БД';
$strViewDumpDatabases = 'Преглед на дъмп (схема) на база данни';

$strWebServerUploadDirectory = 'директорията за upload на уеб сървъра';
$strWebServerUploadDirectoryError = 'Директорията която сте указали за upload не може да бъде достигната';
$strWelcome = 'Добре дошли в %s';
$strWestEuropean = 'Западно-европейски';
$strWildcard = 'символ за заместване';
$strWindowNotFound = 'Прозореца на браузъра не може да бъде обновен. Може би сте затворили отварящият го прозорец или браузърът Ви е блокирал обновяване на данни от един прозорец в друг от съображения за сигурност';
$strWithChecked = 'Когато има отметка:';
$strWritingCommentNotPossible = 'Записа на коментар не е възможен';
$strWritingRelationNotPossible = 'Записа на релацията не е възможен';
$strWrongUser = 'Грешно име/парола. Достъп отказан.';

$strXML = 'XML';

$strYes = 'да';

$strZeroRemovesTheLimit = 'Забележка: Установяването на тези опции с 0 (нула) премахва ограничението.';
$strZip = '"zip-нато"';

// To translate:

$strCheckOverhead = 'Check overheaded';  //to translate

$strHexForBinary = 'Use hexadecimal for binary fields';  //to translate

$strIgnoreInserts = 'Use ignore inserts';  //to translate

$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate

$strStrucNativeExcel = 'Native MS Excel data';  //to translate

$strTakeIt = 'take it';  //to translate
$strToggleScratchboard = 'toggle scratchboard';  //to translate

$strPersian = 'Persian';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strInsertBookmarkTitle = 'Please insert bookmark title';  //to translate
?>
