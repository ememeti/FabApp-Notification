<?php $queries = array (
  0 => 'DROP TABLE IF EXISTS literalArrayliteral',
  1 => 'CREATE TABLE literalArrayliteral (  
                              id INTEGER PRIMARY KEY AUTOINCREMENT,
                              name STRING,
                              file STRING,
                              line INTEGER
                            )',
  2 => 'INSERT INTO literalArrayliteral VALUES (NULL, \'array( )\', \'/index.php\', \'7\') 
, (NULL, \'array("style" => "background-color:#00FF00;border:solid;border-width:2px;")\', \'/admin/objbox.php\', \'49\') 
, (NULL, \'array("style" => "background-color:#0000FF;border:solid;border-width:2px;")\', \'/admin/objbox.php\', \'50\') 
, (NULL, \'array("style" => "background-color:#00FF00;border:solid;border-width:2px;")\', \'/admin/objbox.php\', \'56\') 
, (NULL, \'array("style" => "background-color:#0000FF;border:solid;border-width:2px;")\', \'/admin/objbox.php\', \'59\') 
, (NULL, \'array("class" => "unit", "onclick" => "delete_unit(this)", "onmouseover" => "track(this)", "onmouseout" => "untrack(this)")\', \'/admin/storage_unit_creator.php\', \'40\') 
, (NULL, \'array("class" => "free", "onclick" => "bound_partition(this, \\"edit_partition_input\\", \\"free\\")", "onmouseover" => "track(this)", "onmouseout" => "untrack(this)")\', \'/admin/storage_unit_creator.php\', \'41\') 
, (NULL, \'array(0, 0)\', \'/admin/manage_trainings.php\', \'196\') 
, (NULL, \'array("00", "15", "30", "45")\', \'/admin/manage_trainings.php\', \'205\') 
, (NULL, \'array(\'\'serving\'\' => 0, \'\'next\'\' => 0)\', \'/admin/now_serving.php\', \'25\') 
, (NULL, \'array(\'\'eServing\'\' => 0, \'\'eNext\'\' => 0)\', \'/admin/now_serving.php\', \'37\') 
, (NULL, \'array(\'\'bServing\'\' => 0, \'\'bNext\'\' => 0)\', \'/admin/now_serving.php\', \'49\') 
, (NULL, \'array(\'\'mServing\'\' => 0, \'\'mNext\'\' => 0, "misc" => "Misc")\', \'/admin/now_serving.php\', \'61\') 
, (NULL, \'array("style" => "background-color:#999999;border:solid;border-width:2px;", "onclick" => "alert(\\"No touching!\\");")\', \'/admin/sub/storage_ajax_requests_admin.php\', \'37\') 
, (NULL, \'array("style" => "background-color:#000000;color:#000000;border:solid black;border-width:2px;")\', \'/admin/sub/storage_ajax_requests_admin.php\', \'39\') 
, (NULL, \'array("style" => "background-color:#00FF00;border:solid black;border-width:2px;")\', \'/admin/sub/storage_ajax_requests_admin.php\', \'41\') 
, (NULL, \'array( )\', \'/admin/sub/stats_ajax_requests.php\', \'91\') 
, (NULL, \'array( )\', \'/admin/sub/stats_ajax_requests.php\', \'98\') 
, (NULL, \'array( )\', \'/class/Transactions.php\', \'391\') 
, (NULL, \'array( )\', \'/class/ObjBox.php\', \'105\') 
, (NULL, \'array( )\', \'/class/ObjBox.php\', \'173\') 
, (NULL, \'array( )\', \'/class/ObjBox.php\', \'183\') 
, (NULL, \'array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z")\', \'/class/ObjBox.php\', \'184\') 
, (NULL, \'array( )\', \'/class/ObjBox.php\', \'308\') 
, (NULL, \'array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z")\', \'/class/ObjBox.php\', \'309\') 
, (NULL, \'array( )\', \'/class/Wait_queue.php\', \'336\') 
, (NULL, \'array("red" => "#FF0000", "yellow" => "#FFFF00", "green" => "#008000", "blue" => "#0000FF", "purple" => "#CC00FF")\', \'/class/Devices.php\', \'118\') 
, (NULL, \'array( )\', \'/class/Devices.php\', \'290\') 
, (NULL, \'array( )\', \'/class/Devices.php\', \'331\') 
, (NULL, \'array( )\', \'/class/Devices.php\', \'341\') 
, (NULL, \'array( )\', \'/class/Devices.php\', \'357\') 
, (NULL, \'array( )\', \'/class/Devices.php\', \'387\') 
, (NULL, \'array( )\', \'/class/Service.php\', \'261\') 
, (NULL, \'array( )\', \'/class/Service.php\', \'374\') 
, (NULL, \'array( )\', \'/class/StorageBox.php\', \'83\') 
, (NULL, \'array( )\', \'/class/StorageBox.php\', \'115\') 
, (NULL, \'array( )\', \'/class/StorageBox.php\', \'352\') 
, (NULL, \'array( )\', \'/class/StorageBox.php\', \'398\') 
, (NULL, \'array( )\', \'/class/StorageBox.php\', \'404\') 
, (NULL, \'array( )\', \'/class/StorageBox.php\', \'484\') 
, (NULL, \'array( )\', \'/class/StorageBox.php\', \'547\') 
, (NULL, \'array( )\', \'/class/StorageBox.php\', \'557\') 
, (NULL, \'array("style" => "background-color:#999999;border:solid;border-width:2px;", "onclick" => "alert(\\"Incorrect box\\");")\', \'/class/StorageBox.php\', \'579\') 
, (NULL, \'array("style" => "background-color:#000000;color:#000000;border:solid black;border-width:2px;")\', \'/class/StorageBox.php\', \'581\') 
, (NULL, \'array( )\', \'/class/StorageBox.php\', \'619\') 
, (NULL, \'array( )\', \'/class/StorageBox.php\', \'649\') 
, (NULL, \'array("Could not get drawer information")\', \'/class/StorageBox.php\', \'663\') 
, (NULL, \'array( )\', \'/class/Users.php\', \'14\') 
, (NULL, \'array( )\', \'/class/Users.php\', \'205\') 
, (NULL, \'array( )\', \'/class/Users.php\', \'422\') 
, (NULL, \'array( )\', \'/class/Accounts.php\', \'70\') 
, (NULL, \'array(2)\', \'/class/Accounts.php\', \'71\') 
, (NULL, \'array( )\', \'/class/Accounts.php\', \'193\') 
, (NULL, \'array( )\', \'/class/Accounts.php\', \'213\') 
, (NULL, \'array( )\', \'/class/Error.php\', \'69\') 
, (NULL, \'array( )\', \'/class/Status.php\', \'22\') 
, (NULL, \'array( )\', \'/class/Status.php\', \'55\') 
, (NULL, \'array( )\', \'/class/Status.php\', \'79\') 
, (NULL, \'array( )\', \'/class/Status.php\', \'97\') 
, (NULL, \'array( )\', \'/class/Purpose.php\', \'36\') 
, (NULL, \'array( )\', \'/class/IndividualsCertificates.php\', \'14\') 
, (NULL, \'array( )\', \'/class/Materials.php\', \'185\') 
, (NULL, \'array( )\', \'/class/Materials.php\', \'210\') 
, (NULL, \'array( )\', \'/class/Materials.php\', \'233\') 
, (NULL, \'array( )\', \'/class/Materials.php\', \'453\') 
, (NULL, \'array( )\', \'/class/Materials.php\', \'532\') 
, (NULL, \'array("DD00DD", "0F8DFF", "339933", "FFFF00", "888800", "FF0000")\', \'/class/Materials.php\', \'554\') 
, (NULL, \'array( )\', \'/class/FabApp_Database.php\', \'22\') 
, (NULL, \'array( )\', \'/class/FabApp_Database.php\', \'23\') 
, (NULL, \'array( )\', \'/class/FabApp_Database.php\', \'24\') 
, (NULL, \'array( )\', \'/class/FabApp_Database.php\', \'53\') 
, (NULL, \'array( )\', \'/class/FabApp_Database.php\', \'67\') 
, (NULL, \'array( )\', \'/class/FabApp_Database.php\', \'77\') 
, (NULL, \'array( )\', \'/class/FabApp_Database.php\', \'109\') 
, (NULL, \'array( )\', \'/class/FabApp_Database.php\', \'134\') 
, (NULL, \'array( )\', \'/class/FabApp_Database.php\', \'138\') 
, (NULL, \'array( )\', \'/class/FabApp_Database.php\', \'151\') 
, (NULL, \'array( )\', \'/class/FabApp_Database.php\', \'152\') 
, (NULL, \'array( )\', \'/class/FabApp_Database.php\', \'154\') 
, (NULL, \'array("Hour", "Count")\', \'/class/FabApp_Database.php\', \'228\') 
, (NULL, \'array("Day", "Count")\', \'/class/FabApp_Database.php\', \'239\') 
, (NULL, \'array("Day", "Hour", "Count")\', \'/class/FabApp_Database.php\', \'249\') 
, (NULL, \'array("Name", "Count")\', \'/class/FabApp_Database.php\', \'262\') 
, (NULL, \'array("Name", "Count")\', \'/class/FabApp_Database.php\', \'275\') 
, (NULL, \'array("Count")\', \'/class/FabApp_Database.php\', \'287\') 
, (NULL, \'array("Charge", "Account", "Transaction", "Date", "User", "Staff", "Amount", "Notes")\', \'/class/FabApp_Database.php\', \'298\') 
, (NULL, \'array("Device", "Count")\', \'/class/FabApp_Database.php\', \'311\') 
, (NULL, \'array("Device", "Count")\', \'/class/FabApp_Database.php\', \'324\') 
, (NULL, \'array("Device", "Count")\', \'/class/FabApp_Database.php\', \'338\') 
, (NULL, \'array( )\', \'/class/FabApp_Database.php\', \'366\') 
, (NULL, \'array(" ACCESSIBLE ", " ACTION ", " ADD ", " AFTER ", " AGAINST ", " AGGREGATE ", " ALGORITHM ", " ALTER ", " ANALYZE ", " ASCII ", " ASENSITIVE ", " AT ", " AUTHORS ", " AUTOEXTEND_SIZE ", " AUTO_INCREMENT ", " AVG_ROW_LENGTH ", " BACKUP ", " BEFORE ", " BEGIN ", " BETWEEN ", " BIGINT ", " BINARY ", " BINLOG ", " BIT ", " BLOB ", " BLOCK ", " BOOL ", " BOOLEAN ", " BTREE ", " BYTE ", " CACHE ", " CALL ", " CASCADE ", " CASCADED ", " CATALOG_NAME ", " CHAIN ", " CHANGE ", " CHANGED ", " CHAR ", " CHARACTER ", " CHARSET ", " CHECK ", " CHECKSUM ", " CIPHER ", " CLASS_ORIGIN ", " CLIENT ", " CLOSE ", " COALESCE ", " CODE ", " COLLATE ", " COLLATION ", " COLUMN ", " COLUMNS ", " COLUMN_NAME ", " COMMENT ", " COMMIT ", " COMMITTED ", " COMPACT ", " COMPLETION ", " COMPRESSED ", " CONCURRENT ", " CONDITION ", " CONNECTION ", " CONSISTENT ", " CONSTRAINT ", " CONSTRAINT_CATALOG ", " CONSTRAINT_NAME ", " CONSTRAINT_SCHEMA ", " CONTEXT ", " CONTINUE ", " CONTRIBUTORS ", " CONVERT ", " CPU ", " CREATE ", " CROSS ", " CUBE ", " CURRENT_DATE ", " CURRENT_TIME ", " CURRENT_TIMESTAMP ", " CURRENT_USER ", " CURSOR ", " CURSOR_NAME ", " DATA ", " DATABASE ", " DATABASES ", " DATAFILE ", " DATE ", " DATETIME ", " DAY_HOUR ", " DAY_MICROSECOND ", " DAY_MINUTE ", " DAY_SECOND ", " DEALLOCATE ", " DEC ", " DECIMAL ", " DECLARE ", " DEFAULT ", " DEFINER ", " DELAYED ", " DELAY_KEY_WRITE ", " DELETE ", " DESCRIBE ", " DES_KEY_FILE ", " DETERMINISTIC ", " DIRECTORY ", " DISABLE ", " DISCARD ", " DISK ", " DISTINCT ", " DISTINCTROW ", " DIV ", " DO ", " DOUBLE ", " DROP ", " DUAL ", " DUMPFILE ", " DUPLICATE ", " DYNAMIC ", " EACH ", " ELSE ", " ELSEIF ", " ENABLE ", " ENCLOSED ", " END ", " ENDS ", " ENGINE ", " ENGINES ", " ENUM ", " ERROR ", " ERRORS ", " ESCAPE ", " ESCAPED ", " EVENT ", " EVENTS ", " EVERY ", " EXECUTE ", " EXISTS ", " EXIT ", " EXPANSION ", " EXPLAIN ", " EXTENDED ", " EXTENT_SIZE ", " FALSE ", " FAST ", " FAULTS ", " FETCH ", " FIELDS ", " FILE ", " FIRST ", " FIXED ", " FLOAT ", " FLOAT4 ", " FLOAT8 ", " FLUSH ", " FOR ", " FORCE ", " FOREIGN ", " FOUND ", " FRAC_SECOND ", " FULL ", " FULLTEXT ", " FUNCTION ", " GENERAL ", " GEOMETRY ", " GEOMETRYCOLLECTION ", " GET_FORMAT ", " GLOBAL ", " GRANT ", " GRANTS ", " HANDLER ", " HASH ", " HAVING ", " HELP ", " HIGH_PRIORITY ", " HOST ", " HOSTS ", " HOUR_MICROSECOND ", " HOUR_MINUTE ", " HOUR_SECOND ", " IDENTIFIED ", " IF ", " IGNORE ", " IGNORE_SERVER_IDS ", " IMPORT ", " IN ", " INDEX ", " INDEXES ", " INFILE ", " INITIAL_SIZE ", " INNER ", " INNOBASE ", " INNODB ", " INOUT ", " INSENSITIVE ", " INSERT ", " INSERT_METHOD ", " INSTALL ", " INT ", " INT1 ", " INT2 ", " INT3 ", " INT4 ", " INT8 ", " INTEGER ", " INTERVAL ", " INTO ", " INVOKER ", " IO ", " IO_THREAD ", " IPC ", " IS ", " ISOLATION ", " ISSUER ", " ITERATE ", " KEY ", " KEYS ", " KEY_BLOCK_SIZE ", " KILL ", " LANGUAGE ", " LAST ", " LEADING ", " LEAVE ", " LEAVES ", " LESS ", " LEVEL ", " LIKE ", " LINEAR ", " LINES ", " LINESTRING ", " LIST ", " LOAD ", " LOCAL ", " LOCALTIME ", " LOCALTIMESTAMP ", " LOCK ", " LOCKS ", " LOGFILE ", " LOGS ", " LONG ", " LONGBLOB ", " LONGTEXT ", " LOOP ", " LOW_PRIORITY ", " MASTER ", " MASTER_CONNECT_RETRY ", " MASTER_HEARTBEAT_PERIOD ", " MASTER_HOST ", " MASTER_LOG_FILE ", " MASTER_LOG_POS ", " MASTER_PASSWORD ", " MASTER_PORT ", " MASTER_SERVER_ID ", " MASTER_SSL ", " MASTER_SSL_CA ", " MASTER_SSL_CAPATH ", " MASTER_SSL_CERT ", " MASTER_SSL_CIPHER ", " MASTER_SSL_KEY ", " MASTER_SSL_VERIFY_SERVER_CERT ", " MASTER_USER ", " MATCH ", " MAXVALUE ", " MAX_CONNECTIONS_PER_HOUR ", " MAX_QUERIES_PER_HOUR ", " MAX_ROWS ", " MAX_SIZE ", " MAX_UPDATES_PER_HOUR ", " MAX_USER_CONNECTIONS ", " MEDIUM ", " MEDIUMBLOB ", " MEDIUMINT ", " MEDIUMTEXT ", " MEMORY ", " MERGE ", " MESSAGE_TEXT ", " MICROSECOND ", " MIDDLEINT ", " MIGRATE ", " MINUTE ", " MINUTE_MICROSECOND ", " MINUTE_SECOND ", " MIN_ROWS ", " MOD ", " MODE ", " MODIFIES ", " MODIFY ", " MONTH ", " MULTILINESTRING ", " MULTIPOINT ", " MULTIPOLYGON ", " MUTEX ", " MYSQL_ERRNO ", " NAME ", " NAMES ", " NATIONAL ", " NATURAL ", " NCHAR ", " NDB ", " NDBCLUSTER ", " NEW ", " NEXT ", " NO ", " NODEGROUP ", " NONE ", " NO_WAIT ", " NO_WRITE_TO_BINLOG ", " NULL ", " NUMERIC ", " NVARCHAR ", " OFFSET ", " OLD_PASSWORD ", " ONE ", " ONE_SHOT ", " OPEN ", " OPTIMIZE ", " OPTION ", " OPTIONALLY ", " OPTIONS ", " ORDER ", " OUT ", " OUTER ", " OUTFILE ", " OWNER ", " PACK_KEYS ", " PAGE ", " PARSER ", " PARTIAL ", " PARTITION ", " PARTITIONING ", " PARTITIONS ", " PASSWORD ", " PHASE ", " PLUGIN ", " PLUGINS ", " POINT ", " POLYGON ", " PORT ", " PRECISION ", " PREPARE ", " PRESERVE ", " PREV ", " PRIMARY ", " PRIVILEGES ", " PROCEDURE ", " PROCESSLIST ", " PROFILE ", " PROFILES ", " PROXY ", " PURGE ", " QUARTER ", " QUERY ", " QUICK ", " RANGE ", " READ ", " READS ", " READ_ONLY ", " READ_WRITE ", " REAL ", " REBUILD ", " RECOVER ", " REDOFILE ", " REDO_BUFFER_SIZE ", " REDUNDANT ", " REFERENCES ", " REGEXP ", " RELAY; added in 5.5.3 (nonreserved) ", " RELAYLOG ", " RELAY_LOG_FILE ", " RELAY_LOG_POS ", " RELAY_THREAD ", " RELEASE ", " RELOAD ", " REMOVE ", " RENAME ", " REORGANIZE ", " REPAIR ", " REPEAT ", " REPEATABLE ", " REPLACE ", " REPLICATION ", " REQUIRE ", " RESET ", " RESIGNAL ", " RESTORE ", " RESTRICT ", " RESUME ", " RETURN ", " RETURNS ", " REVOKE ", " RIGHT ", " RLIKE ", " ROLLBACK ", " ROLLUP ", " ROUTINE ", " ROW ", " ROWS ", " ROW_FORMAT ", " RTREE ", " SAVEPOINT ", " SCHEDULE ", " SCHEMA ", " SCHEMAS ", " SCHEMA_NAME ", " SECOND ", " SECOND_MICROSECOND ", " SECURITY ", " SENSITIVE ", " SEPARATOR ", " SERIAL ", " SERIALIZABLE ", " SERVER ", " SESSION ", " SET ", " SHARE ", " SHOW ", " SHUTDOWN ", " SIGNAL ", " SIGNED ", " SIMPLE ", " SLAVE ", " SLOW; added in 5.5.3 (reserved) ", " SMALLINT ", " SNAPSHOT ", " SOCKET ", " SOME ", " SONAME ", " SOUNDS ", " SOURCE ", " SPATIAL ", " SPECIFIC ", " SQL ", " SQLEXCEPTION ", " SQLSTATE ", " SQLWARNING ", " SQL_BIG_RESULT ", " SQL_BUFFER_RESULT ", " SQL_CACHE ", " SQL_CALC_FOUND_ROWS ", " SQL_NO_CACHE ", " SQL_SMALL_RESULT ", " SQL_THREAD ", " SQL_TSI_DAY ", " SQL_TSI_FRAC_SECOND ", " SQL_TSI_HOUR ", " SQL_TSI_MINUTE ", " SQL_TSI_MONTH ", " SQL_TSI_QUARTER ", " SQL_TSI_SECOND ", " SQL_TSI_WEEK ", " SQL_TSI_YEAR ", " SSL ", " START ", " STARTING ", " STARTS ", " STATUS ", " STOP ", " STORAGE ", " STRAIGHT_JOIN ", " STRING ", " SUBCLASS_ORIGIN ", " SUBJECT ", " SUBPARTITION ", " SUBPARTITIONS ", " SUPER ", " SUSPEND ", " SWAPS ", " SWITCHES ", " TABLE ", " TABLES ", " TABLESPACE ", " TABLE_CHECKSUM ", " TABLE_NAME ", " TEMPORARY ", " TEMPTABLE ", " TERMINATED ", " TEXT ", " THAN ", " THEN ", " TIME ", " TIMESTAMP ", " TIMESTAMPADD ", " TIMESTAMPDIFF ", " TINYBLOB ", " TINYINT ", " TINYTEXT ", " TO ", " TRAILING ", " TRANSACTION ", " TRIGGER ", " TRIGGERS ", " TRUE ", " TRUNCATE ", " TYPE ", " TYPES ", " UNCOMMITTED ", " UNDEFINED ", " UNDO ", " UNDOFILE ", " UNDO_BUFFER_SIZE ", " UNICODE ", " UNINSTALL ", " UNION ", " UNIQUE ", " UNKNOWN ", " UNLOCK ", " UNSIGNED ", " UNTIL ", " UPDATE ", " UPGRADE ", " USAGE ", " USE ", " USER ", " USER_RESOURCES ", " USE_FRM ", " USING ", " UTC_DATE ", " UTC_TIME ", " UTC_TIMESTAMP ", " VALUE ", " VALUES ", " VARBINARY ", " VARCHAR ", " VARCHARACTER ", " VARIABLES ", " VARYING ", " VIEW ", " WAIT ", " WARNINGS ", " WHEN ", " WHILE ", " WITH ", " WORK ", " WRAPPER ", " WRITE ", " X509 ", " XA ", " XML ", " XOR ", " YEAR_MONTH ", " ZEROFILL ")\', \'/class/FabApp_Database.php\', \'378\') 
, (NULL, \'array( )\', \'/class/FabApp_Database.php\', \'443\') 
, (NULL, \'array( )\', \'/class/site_variables.php\', \'2\') 
, (NULL, \'array( )\', \'/class/site_variables.php\', \'42\') 
, (NULL, \'array( )\', \'/api/flud.php\', \'28\') 
, (NULL, \'array("status_id" => 1, "ERROR" => "Bad ID", "authorized" => "N")\', \'/api/gatekeeper.php\', \'25\') 
, (NULL, \'array( )\', \'/api/gatekeeper.php\', \'126\') 
, (NULL, \'array("status_id" => 10, "authorized" => "Y")\', \'/api/gatekeeper.php\', \'184\') 
, (NULL, \'array("status_id" => 0, "ERROR" => "Gatekeeper : No Resolution", "authorized" => "N")\', \'/api/gatekeeper.php\', \'186\') 
, (NULL, \'array( )\', \'/api/purpose.php\', \'20\') 
, (NULL, \'array( )\', \'/api/materials.php\', \'20\') 
, (NULL, \'array( )\', \'/api/juicebox.php\', \'55\') 
, (NULL, \'array( )\', \'/api/php_printer/receipt.php\', \'51\') 
, (NULL, \'array( )\', \'/api/php_printer/src/Mike42/Escpos/ImagickEscposImage.php\', \'238\') 
, (NULL, \'array( )\', \'/api/php_printer/src/Mike42/Escpos/EscposImage.php\', \'61\') 
, (NULL, \'array( )\', \'/api/php_printer/src/Mike42/Escpos/EscposImage.php\', \'315\') 
, (NULL, \'array(\'\'imagick\'\', \'\'gd\'\', \'\'native\'\')\', \'/api/php_printer/src/Mike42/Escpos/EscposImage.php\', \'424\') 
, (NULL, \'array(\'\'wbmp\'\', \'\'pbm\'\', \'\'bmp\'\')\', \'/api/php_printer/src/Mike42/Escpos/EscposImage.php\', \'446\') 
, (NULL, \'array(array(6, 8), array(11, 12))\', \'/api/php_printer/src/Mike42/Escpos/Printer.php\', \'393\') 
, (NULL, \'array(6, 8)\', \'/api/php_printer/src/Mike42/Escpos/Printer.php\', \'393\') 
, (NULL, \'array(11, 12)\', \'/api/php_printer/src/Mike42/Escpos/Printer.php\', \'393\') 
, (NULL, \'array(array(1, 4), array(6, 8))\', \'/api/php_printer/src/Mike42/Escpos/Printer.php\', \'582\') 
, (NULL, \'array(1, 4)\', \'/api/php_printer/src/Mike42/Escpos/Printer.php\', \'582\') 
, (NULL, \'array(6, 8)\', \'/api/php_printer/src/Mike42/Escpos/Printer.php\', \'582\') 
, (NULL, \'array(4 => "pulseHigh", 8 => "offline", 32 => "waitingForOnlineRecovery", 64 => "feedButtonPressed")\', \'/api/php_printer/src/Mike42/Escpos/Printer.php\', \'585\') 
, (NULL, \'array(4 => "coverOpen", 8 => "paperManualFeed", 32 => "paperEnd", 64 => "errorOccurred")\', \'/api/php_printer/src/Mike42/Escpos/Printer.php\', \'591\') 
, (NULL, \'array(4 => "recoverableError", 8 => "autocutterError", 32 => "unrecoverableError", 64 => "autorecoverableError")\', \'/api/php_printer/src/Mike42/Escpos/Printer.php\', \'597\') 
, (NULL, \'array(4 => "paperNearEnd", 32 => "paperNotPresent")\', \'/api/php_printer/src/Mike42/Escpos/Printer.php\', \'603\') 
, (NULL, \'array(4 => "inkNearEnd", 8 => "inkEnd", 32 => "inkNotPresent", 64 => "cleaning")\', \'/api/php_printer/src/Mike42/Escpos/Printer.php\', \'607\') 
, (NULL, \'array(4 => "inkNearEnd", 8 => "inkEnd", 32 => "inkNotPresent")\', \'/api/php_printer/src/Mike42/Escpos/Printer.php\', \'613\') 
, (NULL, \'array(4 => "labelWaitingForRemoval", 32 => "labelPaperNotDetected")\', \'/api/php_printer/src/Mike42/Escpos/Printer.php\', \'618\') 
, (NULL, \'array( )\', \'/api/php_printer/src/Mike42/Escpos/Printer.php\', \'1042\') 
, (NULL, \'array( )\', \'/api/php_printer/src/Mike42/Escpos/CapabilityProfiles/DefaultCapabilityProfile.php\', \'29\') 
, (NULL, \'array(0 => CodePage::CP437, 1 => CodePage::CP932, 2 => CodePage::CP850, 3 => CodePage::CP860, 4 => CodePage::CP863, 5 => CodePage::CP865, 6 => false, 7 => false, 8 => false, 11 => CodePage::CP851, 12 => CodePage::CP853, 13 => CodePage::CP857, 14 => CodePage::CP737, 15 => CodePage::ISO8859_7, 16 => CodePage::CP1252, 17 => CodePage::CP866, 18 => CodePage::CP852, 19 => CodePage::CP858, 20 => false, 21 => CodePage::CP874, 22 => false, 23 => false, 24 => false, 25 => false, 26 => false, 30 => false, 31 => false, 32 => CodePage::CP720, 33 => CodePage::CP775, 34 => CodePage::CP855, 35 => CodePage::CP861, 36 => CodePage::CP862, 37 => CodePage::CP864, 38 => CodePage::CP869, 39 => CodePage::ISO8859_2, 40 => CodePage::ISO8859_15, 41 => CodePage::CP1098, 42 => CodePage::CP774, 43 => CodePage::CP772, 44 => CodePage::CP1125, 45 => CodePage::CP1250, 46 => CodePage::CP1251, 47 => CodePage::CP1253, 48 => CodePage::CP1254, 49 => CodePage::CP1255, 50 => CodePage::CP1256, 51 => CodePage::CP1257, 52 => CodePage::CP1258, 53 => CodePage::RK1048, 66 => false, 67 => false, 68 => false, 69 => false, 70 => false, 71 => false, 72 => false, 73 => false, 74 => false, 75 => false, 82 => false, 254 => false, 255 => false)\', \'/api/php_printer/src/Mike42/Escpos/CapabilityProfiles/DefaultCapabilityProfile.php\', \'43\') 
, (NULL, \'array(\'\'CP3011\'\' => "ÇüéâäàåçêëèïîìÄÅ" . "ÉæÆôöòûùÿÖÜ¢£¥₧ƒ" . "áíóúñÑªº¿⌐¬½¼¡«»" . "░▒▓│┤Ā╢ņ╕╣║╗╝╜╛┐" . "└┴┬├─┼ā╟╚╔╩╦╠═╬╧" . "Š╤čČ╘╒ģĪī┘┌█▄ūŪ▀" . "αßΓπΣσµτΦΘΩδ∞φε∩" . "ĒēĢķĶļĻžŽ∙·√Ņš■ ", \'\'CP3012\'\' => "АБВГДЕЖЗИЙКЛМНОП" . "РСТУФХЦЧШЩЪЫЬЭЮЯ" . "абвгдежзийклмноп" . "░▒▓│┤Ā╢ņ╕╣║╗╝Ō╛┐" . "└┴┬├─┼ā╟╚╔╩╦╠═╬╧" . "Š╤čČ╘╒ģĪī┘┌█▄ūŪ▀" . "рстуфхцчшщъыьэюя" . "ĒēĢķĶļĻžŽ∙·√Ņš■ ")\', \'/api/php_printer/src/Mike42/Escpos/CapabilityProfiles/StarCapabilityProfile.php\', \'28\') 
, (NULL, \'array(0 => CodePage::CP437, 1 => CodePage::CP437, 2 => CodePage::CP932, 3 => CodePage::CP437, 4 => CodePage::CP858, 5 => CodePage::CP852, 6 => CodePage::CP860, 7 => CodePage::CP861, 8 => CodePage::CP863, 9 => CodePage::CP865, 10 => CodePage::CP866, 11 => CodePage::CP855, 12 => CodePage::CP857, 13 => CodePage::CP862, 14 => CodePage::CP864, 15 => CodePage::CP737, 16 => CodePage::CP851, 17 => CodePage::CP869, 18 => CodePage::CP928, 19 => CodePage::CP772, 20 => CodePage::CP774, 21 => CodePage::CP874, 32 => CodePage::CP1252, 33 => CodePage::CP1250, 34 => CodePage::CP1251, 64 => CodePage::CP3840, 65 => CodePage::CP3841, 66 => CodePage::CP3843, 67 => CodePage::CP3844, 68 => CodePage::CP3845, 69 => CodePage::CP3846, 70 => CodePage::CP3847, 71 => CodePage::CP3848, 72 => CodePage::CP1001, 73 => CodePage::CP2001, 74 => CodePage::CP3001, 75 => CodePage::CP3002, 76 => \'\'custom:CP3011\'\', 77 => \'\'custom:CP3012\'\', 78 => CodePage::CP3021, 79 => CodePage::CP3041, 96 => false, 97 => false, 98 => false, 99 => false, 100 => false, 101 => false, 102 => false, 255 => false)\', \'/api/php_printer/src/Mike42/Escpos/CapabilityProfiles/StarCapabilityProfile.php\', \'53\') 
, (NULL, \'array(0 => CodePage::CP437)\', \'/api/php_printer/src/Mike42/Escpos/CapabilityProfiles/SimpleCapabilityProfile.php\', \'30\') 
, (NULL, \'array( )\', \'/api/php_printer/src/Mike42/Escpos/CapabilityProfiles/AbstractCapabilityProfile.php\', \'71\') 
, (NULL, \'array(0 => CodePage::CP437, 1 => false, 2 => CodePage::CP850, 3 => CodePage::CP860, 4 => CodePage::CP863, 5 => CodePage::CP865, 6 => false, 7 => false, 8 => false, 9 => false, 10 => false, 16 => CodePage::CP1252, 17 => CodePage::CP866, 18 => CodePage::CP852, 19 => CodePage::CP858, 20 => false, 21 => false, 22 => false, 23 => false, 24 => CodePage::CP747, 25 => CodePage::CP1257, 27 => false, 28 => CodePage::CP864, 29 => CodePage::CP1001, 30 => false, 31 => false, 32 => CodePage::CP1255, 33 => CodePage::CP720, 34 => CodePage::CP1256, 35 => CodePage::CP1257, 255 => false, 50 => CodePage::CP437, 51 => false, 52 => CodePage::CP437, 53 => CodePage::CP858, 54 => CodePage::CP852, 55 => CodePage::CP860, 56 => CodePage::CP861, 57 => CodePage::CP863, 58 => CodePage::CP865, 59 => CodePage::CP866, 60 => CodePage::CP855, 61 => CodePage::CP857, 62 => CodePage::CP862, 63 => CodePage::CP864, 64 => CodePage::CP737, 65 => CodePage::CP851, 66 => CodePage::CP869, 67 => CodePage::CP928, 68 => CodePage::CP772, 69 => CodePage::CP774, 70 => CodePage::CP874, 71 => CodePage::CP1252, 72 => CodePage::CP1250, 73 => CodePage::CP1251, 74 => CodePage::CP3840, 75 => CodePage::CP3841, 76 => CodePage::CP3843, 77 => CodePage::CP3844, 78 => CodePage::CP3845, 79 => CodePage::CP3846, 80 => CodePage::CP3847, 81 => CodePage::CP3848, 82 => CodePage::CP1001, 83 => CodePage::CP2001, 84 => CodePage::CP3001, 85 => CodePage::CP3002, 86 => CodePage::CP3011, 87 => CodePage::CP3012, 88 => CodePage::CP3021, 89 => CodePage::CP3041)\', \'/api/php_printer/src/Mike42/Escpos/CapabilityProfiles/P822DCapabilityProfile.php\', \'30\') 
, (NULL, \'array( )\', \'/api/php_printer/src/Mike42/Escpos/PrintBuffers/EscposPrintBuffer.php\', \'194\') 
, (NULL, \'array( )\', \'/api/php_printer/src/Mike42/Escpos/PrintBuffers/EscposPrintBuffer.php\', \'195\') 
, (NULL, \'array( )\', \'/api/php_printer/src/Mike42/Escpos/PrintBuffers/EscposPrintBuffer.php\', \'199\') 
, (NULL, \'array( )\', \'/api/php_printer/src/Mike42/Escpos/PrintBuffers/EscposPrintBuffer.php\', \'220\') 
, (NULL, \'array( )\', \'/api/php_printer/src/Mike42/Escpos/PrintBuffers/EscposPrintBuffer.php\', \'237\') 
, (NULL, \'array( )\', \'/api/php_printer/src/Mike42/Escpos/PrintConnectors/WindowsPrintConnector.php\', \'158\') 
, (NULL, \'array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "w"),  )\', \'/api/php_printer/src/Mike42/Escpos/PrintConnectors/WindowsPrintConnector.php\', \'336\') 
, (NULL, \'array("pipe", "r")\', \'/api/php_printer/src/Mike42/Escpos/PrintConnectors/WindowsPrintConnector.php\', \'337\') 
, (NULL, \'array("pipe", "w")\', \'/api/php_printer/src/Mike42/Escpos/PrintConnectors/WindowsPrintConnector.php\', \'338\') 
, (NULL, \'array("pipe", "w")\', \'/api/php_printer/src/Mike42/Escpos/PrintConnectors/WindowsPrintConnector.php\', \'339\') 
, (NULL, \'array( )\', \'/api/php_printer/src/Mike42/Escpos/PrintConnectors/DummyPrintConnector.php\', \'37\') 
, (NULL, \'array( )\', \'/api/php_printer/src/Mike42/Escpos/PrintConnectors/CupsPrintConnector.php\', \'57\') 
, (NULL, \'array(1 => array("pipe", "w"), 2 => array("pipe", "w"))\', \'/api/php_printer/src/Mike42/Escpos/PrintConnectors/CupsPrintConnector.php\', \'105\') 
, (NULL, \'array("pipe", "w")\', \'/api/php_printer/src/Mike42/Escpos/PrintConnectors/CupsPrintConnector.php\', \'106\') 
, (NULL, \'array("pipe", "w")\', \'/api/php_printer/src/Mike42/Escpos/PrintConnectors/CupsPrintConnector.php\', \'110\') 
, (NULL, \'array( )\', \'/pages/pickup.php\', \'87\') 
, (NULL, \'array( )\', \'/pages/pickup.php\', \'89\') 
, (NULL, \'array("status", "quantity")\', \'/pages/pickup.php\', \'90\') 
, (NULL, \'array( )\', \'/pages/sheet_goods.php\', \'18\') 
, (NULL, \'array( )\', \'/pages/sheet_goods.php\', \'19\') 
, (NULL, \'array( )\', \'/pages/offline_ticket.php\', \'11\') 
, (NULL, \'array("required", "required-amount", "required-hour", "required-minute")\', \'/pages/create.php\', \'109\') 
, (NULL, \'array("optional", "optional-amount", "optional-hour", "optional-minute")\', \'/pages/create.php\', \'114\') 
, (NULL, \'array("required")\', \'/pages/create.php\', \'150\') 
, (NULL, \'array("optional")\', \'/pages/create.php\', \'154\') 
, (NULL, \'array( )\', \'/pages/create.php\', \'180\') 
, (NULL, \'array( )\', \'/pages/create.php\', \'183\') 
, (NULL, \'array( )\', \'/pages/create.php\', \'196\') 
, (NULL, \'array( )\', \'/pages/create.php\', \'199\') 
, (NULL, \'array( )\', \'/pages/end.php\', \'117\') 
, (NULL, \'array( )\', \'/pages/end.php\', \'119\') 
, (NULL, \'array("status", "quantity")\', \'/pages/end.php\', \'120\') 
, (NULL, \'array("style" => "background-color:#00FF00;border:solid;border-width:2px;")\', \'/pages/pay.php\', \'407\') 
, (NULL, \'array("style" => "background-color:#0000FF;border:solid 2px;")\', \'/pages/pay.php\', \'409\') 
, (NULL, \'array( )\', \'/pages/wait_ticket.php\', \'9\') 
, (NULL, \'array( )\', \'/pages/pay_sheet_goods.php\', \'43\') 
, (NULL, \'array( )\', \'/pages/pay_sheet_goods.php\', \'44\') 
, (NULL, \'array( )\', \'/pages/pay_sheet_goods.php\', \'52\') 
, (NULL, \'array( )\', \'/pages/inventory_processing.php\', \'207\') 
, (NULL, \'array("style" => "background-color:#999999;border:solid;border-width:2px;", "onclick" => "alert(\\"Box is occupied\\");", "label" => "Occupied")\', \'/pages/sub/storage_ajax_requests.php\', \'56\') 
, (NULL, \'array("style" => "background-color:#000000;color:#000000;border:solid black;border-width:2px;")\', \'/pages/sub/storage_ajax_requests.php\', \'58\') 
, (NULL, \'array("style" => "background-color:#00FF00;border:solid black;border-width:2px;", "onclick" => "add_to_location(this)")\', \'/pages/sub/storage_ajax_requests.php\', \'60\') 
, (NULL, \'array( )\', \'/pages/sub/material_ajax_requests.php\', \'75\') 
',
); ?>