<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-13 15:29:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: data ~ APPPATH\cache\smarty_compiled\91c0b9dcbf8d4168694a8b5efe6d271e84cd9f99.file.index.tpl.php [ 26 ] in Z:\home\kohana\www\application\cache\smarty_compiled\91c0b9dcbf8d4168694a8b5efe6d271e84cd9f99.file.index.tpl.php:26
2013-06-13 15:29:09 --- DEBUG: #0 Z:\home\kohana\www\application\cache\smarty_compiled\91c0b9dcbf8d4168694a8b5efe6d271e84cd9f99.file.index.tpl.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 26, Array)
#1 Z:\home\kohana\www\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(176): content_51ba2b0e3fd25(Object(Smarty_Internal_Template))
#2 Z:\home\kohana\www\modules\smarty3\classes\smarty\view.php(376): Smarty_Internal_TemplateBase->fetch('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\kohana\www\application\classes\Controller\Welcome.php(8): Kohana_Response->body(Object(Smarty_View))
#6 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\kohana\www\application\cache\smarty_compiled\91c0b9dcbf8d4168694a8b5efe6d271e84cd9f99.file.index.tpl.php:26
2013-06-13 15:31:09 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to View::factory() must be an array, string given, called in Z:\home\kohana\www\application\classes\Controller\Welcome.php on line 9 and defined ~ MODPATH\smarty3\classes\view.php [ 65 ] in Z:\home\kohana\www\modules\smarty3\classes\view.php:65
2013-06-13 15:31:09 --- DEBUG: #0 Z:\home\kohana\www\modules\smarty3\classes\view.php(65): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\kohana\...', 65, Array)
#1 Z:\home\kohana\www\application\classes\Controller\Welcome.php(9): View::factory('index.tpl', 'some text')
#2 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana\www\modules\smarty3\classes\view.php:65
2013-06-13 15:31:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: data ~ APPPATH\cache\smarty_compiled\91c0b9dcbf8d4168694a8b5efe6d271e84cd9f99.file.index.tpl.php [ 26 ] in Z:\home\kohana\www\application\cache\smarty_compiled\91c0b9dcbf8d4168694a8b5efe6d271e84cd9f99.file.index.tpl.php:26
2013-06-13 15:31:30 --- DEBUG: #0 Z:\home\kohana\www\application\cache\smarty_compiled\91c0b9dcbf8d4168694a8b5efe6d271e84cd9f99.file.index.tpl.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana\...', 26, Array)
#1 Z:\home\kohana\www\modules\smarty3\vendor\smarty\libs\sysplugins\smarty_internal_templatebase.php(176): content_51ba2b0e3fd25(Object(Smarty_Internal_Template))
#2 Z:\home\kohana\www\modules\smarty3\classes\smarty\view.php(376): Smarty_Internal_TemplateBase->fetch('Z:\home\kohana\...')
#3 Z:\home\kohana\www\system\classes\Kohana\View.php(228): Smarty_View->render()
#4 Z:\home\kohana\www\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 Z:\home\kohana\www\application\classes\Controller\Welcome.php(9): Kohana_Response->body(Object(Smarty_View))
#6 Z:\home\kohana\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\kohana\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 Z:\home\kohana\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\kohana\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\kohana\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\kohana\www\application\cache\smarty_compiled\91c0b9dcbf8d4168694a8b5efe6d271e84cd9f99.file.index.tpl.php:26