<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-16 01:04:52 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.pm' doesn't exist ( SELECT `pengirim`, `isiPM` FROM `pm` WHERE `username` = 'opel2' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 01:04:52 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.pm' doesn't exist ( SELECT `pengirim`, `isiPM` FROM `pm` WHERE `username` = 'opel2' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT `pengiri...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/views/isiPM.php(12): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_IsiPM))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#14 {main}
2014-06-16 01:05:23 --- ERROR: ErrorException [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ APPPATH/views/profile.php [ 36 ]
2014-06-16 01:05:23 --- STRACE: ErrorException [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ APPPATH/views/profile.php [ 36 ]
--
#0 [internal function]: Kohana_Core::error_handler(8192, 'mysql_connect()...', '/opt/lampp/htdo...', 36, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/views/profile.php(36): mysql_connect('localhost', 'root', '')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#14 {main}
2014-06-16 01:09:08 --- ERROR: ErrorException [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ APPPATH/views/profile.php [ 36 ]
2014-06-16 01:09:08 --- STRACE: ErrorException [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ APPPATH/views/profile.php [ 36 ]
--
#0 [internal function]: Kohana_Core::error_handler(8192, 'mysql_connect()...', '/opt/lampp/htdo...', 36, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/views/profile.php(36): mysql_connect('localhost', 'root', '')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#14 {main}
2014-06-16 01:28:30 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.pm' doesn't exist ( SELECT `pengirim`, `isiPM` FROM `pm` WHERE `username` = 'opel2' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 01:28:30 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.pm' doesn't exist ( SELECT `pengirim`, `isiPM` FROM `pm` WHERE `username` = 'opel2' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT `pengiri...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/views/isiPM.php(12): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_IsiPM))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#14 {main}
2014-06-16 01:30:43 --- ERROR: ErrorException [ 8192 ]: mysql_real_escape_string(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ APPPATH/classes/controller/form.php [ 19 ]
2014-06-16 01:30:43 --- STRACE: ErrorException [ 8192 ]: mysql_real_escape_string(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ APPPATH/classes/controller/form.php [ 19 ]
--
#0 [internal function]: Kohana_Core::error_handler(8192, 'mysql_real_esca...', '/opt/lampp/htdo...', 19, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(19): mysql_real_escape_string('opelhoward')
#2 [internal function]: Controller_Form->action_sign_up()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-16 01:42:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/profile.php [ 20 ]
2014-06-16 01:42:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/profile.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 01:43:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/profile.php [ 29 ]
2014-06-16 01:43:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/profile.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 01:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL message/opel2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-16 01:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL message/opel2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-16 02:02:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/user.php [ 115 ]
2014-06-16 02:02:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/user.php [ 115 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 02:02:37 --- ERROR: ErrorException [ 8 ]: Undefined index: context ~ APPPATH/classes/controller/message.php [ 9 ]
2014-06-16 02:02:37 --- STRACE: ErrorException [ 8 ]: Undefined index: context ~ APPPATH/classes/controller/message.php [ 9 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 9, Array)
#1 [internal function]: Controller_Message->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 02:03:05 --- ERROR: ErrorException [ 8 ]: Undefined index: context ~ APPPATH/classes/controller/message.php [ 9 ]
2014-06-16 02:03:05 --- STRACE: ErrorException [ 8 ]: Undefined index: context ~ APPPATH/classes/controller/message.php [ 9 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 9, Array)
#1 [internal function]: Controller_Message->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 02:03:16 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'recipient' in 'field list' ( INSERT INTO `message` (`sender`, `recipient`, `timestamp`, `context`) VALUES ('opel', 'opel2', 1402902196, 'this is so sad') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:03:16 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'recipient' in 'field list' ( INSERT INTO `message` (`sender`, `recipient`, `timestamp`, `context`) VALUES ('opel', 'opel2', 1402902196, 'this is so sad') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(2, 'INSERT INTO `me...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(116): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(9): Model_User::add_message('opel', 'opel2', 'this is so sad')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:07:52 --- ERROR: ErrorException [ 8 ]: Undefined index: context ~ APPPATH/classes/controller/message.php [ 9 ]
2014-06-16 02:07:52 --- STRACE: ErrorException [ 8 ]: Undefined index: context ~ APPPATH/classes/controller/message.php [ 9 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 9, Array)
#1 [internal function]: Controller_Message->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 02:08:01 --- ERROR: ErrorException [ 8 ]: Undefined index: context ~ APPPATH/classes/controller/message.php [ 9 ]
2014-06-16 02:08:01 --- STRACE: ErrorException [ 8 ]: Undefined index: context ~ APPPATH/classes/controller/message.php [ 9 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 9, Array)
#1 [internal function]: Controller_Message->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 02:16:10 --- ERROR: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' AND `recipient` = 'opel2' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `sender` = 'opel2' AND `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:16:10 --- STRACE: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' AND `recipient` = 'opel2' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `sender` = 'opel2' AND `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(145): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(11): Model_User::get_message2('opel', 'opel2')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:16:43 --- ERROR: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' AND `recipient` = 'opel2' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `sender` = 'opel2' AND `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:16:43 --- STRACE: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' AND `recipient` = 'opel2' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `sender` = 'opel2' AND `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(145): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(11): Model_User::get_message2('opel', 'opel2')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:16:48 --- ERROR: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:16:48 --- STRACE: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(129): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(17): Model_User::get_message('opel')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:17:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/user.php [ 128 ]
2014-06-16 02:17:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/user.php [ 128 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 02:20:51 --- ERROR: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' AND `recipient` = 'opel2' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `sender` = 'opel2' AND `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:20:51 --- STRACE: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' AND `recipient` = 'opel2' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `sender` = 'opel2' AND `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(145): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(11): Model_User::get_message2('opel', 'opel2')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:21:07 --- ERROR: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' AND `recipient` = 'opel2' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `sender` = 'opel2' AND `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:21:07 --- STRACE: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' AND `recipient` = 'opel2' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `sender` = 'opel2' AND `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(144): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(11): Model_User::get_message2('opel', 'opel2')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:21:08 --- ERROR: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' AND `recipient` = 'opel2' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `sender` = 'opel2' AND `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:21:08 --- STRACE: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' AND `recipient` = 'opel2' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `sender` = 'opel2' AND `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(144): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(11): Model_User::get_message2('opel', 'opel2')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:21:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::order_by() ~ APPPATH/classes/model/user.php [ 144 ]
2014-06-16 02:21:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::order_by() ~ APPPATH/classes/model/user.php [ 144 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 02:22:07 --- ERROR: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' AND `recipient` = 'opel2' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `sender` = 'opel2' AND `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:22:07 --- STRACE: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' AND `recipient` = 'opel2' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `sender` = 'opel2' AND `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(145): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(11): Model_User::get_message2('opel', 'opel2')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:26:38 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'opel' in 'where clause' ( 
				SELECT * FROM `message` 
				WHERE `sender` = opel AND `recipient` = opel2 
				UNION ALL 
				SELECT * FROM `message` 
				WHERE `sender` = opel2 AND `recipient` = opel
				ORDER BY `timestamp`; 
			 ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:26:38 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'opel' in 'where clause' ( 
				SELECT * FROM `message` 
				WHERE `sender` = opel AND `recipient` = opel2 
				UNION ALL 
				SELECT * FROM `message` 
				WHERE `sender` = opel2 AND `recipient` = opel
				ORDER BY `timestamp`; 
			 ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, '?????SELECT * F...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(141): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(11): Model_User::get_message2('opel', 'opel2')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:26:40 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'opel' in 'where clause' ( 
				SELECT * FROM `message` 
				WHERE `sender` = opel AND `recipient` = opel2 
				UNION ALL 
				SELECT * FROM `message` 
				WHERE `sender` = opel2 AND `recipient` = opel
				ORDER BY `timestamp`; 
			 ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:26:40 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'opel' in 'where clause' ( 
				SELECT * FROM `message` 
				WHERE `sender` = opel AND `recipient` = opel2 
				UNION ALL 
				SELECT * FROM `message` 
				WHERE `sender` = opel2 AND `recipient` = opel
				ORDER BY `timestamp`; 
			 ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, '?????SELECT * F...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(141): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(11): Model_User::get_message2('opel', 'opel2')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:26:41 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'opel' in 'where clause' ( 
				SELECT * FROM `message` 
				WHERE `sender` = opel AND `recipient` = opel2 
				UNION ALL 
				SELECT * FROM `message` 
				WHERE `sender` = opel2 AND `recipient` = opel
				ORDER BY `timestamp`; 
			 ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:26:41 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'opel' in 'where clause' ( 
				SELECT * FROM `message` 
				WHERE `sender` = opel AND `recipient` = opel2 
				UNION ALL 
				SELECT * FROM `message` 
				WHERE `sender` = opel2 AND `recipient` = opel
				ORDER BY `timestamp`; 
			 ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, '?????SELECT * F...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(141): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(11): Model_User::get_message2('opel', 'opel2')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:26:42 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'opel' in 'where clause' ( 
				SELECT * FROM `message` 
				WHERE `sender` = opel AND `recipient` = opel2 
				UNION ALL 
				SELECT * FROM `message` 
				WHERE `sender` = opel2 AND `recipient` = opel
				ORDER BY `timestamp`; 
			 ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:26:42 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'opel' in 'where clause' ( 
				SELECT * FROM `message` 
				WHERE `sender` = opel AND `recipient` = opel2 
				UNION ALL 
				SELECT * FROM `message` 
				WHERE `sender` = opel2 AND `recipient` = opel
				ORDER BY `timestamp`; 
			 ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, '?????SELECT * F...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(141): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(11): Model_User::get_message2('opel', 'opel2')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:27:08 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'opel' in 'where clause' ( 
				(SELECT * FROM `message` 
				WHERE `sender` = opel AND `recipient` = opel2) 
				UNION ALL 
				(SELECT * FROM `message` 
				WHERE `sender` = opel2 AND `recipient` = opel)
				ORDER BY `timestamp`; 
			 ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:27:08 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'opel' in 'where clause' ( 
				(SELECT * FROM `message` 
				WHERE `sender` = opel AND `recipient` = opel2) 
				UNION ALL 
				(SELECT * FROM `message` 
				WHERE `sender` = opel2 AND `recipient` = opel)
				ORDER BY `timestamp`; 
			 ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, '?????(SELECT * ...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(141): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(11): Model_User::get_message2('opel', 'opel2')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:27:47 --- ERROR: Database_Exception [ 1064 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'opel2') 
				UNION ALL 
				(SELECT * FROM `message` 
				WHERE `sender` = 'opel' at line 2 ( 
				(SELECT * FROM `message` 
				WHERE `sender` = 'opel' AND '`recipient` = 'opel2') 
				UNION ALL 
				(SELECT * FROM `message` 
				WHERE `sender` = 'opel2' AND '`recipient` = 'opel')
				ORDER BY `timestamp`; 
			 ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:27:47 --- STRACE: Database_Exception [ 1064 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'opel2') 
				UNION ALL 
				(SELECT * FROM `message` 
				WHERE `sender` = 'opel' at line 2 ( 
				(SELECT * FROM `message` 
				WHERE `sender` = 'opel' AND '`recipient` = 'opel2') 
				UNION ALL 
				(SELECT * FROM `message` 
				WHERE `sender` = 'opel2' AND '`recipient` = 'opel')
				ORDER BY `timestamp`; 
			 ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, '?????(SELECT * ...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(141): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(11): Model_User::get_message2('opel', 'opel2')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:28:29 --- ERROR: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:28:29 --- STRACE: Database_Exception [ 1221 ]: [1221] Incorrect usage of UNION and ORDER BY ( SELECT * FROM `message` WHERE `sender` = 'opel' ORDER BY `timestamp` UNION ALL SELECT * FROM `message` WHERE `recipient` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(129): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/message.php(17): Model_User::get_message('opel')
#3 [internal function]: Controller_Message->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Message))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 02:37:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/views/message.php [ 10 ]
2014-06-16 02:37:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/views/message.php [ 10 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/message.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 10, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Message))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-16 02:39:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/message.php [ 17 ]
2014-06-16 02:39:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/message.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 02:39:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/views/message.php [ 10 ]
2014-06-16 02:39:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/views/message.php [ 10 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/message.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 10, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Message))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-16 02:39:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/views/message.php [ 10 ]
2014-06-16 02:39:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/views/message.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 02:40:12 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.pm' doesn't exist ( SELECT `pengirim`, `isiPM` FROM `pm` WHERE `username` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:40:12 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.pm' doesn't exist ( SELECT `pengirim`, `isiPM` FROM `pm` WHERE `username` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT `pengiri...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/views/isiPM.php(12): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_IsiPM))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#14 {main}
2014-06-16 02:40:38 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.pm' doesn't exist ( SELECT `pengirim`, `isiPM` FROM `pm` WHERE `username` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 02:40:38 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.pm' doesn't exist ( SELECT `pengirim`, `isiPM` FROM `pm` WHERE `username` = 'opel' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT `pengiri...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/views/isiPM.php(12): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_IsiPM))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#14 {main}
2014-06-16 02:42:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/views/message.php [ 7 ]
2014-06-16 02:42:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/views/message.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 02:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL opel/1402816244 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-16 02:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL opel/1402816244 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-16 02:58:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: comment_table ~ APPPATH/classes/model/item.php [ 67 ]
2014-06-16 02:58:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: comment_table ~ APPPATH/classes/model/item.php [ 67 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/model/item.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 67, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/profile.php(19): Model_Item::get_comment('opel', 1402816244)
#2 [internal function]: Controller_Profile->action_index()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-16 03:00:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: comment_table ~ APPPATH/classes/model/item.php [ 67 ]
2014-06-16 03:00:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: comment_table ~ APPPATH/classes/model/item.php [ 67 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/model/item.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 67, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/profile.php(19): Model_Item::get_comment('opel', 1402816244)
#2 [internal function]: Controller_Profile->action_index()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-16 03:00:45 --- ERROR: ErrorException [ 8 ]: Undefined index: harga ~ APPPATH/views/item.php [ 4 ]
2014-06-16 03:00:45 --- STRACE: ErrorException [ 8 ]: Undefined index: harga ~ APPPATH/views/item.php [ 4 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/item.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-16 03:00:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 03:00:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 03:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_Gumball.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 03:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_Gumball.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 03:01:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Item::addComment() ~ APPPATH/classes/controller/upload.php [ 42 ]
2014-06-16 03:01:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Item::addComment() ~ APPPATH/classes/controller/upload.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:01:54 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/upload.php [ 42 ]
2014-06-16 03:01:54 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/upload.php [ 42 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(42): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 42, Array)
#1 [internal function]: Controller_Upload->action_upload_comment()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 03:25:23 --- ERROR: ErrorException [ 1 ]: Call to undefined function isarray() ~ APPPATH/views/browse.php [ 4 ]
2014-06-16 03:25:23 --- STRACE: ErrorException [ 1 ]: Call to undefined function isarray() ~ APPPATH/views/browse.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:26:08 --- ERROR: ErrorException [ 8 ]: Undefined index: reenter_password ~ APPPATH/classes/controller/form.php [ 10 ]
2014-06-16 03:26:08 --- STRACE: ErrorException [ 8 ]: Undefined index: reenter_password ~ APPPATH/classes/controller/form.php [ 10 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(10): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 10, Array)
#1 [internal function]: Controller_Form->action_sign_up()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 03:36:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/browse.php [ 7 ]
2014-06-16 03:36:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/controller/browse.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:37:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/browse.php [ 9 ]
2014-06-16 03:37:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/browse.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:44:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/message/opel2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-16 03:44:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/message/opel2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-16 03:44:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/message.php [ 18 ]
2014-06-16 03:44:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/message.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 03:44:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/message.php [ 18 ]
2014-06-16 03:44:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/message.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 04:02:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload_itemupload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-16 04:02:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload_itemupload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-16 04:02:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload_itemupload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-16 04:02:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload_itemupload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-16 04:02:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploadupload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-16 04:02:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploadupload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-16 04:03:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-16 04:03:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-16 04:04:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-16 04:04:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-16 04:04:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-16 04:04:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-16 04:04:48 --- ERROR: ErrorException [ 8 ]: Undefined index: category ~ APPPATH/classes/controller/wishlist.php [ 16 ]
2014-06-16 04:04:48 --- STRACE: ErrorException [ 8 ]: Undefined index: category ~ APPPATH/classes/controller/wishlist.php [ 16 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 16, Array)
#1 [internal function]: Controller_Wishlist->action_upload_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:07:30 --- ERROR: ErrorException [ 8 ]: Undefined index: category ~ APPPATH/classes/controller/wishlist.php [ 16 ]
2014-06-16 04:07:30 --- STRACE: ErrorException [ 8 ]: Undefined index: category ~ APPPATH/classes/controller/wishlist.php [ 16 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 16, Array)
#1 [internal function]: Controller_Wishlist->action_upload_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:09:22 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 21 ]
2014-06-16 04:09:22 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 21 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 21, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:13:35 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 21 ]
2014-06-16 04:13:35 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 21 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 21, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:14:04 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 21 ]
2014-06-16 04:14:04 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 21 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 21, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:15:29 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 21 ]
2014-06-16 04:15:29 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 21 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 21, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:16:39 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 21 ]
2014-06-16 04:16:39 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 21 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 21, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:18:15 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:18:15 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:18:57 --- ERROR: ErrorException [ 8 ]: Undefined index: username-wish ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:18:57 --- STRACE: ErrorException [ 8 ]: Undefined index: username-wish ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:19:09 --- ERROR: ErrorException [ 8 ]: Undefined index: username-wish ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:19:09 --- STRACE: ErrorException [ 8 ]: Undefined index: username-wish ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:21:04 --- ERROR: ErrorException [ 8 ]: Undefined index: username-wish ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:21:04 --- STRACE: ErrorException [ 8 ]: Undefined index: username-wish ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:23:49 --- ERROR: ErrorException [ 8 ]: Undefined index: username-wish ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:23:49 --- STRACE: ErrorException [ 8 ]: Undefined index: username-wish ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:24:31 --- ERROR: ErrorException [ 8 ]: Undefined index: username-wish ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:24:31 --- STRACE: ErrorException [ 8 ]: Undefined index: username-wish ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:26:43 --- ERROR: ErrorException [ 8 ]: Undefined index: username-wish ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:26:43 --- STRACE: ErrorException [ 8 ]: Undefined index: username-wish ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:27:07 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:27:07 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:28:39 --- ERROR: ErrorException [ 8 ]: Undefined index: grant ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:28:39 --- STRACE: ErrorException [ 8 ]: Undefined index: grant ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:28:56 --- ERROR: ErrorException [ 8 ]: Undefined index: submit ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:28:56 --- STRACE: ErrorException [ 8 ]: Undefined index: submit ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:29:40 --- ERROR: ErrorException [ 8 ]: Undefined index: username-grant ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:29:40 --- STRACE: ErrorException [ 8 ]: Undefined index: username-grant ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:31:19 --- ERROR: ErrorException [ 8 ]: Undefined index: username-grant ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:31:19 --- STRACE: ErrorException [ 8 ]: Undefined index: username-grant ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:36:22 --- ERROR: ErrorException [ 8 ]: Undefined index: username-grant ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:36:22 --- STRACE: ErrorException [ 8 ]: Undefined index: username-grant ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:37:55 --- ERROR: ErrorException [ 8 ]: Undefined index: username-grant ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:37:55 --- STRACE: ErrorException [ 8 ]: Undefined index: username-grant ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:40:51 --- ERROR: ErrorException [ 8 ]: Undefined index: username-grant ~ APPPATH/classes/controller/wishlist.php [ 22 ]
2014-06-16 04:40:51 --- STRACE: ErrorException [ 8 ]: Undefined index: username-grant ~ APPPATH/classes/controller/wishlist.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 04:50:07 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 21 ]
2014-06-16 04:50:07 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/wishlist.php [ 21 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/wishlist.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 21, Array)
#1 [internal function]: Controller_Wishlist->action_grant_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Wishlist))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 10:13:20 --- ERROR: ErrorException [ 8 ]: Undefined index: level ~ APPPATH/views/profile.php [ 13 ]
2014-06-16 10:13:20 --- STRACE: ErrorException [ 8 ]: Undefined index: level ~ APPPATH/views/profile.php [ 13 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/profile.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 13, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-16 10:13:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/rate/opel/5 ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-16 10:13:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/rate/opel/5 ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-16 10:14:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH/classes/controller/rate.php [ 8 ]
2014-06-16 10:14:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH/classes/controller/rate.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 10:14:49 --- ERROR: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/classes/controller/rate.php [ 8 ]
2014-06-16 10:14:49 --- STRACE: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/classes/controller/rate.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 10:18:52 --- ERROR: ErrorException [ 8 ]: Undefined index: level ~ APPPATH/views/profile.php [ 13 ]
2014-06-16 10:18:52 --- STRACE: ErrorException [ 8 ]: Undefined index: level ~ APPPATH/views/profile.php [ 13 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/profile.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 13, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-16 10:28:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting ',' or ';' ~ APPPATH/views/profile.php [ 17 ]
2014-06-16 10:28:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting ',' or ';' ~ APPPATH/views/profile.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 10:33:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/controller/profile.php [ 24 ]
2014-06-16 10:33:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/controller/profile.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 10:33:23 --- ERROR: ErrorException [ 8 ]: Undefined index: level ~ APPPATH/views/update_profile.php [ 25 ]
2014-06-16 10:33:23 --- STRACE: ErrorException [ 8 ]: Undefined index: level ~ APPPATH/views/update_profile.php [ 25 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/update_profile.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 25, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Settings))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-16 11:20:22 --- ERROR: ErrorException [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ APPPATH/classes/model/user.php [ 173 ]
2014-06-16 11:20:22 --- STRACE: ErrorException [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ APPPATH/classes/model/user.php [ 173 ]
--
#0 [internal function]: Kohana_Core::error_handler(8192, 'mysql_connect()...', '/opt/lampp/htdo...', 173, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(173): mysql_connect('localhost', 'root', '')
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(15): Model_User::verification_step('opelhoward@gmai...', 'opel_howard', 'howard')
#3 [internal function]: Controller_Form->action_sign_up()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 11:23:05 --- ERROR: ErrorException [ 8192 ]: mysql_real_escape_string(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ APPPATH/classes/model/user.php [ 174 ]
2014-06-16 11:23:05 --- STRACE: ErrorException [ 8192 ]: mysql_real_escape_string(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ APPPATH/classes/model/user.php [ 174 ]
--
#0 [internal function]: Kohana_Core::error_handler(8192, 'mysql_real_esca...', '/opt/lampp/htdo...', 174, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(174): mysql_real_escape_string('123')
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(15): Model_User::verification_step('123', '123', '123')
#3 [internal function]: Controller_Form->action_sign_up()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 11:44:29 --- ERROR: Database_Exception [ 1062 ]: [1062] Duplicate entry 'andarias' for key 'PRIMARY' ( INSERT INTO `user` (`username`, `password`, `level 3`, `first_name`, `surname`, `address`, `active`, `email`) VALUES ('andarias', 'andarias', 3, 'anda', 'rias', 'bdg', 0, 'tomoaquino@gmail.com') ) ~ MODPATH\database\classes\kohana\database\mysqli.php [ 182 ]
2014-06-16 11:44:29 --- STRACE: Database_Exception [ 1062 ]: [1062] Duplicate entry 'andarias' for key 'PRIMARY' ( INSERT INTO `user` (`username`, `password`, `level 3`, `first_name`, `surname`, `address`, `active`, `email`) VALUES ('andarias', 'andarias', 3, 'anda', 'rias', 'bdg', 0, 'tomoaquino@gmail.com') ) ~ MODPATH\database\classes\kohana\database\mysqli.php [ 182 ]
--
#0 C:\xampp\htdocs\ClickandBuy\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQLi->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\xampp\htdocs\ClickandBuy\application\classes\model\user.php(69): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\ClickandBuy\application\classes\controller\form.php(14): Model_User::sign_up(Array)
#3 [internal function]: Controller_Form->action_sign_up()
#4 C:\xampp\htdocs\ClickandBuy\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 C:\xampp\htdocs\ClickandBuy\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\ClickandBuy\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\ClickandBuy\index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 11:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL verify was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2014-06-16 11:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL verify was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\ClickandBuy\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\ClickandBuy\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\ClickandBuy\index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-16 12:32:40 --- ERROR: ErrorException [ 8 ]: Undefined index: category ~ APPPATH\classes\controller\browse.php [ 7 ]
2014-06-16 12:32:40 --- STRACE: ErrorException [ 8 ]: Undefined index: category ~ APPPATH\classes\controller\browse.php [ 7 ]
--
#0 C:\xampp\htdocs\ClickandBuy\application\classes\controller\browse.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 7, Array)
#1 [internal function]: Controller_Browse->action_index()
#2 C:\xampp\htdocs\ClickandBuy\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Browse))
#3 C:\xampp\htdocs\ClickandBuy\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\ClickandBuy\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\ClickandBuy\index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 12:33:25 --- ERROR: ErrorException [ 8 ]: Undefined index: category ~ APPPATH\classes\controller\browse.php [ 7 ]
2014-06-16 12:33:25 --- STRACE: ErrorException [ 8 ]: Undefined index: category ~ APPPATH\classes\controller\browse.php [ 7 ]
--
#0 C:\xampp\htdocs\ClickandBuy\application\classes\controller\browse.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 7, Array)
#1 [internal function]: Controller_Browse->action_index()
#2 C:\xampp\htdocs\ClickandBuy\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Browse))
#3 C:\xampp\htdocs\ClickandBuy\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\ClickandBuy\system\classes\kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\ClickandBuy\index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 22:50:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'end' (T_STRING) ~ APPPATH/classes/model/user.php [ 203 ]
2014-06-16 22:50:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'end' (T_STRING) ~ APPPATH/classes/model/user.php [ 203 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-16 22:59:13 --- ERROR: ErrorException [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ APPPATH/views/verify.php [ 2 ]
2014-06-16 22:59:13 --- STRACE: ErrorException [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ APPPATH/views/verify.php [ 2 ]
--
#0 [internal function]: Kohana_Core::error_handler(8192, 'mysql_connect()...', '/opt/lampp/htdo...', 2, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/views/verify.php(2): mysql_connect('localhost', 'root', '')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Verify))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#14 {main}
2014-06-16 23:25:38 --- ERROR: ErrorException [ 2 ]: Missing argument 3 for Model_User::verification_step(), called in /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php on line 15 and defined ~ APPPATH/classes/model/user.php [ 181 ]
2014-06-16 23:25:38 --- STRACE: ErrorException [ 2 ]: Missing argument 3 for Model_User::verification_step(), called in /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php on line 15 and defined ~ APPPATH/classes/model/user.php [ 181 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(181): Kohana_Core::error_handler(2, 'Missing argumen...', '/opt/lampp/htdo...', 181, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(15): Model_User::verification_step('opelhoward@gmai...', '01161aaa0b6d134...')
#2 [internal function]: Controller_Form->action_sign_up()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-16 23:32:23 --- ERROR: ErrorException [ 8 ]: Undefined index: category ~ APPPATH/classes/controller/browse.php [ 7 ]
2014-06-16 23:32:23 --- STRACE: ErrorException [ 8 ]: Undefined index: category ~ APPPATH/classes/controller/browse.php [ 7 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/browse.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 7, Array)
#1 [internal function]: Controller_Browse->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Browse))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-16 23:35:02 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.registrations' doesn't exist ( SELECT * FROM `registrations` WHERE `username` = 'opelhoward' AND `password` = 'howard' AND `active` = 1 ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-16 23:35:02 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.registrations' doesn't exist ( SELECT * FROM `registrations` WHERE `username` = 'opelhoward' AND `password` = 'howard' AND `active` = 1 ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(15): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(31): Model_User::sign_in('opelhoward', 'howard')
#3 [internal function]: Controller_Form->action_sign_in()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-16 23:38:52 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/verify.php [ 3 ]
2014-06-16 23:38:52 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/verify.php [ 3 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/verify.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 3, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Verify))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-16 23:40:24 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/verify.php [ 3 ]
2014-06-16 23:40:24 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/verify.php [ 3 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/verify.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 3, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Verify))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-16 23:40:25 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/verify.php [ 3 ]
2014-06-16 23:40:25 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/verify.php [ 3 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/verify.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 3, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Verify))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-16 23:40:41 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/verify.php [ 3 ]
2014-06-16 23:40:41 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/verify.php [ 3 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/verify.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 3, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Verify))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}