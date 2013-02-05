<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-12 00:21:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Index' not found ~ APPPATH\classes\Controller\articles.php [ 3 ] in :
2013-01-12 00:21:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-12 00:26:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 82 ] in Z:\home\kohana33\www\application\views\base.php:82
2013-01-12 00:26:07 --- DEBUG: #0 Z:\home\kohana33\www\application\views\base.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 82, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#7 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana33\www\application\views\base.php:82
2013-01-12 00:27:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 82 ] in Z:\home\kohana33\www\application\views\base.php:82
2013-01-12 00:27:28 --- DEBUG: #0 Z:\home\kohana33\www\application\views\base.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 82, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#7 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana33\www\application\views\base.php:82
2013-01-12 00:27:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\base.php [ 82 ] in Z:\home\kohana33\www\application\views\base.php:82
2013-01-12 00:27:59 --- DEBUG: #0 Z:\home\kohana33\www\application\views\base.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 82, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#7 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana33\www\application\views\base.php:82
2013-01-12 00:31:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\base.php [ 11 ] in Z:\home\kohana33\www\application\views\base.php:11
2013-01-12 00:31:32 --- DEBUG: #0 Z:\home\kohana33\www\application\views\base.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 11, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Friends))
#7 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana33\www\application\views\base.php:11
2013-01-12 00:38:33 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM_MPTT' not found ~ APPPATH\classes\Model\category.php [ 3 ] in :
2013-01-12 00:38:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-12 01:11:04 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL articlesпкпе was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-01-12 01:11:04 --- DEBUG: #0 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-01-12 01:11:05 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\kohana33\www\system\classes\Kohana\Request.php:979
2013-01-12 01:11:05 --- DEBUG: #0 Z:\home\kohana33\www\system\classes\Kohana\Request.php(979): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\kohana33\www\system\classes\Kohana\Request.php:979
2013-01-12 01:11:28 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL articlesпкпе was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-01-12 01:11:28 --- DEBUG: #0 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-01-12 01:11:28 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\kohana33\www\system\classes\Kohana\Request.php:979
2013-01-12 01:11:28 --- DEBUG: #0 Z:\home\kohana33\www\system\classes\Kohana\Request.php(979): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\kohana33\www\system\classes\Kohana\Request.php:979
2013-01-12 01:11:29 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL articlesпкпе was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-01-12 01:11:29 --- DEBUG: #0 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-01-12 01:11:29 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\kohana33\www\system\classes\Kohana\Request.php:979
2013-01-12 01:11:29 --- DEBUG: #0 Z:\home\kohana33\www\system\classes\Kohana\Request.php(979): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\kohana33\www\system\classes\Kohana\Request.php:979
2013-01-12 01:11:30 --- CRITICAL: HTTP_Exception_404 [ 404 ]: The requested URL articlesпкпе was not found on this server. ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-01-12 01:11:30 --- DEBUG: #0 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(79): Kohana_HTTP_Exception::factory(404, 'The requested U...', Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#3 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#4 {main} in Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php:79
2013-01-12 01:11:30 --- CRITICAL: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\Kohana\HTTP\Exception.php [ 17 ] in Z:\home\kohana33\www\system\classes\Kohana\Request.php:979
2013-01-12 01:11:30 --- DEBUG: #0 Z:\home\kohana33\www\system\classes\Kohana\Request.php(979): Kohana_HTTP_Exception::factory(404, 'Unable to find ...', Array)
#1 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#2 {main} in Z:\home\kohana33\www\system\classes\Kohana\Request.php:979
2013-01-12 01:13:19 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana33\www\system\classes\Kohana\View.php:137
2013-01-12 01:13:19 --- DEBUG: #0 Z:\home\kohana33\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/404')
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/404', NULL)
#2 Z:\home\kohana33\www\application\classes\HTTP\Exception\404.php(13): Kohana_View::factory('errors/404')
#3 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(108): HTTP_Exception_404->get_response()
#4 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana33\www\system\classes\Kohana\View.php:137
2013-01-12 01:13:19 --- CRITICAL: View_Exception [ 0 ]: The requested view errors/404 could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana33\www\system\classes\Kohana\View.php:137
2013-01-12 01:13:19 --- DEBUG: #0 Z:\home\kohana33\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('errors/404')
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('errors/404', NULL)
#2 Z:\home\kohana33\www\application\classes\HTTP\Exception\404.php(13): Kohana_View::factory('errors/404')
#3 Z:\home\kohana33\www\system\classes\Kohana\Request.php(980): HTTP_Exception_404->get_response()
#4 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#5 {main} in Z:\home\kohana33\www\system\classes\Kohana\View.php:137
2013-01-12 01:13:39 --- CRITICAL: ErrorException [ 2 ]: set_exception_handler() expects the argument (Notfound::handle) to be a valid callback ~ APPPATH\bootstrap.php [ 135 ] in :
2013-01-12 01:13:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'set_exception_h...', 'Z:\home\kohana3...', 135, Array)
#1 Z:\home\kohana33\www\application\bootstrap.php(135): set_exception_handler(Array)
#2 Z:\home\kohana33\www\index.php(102): require('Z:\home\kohana3...')
#3 {main} in :
2013-01-12 01:13:39 --- CRITICAL: ErrorException [ 2 ]: set_exception_handler() expects the argument (Notfound::handle) to be a valid callback ~ APPPATH\bootstrap.php [ 135 ] in :
2013-01-12 01:13:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'set_exception_h...', 'Z:\home\kohana3...', 135, Array)
#1 Z:\home\kohana33\www\application\bootstrap.php(135): set_exception_handler(Array)
#2 Z:\home\kohana33\www\index.php(102): require('Z:\home\kohana3...')
#3 {main} in :
2013-01-12 01:31:51 --- CRITICAL: ErrorException [ 1 ]: Class 'ORM_MPTT' not found ~ APPPATH\classes\Model\category.php [ 3 ] in :
2013-01-12 01:31:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-12 01:32:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Category::fulltree() ~ APPPATH\classes\Controller\category.php [ 11 ] in :
2013-01-12 01:32:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-12 01:36:45 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/category could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\kohana33\www\system\classes\Kohana\View.php:137
2013-01-12 01:36:45 --- DEBUG: #0 Z:\home\kohana33\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/category')
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/category', Array)
#2 Z:\home\kohana33\www\application\classes\Controller\category.php(12): Kohana_View::factory('admin/category', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(84): Controller_Category->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana33\www\system\classes\Kohana\View.php:137
2013-01-12 02:27:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: article ~ APPPATH\views\article.php [ 2 ] in Z:\home\kohana33\www\application\views\article.php:2
2013-01-12 02:27:00 --- DEBUG: #0 Z:\home\kohana33\www\application\views\article.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 2, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana33\www\application\views\base.php(82): Kohana_View->__toString()
#5 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#6 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#7 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana33\www\application\views\article.php:2
2013-01-12 02:27:17 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\article.php [ 2 ] in Z:\home\kohana33\www\application\views\article.php:2
2013-01-12 02:27:17 --- DEBUG: #0 Z:\home\kohana33\www\application\views\article.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\kohana3...', 2, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana33\www\application\views\base.php(82): Kohana_View->__toString()
#5 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#6 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#7 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana33\www\application\views\article.php:2
2013-01-12 02:30:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\articles.php [ 47 ] in :
2013-01-12 02:30:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-12 04:16:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::binf() ~ APPPATH\classes\Controller\Articles.php [ 9 ] in :
2013-01-12 04:16:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-12 06:09:38 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Category::$url ~ APPPATH\classes\Controller\Category.php [ 12 ] in Z:\home\kohana33\www\application\classes\Controller\Category.php:12
2013-01-12 06:09:38 --- DEBUG: #0 Z:\home\kohana33\www\application\classes\Controller\Category.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\kohana3...', 12, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(84): Controller_Category->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana33\www\application\classes\Controller\Category.php:12
2013-01-12 06:25:28 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\views\Categoryedit.php [ 27 ] in :
2013-01-12 06:25:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-12 07:42:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: products ~ APPPATH\classes\Controller\Articles.php [ 46 ] in Z:\home\kohana33\www\application\classes\Controller\Articles.php:46
2013-01-12 07:42:48 --- DEBUG: #0 Z:\home\kohana33\www\application\classes\Controller\Articles.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 46, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(84): Controller_Articles->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#4 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana33\www\application\classes\Controller\Articles.php:46
2013-01-12 07:43:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cats ~ APPPATH\views\Articlesedit.php [ 48 ] in Z:\home\kohana33\www\application\views\Articlesedit.php:48
2013-01-12 07:43:25 --- DEBUG: #0 Z:\home\kohana33\www\application\views\Articlesedit.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 48, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana33\www\application\views\Base.php(85): Kohana_View->__toString()
#5 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#6 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#7 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana33\www\application\views\Articlesedit.php:48
2013-01-12 07:46:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: cat_id ~ APPPATH\views\Articlesedit.php [ 49 ] in Z:\home\kohana33\www\application\views\Articlesedit.php:49
2013-01-12 07:46:17 --- DEBUG: #0 Z:\home\kohana33\www\application\views\Articlesedit.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 49, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana33\www\application\views\Base.php(85): Kohana_View->__toString()
#5 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#6 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#7 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana33\www\application\views\Articlesedit.php:49
2013-01-12 07:48:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: cat_id ~ APPPATH\views\Articlesedit.php [ 49 ] in Z:\home\kohana33\www\application\views\Articlesedit.php:49
2013-01-12 07:48:39 --- DEBUG: #0 Z:\home\kohana33\www\application\views\Articlesedit.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 49, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana33\www\application\views\Base.php(85): Kohana_View->__toString()
#5 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#6 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#7 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana33\www\application\views\Articlesedit.php:49
2013-01-12 07:52:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: cat_id ~ APPPATH\views\Articlesedit.php [ 49 ] in Z:\home\kohana33\www\application\views\Articlesedit.php:49
2013-01-12 07:52:32 --- DEBUG: #0 Z:\home\kohana33\www\application\views\Articlesedit.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 49, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana33\www\application\views\Base.php(85): Kohana_View->__toString()
#5 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#6 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#7 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana33\www\application\views\Articlesedit.php:49
2013-01-12 07:53:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: cat_id ~ APPPATH\classes\Controller\Articles.php [ 56 ] in Z:\home\kohana33\www\application\classes\Controller\Articles.php:56
2013-01-12 07:53:16 --- DEBUG: #0 Z:\home\kohana33\www\application\classes\Controller\Articles.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 56, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(84): Controller_Articles->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#4 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana33\www\application\classes\Controller\Articles.php:56
2013-01-12 07:56:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: cat_id ~ APPPATH\views\Articlesedit.php [ 48 ] in Z:\home\kohana33\www\application\views\Articlesedit.php:48
2013-01-12 07:56:56 --- DEBUG: #0 Z:\home\kohana33\www\application\views\Articlesedit.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 48, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana33\www\application\views\Base.php(85): Kohana_View->__toString()
#5 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#6 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#7 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana33\www\application\views\Articlesedit.php:48
2013-01-12 08:04:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: cat_id ~ APPPATH\views\Articlesedit.php [ 49 ] in Z:\home\kohana33\www\application\views\Articlesedit.php:49
2013-01-12 08:04:20 --- DEBUG: #0 Z:\home\kohana33\www\application\views\Articlesedit.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 49, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana33\www\application\views\Base.php(85): Kohana_View->__toString()
#5 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#6 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#7 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana33\www\application\views\Articlesedit.php:49
2013-01-12 08:13:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: cat_id ~ APPPATH\classes\Controller\Articles.php [ 60 ] in Z:\home\kohana33\www\application\classes\Controller\Articles.php:60
2013-01-12 08:13:15 --- DEBUG: #0 Z:\home\kohana33\www\application\classes\Controller\Articles.php(60): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 60, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(84): Controller_Articles->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#4 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana33\www\application\classes\Controller\Articles.php:60
2013-01-12 08:19:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cat ~ APPPATH\views\Articlesedit.php [ 49 ] in Z:\home\kohana33\www\application\views\Articlesedit.php:49
2013-01-12 08:19:17 --- DEBUG: #0 Z:\home\kohana33\www\application\views\Articlesedit.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\kohana3...', 49, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana33\www\application\views\Base.php(85): Kohana_View->__toString()
#5 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#6 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#7 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana33\www\application\views\Articlesedit.php:49
2013-01-12 08:19:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: article_title ~ APPPATH\views\Articlesedit.php [ 64 ] in Z:\home\kohana33\www\application\views\Articlesedit.php:64
2013-01-12 08:19:56 --- DEBUG: #0 Z:\home\kohana33\www\application\views\Articlesedit.php(64): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 64, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana33\www\application\views\Base.php(85): Kohana_View->__toString()
#5 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#6 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#7 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana33\www\application\views\Articlesedit.php:64
2013-01-12 08:21:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: cat_id ~ APPPATH\views\Articlesedit.php [ 53 ] in Z:\home\kohana33\www\application\views\Articlesedit.php:53
2013-01-12 08:21:19 --- DEBUG: #0 Z:\home\kohana33\www\application\views\Articlesedit.php(53): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\kohana3...', 53, Array)
#1 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#2 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#3 Z:\home\kohana33\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\kohana33\www\application\views\Base.php(85): Kohana_View->__toString()
#5 Z:\home\kohana33\www\system\classes\Kohana\View.php(61): include('Z:\home\kohana3...')
#6 Z:\home\kohana33\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\kohana3...', Array)
#7 Z:\home\kohana33\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana33\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\kohana33\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 Z:\home\kohana33\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\kohana33\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana33\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\kohana33\www\application\views\Articlesedit.php:53