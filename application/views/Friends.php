<div id="content" class="span10">
<?php
$start = microtime(true);
$app_id = "541018315910591";
$app_secret = "70084dea3981cb2a81b4fc579ea7fb49";
$my_url = "http://wiki.demka.org/friends";
session_start();
//print '<pre>'; print_r($_REQUEST); print '</pre>'; echo '<br>'; exit;
if($_REQUEST!=NULL){$code = $_REQUEST['code'];}
if(empty($code)){
    $_SESSION['state'] = md5(uniqid(rand(), TRUE)); 
    //CSRF protection
    $dialog_url = 'https://www.facebook.com/dialog/oauth?client_id='.$app_id.'&redirect_uri='.urlencode($my_url).'&scope=user_birthday,friends_birthday&state='.$_SESSION['state'];   
    echo("<script> top.location.href='" . $dialog_url . "'</script>");
    echo $dialog_url;exit;
}
//print '<pre>'; print_r($_REQUEST); print '</pre>'; echo '<br>'; exit;
if($_REQUEST['state'] == $_SESSION['state']) {
    $token_url = 'https://graph.facebook.com/oauth/access_token?'.'client_id='.$app_id.'&redirect_uri='.urlencode($my_url).'&client_secret='.$app_secret.'&code='.$code;
    $response = file_get_contents($token_url);
    $params = null;
    parse_str($response, $params);
    $graph_url = "https://graph.facebook.com/me?access_token=".$params['access_token'];
    $user = json_decode(file_get_contents($graph_url));
    $uid = $user->id;
    // получаем список друзей пользователя
    $graph_url = 'https://graph.facebook.com/'.$uid.'/friends?limit=10&access_token='.$params['access_token'];
    $friends = json_decode(file_get_contents($graph_url));
    $time = microtime(true) - $start;
    printf('Авторизация и получение списка друзей %.4F сек.<br/>', $time);
    $n = sizeof($friends->data);
 ?>
<table class="table table-striped table-bordered bootstrap-datatable datatable">
    <thead>
        <tr>
            <th height="30"><a href="#" title="Номер позиции в текущем списке" data-rel="tooltip">№</a></th>
            <th height="30"><a href="#" title="Имя под которым зарегестрирован друг" data-rel="tooltip">Имя</a></th>
            <th height="30"><a href="#" title="День рождения согласно регестрационным данным" data-rel="tooltip">ДР</a></th>
        </tr>    
    </thead>
    <tbody>
        
<?php   
    
    for ($i = 0; $i < $n; $i++) {
        $graph_url = 'https://graph.facebook.com/'.$friends->data[$i]->id.'?access_token='.$params['access_token'];
        $friend_data = file_get_contents($graph_url);
        // декодировать json ответ и вывести данные
        $friend = json_decode($friend_data);
        //print '<pre>'; print_r($friend); print '</pre>'; echo '<br>';
        echo '<tr>';
        echo '<td>'.($i+1).'</td>';
        echo '<td>'.($friend->name);
        if(isset($friend->birthday)){echo '<td>'.($friend->birthday).'</td>';}else{echo '<td>Не указано</td>';}
        echo '</tr>';

        } 
    } else {
        echo("The state does not match. You may be a victim of CSRF."); 
    }
?>
    </tbody>
</table>
<?php 
    $time = microtime(true) - $start; 
    printf('Скрипт выполнялся %.4F сек.', $time);
?>
</div>