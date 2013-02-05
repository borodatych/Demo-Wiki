-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 14 2013 г., 10:55
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `kwiki`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_category_id` int(11) NOT NULL,
  `article_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `article_alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `article_text` text COLLATE utf8_unicode_ci NOT NULL,
  `article_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `article_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `article_status` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`article_id`, `article_category_id`, `article_title`, `article_alias`, `article_text`, `article_description`, `article_keywords`, `article_status`) VALUES
(3, 0, 'Добавление виртуальных хостов в Apache', 'virtial_host_apache', '<p>По умолчанию после установки Apache создается виртуальный хост с именем localhost. Я расскажу как добавлять новые виртуальные хосты в Apache.&nbsp;Я создам виртуальный хост с именем myhost (вместо myhost вы можете выбрать любое имя, которое вам захочется).</p>\n<p>Сначала нужно создать каталог, в котором будут находиться файлы будущего сайта. Создайте в своем домашнем каталоге директорию myhost. Чтобы это сделать можно выполнить команду:</p>\n<p>mkdir ~/myhost</p>\n<p>Директорию можно создавать где угодно, я для простоты создал ее в корне своей домашней директории yuriy.<br />Создаем конфигурационный файл хоста</p>\n<p>В каталоге /etc/apache2/sites-available хранятся конфигурационные файлы виртуальных хостов Apache. По умолчанию там хранится файл default, который соответствует хосту localhost. Мы возьмем за основу файл default и скопируем его в файл с именем myhost. Для этого выполните следующие команды:</p>\n<p>cd /etc/apache2/sites-available<br />sudo cp default myhost</p>\n<p>Теперь отредактируем файл myhost. Откройте его в редакторе (например, в редакторе Gedit), выполнив команду:</p>\n<p>sudo gedit myhost</p>\n<p>Внесите в файл соответствующие изменения. В частности пропишите путь до директории, в которой будут храниться файлы хоста. В нашем случае это путь /home/yuriy/myhost, где yuriy вы должны заменить на название вашей домашней директории. Путь нужно прописать в двух местах: у параметра DocumentRoot и в заголовке секции. В самом начале файла (на второй строке) обязательно пропишите строку &laquo;ServerName myhost&raquo;. Вот пример того, как должен выглядеть ваш файл myhost:</p>\n<p><br /> ServerName myhost<br /> ServerAdmin webmaster@localhost</p>\n<p>DocumentRoot /home/yuriy/myhost<br /> <br /> Options FollowSymLinks<br /> AllowOverride None<br /> <br /> <br /> Options Indexes FollowSymLinks MultiViews<br /> AllowOverride All<br /> Order allow,deny<br /> allow from all</p>\n<p>ErrorLog /var/log/apache2/error.log</p>\n<p>LogLevel debug</p>\n<p>CustomLog /var/log/apache2/access.log combined</p>\n<p>Теперь нам нужно сделать наш хост активным. Apache использует каталог /etc/apache2/sites-enabled для определения хостов, которые нужно включить. Создадим символьную ссылку в каталоге sites-enabled, указывающую на наш файл myhost. Для этого выполните команды:</p>\n<p>cd ../sites-enabled<br />sudo ln -s ../sites-available/myhost myhost</p>\n<p>Перезапускаем Apache</p>\n<p>Перезапустите Apache, выполнив команду:</p>\n<p>sudo /etc/init.d/apache2 restart</p>\n<p>Редактируем /etc/hosts</p>\n<p>Осталось отредактировать файл /etc/hosts. В нем прописывается соответствие IP адреса имени хоста. То есть это своего рода локальный DNS. Чтобы открыть файл, выполните следующую команду:</p>\n<p>sudo gedit /etc/hosts</p>\n<p>В файле после адреса 127.0.0.1 допишите название своего виртуального хоста. В моем случае это myhost.</p>\n<p>127.0.0.1 localhost myhost</p>\n<p>Заключение</p>\n<p>На этом настройка виртуального хоста Apache с именем myhost закончена. Теперь к нему можно обратиться в браузере, набрав адрес http://myhost.</p>', '', '', 'on'),
(2, 0, 'Установка Apache PHP MySQL phpMyAdmin в Ubuntu', 'sdfdf', '<p>Установка Apache</p>\n<p>Устанавливаем Apache 2 из репозиториев. Для этого выполните команду:</p>\n<p>sudo apt-get install apache2</p>\n<p>После установки сервер Apache обычно сразу же запускается (на экран выводится сообщение &laquo;Starting web server apache2&raquo;).</p>\n<p>Для управления сервером Apache мы можем воспользоваться утилитой apache2ctl. Например, можно просмотреть текущий статус сервера Apache, выполнив команду:</p>\n<p>apache2ctl status</p>\n<p>Команды для остановки, запуска и перезапуска сервера Apache следующие:</p>\n<p>sudo apache2ctl stop<br />sudo apache2ctl start<br />sudo apache2ctl restart</p>\n<p>Проверка работоспособности сервера Apache</p>\n<p>Вы можете проверить работоспособность Apache, набрав в браузере адрес http://localhost. Если все в порядке, то откроется пустая страница с текстом: &laquo;It works!&raquo;.<br />Установка PHP</p>\n<p>Для установки PHP (версии 5) выполните в терминале команду:</p>\n<p>sudo apt-get install php5 libapache2-mod-php5</p>\n<p>После этого нужно перезапустить веб-сервер Apache. У меня Ubuntu сделала это автоматически. Если этого не произошло выполните команду:</p>\n<p>sudo apache2ctl restart</p>\n<p>Установка MySQL</p>\n<p>Для установки MySQL выполните следующую команду:</p>\n<p>sudo apt-get install mysql-server libapache2-mod-auth-mysql php5-mysql</p>\n<p>После того, как установится MySQL, должно появиться следующее окошко, в которое нужно ввести пароль. По умолчанию MySQL создает административного пользователя с именем root. В это окошко нужно вписать пароль для этого пользователя и нажать Enter, затем повторно ввести пароль.<br />Ввод нового пароля MySQL<br />Установка phpMyAdmin</p>\n<p>phpMyAdmin это специальное веб-приложение для администрирования MySQL. Оно позволяет прямо из браузера управлять базами данных MySQL, выполнять SQL запросы, просматривать данные и многое другое. Для установки phpMyAdmin выполните команду:</p>\n<p>sudo apt-get install phpmyadmin</p>\n<p>Начнется установка phpMyAdmin. В конце установки появится окошко, в котором нужно выбрать сервер apache2 (клавишей Пробел; должна появится звездочка напротив строки apache2) и нажать Enter.<br />Выбор Apache для phpMyAdmin</p>\n<p>Далее вам предложат создать базу данных для phpMyAdmin. Выберите Да и нажмите Enter.<br />Создание базы данных phpMyAdmin</p>\n<p>Далее введите пароль административной учетной записи для этой базы данных.<br />Пароль для учетной записи phpMyAdmin</p>\n<p>Затем введите пароль для регистрации phpMyAdmin на сервере баз данных и в следующем окошке подтверждение пароля.<br />Пароль для phpMyAdmin<br />Проверка работоспособности phpMyAdmin</p>\n<p>В браузере наберите адрес http://localhost/phpmyadmin. Откроется форма ввода пароля и логина пользователя MySQL для входа в phpMyAdmin. В качестве имени пользователя введите root, а пароль тот, который вы указали для пользователя root при установке MySQL.</p>', '', '', 'on'),
(4, 0, 'Включаем модуль Mod rewrite в Apache', 'mod_write', '<p>Модуль Mod rewrite используется для преобразования URL на основе правил. В статье рассказывается, как включить поддержку модуля Mod rewrite в веб-сервере Apache в операционной системе Ubuntu.<br />Подключаем модуль Mod rewrite</p>\n<p>Перейдите в каталог /etc/apache2/mods-available и убедитесь, что там есть файл rewrite.load отвечающий за загрузку модуля Mod rewrite. Для этого выполните в консоли следующие команды:</p>\n<p>cd /etc/apache2/mods-available<br />ls</p>\n<p>В списке файлов должен присутствовать файл с именем rewrite.load.</p>\n<p>Теперь перейдем в каталог /etc/apache2/mods-enabled и создадим символьную ссылку на файл rewrite.load. Для этого выполните команды:</p>\n<p>cd /etc/apache2/mods-enabled<br />sudo ln -s ../mods-available/rewrite.load rewrite.load</p>\n<p>Изменяем настройки виртуального хоста</p>\n<p>Далее нужно изменить настройки виртуального хоста, который должен использовать модуль Mod rewrite. Для этого нужно открыть файл настроек конкретного хоста. Для примера возьмем стандартный файл /etc/apache2/sites-available/default, который содержит настройки хоста с именем localhost. Выполните следующую команду, чтобы открыть файл в редакторе GEdit:</p>\n<p>sudo gedit /etc/apache2/sites-available/crocodilus</p>\n<p>Найдите в файле секциюи измените в ней строку AllowOverride None на AllowOverride All. Должно получиться примерно так:</p>\n<p><br /> Options Indexes FollowSymLinks MultiViews<br /> AllowOverride All<br /> Order allow,deny<br /> allow from all</p>\n<p>Перезапускаем Apache</p>\n<p>Теперь осталось перезапустить веб-сервер Apache командой:</p>\n<p>sudo apache2ctl restart</p>', '', '', 'on'),
(5, 0, 'Раскраска вывода команд в консоли', 'ubuntu_console_colorate', '<p>Раскраска вывода команд в консоли</p>\n<p>При выполнении команд в консоли мы чаще всего получаем в результате одноцветный текст, который бывает затруднительно прочитать. Для того, чтобы облегчить чтение результата в консоли, шрифт можно раскрасить. Это, к тому же, придаст оригинальности вашей системе.</p>\n<p>Для того, чтобы раскрашивать вывод команд в консоли (подсвечивать результат), можно воспользоваться утилитой Generic Colouriser (grc). Для установки утилиты (в Ubuntu) выполните в командной строке:</p>\n<p>sudo apt-get install grc</p>\n<p>Данная утилита использует файлы конфигурации, в которых прописаны регулярные выражения (Regular Expression), содержащие правила раскрашивания. Вместе с утилитой устанавливаются несколько файлов конфигурации для некоторых Linux команд (располагаются в директории /usr/share/grc). Информацию по составлению своих собственных файлов вы можете прочитать в README файле.</p>\n<p>Теперь нам нужно прописать алиасы тем командам, вывод которых мы хотим раскрашивать. Фактически для этих команд мы будем вызывать утилиту grc с указанием того, какую команду нам нужно раскрасить. Алиасы прописываются в файле ~/.bashrc. Откроем файл .bashrc, для этого выполним в консоли команду:</p>\n<p>sudo gedit ~/.bashrc</p>\n<p>В конец файла добавим следующие строки:</p>\n<p>if [ -f /usr/bin/grc ]; then<br /> alias cvs="grc --colour=auto cvs"<br /> alias diff="grc --colour=auto diff"<br /> alias esperanto="grc --colour=auto esperanto"<br /> alias gcc="grc --colour=auto gcc"<br /> alias irclog="grc --colour=auto irclog"<br /> alias ldap="grc --colour=auto ldap"<br /> alias log="grc --colour=auto log"<br /> alias netstat="grc --colour=auto netstat"<br /> alias ping="grc --colour=auto ping"<br /> alias proftpd="grc --colour=auto proftpd"<br /> alias traceroute="grc --colour=auto traceroute"<br /> alias wdiff="grc --colour=auto wdiff"<br />fi</p>\n<p>Тем самым мы прописали алиасы для команд, вывод которых будет раскрашиваться. Теперь выйдите и войдите в систему, чтобы применить данные настройки. Выполните для примера команду ping и вы должны получить красивый результат:</p>\n<p>ping 127.0.0.1</p>', '', '', '0'),
(6, 0, 'Сценарий автоматического добавления сайта на локальном сервере', 'dasd', '<p>Сценарий автоматического добавления сайта на локальном сервере. Если создать кнопку запуска, то останется только ввести имя нового каталога для сайта и пароль root:</p>\n<p>#!/bin/bash</p>\n<p># nautilus ~/.gnome2/nautilus-scripts<br />#Создаём настройки сайта в Ahache2<br />echo -n "Введите имя создаваемого хоста: "<br />read newHost</p>\n<p>#Производим запись в /etc/hosts<br />file="/etc/hosts"<br />b=$(cat $file)<br />newContent="127.0.0.1 ${newHost} www.${newHost}"$''n''$b<br />sudo bash -c "echo ''${newContent}'' &gt; $file"</p>\n<p>#Добавляем сайт в sites-available и прописываем в него нужные директивы<br />sap=/etc/apache2/sites-available/$newHost<br />sudo touch $sap<br />sudo chmod 777 $sap<br />directives="<br />ServerName ${newHost}<br />ServerAlias ${newHost} www.${newHost}<br />DocumentRoot /var/www/${newHost}</p>\n<p>AllowOverride All</p>\n<p>ErrorLog /var/www/${newHost}/logs/error.log<br />"<br />echo "$directives"&gt;$sap</p>\n<p>#Создаём каталог сайта и файл отчётов в каталоге сайта<br />mkdir /var/www/${newHost} /var/www/${newHost}/logs/<br />&gt; /var/www/${newHost}/logs/error.log<br />#Создаём страницу<br />index=" ${newHost}<br />Страница создана автоматически для сайта ${newHost}<br />"<br />echo "$index"&gt; /var/www/${newHost}/index.html</p>\n<p>#Включаем виртуальный хост<br />sudo a2ensite $newHost</p>\n<p>#Перезагружаем настройки<br />sudo /etc/init.d/apache2 reload</p>\n<p>#Включаем rewrite<br />#sudo a2enmod rewrite<br />#sudo /usr/sbin/apache2ctl restart</p>\n<p>BROWSER="firefox"<br />#как будем открывать страницу: new-window - новом окне, new-tab - в новой вкладке:<br />OPENURL="new-tab"<br />URL="http://${newHost}"<br />#Проверяем, запущен ли браузер:<br />if ps aux | grep firefox | grep -v grep &gt; /dev/null;<br />then exec $BROWSER -remote "openurl($URL, $OPENURL)"; #если запущен<br />else exec $BROWSER $URL; #если НЕ запущен<br />fi</p>', '', '', '1'),
(7, 0, 'Установка Zentyal на Ubuntu 10.04', 'sadsad', '<p>Установка Zentyal</p>\n<p>Устанавливать Zentyal будем на Ubuntu 10.04</p>\n<p>zentyal-2.0-3-i386 - Базируется на Ubuntu 10.04</p>\n<p>Если у вас есть установленная Ubuntu 10.04, то просто ставим нужные пакеты на нее.</p>\n<p>Добавляем в etcaptsources.list<br />deb httpppa.launchpad.netzentyal2.2ubuntu lucid main</p>\n<p>Далее <br />#apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 10E239FF<br />#apt-get install -y python-software-properties &amp;&amp; add-apt-repository ppazentyal2.2 &amp;&amp; apt-get update</p>\n<p>Добавим в etcaptsources.list<br />deb httparchive.zentyal.comzentyal 2.2 extra<br />#apt-get update</p>\n<p>Устанавливаем zentyal<br />#apt-get install zentyal</p>\n<p>После чего переходим в браузер по httpsВАШ_IP, где вы сможете установить програмное обеспечение или воспользоваться командой</p>\n<p>#apt-get install zentyal-office</p>\n<p>Где zentyal-office</p>\n<p>zentyal-office: zentyal-samba, zentyal-printers, zentyal-antivirus, zentyal-ebackup, zentyal-remoteservices<br />zentyal-communication: zentyal-mail, zentyal-jabber, zentyal-asterisk, zentyal-mailfilter, zentyal-antivirus, zentyal-ebackup, zentyal-remoteservices<br />zentyal-security: zentyal-ids, zentyal-squid, zentyal-openvpn, zentyal-antivirus, zentyal-ebackup, zentyal-remoteservices<br />zentyal-gateway: zentyal-squid, zentyal-trafficshaping, zentyal-l7-protocols, zentyal-ebackup, zentyal-remoteservices<br />zentyal-infrastructure: zentyal-dhcp, zentyal-dns, zentyal-openvpn, zentyal-webserver, zentyal-ftp, zentyal-ntp, zentyal-ebackup, zentyal-remoteservices</p>', '', '', '1'),
(8, 0, 'Как отключить гостевой сеанс в Ubuntu', 'asd', '<p>При входе в Ubuntu вы можете выбрать гостевой сеанс и пользоваться системой без ввода пароля. При использовании гостевой сессии пользователь не может читать домашние директории других пользователей, но он может пользоваться системой и программами. Любые изменения, которые делает Гость будут отменены при его выходе из Ubuntu (файлы удалены, настройки сброшены). Гость также может просматривать и читать данные файловой системы &laquo;/&raquo; (кроме домашних директорий /home). Иногда нужно запретить использование гостевой сессии. Рассмотрим, как это сделать.</p>\n<p>Настройки мы будем выполнять в Ubuntu 12.04. Разработчики пока не предусмотрели удобного отключения пользователя Гость через графический интерфейс, поэтому, чтобы отключить Гостя нужно отредактировать конфигурационный файл /etc/lightdm/lightdm.conf. Чтобы открыть файл выполните в терминале команду:</p>\n<p>sudo gedit /etc/lightdm/lightdm.conf</p>\n<p>Содержимое файла будет иметь вид:</p>\n<p><br />[SeatDefaults]<br />greeter-session=unity-greeter<br />user-session=ubuntu</p>\n<p>Добавьте после строки &laquo;user-session=ubuntu&raquo; следующую строку:</p>\n<p>allow-guest=false</p>\n<p>В результате файл будет выглядеть так:</p>\n<p><br />[SeatDefaults]<br />greeter-session=unity-greeter<br />user-session=ubuntu<br />allow-guest=false</p>\n<p>Сохраните и закройте файл. Теперь можно перезагрузить компьютер и в окне входа в систему в списке пользователей будет отсутствовать пункт Гостевой сеанс.</p>', '', '', '1'),
(10, 0, 'Test', 'test2', '<p>test</p>', 'test', 'test', 'on'),
(12, 0, 'Test1', 'test1', '<p>dghdgh</p>', '', '', 'on'),
(13, 0, 'SimpleWiki Examples', 'SimpleWiki', '= Heading Level 1= \n== Heading Level 2== \n=== Heading Level 3===\n ==== Heading Level 4==== \n===== Heading Level 5===== \n====== Heading Level 6====== \n|:h section-divider-high toc=no:|===== Heading high ===== \n|:h section-divider-mid toc=no:|===== Heading mid ===== \n|:h section-divider-low toc=no:|===== Heading low ===== \n|:h section-major toc=no:|===== Heading major ===== \n|:h section-divider-major:|===== Heading divider-major ===== \n|:h subtitle:|===== Heading subtitle =====\n//**emphasis and strong**//\n\n**//does the same thing//**\n\n[[http://help.demka.org | help.demka.org]]\n\n%l newwin%[[http://help.demka.org | help.demka.org]]  - open in a new window\n\n %l newwin%[[http://help.demka.org | //help.demka.org//  Website]] - markup in the caption portion\n\n [[#start | Go to top of page]]\n\n[[Issues:somecode | Here''s a link to the Issues table]]\n\n---------------------------------------------------------\n\nТекст страницы вводится в вики-разметке:\n\n**text** — жирный текст text\n\n//text// — курсив text\n\n__text__ — подчеркнутый текст text\n\n[page1/page2 страница 2]] — ссылка на страницу page2 (адрес/page1/page2), текст ссылки <страница 2>\n\nЕсли ссылка ведет на несуществующую страницу, то текст ссылки выделяется красным цветом, а ее адрес заменяется на страницу добавления страницы.\n\n[[Ошибка! Недопустимый объект гиперссылки.] — ссылка на внешний ресурс. Текст ссылки равен ее адресу\n\n[[http://yandex.ru Яндекс]] — ссылка на внешний ресурс. Текст ссылки —  <Яндекс>', '', '', 'on');

-- --------------------------------------------------------

--
-- Структура таблицы `articles_categories`
--

CREATE TABLE IF NOT EXISTS `articles_categories` (
  `article_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  PRIMARY KEY (`article_id`,`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `articles_categories`
--

INSERT INTO `articles_categories` (`article_id`, `category_id`) VALUES
(3, 34),
(4, 49),
(10, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_title` varchar(255) CHARACTER SET cp1251 NOT NULL,
  `parent_id` int(11) NOT NULL,
  `lft` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `scope` int(11) NOT NULL,
  `category_description` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `category_alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `template` varchar(100) CHARACTER SET ascii NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category_title`, `parent_id`, `lft`, `rgt`, `lvl`, `scope`, `category_description`, `meta_description`, `meta_keywords`, `category_alias`, `template`) VALUES
(1, 'qqq', 0, 1, 6, 1, 1, '', '', '', 'qqq', ''),
(2, 'www', 1, 4, 5, 2, 1, '', '', '', 'qwq', '');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`) VALUES
(1, 'about', '##This is for study Kohana 3.2 ORM tutorial samples'),
(2, 'tutorial', 'homepage\r\nhttp://query7.com/kohana-3-1-wiki-tutorial'),
(3, 'author', 'Query7');

-- --------------------------------------------------------

--
-- Структура таблицы `wiki`
--

CREATE TABLE IF NOT EXISTS `wiki` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `scope` varchar(255) NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  `modified` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `markdown` mediumtext NOT NULL,
  `html` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_title` (`scope`,`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `wiki`
--

INSERT INTO `wiki` (`id`, `scope`, `created`, `modified`, `title`, `markdown`, `html`) VALUES
(1, 'test', 0, 0, 'test', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `wiki_links`
--

CREATE TABLE IF NOT EXISTS `wiki_links` (
  `wiki_id` int(11) unsigned NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`wiki_id`,`link`),
  KEY `fk_wiki_id` (`wiki_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `wiki_links`
--
ALTER TABLE `wiki_links`
  ADD CONSTRAINT `wiki_links_ibfk_1` FOREIGN KEY (`wiki_id`) REFERENCES `wiki` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
