<?php
/* $Id$ */

/**
 * Translated by Gosha Sakovich <gt2 at users.sourceforge.net>
 *               Artyom Rabzonov <tyomych at gmx.net>
 *               Nicolay Zakharov <info at melody.org.ru> 16-Dec-2002
 *               (nobody) 2004-09-18
 */

$charset = 'koi8-r';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
//$byteUnits = array('����', '��', '��', '��');
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y �., %H:%M';
$timespanfmt = '%s ����, %s �����, %s ����� � %s ������';

$strAPrimaryKey = '��� �������� ��������� ���� � %s';
$strAbortedClients = '��������';
$strAbsolutePathToDocSqlDir = '������� ���������� ���� �� ������� � ���������� docSQL, ����������';
$strAccessDenied = '� ������� ��������';
$strAccessDeniedExplanation = 'phpMyAdmin ��������� ����������� � �������� MySQL, �� ������ ������ ����������. ��������� ��� �����, ������������ � ������ � config.inc.php.';
$strAction = '��������';
$strAddAutoIncrement = '�������� �������� AUTO_INCREMENT';
$strAddConstraints = '�������� �����������';
$strAddDeleteColumn = '��������/������� ������� ��������';
$strAddDeleteRow = '��������/������� ��� ��������';
$strAddDropDatabase = '�������� DROP DATABASE';
$strAddHeaderComment = '�������� ������� ����������� � header (\\n ��������� ������)';
$strAddIfNotExists = '�������� IF NOT EXISTS';
$strAddIntoComments = '�������� � �����������';
$strAddNewField = '�������� ����� ����';
$strAddPrivilegesOnDb = '�������� ���������� �� ��������� ����';
$strAddPrivilegesOnTbl = ' �������� ���������� �� ��������� �������';
$strAddSearchConditions = '�������� ������� ������ (���� ��� ������� "where"):';
$strAddToIndex = '�������� � �������&nbsp;%s&nbsp;�������(�)';
$strAddUser = '�������� ������ ������������';
$strAddUserMessage = '��� �������� ����� ������������.';
$strAddedColumnComment = '����������� ����������� ��� �������';
$strAddedColumnRelation = '����������� ����� ��� �������';
$strAdministration = '�����������������';
$strAffectedRows = '���������� ����:';
$strAfter = '����� %s';
$strAfterInsertBack = '�������';
$strAfterInsertNewInsert = '�������� ����� ������';
$strAfterInsertSame = '������������ � ���� ��������';
$strAll = '���';
$strAllTableSameWidth = '�������� ��� ������� � ����� �������?';
$strAlterOrderBy = '�������� ������� �������';
$strAnIndex = '��� �������� ������ ��� %s';
$strAnalyzeTable = '������ �������';
$strAnd = '�';
$strAny = '�����';
$strAnyHost = '����� ����';
$strAnyUser = '����� ������������';
$strArabic = '��������';
$strArmenian = '���������';
$strAscending = '�� �����������';
$strAtBeginningOfTable = '� ������ �������';
$strAtEndOfTable = '� ����� �������';
$strAttr = '��������';
$strAutodetect = '����������';
$strAutomaticLayout = '�������������� ���������';

$strBack = '�����';
$strBaltic = '����������';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' �������� ';
$strBinaryDoNotEdit = ' �������� ������ - �� ������������� ';
$strBookmarkAllUsers = '���� ������� ������������ ������������ ��� ��������';
$strBookmarkDeleted = '�������� ���� �������.';
$strBookmarkLabel = '�����';
$strBookmarkOptions = '����� ��������';
$strBookmarkQuery = '�������� �� SQL-������';
$strBookmarkThis = '�������� �� ������ SQL-������';
$strBookmarkView = '������ ��������';
$strBrowse = '�����';
$strBrowseForeignValues = 'Browse foreign values';
$strBulgarian = '����������';
$strBzError = 'phpMyAdmin �� ����� ����� ���� ��-�� ������� � Bz2 extension � ������� ������ PHP. ������ ������������� ���������� ���������� <code>$cfg[\'BZipDump\']</code> � ����� ���������������� ����� phpMyAdmin �������� <code>FALSE</code>. ���� �� ������ ������������ Bz2-����������, ��� ���������� �������� PHP. �������� PHP bug report %s ��� ����� ��������� ����������.';
$strBzip = '������������ � bzip';

$strCSVOptions = '����� CSV';
$strCalendar = '���������';
$strCannotLogin = '���������� ����� � MySQL';
$strCantLoad = '�� ���� ��������� ���������� %s,<br />��������� ������������ PHP, ����������';
$strCantLoadRecodeIconv = '�� ���� ��������� iconv ��� recode, ����������� ��� ��������������� ��������. ��������� php-������������ � ��������� �� ������������� ��� ��������� ��������������� �������� � phpMyAdmin.';
$strCantRenameIdxToPrimary = '���������� ������������� ������ � PRIMARY!';
$strCantUseRecodeIconv = '�� ���� ������������ iconv �������: �� libiconv, �� recode_string, ���� �� ����� ��������� extension reports. ��������� php-������������.';
$strCardinality = '���������� ���������';
$strCarriage = '������� �������: \\r';
$strCaseInsensitive = '���������������� � ��������';
$strCaseSensitive = '�������������� � �������� ';
$strCentralEuropean = '����������-�����������';
$strChange = '��������';
$strChangeCopyMode = '������� ������ ������������ � ������ �� ������������ � ...';
$strChangeCopyModeCopy = '... ��������� �������.';
$strChangeCopyModeDeleteAndReload = ' ... ������� ������� �� ������ ������������� � ������������� ����������.';
$strChangeCopyModeJustDelete = ' ... ������� ������� �� ������ �������������.';
$strChangeCopyModeRevoke = ' ... �������� ��� �������� ���������� ������� � ����� ������� ���.';
$strChangeCopyUser = '�������� ���������� ������/ ���������� ������������';
$strChangeDisplay = '�������� ���� ��� �����������';
$strChangePassword = '�������� ������';
$strCharset = '���������';
$strCharsetOfFile = '��������� �����:';
$strCharsets = '���������';
$strCharsetsAndCollations = '��������� � ���������';
$strCheckAll = '�������� ���';
$strCheckOverhead = '��������� ������� ��������';
$strCheckPrivs = '��������� ����������';
$strCheckPrivsLong = '��������� ���������� ��� ���� &quot;%s&quot;.';
$strCheckTable = '��������� �������';
$strChoosePage = '�������� �������� ��� ��������������';
$strColComFeat = '�������� ����������� ��������';
$strCollation = '���������';
$strColumnNames = '�������� �������';
$strColumnPrivileges = '����������, ����������� ��� �������';
$strCommand = '�������';
$strComments = '�����������';
$strCommentsForTable = '����������� � �������';
$strCompleteInserts = '������ �������';
$strCompression = '������';
$strConfigFileError = 'phpMyAdmin �� ����� ��������� ������ �� ����������������� �����!  <br />��������� ������� - �������������� ������.<br />�������� ���� ���� (config.inc.php) ��������������� �� ��������. ���� ����� ��������� �� ������� - ��������� ��. ���� ������ �������� - ��� � �������';
$strConfigureTableCoord = '�������� ���������� ������� %s';
$strConnectionError = '���������� ����������: �������� ���������.';
$strConnections = '����������';
$strConstraintsForDumped = 'Constraints for dumped tables';
$strConstraintsForTable = 'Constraints for table';
$strCookiesRequired = 'Cookies ������ ���� �������� ����� ����� �����.';
$strCopyTable = '����������� ������� � (���� ������<b>.</b>�������):';
$strCopyTableOK = '������� %s ���� ����������� � %s.';
$strCopyTableSameNames = ' �� ���� ����������� ������� ���� � ���� !';
$strCouldNotKill = 'phpMyAdmin �� ���� ������� thread %s. ��������, �� ��� ������.';
$strCreate = '�������';
$strCreateIndex = '������� ������ ��&nbsp;%s&nbsp;��������';
$strCreateIndexTopic = '������� ����� ������';
$strCreateNewDatabase = '������� ����� ��';
$strCreateNewTable = '������� ����� ������� � �� %s';
$strCreatePage = '������� ����� ��������';
$strCreatePdfFeat = '�������� PDF-�����';
$strCreationDates = '��������/����������/�������� ���';
$strCriteria = '��������';
$strCroatian = '����������';
$strCyrillic = '�������������';
$strCzech = '�������';
$strCzechSlovak = '�������';

$strDBComment = '����������� ��: ';
$strDBGContext = '��������';
$strDBGContextID = '�������� ID';
$strDBGHits = 'Hits';
$strDBGLine = 'Line';
$strDBGMaxTimeMs = '������������ �����, ms';
$strDBGMinTimeMs = '����������� �����, ms';
$strDBGModule = '������';
$strDBGTimePerHitMs = 'Time/Hit, ms';
$strDBGTotalTimeMs = '�������� �����, ms';
$strDBRename = '������������� ���� ������ �';
$strDanish = '�������';
$strData = '������';
$strDataDict = '������� ������';
$strDataOnly = '������ ������';
$strDatabase = '��';
$strDatabaseEmpty = '��� ���� ������ �� ��������!';
$strDatabaseExportOptions = '����� �������� ��';
$strDatabaseHasBeenDropped = '���� ������ %s ���� �������.';
$strDatabaseNoTable = '��� �� �� �������� ������!';
$strDatabases = '���� ������';
$strDatabasesDropped = '%s �� ���� ������� �������.';
$strDatabasesStats = '���������� ��� ������';
$strDatabasesStatsDisable = '��������� ����������';
$strDatabasesStatsEnable = '�������� ����������';
$strDatabasesStatsHeavyTraffic = '���������: ��������� ���������� ���� ������ ����� �������������� ������� ������ ����� ���-�������� � �������� MySQL.';
$strDbPrivileges = ' ����������, ����������� ��� ���� ������';
$strDbSpecific = '���������� ��� ��';
$strDefault = '�� ���������';
$strDefaultValueHelp = '��� �������� �� ��������� ������ ������� ������������ �������� ��� ������������� � ������������, ��������� ���� ������: a';
$strDefragment = '����������������� �������';
$strDelOld = '� ������� �������� ���� ������ �� �������, ������ ������ �� ����������. �� ������ ������� ��� ������?';
$strDelayedInserts = '������������ ������������� �������';
$strDelete = '�������';
$strDeleteAndFlush = '������� ���� ������������� � ������������� ����������.';
$strDeleteAndFlushDescr = '��� ������ ������, �� ������������ ���������� ����� ������ ��������� �����.';
$strDeleted = '��� ��� ������';
$strDeletedRows = '��������� ���� ���� �������:';
$strDeleting = '�������� %s';
$strDescending = '�� ��������';
$strDescription = '��������';
$strDictionary = '�������';
$strDisableForeignChecks = '��������� �������� ��������� ������';
$strDisabled = '����������';
$strDisplayFeat = '�������� �������������� �����������';
$strDisplayOrder = '������� ���������:';
$strDisplayPDF = '�������� PDF-�����';
$strDoAQuery = '��������� "������ �� �������" (������ �����������: "%")';
$strDoYouReally = '�� ������������� ������� ';
$strDocu = '������������';
$strDrop = '����������';
$strDropDatabaseStrongWarning = '�� �������� ��� ������ ���������� ��� ���� ������?';
$strDropSelectedDatabases = '������� ��������� ��';
$strDropUsersDb = '������� ����, ������� ����� ����� �� ����� ��� � ������������.';
$strDumpSaved = '���� �����Σ� � ���� %s.';
$strDumpXRows = '���� %s �������, ������� � %s.';
$strDumpingData = '���� ������ �������';
$strDynamic = '������������';

$strEdit = '������';
$strEditPDFPages = '�������� PDF-��������';
$strEditPrivileges = '�������������� ����������';
$strEffective = '�������������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ������� ������ ��������� (�.�. ���� �����).';
$strEnabled = '��������';
$strEncloseInTransaction = '�������������� ��� ��������';
$strEnd = '�����';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglish = '����������';
$strEnglishPrivileges = ' ����������: ���������� MySQL �������� ��-��������� ';
$strError = '������';
$strEstonian = '���������';
$strExcelEdition = 'Excel-����������';
$strExcelOptions = '����� Excel';
$strExecuteBookmarked = '�������� ���������� ������';
$strExplain = '������� SQL';
$strExport = '�������';
$strExtendedInserts = '����������� �������';
$strExtra = '�������������';

$strFailedAttempts = '��������� �������';
$strField = '����';
$strFieldHasBeenDropped = '���� %s ���� �������';
$strFields = '����';
$strFieldsEmpty = ' ������ ������� �����! ';
$strFieldsEnclosedBy = '���� ��������� �';
$strFieldsEscapedBy = '���� ������������';
$strFieldsTerminatedBy = '���� ���������';
$strFileAlreadyExists = '���� %s ��� ���������� �� �������, �������� ��� ��� �������������� ������ ����������.';
$strFileCouldNotBeRead = '���� �� ����� ���� ��������';
$strFileNameTemplate = '������ ����� �����';
$strFileNameTemplateHelp = '����������� __DB__ ��� ����� ��, __TABLE__ ��� ����� ������� � %s ����� strftime%s ����� ��� ������� �������, ���������� ����� ��������� ������������. ����� ������ ����� ����� �����Σ�.';
$strFileNameTemplateRemember = '��������� ������';
$strFixed = '�������������';
$strFlushPrivilegesNote = '���������: phpMyAdmin �������� ���������������� ���������� ����� �� ������ ���������� MySQL. ���������� ���� ������ ����� ���������� �� �� ����������, ������� ���������� ������, ���� ��������� ���� ������� �������. � ���� ������ �� ������ %s������������� ����������%s ����� ������������ ������.';
$strFlushTable = '�������� ��� ������� ("FLUSH")';
$strFormEmpty = '��������� �������� ��� �����!';
$strFormat = '������';
$strFullText = '������ ������';
$strFunction = '�������';

$strGenBy = '���������';
$strGenTime = '����� ��������';
$strGeneralRelationFeat = '�������� ����������� ������';
$strGeorgian = '����������';
$strGerman = '��������';
$strGlobal = 'global';
$strGlobalPrivileges = '���������� ����������';
$strGlobalValue = '���������� ��������';
$strGo = '�����';
$strGrantOption = '�������������';
$strGreek = '���������';
$strGzip = '������������ � gzip';

$strHasBeenAltered = '���� ��������.';
$strHasBeenCreated = '���� �������.';
$strHaveToShow = '�� ������ ������� �� ����� ����� ������� ��� �����������';
$strHebrew = '�����';
$strHexForBinary = '������������ ����������������� (hexadecimal) �������� ����';
$strHome = '� ������';
$strHomepageOfficial = '����������� �������� phpMyAdmin';
$strHost = '����';
$strHostEmpty = '������ ��� �����!';
$strHungarian = '����������';

$strIcelandic = '����������';
$strId = 'ID';
$strIdxFulltext = '���������';
$strIfYouWish = '���� �� ������� ��������� ������ ��������� ������� �������, ������� ����������� �������� ������ �����.';
$strIgnore = '������������';
$strIgnoreInserts = '������������ �������';
$strIgnoringFile = '��������� ���� %s';
$strImportDocSQL = '������ docSQL ������';
$strImportFiles = '������ ������';
$strImportFinished = '������ ����ۣ�';
$strInUse = '������������';
$strIndex = '������';
$strIndexHasBeenDropped = '������ %s ��� ������';
$strIndexName = '��� �������&nbsp;:';
$strIndexType = '��� �������&nbsp;:';
$strIndexes = '�������';
$strInnodbStat = 'InnoDB ������';
$strInsecureMySQL = '��� ���������������� ���� �������� ��������� (������������ root ��� ������), ������� ��������� � ������������������ ������������ MySQL (�� ���������). ��� MySQL ������ ������� � ����� ����������� �� ���������, �������� ��� ���������, ������� ��� ������������ ������������� ��������� ��� ���� � ������������.';
$strInsert = '��������';
$strInsertAsNewRow = '�������� ����� ���';
$strInsertNewRow = '�������� ����� ���';
$strInsertTextfiles = '�������� ��������� ����� � �������';
$strInsertedRowId = '�������� id ����:';
$strInsertedRows = '��������� ����:';
$strInstructions = '����������';
$strInternalNotNecessary = '* ���������� ����� �� �����������, ����� ��� ����� ���������� � InnoDB.';
$strInternalRelations = '���������� �����';

$strJapanese = '��������';
$strJumpToDB = '������� � ���� &quot;%s&quot;.';
$strJustDelete = '������ ������� ������������� �� ������ ����������.';
$strJustDeleteDescr = '&quot;���̣����&quot; ������������ �ӣ �ݣ ������ �������� � � ������� ��� ������ �� ������������ ����������.';

$strKeepPass = '�� ������ ������';
$strKeyname = '��� �����';
$strKill = '�����';
$strKorean = '���������';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = '����� LaTeX';
$strLandscape = '��������';
$strLatexCaption = '��������� �������';
$strLatexContent = '���������� ������� __TABLE__';
$strLatexContinued = '(����������)';
$strLatexContinuedCaption = '������������ ��������� �������';
$strLatexIncludeCaption = '�������� ��������� �������';
$strLatexLabel = 'Label key';
$strLatexStructure = '��������� ������� __TABLE__';
$strLatvian = '����������';
$strLengthSet = '�����/��������*';
$strLimitNumRows = '������� �� ��������';
$strLineFeed = '������ ��������� �����: \\n';
$strLinesTerminatedBy = '������ ���������';
$strLinkNotFound = '����� �� �������';
$strLinksTo = '����� �';
$strLithuanian = '����������';
$strLoadExplanation = '������ ����� ������� �� ���������, �� �� ������ ������� ������, ���� ���� �� ���������.';
$strLoadMethod = '����� LOAD';
$strLocalhost = 'Local';
$strLocationTextfile = '����������������� ���������� �����';
$strLogPassword = '������:';
$strLogServer = '������';
$strLogUsername = '������������:';
$strLogin = '���� � �������';
$strLoginInformation = '���������� ������';
$strLogout = '����� �� �������';

$strMIMETypesForTable = 'MIME-���� �������';
$strMIME_MIMEtype = 'MIME-���';
$strMIME_available_mime = '��������� MIME-����';
$strMIME_available_transform = '��������� �������������';
$strMIME_description = '��������';
$strMIME_nodescription = '��� ��������� �������� ��� ���� �������������.<br />����������, �������� ������ ��� ������ %s.';
$strMIME_transformation = '������������� ��������';
$strMIME_transformation_note = '��� ������ ��������� ����� ������������� � ������������� �� MIME-����� �������� �� %s�������� �������������%s';
$strMIME_transformation_options = '����� �������������';
$strMIME_transformation_options_note = '����������, ������� �������� ��� �������������, ��������� ���� ������: \'a\',\'b\',\'c\'...<br />���� ��� ����� ��������� �������("\") ��� �������("\'"), ����������� �� (�������� \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_without = 'MIME-����, ���������� ��������, �� ����� ��������� ������� �������������';
$strMaximumSize = '����������� ������: %s%s';
$strModifications = '����������� ���� ���������';
$strModify = '��������';
$strModifyIndexTopic = '�������� ������';
$strMoreStatusVars = '������ ��������� ����������';
$strMoveTable = '����������� ������� � (���� ������<b>.</b>�������):';
$strMoveTableOK = '������� %s ���� ���������� � %s.';
$strMoveTableSameNames = '�� ���� ����������� ������� ���� � ����!';
$strMultilingual = '������������';
$strMustSelectFile = '�� ������ ������� ���� ��� �������.';
$strMySQLCharset = 'MySQL-���������';
$strMySQLConnectionCollation = '������������� ���������� � MySQL';
$strMySQLReloaded = 'MySQL �������������.';
$strMySQLSaid = '����� MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% �� %pma_s2% ��� %pma_s3%';
$strMySQLShowProcess = '�������� ��������';
$strMySQLShowStatus = '�������� ��������� MySQL';
$strMySQLShowVars = '�������� ��������� ���������� MySQL';

$strName = '���';
$strNeedPrimaryKey = '��� ���������� ������� ��������� ���� ���� �������.';
$strNext = '�����';
$strNo = '���';
$strNoDatabases = '�� �����������';
$strNoDatabasesSelected = '�� ���� �� �� �������.';
$strNoDescription = '��� ��������';
$strNoDropDatabases = '������� "������� ��" ���������.';
$strNoExplain = '���������� �������� SQL';
$strNoFrames = '��� ������ phpMyAdmin ����� ������� � ���������� <b>�������</b>.';
$strNoIndex = '������ �� ���������!';
$strNoIndexPartsDefined = '����� ������� �� ����������!';
$strNoModification = '��� ���������';
$strNoOptions = '� ���� ������� ��� �����';
$strNoPassword = '��� ������';
$strNoPermission = '���-������� �� ������� ���� ��� ���������� ����� %s.';
$strNoPhp = '��� PHP-����';
$strNoPrivileges = '��� ����������';
$strNoQuery = '��� SQL-�������!';
$strNoRights = '�� �� ������ ���������� ���� ��� �����!';
$strNoRowsSelected = '������ ������� �� �������';
$strNoSpace = '�� ������� ��������� ������������ ��� ���������� ����� %s.';
$strNoTablesFound = '� �� �� ���������� ������.';
$strNoUsersFound = '�� ������ ������������.';
$strNoValidateSQL = '�� ��������� SQL';
$strNone = '���';
$strNotNumber = '��� �� �����!';
$strNotOK = '�� ������';
$strNotSet = '������� <b>%s</b> �� �������';
$strNotValidNumber = ' ������������ ���������� �����!';
$strNull = '����';
$strNumSearchResultsInTable = '%s ������(��) � ������� <i>%s</i>';
$strNumSearchResultsTotal = '<b>�����:</b> <i>%s</i> ������(��)';
$strNumTables = '������';

$strOK = '������';
$strOftenQuotation = '������ �������. "�� ������" ��������, ��� ������ ���� char � varchar ����������� � �������.';
$strOperations = '��������';
$strOperator = '��������';
$strOptimizeTable = '�������������� �������';
$strOptionalControls = '�� ������. ������������ ��� ������ ��� ������ ����������� �������.';
$strOptionally = '�� ������';
$strOr = '���';
$strOverhead = '��������� �������';
$strOverwriteExisting = '������������ ������������(�) ����(�)';

$strPHP40203 = '�� ����������� ������ PHP 4.2.3, ������� �������� ��������� ������ ��� ������ � �����-��������� �������� (mbstring). �������� PHP bug report 19404. ������ ������ PHP �� ������������� ��� ������������� � phpMyAdmin.';
$strPHPVersion = '������ PHP';
$strPageNumber = '����� ��������:';
$strPaperSize = '������ ������';
$strPartialText = '��������� ������';
$strPassword = '������';
$strPasswordChanged = '������ ��� %s ��� ������� ����Σ�.';
$strPasswordEmpty = '������ ������!';
$strPasswordNotSame = '������ �� ���������!';
$strPdfDbSchema = '��������� ���� "%s" - �������� %s';
$strPdfInvalidTblName = '������� "%s" �� ����������!';
$strPdfNoTables = '��� ������';
$strPerHour = '� ���';
$strPerMinute = '� ������';
$strPerSecond = '� �������';
$strPhoneBook = '���������� �����';
$strPhp = '������� PHP-���';
$strPmaDocumentation = '������������ �� phpMyAdmin';
$strPmaUriError = '��������� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������ ���� ����������� � ����� ���������������� �����!';
$strPolish = '��������';
$strPortrait = '�������';
$strPos1 = '������';
$strPrevious = '�����';
$strPrimary = '���������';
$strPrimaryKeyHasBeenDropped = '��������� ���� ��� ������';
$strPrimaryKeyName = '��� ���������� ����� ������ ���� PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>������</b> ���� ��������� <b>������</b> ���������� �����!)';
$strPrint = '������';
$strPrintView = '������ ��� ������';
$strPrintViewFull = '����������� (�� ���� �������)';
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.';
$strPrivDescAlter = '��������� ��������� ��������� ������������ ������.';
$strPrivDescCreateDb = '��������� �������� ����� ��� ������ � ������.';
$strPrivDescCreateTbl = '��������� �������� ����� ������.';
$strPrivDescCreateTmpTable = '��������� �������� ��������� ������.';
$strPrivDescDelete = '��������� �������� ������.';
$strPrivDescDropDb = '��������� �������� ';
$strPrivDescDropTbl = '��������� �������� ������.';
$strPrivDescExecute = '��������� ������ �������� ��������; �� �������� � ���� ������ MySQL.';
$strPrivDescFile = '��������� �������������� � ��������������� ������ � �����.';
$strPrivDescGrant = '��������� ���������� ������������� � ���������� ��� ������������ ������ ����������.';
$strPrivDescIndex = '��������� �������� � �������� ��������.';
$strPrivDescInsert = '��������� ������� � ������ ������.';
$strPrivDescLockTables = '��������� ���������� ������ ��� �������� ������.';
$strPrivDescMaxConnections = '������������ ���������� ����������, ������� ������������ ����� ������� � ������� ����.';
$strPrivDescMaxQuestions = '������������ ���������� ��������, ������� ������������ ����� ������� � ������� ����.';
$strPrivDescMaxUpdates = '������������ ���������� ������, ���������� ����� ������� ��� ���� ������, ������� ������������ ����� ��������� �� ���.';
$strPrivDescProcess3 = '��������� ������� �������� ������ ��������������.';
$strPrivDescProcess4 = '��������� �������� ������ �������� � ������ ���������.';
$strPrivDescReferences = '�� �������� � ���� ������ MySQL.';
$strPrivDescReload = '��������� ������������ �������� ������� � ������� ��� �����.';
$strPrivDescReplClient = '���� ������������ ����� ���������� ��� ���������� slaves / masters.';
$strPrivDescReplSlave = '����� ��� ���������� slaves.';
$strPrivDescSelect = '��������� ������ ������.';
$strPrivDescShowDb = '���� ������ � ������� ������ ��� ������.';
$strPrivDescShutdown = '��������� ��������� �������.';
$strPrivDescSuper = '��������� �����������, ���� ���� ���������� ������������ ���������� ����������; ���������� ��� ����������� ���������������� �����, ����� ��� ��������� ���������� ���������� ��� ��������� ��������� ������ �������������.';
$strPrivDescUpdate = '��������� ��������� ������.';
$strPrivDescUsage = '��� ����������.';
$strPrivileges = '����������';
$strPrivilegesReloaded = '���������� ���� ������� �������������.';
$strProcesslist = '������ ���������';
$strProperties = '��������';
$strPutColNames = '������� ������������ ����� � ������ ������';

$strQBE = '������&nbsp;��&nbsp;�������';
$strQBEDel = '�������';
$strQBEIns = '��������';
$strQueryFrame = '���� �������';
$strQueryOnDb = 'SQL-������ �� <b>%s</b>:';
$strQuerySQLHistory = '������� SQL';
$strQueryStatistics = '<b>���������� ��������</b>: �� ������� ������� %s �������� ���� ������� �� ������.';
$strQueryTime = '������ ����� %01.4f ���';
$strQueryType = '��� �������';
$strQueryWindowLock = '�� �������������� ���� ������ ��� ����';

$strReType = '�������������';
$strReceived = '�������';
$strRecords = '������';
$strReferentialIntegrity = '��������� ����������� ������:';
$strRefresh = '��������';
$strRelationNotWorking = '�������������� ����������� ��� ������ �� ���������� ��������� ����������. ��� ����������� ������� ������� %s����%s.';
$strRelationView = '��������� ���';
$strRelationalSchema = '����������� �����';
$strRelations = '�����';
$strRelationsForTable = '����������� � �������';
$strReloadFailed = '�� ������� ������������� MySQL.';
$strReloadMySQL = '������������� MySQL';
$strReloadingThePrivileges = '������������ ����������';
$strRemoveSelectedUsers = '������� ���������� �������������';
$strRenameDatabaseOK = '���� ������ %s ������������� � %s';
$strRenameTable = '������������� ������� �';
$strRenameTableOK = '������� %s ���� ������������� � %s';
$strRepairTable = '�������� �������';
$strReplace = '���������';
$strReplaceNULLBy = '�������� NULL ��';
$strReplaceTable = '��������� ������ ������� ������� �� �����';
$strReset = '��������������';
$strResourceLimits = '������ ��������';
$strRevoke = '��������';
$strRevokeAndDelete = '�������� ��� �������� ���������� ������������� � ����� ������� ��.';
$strRevokeAndDeleteDescr = '������������ �ӣ �ݣ ����� ����� USAGE ���������� �� ������������ ����������.';
$strRevokeMessage = '�� �������� ���������� ��� %s';
$strRomanian = '���������';
$strRowLength = '����� ����';
$strRowSize = ' ������ ���� ';
$strRows = '����';
$strRowsFrom = '����� ��';
$strRowsModeFlippedHorizontal = '�������������(��ף������ ���������)';
$strRowsModeHorizontal = '��������������';
$strRowsModeOptions = '� %s ������, ��������� ����� ������ %s �����';
$strRowsModeVertical = '������������';
$strRowsStatistic = '���������� ����';
$strRunQuery = '��������� ������';
$strRunSQLQuery = '��������� SQL ������(�) �� �� %�';
$strRunning = '�� %s';
$strRussian = '�������';

$strSQL = 'SQL';
$strSQLExportType = '��� ��������';
$strSQLOptions = '����� SQL';
$strSQLParserBugMessage = '�������� � ��� ������ � SQL-�������. ����������, ��������� ����������� ��� ������ � ������������ �������. �������� �����, ��� �� ��������� �������� �������� ���� ��� ���� quoted text area. �� ������ ����������� ��������� ���� ������ ����� ��������� ��������� ������ MySQL. �������� ������ MySQL ������� ���� ����, �������� ��� ������� ������, ��� �� ���������. ���� � ��� ��� ����� ��������� �������� ��� ���� ������ ������ ������ ���, ��� ��������� ��������� ������ �������� �������, ���������� �������� ���� SQL ������ �� ������� �������� � ����������, ����� ������ �������� ��������. �� ������ ����� �������� ����� �� ������ ������ � ������ ������ (������ CUT):';
$strSQLParserUserError = '������� �������� ������ � ����� SQL �������. �������� ������ �� MySQL ������� ���� ����, ��������, ��� ������� ��� �����������';
$strSQLQuery = 'SQL-������';
$strSQLResult = 'SQL-���������';
$strSQPBugInvalidIdentifer = '������������ �������������';
$strSQPBugUnclosedQuote = '���������� �������';
$strSQPBugUnknownPunctuation = '����������� ������ � �����������';
$strSave = '���������';
$strSaveOnServer = '��������� �� ������� � ���������� %s';
$strScaleFactorSmall = '������� ������� ��������� ��� ����������� ���� ������� �� ����� ��������';
$strSearch = '������';
$strSearchFormTitle = '������ � ���� ������';
$strSearchInTables = '� �������(��):';
$strSearchNeedle = '�����(�) ��� ��������(�) ��� ������ (������� "%") �:';
$strSearchOption1 = '���� ���� �����';
$strSearchOption2 = '��� �����';
$strSearchOption3 = '������ ������������';
$strSearchOption4 = '���������� ���������';
$strSearchResultsFor = '������ � "<i>%s</i>" %s:';
$strSearchType = '������:';
$strSecretRequired = '����������������� ����� ������ ����� ��������� ����� (blowfish_secret).';
$strSelectADb = '�������� ��';
$strSelectAll = '�������� ���';
$strSelectFields = '������� ���� (������� ����):';
$strSelectNumRows = '�� �������';
$strSelectTables = '�������� �������(�)';
$strSend = '�������';
$strSent = '�������';
$strServer = '������';
$strServerChoice = '����� �������';
$strServerNotResponding = '������ �� ��������';
$strServerStatus = '������� ����������';
$strServerStatusUptime = '���� MySQL ������ �������� %s. �� ��� ������� %s.';
$strServerTabProcesslist = '��������';
$strServerTabVariables = '����������';
$strServerTrafficNotes = '<b>������</b>: ��� ������� ���������� ���������� �� �������� ������� MySQL ������� �� ������� ��� �������.';
$strServerVars = '���������� � ��������� �������';
$strServerVersion = '������ �������';
$strSessionValue = '�������� ������';
$strSetEnumVal = '��� ����� ���� "enum" � "set", ������� �������� �� ����� �������: \'a\',\'b\',\'c\'...<br />���� ��� ������������ ������ �������� ����� ����� ("\"") ��� ��������� ������� ("\'") ����� ���� ��������, ��������� ����� ���� �������� ����� ����� (��������, \'\\\\xyz\' ��� \'a\\\'b\').';
$strShow = '��������';
$strShowAll = '�������� ���';
$strShowColor = '�������� ����';
$strShowDatadictAs = '������ ������� ������';
$strShowFullQueries = '���������� ������ �������';
$strShowGrid = '�������� �����';
$strShowPHPInfo = '�������� ���������� � PHP';
$strShowTableDimension = '�������� ����������� �������';
$strShowTables = '�������� �������';
$strShowThisQuery = ' �������� ������ ������ ����� ';
$strShowingRecords = '���������� ������ ';
$strSimplifiedChinese = '����ݣ���� ���������';
$strSingly = '(��������)';
$strSize = '������';
$strSlovak = '���������';
$strSlovenian = '����������';
$strSort = '�������������';
$strSortByKey = '����������� �� �����';
$strSpaceUsage = '������������ ������������';
$strSpanish = '���������';
$strSplitWordsWithSpace = '�����, ����������� �������� (" ").';
$strStatCheckTime = '��������� ��������';
$strStatCreateTime = '��������';
$strStatUpdateTime = '��������� ����������';
$strStatement = '���������';
$strStatus = '������';
$strStrucCSV = 'CSV ������';
$strStrucData = '��������� � ������';
$strStrucDrop = '�������� �������� �������';
$strStrucExcelCSV = 'CSV ��� ������ MS Excel';
$strStrucNativeExcel = '������ �� MS Excel';
$strStrucOnly = '������ ���������';
$strStructPropose = '������������ ��������� �������';
$strStructure = '���������';
$strSubmit = '���������';
$strSuccess = '��� SQL-������ ��� ������� ��������';
$strSum = '�����';
$strSwedish = '��������';
$strSwitchToTable = '������������� �� ������������� �������';

$strTable = '������� ';
$strTableComments = '����������� � �������';
$strTableEmpty = '������ �������� �������!';
$strTableHasBeenDropped = '������� %s ���� �������';
$strTableHasBeenEmptied = '������� %s ���� �������';
$strTableHasBeenFlushed = '��� ������� ��� ������� %s';
$strTableMaintenance = '������������ �������';
$strTableOfContents = '����������';
$strTableOptions = '����� �������';
$strTableStructure = '��������� �������';
$strTableType = '��� �������';
$strTables = '%s ������(�)';
$strTakeIt = '����������';
$strTblPrivileges = ' ����������, ����������� ��� �������';
$strTextAreaLength = ' ��-�� ������� �����,<br /> ��� ���� �� ����� ���� ���������������� ';
$strThai = '���';
$strTheContent = '���������� ����� ���� �������������.';
$strTheContents = '���������� ����� �������� ���������� ������� ��� ����� � ����������� ���������� ��� ����������� �������.';
$strTheTerminator = '������ ��������� �����.';
$strTheme = '���� / �����';
$strThisHost = '���� ����';
$strThisNotDirectory = '��� ���� �� ����������';
$strThreadSuccessfullyKilled = 'Thread %s ��� ������.';
$strTime = '�����';
$strToggleScratchboard = 'toggle scratchboard';
$strTotal = '�����';
$strTotalUC = '�����';
$strTraditionalChinese = '������������ ���������';
$strTraditionalSpanish = '������������ ���������';
$strTraffic = '������';
$strTransformation_application_octetstream__download = '�������� ���� � �������� �������� ������ �����. ������ �������: ������� ��� ��������� �����. ������ �������: ������� ��������� ��� ������ ������� � ������� ��������� �������� ����. ���� �� �������� ������ �������, ��������� � ���, ��� ��� ��������� �����  � ������ �������� �� ��������';
$strTransformation_image_jpeg__inline = '���������� ������������, �� ������� ����� ��������; �����: ������,������ � �������� (��������� �������� �������)';
$strTransformation_image_jpeg__link = '���������� ������ �� ��� �����������(direct blob download, i.e.).';
$strTransformation_image_png__inline = 'See image/jpeg: inline';
$strTransformation_text_plain__dateformat = '��ң� ���� TIME, TIMESTAMP ��� DATETIME � ����������� ��� � ������������ � ����� ��������� �������� ����. ������ ����� - ��� ����� (� �����), ������� ����� �������� � timestamp (�� ���������: 0). ������ ����� - ��� ������ ������ ���� � ������������ � �����������, ���������� ��� ������� PHP strftime().';
$strTransformation_text_plain__external = '������ LINUX: ��������� ������� ���������� � �������� ���� ����� ����������� ����. ���������� ����������� ����� ����������. �� ��������� Tidy, ��� �������������� HTML ����. �� ������������ ������������, �� ������ ������� ��������������� ���� libraries/transformations/text_plain__external.inc.php � ������� ���������, ������� �� ������ ���������. ������ ����� - ��� ����� ���������, ������� �� ������ ������������, ������ - ��������� ��� ���������. ������ �������� ��� �������� 1 ����� �������������� �����, ��������� htmlspecialchars() (�� ��������� 1). ���ף���� �������� ��� �������� 1 �������� NOWRAP, ��� ��� ���� ����� ����� ������֣� ��� ������������������ (�� ��������� 1)';
$strTransformation_text_plain__formatted = '��������� �������� �������������� ����. ������������� �� ������������.';
$strTransformation_text_plain__imagelink = '���������� ����������� � ������, ���� �������� ��� �����; ������ ����� - ��� ������� ����� "http://domain.com/", ������ - ������ � ��������, ������ - ������.';
$strTransformation_text_plain__link = '���������� ������, ���� �������� ��� �����; ������ ����� - ��� ������� ����� "http://domain.com/", ������ - ��������� ��� ������.';
$strTransformation_text_plain__substr = '���������� ������ ����� ������. ������ ����� - ��� �����, ������������ ��� ���������� ����� ������ (�� ��������� 0). ������ ����� - ��� ���������� ������������� ������. ���� �� ����������, �� ������������ ���� ���������� �����. ������ ����� ���������� �������, ������� ����� ��������� � ������, ����� ������������ ���������. (�� ���������: ...) .';
$strTransformation_text_plain__unformatted = '���������� HTML-��� � ���� HTML �����. HTML �������������� �� ������������.';
$strTruncateQueries = '�������� ���������� �������';
$strTurkish = '��������';
$strType = '���';

$strUkrainian = '����������';
$strUncheckAll = '����� ������� �� ����';
$strUnicode = '������';
$strUnique = '����������';
$strUnknown = '����������';
$strUnselectAll = '����� ������� �� ����';
$strUpdComTab = '����������, ���������� ��� �������� Column_comments ������� � ������������';
$strUpdatePrivMessage = '���� �������� ���������� ���';
$strUpdateProfileMessage = '������� ��� ��������.';
$strUpdateQuery = '��������� ������';
$strUpgrade = '�� ������ �������� %s �� ������ %s ��� ����.';
$strUsage = '�������������';
$strUseBackquotes = '�������� ������� � ��������� ������ � �����';
$strUseHostTable = '������������ ������� ������';
$strUseTables = '������������ �������';
$strUseTextField = '������������ ��������� ����';
$strUseThisValue = '������������ ��� ��������';
$strUser = '������������';
$strUserAlreadyExists = '������������ %s ��� ����������!';
$strUserEmpty = '������ ��� ������������!';
$strUserName = '��� ������������';
$strUserNotFound = '���������� ������������ �� ��� ������ � ������� ����������.';
$strUserOverview = 'User overview';
$strUsersDeleted = '��������� ������������ ���� ������� �������.';
$strUsersHavingAccessToDb = '������������ � ������� ������� � &quot;%s&quot;';

$strValidateSQL = '��������� SQL';
$strValidatorError = '�������� SQL �� ����� ���� ����������������. ���������, ����������� �� ����������� ������ ���������� ��� PHP, ��������� � %s������������%s.';
$strValue = '��������';
$strVar = '����������';
$strViewDump = '����������� ���� �������';
$strViewDumpDB = '����������� ���� ��';
$strViewDumpDatabases = '����������� ���� (�����) ��';

$strWebServerUploadDirectory = '����������, ���� ���������� ���������� ����� �� web-�������';
$strWebServerUploadDirectoryError = '����������, ������� �� ���������� ��� "upload" �� ����� ���� �������';
$strWelcome = '����� ���������� � %s';
$strWestEuropean = '�������-�����������';
$strWildcard = '������';
$strWindowNotFound = '������� ���� �������� �� ����� ���� ���������. ��������, �� ������� ������������ ���� ��� ��� ������� ��������� ���������� ���������� ��-�� �������� ������������';
$strWithChecked = '� �����������:';
$strWritingCommentNotPossible = '��������� ����������� ����������';
$strWritingRelationNotPossible = '���������� ����� ����������';
$strWrongUser = '��������� �����/������. � ������� ��������.';

$strXML = 'XML';

$strYes = '��';

$strZeroRemovesTheLimit = '���������: ��������� ���� ����� �  0 (����) ������� �����.';
$strZip = '������������ � zip';

$strPersian = 'Persian';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strInsertBookmarkTitle = 'Please insert bookmark title';  //to translate
?>
