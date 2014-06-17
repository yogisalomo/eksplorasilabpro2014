<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-07 05:23:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 05:23:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 05:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 05:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 05:35:45 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-07 05:35:45 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/application.php(5): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Application->before()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-07 05:39:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/application.php [ 7 ]
2014-06-07 05:39:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/application.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 05:39:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/application.php [ 7 ]
2014-06-07 05:39:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/application.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 05:42:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/application.php [ 7 ]
2014-06-07 05:42:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/controller/application.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 05:43:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/application.php [ 7 ]
2014-06-07 05:43:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/application.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 05:43:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/application.php [ 7 ]
2014-06-07 05:43:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/application.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 05:43:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/application.php [ 7 ]
2014-06-07 05:43:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/application.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 05:43:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/application.php [ 7 ]
2014-06-07 05:43:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/application.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 05:43:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/classes/controller/application.php [ 7 ]
2014-06-07 05:43:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/classes/controller/application.php [ 7 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/application.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 7, Array)
#1 [internal function]: Controller_Application->before()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 05:44:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/views/template.php [ 3 ]
2014-06-07 05:44:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/views/template.php [ 3 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 3, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/application.php(8): Kohana_View->__toString()
#5 [internal function]: Controller_Application->before()
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#10 {main}
2014-06-07 05:44:05 --- ERROR: View_Exception [ 0 ]: The requested view common/header could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-07 05:44:05 --- STRACE: View_Exception [ 0 ]: The requested view common/header could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('common/header')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('common/header', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(15): Kohana_View::factory('common/header')
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#6 [internal function]: Kohana_Controller_Template->after()
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#11 {main}
2014-06-07 05:45:06 --- ERROR: View_Exception [ 0 ]: The requested view common/header could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-07 05:45:06 --- STRACE: View_Exception [ 0 ]: The requested view common/header could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('common/header')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('common/header', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(9): Kohana_View::factory('common/header')
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/application.php(8): Kohana_View->__toString()
#7 [internal function]: Controller_Application->before()
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#12 {main}
2014-06-07 05:45:06 --- ERROR: View_Exception [ 0 ]: The requested view common/header could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-07 05:45:06 --- STRACE: View_Exception [ 0 ]: The requested view common/header could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('common/header')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('common/header', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(9): Kohana_View::factory('common/header')
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#6 [internal function]: Kohana_Controller_Template->after()
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#11 {main}
2014-06-07 05:45:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 12 ]
2014-06-07 05:45:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 12 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 12, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/application.php(8): Kohana_View->__toString()
#5 [internal function]: Controller_Application->before()
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#10 {main}
2014-06-07 05:46:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 12 ]
2014-06-07 05:46:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 12 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 12, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/application.php(8): Kohana_View->__toString()
#5 [internal function]: Controller_Application->before()
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#10 {main}
2014-06-07 05:46:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 12 ]
2014-06-07 05:46:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/template.php [ 12 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 12, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/application.php(8): Kohana_View->__toString()
#5 [internal function]: Controller_Application->before()
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#10 {main}
2014-06-07 06:53:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/views/template.php [ 11 ]
2014-06-07 06:53:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/views/template.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 06:53:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/views/template.php [ 11 ]
2014-06-07 06:53:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/views/template.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 09:32:24 --- ERROR: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/views/common/header.php [ 19 ]
2014-06-07 09:32:24 --- STRACE: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/views/common/header.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 09:33:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/common/header.php [ 32 ]
2014-06-07 09:33:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/common/header.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 09:34:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting ',' or ';' ~ APPPATH/views/common/header.php [ 32 ]
2014-06-07 09:34:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting ',' or ';' ~ APPPATH/views/common/header.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 09:39:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/common/header.php [ 32 ]
2014-06-07 09:39:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/common/header.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 09:40:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '?>', expecting ':' ~ APPPATH/views/common/header.php [ 32 ]
2014-06-07 09:40:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '?>', expecting ':' ~ APPPATH/views/common/header.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 09:40:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/common/header.php [ 41 ]
2014-06-07 09:40:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/common/header.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 09:42:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/common/header.php [ 22 ]
2014-06-07 09:42:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/common/header.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 09:43:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/common/header.php [ 22 ]
2014-06-07 09:43:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH/views/common/header.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 09:49:58 --- ERROR: View_Exception [ 0 ]: The requested view index.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-07 09:49:58 --- STRACE: View_Exception [ 0 ]: The requested view index.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('index.php')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('index.php', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/welcome.php(7): Kohana_View::factory('index.php')
#3 [internal function]: Controller_Welcome->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 10:04:22 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-07 10:04:22 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('index')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('index', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/welcome.php(7): Kohana_View::factory('index')
#3 [internal function]: Controller_Welcome->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 10:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy/form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 10:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy/form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 10:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy/form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 10:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy/form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 10:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy/form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 10:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy/form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 10:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy/form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 10:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy/form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 10:36:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy/form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 10:36:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy/form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 10:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy/form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 10:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy/form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 10:38:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy/form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 10:38:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy/form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 10:39:03 --- ERROR: View_Exception [ 0 ]: The requested view woohoo could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-07 10:39:03 --- STRACE: View_Exception [ 0 ]: The requested view woohoo could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('woohoo')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('woohoo', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(10): Kohana_View::factory('woohoo')
#3 [internal function]: Controller_Form->action_signup()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 10:39:32 --- ERROR: View_Exception [ 0 ]: The requested view woohoo could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-07 10:39:32 --- STRACE: View_Exception [ 0 ]: The requested view woohoo could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('woohoo')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('woohoo', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(10): Kohana_View::factory('woohoo')
#3 [internal function]: Controller_Form->action_signup()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 10:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/index.php ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-07 10:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: welcome/index.php ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-07 10:51:35 --- ERROR: View_Exception [ 0 ]: The requested view woohoo could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-07 10:51:35 --- STRACE: View_Exception [ 0 ]: The requested view woohoo could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('woohoo')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('woohoo', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(10): Kohana_View::factory('woohoo')
#3 [internal function]: Controller_Form->action_signup()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 10:55:25 --- ERROR: View_Exception [ 0 ]: The requested view woohoo could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-07 10:55:25 --- STRACE: View_Exception [ 0 ]: The requested view woohoo could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('woohoo')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('woohoo', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(10): Kohana_View::factory('woohoo')
#3 [internal function]: Controller_Form->action_signup()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 10:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 10:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 10:55:42 --- ERROR: View_Exception [ 0 ]: The requested view woohoo could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-07 10:55:42 --- STRACE: View_Exception [ 0 ]: The requested view woohoo could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('woohoo')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('woohoo', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(10): Kohana_View::factory('woohoo')
#3 [internal function]: Controller_Form->action_signup()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 11:03:34 --- ERROR: View_Exception [ 0 ]: The requested view woohoo could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-07 11:03:34 --- STRACE: View_Exception [ 0 ]: The requested view woohoo could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('woohoo')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('woohoo', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(6): Kohana_View::factory('woohoo')
#3 [internal function]: Controller_Form->action_signup()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 11:16:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Form::$_table ~ APPPATH/classes/controller/form.php [ 8 ]
2014-06-07 11:16:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Form::$_table ~ APPPATH/classes/controller/form.php [ 8 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 8, Array)
#1 [internal function]: Controller_Form->action_signup()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 11:17:36 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, null given, called in /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php on line 9 and defined ~ MODPATH/database/classes/kohana/database/query/builder/insert.php [ 80 ]
2014-06-07 11:17:36 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, null given, called in /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php on line 9 and defined ~ MODPATH/database/classes/kohana/database/query/builder/insert.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query/builder/insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 80, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(9): Kohana_Database_Query_Builder_Insert->values(NULL, NULL)
#2 [internal function]: Controller_Form->action_signup()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 11:19:10 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/form.php [ 9 ]
2014-06-07 11:19:10 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/form.php [ 9 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 9, Array)
#1 [internal function]: Controller_Form->action_signup()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 11:19:41 --- ERROR: ErrorException [ 8 ]: Undefined index: form-control ~ APPPATH/classes/controller/form.php [ 9 ]
2014-06-07 11:19:41 --- STRACE: ErrorException [ 8 ]: Undefined index: form-control ~ APPPATH/classes/controller/form.php [ 9 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 9, Array)
#1 [internal function]: Controller_Form->action_signup()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 11:22:00 --- ERROR: ErrorException [ 8 ]: Undefined index: form-control ~ APPPATH/classes/controller/form.php [ 9 ]
2014-06-07 11:22:00 --- STRACE: ErrorException [ 8 ]: Undefined index: form-control ~ APPPATH/classes/controller/form.php [ 9 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 9, Array)
#1 [internal function]: Controller_Form->action_signup()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 11:23:07 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php on line 9 and defined ~ MODPATH/database/classes/kohana/database/query/builder/insert.php [ 80 ]
2014-06-07 11:23:07 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php on line 9 and defined ~ MODPATH/database/classes/kohana/database/query/builder/insert.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query/builder/insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 80, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(9): Kohana_Database_Query_Builder_Insert->values('a', 'a')
#2 [internal function]: Controller_Form->action_signup()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 11:23:18 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php on line 9 and defined ~ MODPATH/database/classes/kohana/database/query/builder/insert.php [ 80 ]
2014-06-07 11:23:18 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php on line 9 and defined ~ MODPATH/database/classes/kohana/database/query/builder/insert.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query/builder/insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 80, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(9): Kohana_Database_Query_Builder_Insert->values('aa', 'a')
#2 [internal function]: Controller_Form->action_signup()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 11:24:28 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php on line 9 and defined ~ MODPATH/database/classes/kohana/database/query/builder/insert.php [ 80 ]
2014-06-07 11:24:28 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php on line 9 and defined ~ MODPATH/database/classes/kohana/database/query/builder/insert.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query/builder/insert.php(80): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/opt/lampp/htdo...', 80, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(9): Kohana_Database_Query_Builder_Insert->values('aa', 'a')
#2 [internal function]: Controller_Form->action_signup()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 11:25:37 --- ERROR: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
2014-06-07 11:25:37 --- STRACE: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 11:26:54 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.ClickandBuy' doesn't exist ( INSERT INTO `ClickandBuy` (`username`, `password`) VALUES ('aa', 'a') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-07 11:26:54 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.ClickandBuy' doesn't exist ( INSERT INTO `ClickandBuy` (`username`, `password`) VALUES ('aa', 'a') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(2, 'INSERT INTO `Cl...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(11): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Form->action_signup()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 11:30:49 --- ERROR: Database_Exception [ 1062 ]: [1062] Duplicate entry 'aaaa' for key 'PRIMARY' ( INSERT INTO `user` (`username`, `password`) VALUES ('aaaa', 'aa') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-07 11:30:49 --- STRACE: Database_Exception [ 1062 ]: [1062] Duplicate entry 'aaaa' for key 'PRIMARY' ( INSERT INTO `user` (`username`, `password`) VALUES ('aaaa', 'aa') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(11): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Form->action_signup()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 11:33:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH/classes/controller/form.php [ 6 ]
2014-06-07 11:33:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::redirect() ~ APPPATH/classes/controller/form.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 11:39:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/classes/controller/form.php [ 6 ]
2014-06-07 11:39:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/classes/controller/form.php [ 6 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 6, Array)
#1 [internal function]: Controller_Form->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 11:39:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 11:39:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 11:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 11:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 12:24:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::signup() ~ APPPATH/classes/controller/form.php [ 6 ]
2014-06-07 12:24:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::signup() ~ APPPATH/classes/controller/form.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 12:25:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/form.php [ 6 ]
2014-06-07 12:25:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/controller/form.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 12:25:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::signup() ~ APPPATH/classes/controller/form.php [ 6 ]
2014-06-07 12:25:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::signup() ~ APPPATH/classes/controller/form.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 12:26:34 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/controller/form.php [ 6 ]
2014-06-07 12:26:34 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/controller/form.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 12:27:10 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/user.php [ 13 ]
2014-06-07 12:27:10 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/user.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 12:27:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH/classes/model/user.php [ 13 ]
2014-06-07 12:27:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH/classes/model/user.php [ 13 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 13, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(5): Model_User::signup()
#2 [internal function]: Controller_Form::action_signup()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 12:28:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'table' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH/classes/model/user.php [ 4 ]
2014-06-07 12:28:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'table' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH/classes/model/user.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 12:28:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH/classes/model/user.php [ 13 ]
2014-06-07 12:28:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH/classes/model/user.php [ 13 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 13, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(5): Model_User::signup()
#2 [internal function]: Controller_Form::action_signup()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 12:28:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH/classes/model/user.php [ 13 ]
2014-06-07 12:28:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH/classes/model/user.php [ 13 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 13, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(5): Model_User::signup()
#2 [internal function]: Controller_Form::action_signup()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 12:29:39 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/controller/form.php [ 6 ]
2014-06-07 12:29:39 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/controller/form.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 12:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 12:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 12:30:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 12:30:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 12:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 12:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 12:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 12:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 12:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 12:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 12:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 12:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 12:30:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 12:30:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 12:30:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 12:30:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ClickandBuy was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 12:31:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-07 12:31:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-07 12:37:25 --- ERROR: ErrorException [ 8 ]: Undefined index: reenterpassword ~ APPPATH/classes/controller/form.php [ 5 ]
2014-06-07 12:37:25 --- STRACE: ErrorException [ 8 ]: Undefined index: reenterpassword ~ APPPATH/classes/controller/form.php [ 5 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 5, Array)
#1 [internal function]: Controller_Form->action_signup()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 12:37:35 --- ERROR: ErrorException [ 8 ]: Undefined index: enterpassword ~ APPPATH/classes/controller/form.php [ 5 ]
2014-06-07 12:37:35 --- STRACE: ErrorException [ 8 ]: Undefined index: enterpassword ~ APPPATH/classes/controller/form.php [ 5 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 5, Array)
#1 [internal function]: Controller_Form->action_signup()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 12:45:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/model/user.php [ 20 ]
2014-06-07 12:45:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/model/user.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 12:46:04 --- ERROR: View_Exception [ 0 ]: The requested view welcome.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-07 12:46:04 --- STRACE: View_Exception [ 0 ]: The requested view welcome.php could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('welcome.php')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('welcome.php', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(11): Kohana_View::factory('welcome.php')
#3 [internal function]: Controller_Form->action_signup()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 12:46:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/model/user.php [ 20 ]
2014-06-07 12:46:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/model/user.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 12:49:54 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/model/user.php [ 20 ]
2014-06-07 12:49:54 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/model/user.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 12:50:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/model/user.php [ 23 ]
2014-06-07 12:50:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/model/user.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 12:51:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: _error ~ APPPATH/classes/controller/form.php [ 13 ]
2014-06-07 12:51:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: _error ~ APPPATH/classes/controller/form.php [ 13 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 13, Array)
#1 [internal function]: Controller_Form->action_signup()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 12:52:37 --- ERROR: Database_Exception [ 1062 ]: [1062] Duplicate entry 'Howard' for key 'PRIMARY' ( INSERT INTO `user` (`username`, `password`) VALUES ('Howard', 'opel') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-07 12:52:37 --- STRACE: Database_Exception [ 1062 ]: [1062] Duplicate entry 'Howard' for key 'PRIMARY' ( INSERT INTO `user` (`username`, `password`) VALUES ('Howard', 'opel') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(17): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(9): Model_User::signup('Howard', 'opel')
#3 [internal function]: Controller_Form->action_signup()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 12:53:55 --- ERROR: Database_Exception [ 1062 ]: [1062] Duplicate entry 'Howard' for key 'PRIMARY' ( INSERT INTO `user` (`username`, `password`) VALUES ('Howard', 'opel') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-07 12:53:55 --- STRACE: Database_Exception [ 1062 ]: [1062] Duplicate entry 'Howard' for key 'PRIMARY' ( INSERT INTO `user` (`username`, `password`) VALUES ('Howard', 'opel') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(17): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(9): Model_User::signup('Howard', 'opel')
#3 [internal function]: Controller_Form->action_signup()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 12:55:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/model/user.php [ 29 ]
2014-06-07 12:55:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/model/user.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 12:55:34 --- ERROR: Database_Exception [ 1062 ]: [1062] Duplicate entry 'Howard' for key 'PRIMARY' ( INSERT INTO `user` (`username`, `password`) VALUES ('Howard', 'opel') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-07 12:55:34 --- STRACE: Database_Exception [ 1062 ]: [1062] Duplicate entry 'Howard' for key 'PRIMARY' ( INSERT INTO `user` (`username`, `password`) VALUES ('Howard', 'opel') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(17): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(9): Model_User::signup('Howard', 'opel')
#3 [internal function]: Controller_Form->action_signup()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 12:55:52 --- ERROR: Database_Exception [ 1062 ]: [1062] Duplicate entry 'Howard' for key 'PRIMARY' ( INSERT INTO `user` (`username`, `password`) VALUES ('Howard', 'opel') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-07 12:55:52 --- STRACE: Database_Exception [ 1062 ]: [1062] Duplicate entry 'Howard' for key 'PRIMARY' ( INSERT INTO `user` (`username`, `password`) VALUES ('Howard', 'opel') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(17): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(9): Model_User::signup('Howard', 'opel')
#3 [internal function]: Controller_Form->action_signup()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 12:56:42 --- ERROR: Database_Exception [ 1062 ]: [1062] Duplicate entry 'Howard' for key 'PRIMARY' ( INSERT INTO `user` (`username`, `password`) VALUES ('Howard', 'opel') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-07 12:56:42 --- STRACE: Database_Exception [ 1062 ]: [1062] Duplicate entry 'Howard' for key 'PRIMARY' ( INSERT INTO `user` (`username`, `password`) VALUES ('Howard', 'opel') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(2, 'INSERT INTO `us...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(17): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(9): Model_User::signup('Howard', 'opel')
#3 [internal function]: Controller_Form->action_signup()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 13:05:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: exception ~ APPPATH/views/welcome.php [ 7 ]
2014-06-07 13:05:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: exception ~ APPPATH/views/welcome.php [ 7 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/welcome.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 7, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(19): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-07 13:05:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/views/welcome.php [ 7 ]
2014-06-07 13:05:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/views/welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 13:11:30 --- ERROR: ErrorException [ 8 ]: Undefined index: reenter_password ~ APPPATH/classes/controller/form.php [ 5 ]
2014-06-07 13:11:30 --- STRACE: ErrorException [ 8 ]: Undefined index: reenter_password ~ APPPATH/classes/controller/form.php [ 5 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 5, Array)
#1 [internal function]: Controller_Form->action_signup()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 13:12:42 --- ERROR: ErrorException [ 8 ]: Undefined index: reenter_password ~ APPPATH/classes/controller/form.php [ 5 ]
2014-06-07 13:12:42 --- STRACE: ErrorException [ 8 ]: Undefined index: reenter_password ~ APPPATH/classes/controller/form.php [ 5 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 5, Array)
#1 [internal function]: Controller_Form->action_signup()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 13:16:04 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/form.php [ 16 ]
2014-06-07 13:16:04 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/form.php [ 16 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 16, Array)
#1 [internal function]: Controller_Form->action_sigin()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 13:16:31 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/form.php [ 16 ]
2014-06-07 13:16:31 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/form.php [ 16 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 16, Array)
#1 [internal function]: Controller_Form->action_sigin()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 13:16:37 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/form.php [ 16 ]
2014-06-07 13:16:37 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/controller/form.php [ 16 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 16, Array)
#1 [internal function]: Controller_Form->action_sigin()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 13:17:32 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 151 ]
2014-06-07 13:17:32 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 151 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/cookie.php(115): Kohana_Cookie::salt('account', Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(11): Kohana_Cookie::set('account', Array)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(16): Model_User::signin('hihi')
#3 [internal function]: Controller_Form->action_sigin()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 13:18:04 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/kohana/cookie.php [ 157 ]
2014-06-07 13:18:04 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/kohana/cookie.php [ 157 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/cookie.php(157): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 157, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/cookie.php(115): Kohana_Cookie::salt('account', Array)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(11): Kohana_Cookie::set('account', Array)
#3 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(16): Model_User::signin('hihi')
#4 [internal function]: Controller_Form->action_sigin()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-07 13:18:14 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/kohana/cookie.php [ 157 ]
2014-06-07 13:18:14 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/kohana/cookie.php [ 157 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/cookie.php(157): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 157, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/cookie.php(115): Kohana_Cookie::salt('account', Array)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(11): Kohana_Cookie::set('account', Array)
#3 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(16): Model_User::signin('hihi')
#4 [internal function]: Controller_Form->action_sigin()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-07 13:26:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/classes/model/user.php [ 11 ]
2014-06-07 13:26:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/classes/model/user.php [ 11 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 11, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(16): Model_User::signin('hihi')
#2 [internal function]: Controller_Form->action_sigin()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 13:26:41 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/kohana/cookie.php [ 157 ]
2014-06-07 13:26:41 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/kohana/cookie.php [ 157 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/cookie.php(157): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 157, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/cookie.php(115): Kohana_Cookie::salt('username', Array)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(11): Kohana_Cookie::set('username', Array)
#3 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(16): Model_User::signin('hihi')
#4 [internal function]: Controller_Form->action_sigin()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-07 13:26:58 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/user.php [ 12 ]
2014-06-07 13:26:58 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/user.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 13:30:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'form' (T_STRING), expecting ',' or ';' ~ APPPATH/views/common/header.php [ 28 ]
2014-06-07 13:30:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'form' (T_STRING), expecting ',' or ';' ~ APPPATH/views/common/header.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 13:30:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'form' (T_STRING), expecting ',' or ';' ~ APPPATH/views/common/header.php [ 28 ]
2014-06-07 13:30:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'form' (T_STRING), expecting ',' or ';' ~ APPPATH/views/common/header.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 13:32:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: URL ~ APPPATH/views/common/header.php [ 28 ]
2014-06-07 13:32:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: URL ~ APPPATH/views/common/header.php [ 28 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/common/header.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 28, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(16): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-07 13:32:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form/signout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-07 13:32:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form/signout was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 13:46:51 --- ERROR: View_Exception [ 0 ]: The requested view upload could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-07 13:46:51 --- STRACE: View_Exception [ 0 ]: The requested view upload could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('upload')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('upload', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(7): Kohana_View::factory('upload')
#3 [internal function]: Controller_Upload->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-07 13:59:24 --- ERROR: ErrorException [ 8 ]: Undefined index: image_location ~ APPPATH/classes/controller/upload.php [ 10 ]
2014-06-07 13:59:24 --- STRACE: ErrorException [ 8 ]: Undefined index: image_location ~ APPPATH/classes/controller/upload.php [ 10 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(10): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 10, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:00:38 --- ERROR: ErrorException [ 8 ]: Undefined index: image_location ~ APPPATH/classes/controller/upload.php [ 10 ]
2014-06-07 14:00:38 --- STRACE: ErrorException [ 8 ]: Undefined index: image_location ~ APPPATH/classes/controller/upload.php [ 10 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(10): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 10, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:01:50 --- ERROR: ErrorException [ 8 ]: Undefined index: image_location ~ APPPATH/classes/controller/upload.php [ 10 ]
2014-06-07 14:01:50 --- STRACE: ErrorException [ 8 ]: Undefined index: image_location ~ APPPATH/classes/controller/upload.php [ 10 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(10): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 10, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:03:58 --- ERROR: ErrorException [ 8 ]: Undefined index: image_location ~ APPPATH/classes/controller/upload.php [ 11 ]
2014-06-07 14:03:58 --- STRACE: ErrorException [ 8 ]: Undefined index: image_location ~ APPPATH/classes/controller/upload.php [ 11 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 11, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:05:11 --- ERROR: ErrorException [ 8 ]: Undefined index: image_location ~ APPPATH/classes/controller/upload.php [ 11 ]
2014-06-07 14:05:11 --- STRACE: ErrorException [ 8 ]: Undefined index: image_location ~ APPPATH/classes/controller/upload.php [ 11 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 11, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:05:57 --- ERROR: ErrorException [ 8 ]: Undefined index: image_location ~ APPPATH/classes/controller/upload.php [ 11 ]
2014-06-07 14:05:57 --- STRACE: ErrorException [ 8 ]: Undefined index: image_location ~ APPPATH/classes/controller/upload.php [ 11 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 11, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:07:36 --- ERROR: ErrorException [ 8 ]: Undefined index: image_location ~ APPPATH/classes/controller/upload.php [ 11 ]
2014-06-07 14:07:36 --- STRACE: ErrorException [ 8 ]: Undefined index: image_location ~ APPPATH/classes/controller/upload.php [ 11 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 11, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:10:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH/views/upload.php [ 6 ]
2014-06-07 14:10:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH/views/upload.php [ 6 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/upload.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 6, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(19): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Upload))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-07 14:11:54 --- ERROR: ErrorException [ 1 ]: Call to undefined method View::content() ~ APPPATH/classes/controller/upload.php [ 7 ]
2014-06-07 14:11:54 --- STRACE: ErrorException [ 1 ]: Call to undefined method View::content() ~ APPPATH/classes/controller/upload.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 14:16:38 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 28 ]
2014-06-07 14:16:38 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 28 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(28): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 28, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:17:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Upload::_save_image() ~ APPPATH/classes/controller/upload.php [ 18 ]
2014-06-07 14:17:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Upload::_save_image() ~ APPPATH/classes/controller/upload.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 14:17:45 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/upload.php [ 18 ]
2014-06-07 14:17:45 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/upload.php [ 18 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(18): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 18, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:17:52 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/upload.php [ 18 ]
2014-06-07 14:17:52 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/controller/upload.php [ 18 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(18): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 18, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:18:55 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 30 ]
2014-06-07 14:18:55 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 30 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(30): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 30, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:19:32 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 30 ]
2014-06-07 14:19:32 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 30 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(30): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 30, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:19:36 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 30 ]
2014-06-07 14:19:36 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 30 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(30): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 30, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:22:44 --- ERROR: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/upload.php [ 18 ]
2014-06-07 14:22:44 --- STRACE: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/upload.php [ 18 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 18, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:22:55 --- ERROR: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/upload.php [ 18 ]
2014-06-07 14:22:55 --- STRACE: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/upload.php [ 18 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 18, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:23:04 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 29 ]
2014-06-07 14:23:04 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 29 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(29): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 29, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:24:04 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 29 ]
2014-06-07 14:24:04 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 29 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(29): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 29, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 14:27:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 14:27:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 14:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL avatar/upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 14:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL avatar/upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 14:29:30 --- ERROR: Kohana_Exception [ 0 ]: Directory DOCROOT/uploads/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 14:29:30 --- STRACE: Kohana_Exception [ 0 ]: Directory DOCROOT/uploads/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/avatar.php(48): Kohana_Upload::save(Array, NULL, '/opt/lampp/htdo...')
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/avatar.php(21): Controller_Avatar->_save_image(Array)
#2 [internal function]: Controller_Avatar->action_upload()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 14:31:42 --- ERROR: Kohana_Exception [ 0 ]: Directory DOCROOT/uploads/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 14:31:42 --- STRACE: Kohana_Exception [ 0 ]: Directory DOCROOT/uploads/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/avatar.php(48): Kohana_Upload::save(Array, NULL, '/opt/lampp/htdo...')
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/avatar.php(21): Controller_Avatar->_save_image(Array)
#2 [internal function]: Controller_Avatar->action_upload()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Avatar))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-07 22:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-07 22:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-07 22:47:08 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 7 ]
2014-06-07 22:47:08 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 7 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 7, Array)
#1 [internal function]: Controller_Upload->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 22:51:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH/classes/controller/upload.php [ 32 ]
2014-06-07 22:51:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH/classes/controller/upload.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-07 22:51:59 --- ERROR: Kohana_Exception [ 0 ]: Directory media/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 22:51:59 --- STRACE: Kohana_Exception [ 0 ]: Directory media/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(16): Kohana_Upload::save(Array, NULL, 'media/')
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 22:52:35 --- ERROR: Kohana_Exception [ 0 ]: Directory media/image/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 22:52:35 --- STRACE: Kohana_Exception [ 0 ]: Directory media/image/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(16): Kohana_Upload::save(Array, NULL, 'media/image/')
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 22:53:09 --- ERROR: Kohana_Exception [ 0 ]: Directory /ClickandBuy/media/image/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 22:53:09 --- STRACE: Kohana_Exception [ 0 ]: Directory /ClickandBuy/media/image/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(16): Kohana_Upload::save(Array, NULL, '/ClickandBuy/me...')
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 22:53:47 --- ERROR: Kohana_Exception [ 0 ]: Directory /ClickandBuy/media/image/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 22:53:47 --- STRACE: Kohana_Exception [ 0 ]: Directory /ClickandBuy/media/image/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(16): Kohana_Upload::save(Array, NULL, '/ClickandBuy/me...')
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 22:54:09 --- ERROR: Kohana_Exception [ 0 ]: Directory /ClickandBuy/media/image/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 22:54:09 --- STRACE: Kohana_Exception [ 0 ]: Directory /ClickandBuy/media/image/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(16): Kohana_Upload::save(Array, NULL, '/ClickandBuy/me...')
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 22:54:16 --- ERROR: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 22:54:16 --- STRACE: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(16): Kohana_Upload::save(Array, '/opt/lampp/htdo...')
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 22:54:54 --- ERROR: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 22:54:54 --- STRACE: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(16): Kohana_Upload::save(Array, '/opt/lampp/htdo...')
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 22:56:02 --- ERROR: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 22:56:02 --- STRACE: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(16): Kohana_Upload::save(Array, '/opt/lampp/htdo...')
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 22:57:08 --- ERROR: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 22:57:08 --- STRACE: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(16): Kohana_Upload::save(Array, '/opt/lampp/htdo...')
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 22:57:48 --- ERROR: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 22:57:48 --- STRACE: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(16): Kohana_Upload::save(Array, 'DOCROOT')
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 22:58:25 --- ERROR: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 22:58:25 --- STRACE: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(16): Kohana_Upload::save(Array, NULL)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 22:59:02 --- ERROR: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 22:59:02 --- STRACE: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(15): Kohana_Upload::save(Array, NULL)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 22:59:28 --- ERROR: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 22:59:28 --- STRACE: Kohana_Exception [ 0 ]: Directory upload must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(15): Kohana_Upload::save(Array, '/opt/lampp/htdo...')
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 23:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/opt/lampp/htdocs/ClickandBuy/media/image/1 ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-07 23:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/opt/lampp/htdocs/ClickandBuy/media/image/1 ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-07 23:06:38 --- ERROR: Kohana_Exception [ 0 ]: Directory data/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-07 23:06:38 --- STRACE: Kohana_Exception [ 0 ]: Directory data/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(15): Kohana_Upload::save(Array, 'hihijpg', 'data/', 511)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-07 23:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/opt/lampp/htdocs/ClickandBuy/data/hihijpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-07 23:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploads/opt/lampp/htdocs/ClickandBuy/data/hihijpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}