<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-17 00:14:25 --- ERROR: ErrorException [ 8 ]: Use of undefined constant length - assumed 'length' ~ APPPATH/views/browse.php [ 7 ]
2014-06-17 00:14:25 --- STRACE: ErrorException [ 8 ]: Use of undefined constant length - assumed 'length' ~ APPPATH/views/browse.php [ 7 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/browse.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', '/opt/lampp/htdo...', 7, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Browse))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-17 00:14:47 --- ERROR: ErrorException [ 1 ]: Call to undefined function size() ~ APPPATH/views/browse.php [ 7 ]
2014-06-17 00:14:47 --- STRACE: ErrorException [ 1 ]: Call to undefined function size() ~ APPPATH/views/browse.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-17 00:14:53 --- ERROR: ErrorException [ 1 ]: Call to a member function size() on a non-object ~ APPPATH/views/browse.php [ 7 ]
2014-06-17 00:14:53 --- STRACE: ErrorException [ 1 ]: Call to a member function size() on a non-object ~ APPPATH/views/browse.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-17 00:15:01 --- ERROR: ErrorException [ 1 ]: Call to undefined function size() ~ APPPATH/views/browse.php [ 7 ]
2014-06-17 00:15:01 --- STRACE: ErrorException [ 1 ]: Call to undefined function size() ~ APPPATH/views/browse.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-17 00:17:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/browse.php [ 26 ]
2014-06-17 00:17:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/browse.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-17 00:22:06 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/verify.php [ 14 ]
2014-06-17 00:22:06 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/verify.php [ 14 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/verify.php(14): Kohana_Core::error_handler(8, 'Undefined offse...', '/opt/lampp/htdo...', 14, Array)
#1 [internal function]: Controller_Verify->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Verify))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-17 00:22:14 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/verify.php [ 14 ]
2014-06-17 00:22:14 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/controller/verify.php [ 14 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/verify.php(14): Kohana_Core::error_handler(8, 'Undefined offse...', '/opt/lampp/htdo...', 14, Array)
#1 [internal function]: Controller_Verify->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Verify))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}