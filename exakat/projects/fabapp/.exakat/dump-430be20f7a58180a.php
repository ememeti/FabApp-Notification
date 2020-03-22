<?php $queries = array (
  0 => 'DROP TABLE IF EXISTS stringEncodings',
  1 => 'CREATE TABLE stringEncodings (  id INTEGER PRIMARY KEY AUTOINCREMENT,
                                encoding STRING,
                                block STRING,
                                CONSTRAINT "encoding" UNIQUE (encoding, block)
                              )',
  2 => 'INSERT INTO stringEncodings VALUES (NULL, \'ASCII\', \'\') 
, (NULL, \'\', \'\') 
, (NULL, \'UTF-8\', \'Miscellaneous Mathematical Symbols-B\') 
, (NULL, \'UTF-8\', \'Latin-1 Supplement\') 
, (NULL, \'UTF-8\', \'Box Drawing\') 
, (NULL, \'UTF-8\', \'Latin Extended-A\') 
, (NULL, \'UTF-8\', \'Greek and Coptic\') 
, (NULL, \'UTF-8\', \'Cyrillic\') 
, (NULL, \'UTF-8\', \'Basic Latin\') 
',
); ?>