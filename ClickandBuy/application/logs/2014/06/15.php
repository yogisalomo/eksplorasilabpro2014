<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-15 00:02:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/form.php [ 12 ]
2014-06-15 00:02:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/form.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 00:03:00 --- ERROR: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/form.php [ 22 ]
2014-06-15 00:03:00 --- STRACE: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/controller/form.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Form->action_sign_up()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-15 00:06:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/form.php [ 13 ]
2014-06-15 00:06:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/form.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 00:06:38 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/sign_up.php [ 3 ]
2014-06-15 00:06:38 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/sign_up.php [ 3 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/sign_up.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', '/opt/lampp/htdo...', 3, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Form))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-15 02:09:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/views/upload_item.php [ 5 ]
2014-06-15 02:09:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/views/upload_item.php [ 5 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/upload_item.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 5, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Upload))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-15 02:17:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/views/upload_item.php [ 5 ]
2014-06-15 02:17:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/views/upload_item.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 02:17:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-15 02:17:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 02:17:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-15 02:17:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 02:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-15 02:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 02:18:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-15 02:18:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 02:18:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/views/upload_item.php [ 6 ]
2014-06-15 02:18:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/views/upload_item.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 02:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-15 02:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 02:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-15 02:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 02:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-15 02:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 02:23:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-15 02:23:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 02:23:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-15 02:23:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 02:23:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-15 02:23:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 02:23:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-15 02:23:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/category.js ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 02:57:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/views/upload_wishlist.php [ 9 ]
2014-06-15 02:57:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/views/upload_wishlist.php [ 9 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/upload_wishlist.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 9, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Wishlist))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-15 03:15:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-15 03:15:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-15 03:15:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-15 03:15:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload_wishlist was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-15 03:17:30 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, string given, called in /opt/lampp/htdocs/ClickandBuy/application/views/upload_item.php on line 4 and defined ~ SYSPATH/classes/kohana/form.php [ 252 ]
2014-06-15 03:17:30 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, string given, called in /opt/lampp/htdocs/ClickandBuy/application/views/upload_item.php on line 4 and defined ~ SYSPATH/classes/kohana/form.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/opt/lampp/htdo...', 252, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/views/upload_item.php(4): Kohana_Form::select('wishlist', 'Hello Kitty - 3...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#8 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Upload))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#14 {main}
2014-06-15 03:24:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: wishlist_option ~ APPPATH/classes/controller/upload.php [ 16 ]
2014-06-15 03:24:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: wishlist_option ~ APPPATH/classes/controller/upload.php [ 16 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 16, Array)
#1 [internal function]: Controller_Upload->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-15 03:27:47 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/controller/upload.php [ 11 ]
2014-06-15 03:27:47 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/controller/upload.php [ 11 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(11): Kohana_Core::error_handler(2, 'Illegal offset ...', '/opt/lampp/htdo...', 11, Array)
#1 [internal function]: Controller_Upload->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-15 03:29:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: wishlist_option ~ APPPATH/classes/controller/upload.php [ 18 ]
2014-06-15 03:29:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: wishlist_option ~ APPPATH/classes/controller/upload.php [ 18 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 18, Array)
#1 [internal function]: Controller_Upload->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-15 03:33:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/views/upload_item.php [ 5 ]
2014-06-15 03:33:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/views/upload_item.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 03:37:02 --- ERROR: ErrorException [ 8 ]: Undefined index: itessm ~ APPPATH/views/upload_item.php [ 8 ]
2014-06-15 03:37:02 --- STRACE: ErrorException [ 8 ]: Undefined index: itessm ~ APPPATH/views/upload_item.php [ 8 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/upload_item.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 8, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Upload))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-15 03:40:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_Gumball.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-15 03:40:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_Gumball.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 03:40:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_Gumball.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-15 03:40:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_Gumball.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 03:40:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_Gumball.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-15 03:40:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_Gumball.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-15 09:31:43 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/upload_item.php [ 17 ]
2014-06-15 09:31:43 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/upload_item.php [ 17 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/upload_item.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 17, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Upload))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-15 09:31:55 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/upload_item.php [ 17 ]
2014-06-15 09:31:55 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/upload_item.php [ 17 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/upload_item.php(17): Kohana_Core::error_handler(8, 'Array to string...', '/opt/lampp/htdo...', 17, Array)
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /opt/lampp/htdocs/ClickandBuy/application/views/template.php(33): Kohana_View->__toString()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(61): include('/opt/lampp/htdo...')
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(343): Kohana_View::capture('/opt/lampp/htdo...', Array)
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Upload))
#10 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#13 {main}
2014-06-15 09:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-15 09:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL settings was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-15 09:43:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::getdata() ~ APPPATH/classes/controller/settings.php [ 7 ]
2014-06-15 09:43:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::getdata() ~ APPPATH/classes/controller/settings.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 09:47:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/views/update_profile.php [ 11 ]
2014-06-15 09:47:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/views/update_profile.php [ 11 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/update_profile.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 11, Array)
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
2014-06-15 09:53:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/views/update_profile.php [ 5 ]
2014-06-15 09:53:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH/views/update_profile.php [ 5 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/update_profile.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 5, Array)
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
2014-06-15 09:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-15 09:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-15 09:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-15 09:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-15 10:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-15 10:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-15 10:01:14 --- ERROR: View_Exception [ 0 ]: The requested view upload could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2014-06-15 10:01:14 --- STRACE: View_Exception [ 0 ]: The requested view upload could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(137): Kohana_View->set_filename('upload')
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/view.php(30): Kohana_View->__construct('upload', NULL)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/settings.php(13): Kohana_View::factory('upload')
#3 [internal function]: Controller_Settings->action_upload_settings()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Settings))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-15 10:01:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/update_profile.php [ 5 ]
2014-06-15 10:01:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/update_profile.php [ 5 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/update_profile.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 5, Array)
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
2014-06-15 10:02:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/update_profile.php [ 5 ]
2014-06-15 10:02:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/update_profile.php [ 5 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/update_profile.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 5, Array)
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
2014-06-15 10:19:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: tes ~ APPPATH/views/update_profile.php [ 3 ]
2014-06-15 10:19:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: tes ~ APPPATH/views/update_profile.php [ 3 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/views/update_profile.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 3, Array)
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
2014-06-15 10:25:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'isset' (T_ISSET), expecting '(' ~ APPPATH/views/update_profile.php [ 2 ]
2014-06-15 10:25:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'isset' (T_ISSET), expecting '(' ~ APPPATH/views/update_profile.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 10:43:57 --- ERROR: ErrorException [ 8 ]: Undefined index: reenter_password ~ APPPATH/classes/controller/settings.php [ 15 ]
2014-06-15 10:43:57 --- STRACE: ErrorException [ 8 ]: Undefined index: reenter_password ~ APPPATH/classes/controller/settings.php [ 15 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/settings.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 15, Array)
#1 [internal function]: Controller_Settings->action_upload_settings()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Settings))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-15 10:47:26 --- ERROR: ErrorException [ 1 ]: Cannot break/continue 1 level ~ APPPATH/classes/controller/settings.php [ 21 ]
2014-06-15 10:47:26 --- STRACE: ErrorException [ 1 ]: Cannot break/continue 1 level ~ APPPATH/classes/controller/settings.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-15 10:49:37 --- ERROR: ErrorException [ 8 ]: Undefined index: reenter_password ~ APPPATH/classes/controller/settings.php [ 14 ]
2014-06-15 10:49:37 --- STRACE: ErrorException [ 8 ]: Undefined index: reenter_password ~ APPPATH/classes/controller/settings.php [ 14 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/settings.php(14): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 14, Array)
#1 [internal function]: Controller_Settings->action_upload_settings()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Settings))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-15 11:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL message was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-15 11:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL message was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-15 11:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL message was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-15 11:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL message was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-15 11:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL message was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-15 11:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL message was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-15 11:54:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL message/opel2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-15 11:54:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL message/opel2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-15 11:54:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL message/opel2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-15 11:54:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL message/opel2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-15 11:56:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL message/opel2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-15 11:56:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL message/opel2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}