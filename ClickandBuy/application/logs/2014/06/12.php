<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-12 10:29:57 --- ERROR: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.item' doesn't exist ( SELECT * FROM `item` WHERE `username` = 'opel' AND `title_item` = 'asd' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-12 10:29:57 --- STRACE: Database_Exception [ 1146 ]: [1146] Table 'ClickandBuy.item' doesn't exist ( SELECT * FROM `item` WHERE `username` = 'opel' AND `title_item` = 'asd' ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(1, 'SELECT * FROM `...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/item.php(16): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(29): Model_Item::isavailable('asd')
#3 [internal function]: Controller_Upload->action_upload_item()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-12 10:42:04 --- ERROR: Database_Exception [ 1054 ]: [1054] Unknown column 'description' in 'field list' ( INSERT INTO `item` (`username`, `title_item`, `description`) VALUES ('opel', 'asd', '') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
2014-06-12 10:42:04 --- STRACE: Database_Exception [ 1054 ]: [1054] Unknown column 'description' in 'field list' ( INSERT INTO `item` (`username`, `title_item`, `description`) VALUES ('opel', 'asd', '') ) ~ MODPATH/database/classes/kohana/database/mysqli.php [ 182 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQLi->query(2, 'INSERT INTO `it...', false, Array)
#1 /opt/lampp/htdocs/ClickandBuy/application/classes/model/item.php(9): Kohana_Database_Query->execute()
#2 /opt/lampp/htdocs/ClickandBuy/application/classes/controller/upload.php(41): Model_Item::add('asd', '')
#3 [internal function]: Controller_Upload->action_upload_item()
#4 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Upload))
#5 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /opt/lampp/htdocs/ClickandBuy/system/classes/kohana/request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#8 {main}
2014-06-12 10:42:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_asd.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-12 10:42:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_asd.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 10:42:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_asd.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-12 10:42:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_asd.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 10:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_asd.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-12 10:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_asd.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}
2014-06-12 10:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_asd.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
2014-06-12 10:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: data/opel_asd.jpg ~ SYSPATH/classes/kohana/request.php [ 1152 ]
--
#0 /opt/lampp/htdocs/ClickandBuy/index.php(109): Kohana_Request->execute()
#1 {main}