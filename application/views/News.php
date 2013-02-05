<div id="content" class="span10">
<?php
//print '<pre>'; print_r($feed); print '</pre>'; echo '<br>'; exit;
foreach($feed as $data){
    //print '<pre>'; print_r($data); print '</pre>'; echo '<br>'; exit;
    //if($data->name!=NULL){
    if(!isset($data->story)){
        $dTime = strtotime($data->created_time);
        $myTime=date("M d Y h:ia",$dTime);
        echo "<b>".$myTime."</b><br>";
        echo $data->name.'<br>';
        echo '<a href="'.$data->link.'">'.$data->description.'</a><br>';
        if(isset($data->message)){echo $data->message.'<br>';}
        echo "<br><br>"; 
    }
    //$fbCount++;
    //if($fbCount>=$fbLimit) break;    
}


////function to retrieve posts from facebook server
//function loadFB($fbID){
//    //facebook feed url
//    $url="http://www.facebook.com/feeds/page.php?id=".$fbID."&format=atom10";
//    //load and setup CURL
//    $c = curl_init();
//    //set options and make it up to look like firefox
//    $userAgent = "Firefox (WindowsXP) - Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6";
//    curl_setopt($c,CURLOPT_USERAGENT, $userAgent);
//    curl_setopt($c,CURLOPT_URL,$url);
//    curl_setopt($c,CURLOPT_FAILONERROR, true);
//    curl_setopt($c,CURLOPT_FOLLOWLOCATION, true);
//    curl_setopt($c,CURLOPT_AUTOREFERER, true);
//    curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
//    curl_setopt($c,CURLOPT_VERBOSE, false);     
//    curl_setopt($c,CURLOPT_RETURNTRANSFER, 1);
//    //get data from facebook and decode XML
//    $page = curl_exec($c);
//    echo 'page: '.$page; exit;
//    $pxml= new SimpleXMLElement($page);
//    //close the connection
//    curl_close($c);
//    //return the data as an object
//    return $pxml->entry;
//}
////BE SURE to enter your facebook id here
//$fbid="100001275069738";
////how may posts to show
//$fbLimit=10;
////variable used to count how many weÕve loaded
//$fbCount=0;
////call the function and get the posts from facebook
//$myPosts=loadFB($fbid);
////set timezone (change this to your timezone)
//date_default_timezone_set("Asia/Yekaterinburg");
////loop through all the posts we got from facebook
//foreach($myPosts as $post){
//    //get the post date / time and convert to unix time
//    $dTime = strtotime($post->published);
//    //format the date / time into something human readable
//    //if you want it formatted differently look up the php date function
//    $myTime=date("M d Y h:ia",$dTime);
//    //output the date / time
//    echo("<b>".$myTime."</b>");
//    //output the message body
//    echo($post->content);
//    //add a line break to separate comments
//    echo("<br /><br />");    
//    //increment counter
//    $fbCount++;
//    //if we've outputted the number set above in fblimit we're done
//    if($fbCount >= $fbLimit) break;    
//}
?>
<!--<html>
    <head>
        <title>My Great Web page</title>
        <script language="JavaScript" type="text/javascript">
            //alert('OK');
        </script>
    </head>
    <body>
      <div id="fb-root"></div>
      <script>
        // Load the SDK Asynchronously
        (function(d){
           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
           ref.parentNode.insertBefore(js, ref);
         }(document));
      </script>
      <div class="fb-like"></div>
    </body>
 </html>-->

<?php //include Kohana::find_file('classes', 'oauth_client');?>

<!--<div id="fb-root"></div>
<script>
  // Additional JS functions here
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '541018315910591', // App ID
      channelUrl : '//kshop/facebook', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional init code here

  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/ru_RU/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>
<script src="//connect.facebook.net/en_US/all.js"></script>
<script>
//alert('OK')
FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    alert('connected')
  } else if (response.status === 'not_authorized') {
    alert('not_authorized')
  } else {
    alert('not_logged_in')
  }
});

function login() {
    FB.login(function(response) {
        if (response.authResponse) {
            // connected
                            testAPI();
        } else {
            // cancelled
        }
    });
}

function testAPI() {
    alert('OK')
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
        console.log('Good to see you, ' + response.name + '.');
    });
}
login()
</script>-->


<?php 
//$CurlRequest = new CurlRequest();
//try{
//    $params = array(
//        'url' => 'https://graph.facebook.com/borodatych',
//        'host' => '',
//        'header' => '',
//        'method' => 'GET', // 'GET','POST','HEAD'
//        'referer' => '',
//        'cookie' => '',
//        'post_fields' => 'access_token=AAAHsDaSJbb8BAL2XZAKKErV6MdkDW3tmJDDFWM2zwpcIay5SRD3i1Q9xpBBAjpZBGN3CbeR2OoEvcvv2QZB2XBbr7PI7Y0Ta5UncSiX6TSZAZC5DnFAwx', // 'var1=value&var2=value
//        'timeout' => 60
//        );
//    //$this->curl->init($params);
//    $CurlRequest->init($params);
//    //$result = $this->curl->exec();
//    $result = $CurlRequest->exec();
//    if ($result['curl_error']){throw new Exception($result['curl_error']);}
//    if ($result['http_code']!='200'){throw new Exception("HTTP Code = ".$result['http_code']);}
//    if (!$result['body']){throw new Exception("Body of file is empty");}
//}catch (Exception $e){echo $e->getMessage();}
?>
</div>