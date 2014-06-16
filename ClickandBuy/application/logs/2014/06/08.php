<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-08 00:30:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/upload.php [ 18 ]
2014-06-08 00:30:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/upload.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-08 00:31:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2014-06-08 00:31:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload/upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#3 {main}
2014-06-08 00:31:50 --- ERROR: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/classes/controller/upload.php [ 22 ]
2014-06-08 00:31:50 --- STRACE: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH/classes/controller/upload.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-08 00:32:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: directory ~ APPPATH/classes/controller/upload.php [ 22 ]
2014-06-08 00:32:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: directory ~ APPPATH/classes/controller/upload.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 00:32:22 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable: /opt/lampp/htdocs/ClickandBuy ~ MODPATH/image/classes/kohana/image.php [ 631 ]
2014-06-08 00:32:22 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable: /opt/lampp/htdocs/ClickandBuy ~ MODPATH/image/classes/kohana/image.php [ 631 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(22): Kohana_Image->save('data/')
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 00:34:24 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable: /opt/lampp/htdocs/ClickandBuy ~ MODPATH/image/classes/kohana/image.php [ 631 ]
2014-06-08 00:34:24 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable: /opt/lampp/htdocs/ClickandBuy ~ MODPATH/image/classes/kohana/image.php [ 631 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(22): Kohana_Image->save('data/')
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 00:34:53 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable: /opt/lampp/htdocs/ClickandBuy ~ MODPATH/image/classes/kohana/image.php [ 631 ]
2014-06-08 00:34:53 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable: /opt/lampp/htdocs/ClickandBuy ~ MODPATH/image/classes/kohana/image.php [ 631 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(22): Kohana_Image->save('/opt/lampp/htdo...')
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 00:35:12 --- ERROR: ErrorException [ 2 ]: imagejpeg(/opt/lampp/htdocs/ClickandBuy/uploads/): failed to open stream: Is a directory ~ MODPATH/image/classes/kohana/image/gd.php [ 551 ]
2014-06-08 00:35:12 --- STRACE: ErrorException [ 2 ]: imagejpeg(/opt/lampp/htdocs/ClickandBuy/uploads/): failed to open stream: Is a directory ~ MODPATH/image/classes/kohana/image/gd.php [ 551 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagejpeg(/opt/...', '/opt/lampp/htdo...', 551, Array)
#1 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image/gd.php(551): imagejpeg(Resource id #73, '/opt/lampp/htdo...', 100)
#2 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image.php(639): Kohana_Image_GD->_do_save('/opt/lampp/htdo...', 100)
#3 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(22): Kohana_Image->save('/opt/lampp/htdo...')
#4 [internal function]: Controller_Upload->action_upload()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-08 00:35:29 --- ERROR: ErrorException [ 2 ]: imagejpeg(/opt/lampp/htdocs/ClickandBuy/data/): failed to open stream: Is a directory ~ MODPATH/image/classes/kohana/image/gd.php [ 551 ]
2014-06-08 00:35:29 --- STRACE: ErrorException [ 2 ]: imagejpeg(/opt/lampp/htdocs/ClickandBuy/data/): failed to open stream: Is a directory ~ MODPATH/image/classes/kohana/image/gd.php [ 551 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'imagejpeg(/opt/...', '/opt/lampp/htdo...', 551, Array)
#1 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image/gd.php(551): imagejpeg(Resource id #73, '/opt/lampp/htdo...', 100)
#2 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image.php(639): Kohana_Image_GD->_do_save('/opt/lampp/htdo...', 100)
#3 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(22): Kohana_Image->save('/opt/lampp/htdo...')
#4 [internal function]: Controller_Upload->action_upload()
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#9 {main}
2014-06-08 00:36:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH/classes/controller/upload.php [ 27 ]
2014-06-08 00:36:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH/classes/controller/upload.php [ 27 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 27, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 00:36:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: error_message ~ APPPATH/classes/controller/upload.php [ 27 ]
2014-06-08 00:36:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: error_message ~ APPPATH/classes/controller/upload.php [ 27 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 27, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 00:40:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH/classes/controller/upload.php [ 23 ]
2014-06-08 00:40:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH/classes/controller/upload.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-08 00:40:38 --- ERROR: Kohana_Exception [ 0 ]: Directory data/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-08 00:40:38 --- STRACE: Kohana_Exception [ 0 ]: Directory data/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(20): Kohana_Upload::save(Array, 'hihi', 'data/', 511)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 00:40:52 --- ERROR: Kohana_Exception [ 0 ]: Directory data/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2014-06-08 00:40:52 --- STRACE: Kohana_Exception [ 0 ]: Directory data/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(20): Kohana_Upload::save(Array, 'hihi', 'data/', 511)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 01:01:32 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2014-06-08 01:01:32 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('hihi.jpg')
#1 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('hihi.jpg')
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(27): Kohana_Image::factory('hihi.jpg')
#3 [internal function]: Controller_Upload->action_upload()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-08 01:02:27 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2014-06-08 01:02:27 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('hihi.jpg')
#1 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('hihi.jpg')
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(27): Kohana_Image::factory('hihi.jpg')
#3 [internal function]: Controller_Upload->action_upload()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-08 01:04:40 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2014-06-08 01:04:40 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('user_icon.png')
#1 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('user_icon.png')
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(27): Kohana_Image::factory('user_icon.png')
#3 [internal function]: Controller_Upload->action_upload()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-08 01:07:16 --- ERROR: ErrorException [ 8 ]: Undefined index: avatar ~ APPPATH/classes/controller/upload.php [ 14 ]
2014-06-08 01:07:16 --- STRACE: ErrorException [ 8 ]: Undefined index: avatar ~ APPPATH/classes/controller/upload.php [ 14 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(14): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 14, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 01:26:50 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 80 ]
2014-06-08 01:26:50 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 80 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(80): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 80, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(45): Controller_Upload->_render_image('data/kitty.jpg', 1000, 1000)
#2 [internal function]: Controller_Upload->action_index()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-08 01:32:00 --- ERROR: ErrorException [ 8 ]: Undefined index: reenter_password ~ APPPATH/classes/controller/form.php [ 5 ]
2014-06-08 01:32:00 --- STRACE: ErrorException [ 8 ]: Undefined index: reenter_password ~ APPPATH/classes/controller/form.php [ 5 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/form.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 5, Array)
#1 [internal function]: Controller_Form->action_signup()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Form))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 01:32:11 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 7 ]
2014-06-08 01:32:11 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 7 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 7, Array)
#1 [internal function]: Controller_Upload->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 01:32:37 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable: /opt/lampp/htdocs/ClickandBuy ~ MODPATH/image/classes/kohana/image.php [ 631 ]
2014-06-08 01:32:37 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable: /opt/lampp/htdocs/ClickandBuy ~ MODPATH/image/classes/kohana/image.php [ 631 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(23): Kohana_Image->save('data/', 511)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 01:33:22 --- ERROR: Kohana_Exception [ 0 ]: Directory must be writable: /opt/lampp/htdocs/ClickandBuy ~ MODPATH/image/classes/kohana/image.php [ 631 ]
2014-06-08 01:33:22 --- STRACE: Kohana_Exception [ 0 ]: Directory must be writable: /opt/lampp/htdocs/ClickandBuy ~ MODPATH/image/classes/kohana/image.php [ 631 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(23): Kohana_Image->save('/opt/lampp/htdo...', 511)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 01:34:05 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 7 ]
2014-06-08 01:34:05 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 7 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 7, Array)
#1 [internal function]: Controller_Upload->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 01:34:19 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 7 ]
2014-06-08 01:34:19 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/controller/upload.php [ 7 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(7): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 7, Array)
#1 [internal function]: Controller_Upload->action_index()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 01:37:04 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support avatar images ~ MODPATH/image/classes/kohana/image/gd.php [ 636 ]
2014-06-08 01:37:04 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support avatar images ~ MODPATH/image/classes/kohana/image/gd.php [ 636 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image/gd.php(548): Kohana_Image_GD->_save_function('avatar', 100)
#1 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image.php(639): Kohana_Image_GD->_do_save('/opt/lampp/htdo...', 100)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(23): Kohana_Image->save('/opt/lampp/htdo...', 511)
#3 [internal function]: Controller_Upload->action_upload()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-08 01:38:46 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support ico images ~ MODPATH/image/classes/kohana/image/gd.php [ 636 ]
2014-06-08 01:38:46 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support ico images ~ MODPATH/image/classes/kohana/image/gd.php [ 636 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image/gd.php(548): Kohana_Image_GD->_save_function('ico', 100)
#1 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image.php(639): Kohana_Image_GD->_do_save('/opt/lampp/htdo...', 100)
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(23): Kohana_Image->save('/opt/lampp/htdo...', 511)
#3 [internal function]: Controller_Upload->action_upload()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-08 01:43:47 --- ERROR: ErrorException [ 2048 ]: Non-static method Model_User::avatar() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/upload.php [ 22 ]
2014-06-08 01:43:47 --- STRACE: ErrorException [ 2048 ]: Non-static method Model_User::avatar() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/upload.php [ 22 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(22): Kohana_Core::error_handler(2048, 'Non-static meth...', '/opt/lampp/htdo...', 22, Array)
#1 [internal function]: Controller_Upload->action_upload()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 01:44:15 --- ERROR: ErrorException [ 2 ]: file_get_contents(hihi): failed to open stream: No such file or directory ~ APPPATH/classes/model/user.php [ 10 ]
2014-06-08 01:44:15 --- STRACE: ErrorException [ 2 ]: file_get_contents(hihi): failed to open stream: No such file or directory ~ APPPATH/classes/model/user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/opt/lampp/htdo...', 10, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(10): file_get_contents('hihi')
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(22): Model_User::avatar()
#3 [internal function]: Controller_Upload->action_upload()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-08 01:44:37 --- ERROR: ErrorException [ 2 ]: file_get_contents(hihi): failed to open stream: No such file or directory ~ APPPATH/classes/model/user.php [ 10 ]
2014-06-08 01:44:37 --- STRACE: ErrorException [ 2 ]: file_get_contents(hihi): failed to open stream: No such file or directory ~ APPPATH/classes/model/user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/opt/lampp/htdo...', 10, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(10): file_get_contents('hihi')
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(22): Model_User::avatar()
#3 [internal function]: Controller_Upload->action_upload()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-08 01:44:48 --- ERROR: ErrorException [ 2 ]: file_get_contents(hihi): failed to open stream: No such file or directory ~ APPPATH/classes/model/user.php [ 10 ]
2014-06-08 01:44:48 --- STRACE: ErrorException [ 2 ]: file_get_contents(hihi): failed to open stream: No such file or directory ~ APPPATH/classes/model/user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/opt/lampp/htdo...', 10, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(10): file_get_contents('hihi')
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(22): Model_User::avatar()
#3 [internal function]: Controller_Upload->action_upload()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-08 01:45:30 --- ERROR: ErrorException [ 2 ]: file_get_contents(hihi): failed to open stream: No such file or directory ~ APPPATH/classes/model/user.php [ 10 ]
2014-06-08 01:45:30 --- STRACE: ErrorException [ 2 ]: file_get_contents(hihi): failed to open stream: No such file or directory ~ APPPATH/classes/model/user.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/opt/lampp/htdo...', 10, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(10): file_get_contents('hihi')
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(22): Model_User::avatar()
#3 [internal function]: Controller_Upload->action_upload()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-08 01:45:47 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/user.php [ 13 ]
2014-06-08 01:45:47 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/user.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-08 01:47:35 --- ERROR: ErrorException [ 1 ]: Call to undefined function avatar() ~ APPPATH/classes/controller/upload.php [ 22 ]
2014-06-08 01:47:35 --- STRACE: ErrorException [ 1 ]: Call to undefined function avatar() ~ APPPATH/classes/controller/upload.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-08 01:47:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_User::$response ~ APPPATH/classes/model/user.php [ 13 ]
2014-06-08 01:47:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_User::$response ~ APPPATH/classes/model/user.php [ 13 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/model/user.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/opt/lampp/htdo...', 13, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(22): Model_User->avatar()
#2 [internal function]: Controller_Upload->action_upload()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-08 01:48:33 --- ERROR: ErrorException [ 2 ]: filemtime(): stat failed for hihi ~ APPPATH/classes/controller/upload.php [ 32 ]
2014-06-08 01:48:33 --- STRACE: ErrorException [ 2 ]: filemtime(): stat failed for hihi ~ APPPATH/classes/controller/upload.php [ 32 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', '/opt/lampp/htdo...', 32, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(32): filemtime('hihi')
#2 [internal function]: Controller_Upload->action_upload()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-08 01:48:48 --- ERROR: ErrorException [ 2 ]: filemtime(): stat failed for hihi ~ APPPATH/classes/controller/upload.php [ 32 ]
2014-06-08 01:48:48 --- STRACE: ErrorException [ 2 ]: filemtime(): stat failed for hihi ~ APPPATH/classes/controller/upload.php [ 32 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', '/opt/lampp/htdo...', 32, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(32): filemtime('hihi')
#2 [internal function]: Controller_Upload->action_upload()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-08 01:48:52 --- ERROR: ErrorException [ 2 ]: filemtime(): stat failed for hihi ~ APPPATH/classes/controller/upload.php [ 32 ]
2014-06-08 01:48:52 --- STRACE: ErrorException [ 2 ]: filemtime(): stat failed for hihi ~ APPPATH/classes/controller/upload.php [ 32 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', '/opt/lampp/htdo...', 32, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(32): filemtime('hihi')
#2 [internal function]: Controller_Upload->action_upload()
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#7 {main}
2014-06-08 01:49:03 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
2014-06-08 01:49:03 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 107 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image/gd.php(91): Kohana_Image->__construct('hihi')
#1 /opt/lampp/htdocs/ClickandBuy/modules/image/classes/kohana/image.php(54): Kohana_Image_GD->__construct('hihi')
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(43): Kohana_Image::factory('hihi')
#3 [internal function]: Controller_Upload->action_upload()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-08 01:53:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Response::redirect() ~ APPPATH/classes/controller/upload.php [ 22 ]
2014-06-08 01:53:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Response::redirect() ~ APPPATH/classes/controller/upload.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-08 02:07:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/upload.php [ 22 ]
2014-06-08 02:07:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/upload.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-08 02:35:04 --- ERROR: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/upload.php [ 32 ]
2014-06-08 02:35:04 --- STRACE: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/upload.php [ 32 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 32, Array)
#1 [internal function]: Controller_Upload->action_upload_item()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 02:35:19 --- ERROR: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/upload.php [ 32 ]
2014-06-08 02:35:19 --- STRACE: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/upload.php [ 32 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 32, Array)
#1 [internal function]: Controller_Upload->action_upload_item()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 02:36:12 --- ERROR: ErrorException [ 8 ]: Undefined index: title_item ~ APPPATH/classes/controller/upload.php [ 39 ]
2014-06-08 02:36:12 --- STRACE: ErrorException [ 8 ]: Undefined index: title_item ~ APPPATH/classes/controller/upload.php [ 39 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(39): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 39, Array)
#1 [internal function]: Controller_Upload->action_upload_item()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 02:36:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: POST ~ APPPATH/classes/controller/upload.php [ 39 ]
2014-06-08 02:36:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: POST ~ APPPATH/classes/controller/upload.php [ 39 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 39, Array)
#1 [internal function]: Controller_Upload->action_upload_item()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 02:36:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/item.php [ 9 ]
2014-06-08 02:36:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/model/item.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-06-08 02:37:15 --- ERROR: ErrorException [ 8 ]: Undefined index: title_item ~ APPPATH/classes/controller/upload.php [ 41 ]
2014-06-08 02:37:15 --- STRACE: ErrorException [ 8 ]: Undefined index: title_item ~ APPPATH/classes/controller/upload.php [ 41 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 41, Array)
#1 [internal function]: Controller_Upload->action_upload_item()
#2 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#3 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#6 {main}
2014-06-08 02:37:34 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.Item' doesn't exist ( INSERT INTO `Item` (`username`, `title_item`, `description`) VALUES ('Opel', 'iphone', 'iphone mahal') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-08 02:37:34 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.Item' doesn't exist ( INSERT INTO `Item` (`username`, `title_item`, `description`) VALUES ('Opel', 'iphone', 'iphone mahal') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(2, 'INSERT INTO `It...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/item.php(9): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(41): Model_Item::add('iphone', 'iphone mahal')
#3 [internal function]: Controller_Upload->action_upload_item()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-08 02:47:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model::isavailable() ~ APPPATH/classes/controller/upload.php [ 30 ]
2014-06-08 02:47:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model::isavailable() ~ APPPATH/classes/controller/upload.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}