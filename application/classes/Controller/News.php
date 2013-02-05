<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Index{
    
    public $template = 'Base';
    
    public function action_index(){
        $content = View::factory('News')->bind('feed',$feed);
        $feed = $this->getNews();
        $this->template->content = $content;
    }
    
    public function action_all(){
        $content = View::factory('Newsall')->bind('feed',$feed);
        $feed = $this->getNews();
        $this->template->content = $content;
    }
    
    public function getNews(){
        $fbCount = 0; $fbLimit = 10;
        $token='541018315910591|5fBlgO_oJsTR2Nd6yI5DFKaW4pA';
        $url='https://graph.facebook.com/borodatych/feed?access_token='.$token; //&fields=id,name,feed.limit('.$fbLimit.')';
        //$proxy = '87.248.226.210:3128'; //$proxyauth = 'user:password';
        $ch = curl_init();
        //curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_PROXY,$proxy);
        curl_setopt($ch, CURLOPT_HEADER,0);
        ////curl_setopt($ch,CURLOPT_PROXYUSERPWD,$proxyauth);
        ////curl_setopt($ch,CURLOPT_PROXY,null);
        curl_setopt($ch,CURLOPT_FAILONERROR,1);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch,CURLOPT_AUTOREFERER,1);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_TIMEOUT,30); // times out after 4s  
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
        $response = curl_exec($ch);
        $posts = json_decode($response);
        //print '<pre>'; print_r($posts); print '</pre>'; echo '<br>'; exit;
        if($posts==NULL){
            print_r(curl_getinfo($ch));echo '<br>';
            echo "\n\ncURL error number: ".curl_errno($ch);echo '<br>';
            echo "\n\ncURL error: ".curl_error($ch);echo '<br>';
            echo 'EXIT';exit;
        }
        curl_close($ch);
        $feed = $posts->data;
        return $feed;
    }
}