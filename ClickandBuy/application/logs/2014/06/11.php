<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-11 10:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL browse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-11 10:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL browse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-11 10:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL browse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-11 10:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL browse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-11 10:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL browse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-11 10:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL browse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-11 10:52:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL browse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-11 10:52:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL browse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-11 10:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL browse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-11 10:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL browse was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-11 11:09:33 --- ERROR: ErrorException [ 2048 ]: Non-static method Model_Item::get_all() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/browse.php [ 5 ]
2014-06-11 11:09:33 --- STRACE: ErrorException [ 2048 ]: Non-static method Model_Item::get_all() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/browse.php [ 5 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/browse.php(5): Kohana_Core::error_handler(2048, 'Non-static meth...', '/opt/lampp/htdo...', 5, Array)
#1 [internal function]: Controller_Browse->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Browse))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-11 11:09:47 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/item.php [ 25 ]
2014-06-11 11:09:47 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/item.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-11 11:10:09 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'table' ~ APPPATH/classes/model/item.php [ 25 ]
2014-06-11 11:10:09 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'table' ~ APPPATH/classes/model/item.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-11 11:15:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '(' ~ APPPATH/views/browse.php [ 5 ]
2014-06-11 11:15:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '(' ~ APPPATH/views/browse.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-11 11:16:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/browse.php [ 7 ]
2014-06-11 11:16:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/browse.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-11 11:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL data/ini_iphone_bungjpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-11 11:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL data/ini_iphone_bungjpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-11 11:20:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL data/iphonejpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-11 11:20:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL data/iphonejpg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-11 11:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/iphone.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-11 11:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/iphone.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-11 11:21:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/ini_iphone_bung.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-11 11:21:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/ini_iphone_bung.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-11 11:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Opel_data/ini_iphone_bung.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-11 11:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Opel_data/ini_iphone_bung.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-11 11:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Opel_data/iphone.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-11 11:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Opel_data/iphone.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-11 12:06:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-11 12:06:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-11 12:06:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-11 12:06:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-11 12:06:50 --- ERROR: ErrorException [ 8 ]: Undefined index: reenter_password ~ APPPATH/classes/controller/form.php [ 5 ]
2014-06-11 12:06:50 --- STRACE: ErrorException [ 8 ]: Undefined index: reenter_password ~ APPPATH/classes/controller/form.php [ 5 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 5, Array)
#1 [internal function]: Controller_Form->action_signup()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-11 12:11:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-11 12:11:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-11 12:16:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-11 12:16:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-11 12:19:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-11 12:19:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-11 12:20:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-11 12:20:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-11 12:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-11 12:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-11 12:29:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: _password ~ APPPATH/classes/model/user.php [ 36 ]
2014-06-11 12:29:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: _password ~ APPPATH/classes/model/user.php [ 36 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 36, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(6): Model_User::getdata('opel')
#2 [internal function]: Controller_Upload->action_avatar()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}