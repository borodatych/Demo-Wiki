<div id="content" class="span10">
<?php
print '<pre>'; print_r($feed); print '</pre>'; echo '<br>'; exit;
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
?>
</div>