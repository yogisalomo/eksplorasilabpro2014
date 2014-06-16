<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-14 11:13:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 11:13:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 11:33:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/user.php [ 43 ]
2014-06-14 11:33:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/user.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 11:33:24 --- ERROR: ErrorException [ 8 ]: Undefined index: item ~ APPPATH/classes/controller/upload.php [ 54 ]
2014-06-14 11:33:24 --- STRACE: ErrorException [ 8 ]: Undefined index: item ~ APPPATH/classes/controller/upload.php [ 54 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(54): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 54, Array)
#1 [internal function]: Controller_Upload->action_upload_wishlist()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-14 11:40:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: _username ~ APPPATH/classes/model/user.php [ 49 ]
2014-06-14 11:40:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: _username ~ APPPATH/classes/model/user.php [ 49 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 49, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(52): Model_User::get_wishlist('opel')
#2 [internal function]: Controller_Upload->action_wishlist()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-14 11:41:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/upload_wishlist.php [ 16 ]
2014-06-14 11:41:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/upload_wishlist.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 11:50:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: countries ~ APPPATH/views/upload_item.php [ 9 ]
2014-06-14 11:50:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: countries ~ APPPATH/views/upload_item.php [ 9 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/upload_item.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 9, Array)
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
2014-06-14 11:50:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: countries ~ APPPATH/views/upload_item.php [ 10 ]
2014-06-14 11:50:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: countries ~ APPPATH/views/upload_item.php [ 10 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/upload_item.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 10, Array)
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
2014-06-14 11:51:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '3' (T_LNUMBER), expecting ')' ~ APPPATH/views/upload_item.php [ 10 ]
2014-06-14 11:51:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '3' (T_LNUMBER), expecting ')' ~ APPPATH/views/upload_item.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 11:51:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: country ~ APPPATH/views/upload_item.php [ 10 ]
2014-06-14 11:51:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: country ~ APPPATH/views/upload_item.php [ 10 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/upload_item.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 10, Array)
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
2014-06-14 12:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL from/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-14 12:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL from/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-14 12:59:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::getdata() ~ APPPATH/classes/controller/profile.php [ 13 ]
2014-06-14 12:59:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::getdata() ~ APPPATH/classes/controller/profile.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 13:04:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::getdata() ~ APPPATH/classes/controller/profile.php [ 13 ]
2014-06-14 13:04:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::getdata() ~ APPPATH/classes/controller/profile.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 13:06:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::getdata() ~ APPPATH/classes/controller/profile.php [ 13 ]
2014-06-14 13:06:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::getdata() ~ APPPATH/classes/controller/profile.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 13:12:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'as' (T_AS) ~ APPPATH/views/template.php [ 12 ]
2014-06-14 13:12:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'as' (T_AS) ~ APPPATH/views/template.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 13:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form/sigin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-14 13:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form/sigin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-14 13:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form/sigin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-14 13:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form/sigin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-14 13:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form/sigin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-14 13:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form/sigin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-14 13:29:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::getdata() ~ APPPATH/classes/controller/profile.php [ 13 ]
2014-06-14 13:29:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::getdata() ~ APPPATH/classes/controller/profile.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 13:43:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::getdata() ~ APPPATH/classes/controller/profile.php [ 13 ]
2014-06-14 13:43:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::getdata() ~ APPPATH/classes/controller/profile.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 13:44:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Item::getAllByUsername() ~ APPPATH/views/profile.php [ 5 ]
2014-06-14 13:44:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Item::getAllByUsername() ~ APPPATH/views/profile.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 13:44:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 13:44:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 13:44:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Item::get_all() ~ APPPATH/views/profile.php [ 5 ]
2014-06-14 13:44:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Item::get_all() ~ APPPATH/views/profile.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 13:45:40 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Model_Item::$table ~ APPPATH/classes/model/item.php [ 22 ]
2014-06-14 13:45:40 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Model_Item::$table ~ APPPATH/classes/model/item.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 13:47:57 --- ERROR: ErrorException [ 1 ]: Call to undefined function is_available() ~ APPPATH/views/profile.php [ 2 ]
2014-06-14 13:47:57 --- STRACE: ErrorException [ 1 ]: Call to undefined function is_available() ~ APPPATH/views/profile.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 13:52:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Item::get_all() ~ APPPATH/views/profile.php [ 5 ]
2014-06-14 13:52:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Item::get_all() ~ APPPATH/views/profile.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 13:55:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH/classes/controller/profile.php [ 12 ]
2014-06-14 13:55:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH/classes/controller/profile.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 13:55:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/classes/controller/profile.php [ 10 ]
2014-06-14 13:55:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH/classes/controller/profile.php [ 10 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/profile.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 10, Array)
#1 [internal function]: Controller_Profile->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Profile))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-14 13:56:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: comment_table ~ APPPATH/classes/model/item.php [ 45 ]
2014-06-14 13:56:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: comment_table ~ APPPATH/classes/model/item.php [ 45 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/model/item.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 45, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/profile.php(12): Model_Item::get_comment('opel', 0)
#2 [internal function]: Controller_Profile->action_index()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-14 13:57:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/controller/profile.php [ 7 ]
2014-06-14 13:57:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/controller/profile.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 13:57:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'unsigned' (T_STRING) ~ APPPATH/classes/controller/profile.php [ 7 ]
2014-06-14 13:57:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'unsigned' (T_STRING) ~ APPPATH/classes/controller/profile.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 14:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL profil was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-14 14:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL profil was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-14 14:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-14 14:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-14 14:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-14 14:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-14 14:51:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-14 14:51:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-14 14:55:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/item was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-14 14:55:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/item was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-14 15:01:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/profile.php [ 27 ]
2014-06-14 15:01:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/profile.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 15:02:04 --- ERROR: View_Exception [ 0 ]: The requested view main_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-14 15:02:04 --- STRACE: View_Exception [ 0 ]: The requested view main_page could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('main_page')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('main_page', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/profile.php(23): Kohana_View::factory('main_page')
#3 [internal function]: Controller_Profile->action_index()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Profile))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-14 15:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/item was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-14 15:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/item was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-14 15:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/item was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-14 15:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/item was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-14 15:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-14 15:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-14 15:13:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Item::isavailable() ~ APPPATH/classes/controller/upload.php [ 16 ]
2014-06-14 15:13:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Item::isavailable() ~ APPPATH/classes/controller/upload.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 15:14:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Item::is_available() ~ APPPATH/classes/controller/upload.php [ 16 ]
2014-06-14 15:14:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Item::is_available() ~ APPPATH/classes/controller/upload.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 15:16:24 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Model_Item::$table ~ APPPATH/classes/model/item.php [ 23 ]
2014-06-14 15:16:24 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Model_Item::$table ~ APPPATH/classes/model/item.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 15:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_1402776997.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 15:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_1402776997.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 15:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_1402776997.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 15:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_1402776997.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 15:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_1402776997.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 15:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_1402776997.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 15:33:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/classes/controller/profile.php [ 23 ]
2014-06-14 15:33:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/classes/controller/profile.php [ 23 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/profile.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 23, Array)
#1 [internal function]: Controller_Profile->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Profile))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-14 15:34:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/classes/controller/profile.php [ 10 ]
2014-06-14 15:34:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/classes/controller/profile.php [ 10 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/profile.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 10, Array)
#1 [internal function]: Controller_Profile->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Profile))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-14 15:47:37 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/main.php [ 6 ]
2014-06-14 15:47:37 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/main.php [ 6 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/main.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 6, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(32): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-14 15:58:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'var' (T_VAR), expecting ';' ~ APPPATH/views/main.php [ 8 ]
2014-06-14 15:58:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'var' (T_VAR), expecting ';' ~ APPPATH/views/main.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 15:59:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '(' ~ APPPATH/views/main.php [ 8 ]
2014-06-14 15:59:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting '(' ~ APPPATH/views/main.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 16:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/star.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/star.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:02:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/star.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:02:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/star.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:04:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ''asdasstar'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/controller/profile.php [ 23 ]
2014-06-14 16:04:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ''asdasstar'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/controller/profile.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 16:04:54 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/template.php [ 41 ]
2014-06-14 16:04:54 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/template.php [ 41 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(41): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-14 16:07:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH/views/template.php [ 41 ]
2014-06-14 16:07:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH/views/template.php [ 41 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-14 16:07:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/views/template.php [ 24 ]
2014-06-14 16:07:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/views/template.php [ 24 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 24, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-14 16:07:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/views/template.php [ 24 ]
2014-06-14 16:07:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/views/template.php [ 24 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 24, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-14 16:07:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/views/template.php [ 24 ]
2014-06-14 16:07:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH/views/template.php [ 24 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 24, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-14 16:08:02 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/template.php [ 41 ]
2014-06-14 16:08:02 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/template.php [ 41 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(41): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-14 16:08:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH/views/template.php [ 41 ]
2014-06-14 16:08:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH/views/template.php [ 41 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-14 16:08:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH/views/template.php [ 41 ]
2014-06-14 16:08:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH/views/template.php [ 41 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 41, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-14 16:09:03 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template.php [ 42 ]
2014-06-14 16:09:03 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template.php [ 42 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(42): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 42, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-14 16:09:04 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template.php [ 42 ]
2014-06-14 16:09:04 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/template.php [ 42 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(42): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 42, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-14 16:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:14:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:14:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:14:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:14:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:14:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:14:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:14:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:14:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:14:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:14:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:14:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:14:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/ahaha.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClickandBuy/media/star.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClickandBuy/media/star.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:17:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClickandBuy/media/image/star.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:17:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClickandBuy/media/image/star.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:17:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClickandBuy/media/image/star.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:17:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClickandBuy/media/image/star.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:17:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClickandBuy/media/image/star.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:17:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ClickandBuy/media/image/star.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:17:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/star.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:17:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/star.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/star.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/image/star.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:19:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/views/main.php [ 9 ]
2014-06-14 16:19:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/views/main.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-14 16:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/media/image/star_high.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/media/image/star_high.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 16:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/media/image/star_high.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-14 16:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: profile/media/image/star_high.png ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-14 22:45:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-14 22:45:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL form/signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-14 22:45:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-14 22:45:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL signup was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}