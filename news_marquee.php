<meta http-equiv="refresh" content="200">
<marquee style='background-color: black; font-size:50px;' scrollamount="10">
<?PHP
global $core;
?>  
<span style='color:lightblue;'><?PHP echo date('F j, Y, g:i a');?></span> 
<?PHP    
$q = "select * from newsbot2021 where post_status like '".date('D, d M Y')."%' ";
$r = $core->query($q);
$c = mysqli_num_rows($r);
    echo "<span style='color:lightgreen;'>Total News Today: $c</span> ";

?>
<span style='color:orange;'>+++ COVID NEWS +++<span>   
     <span style='color:white;'>
<?PHP    
$q = "select * from newsbot2021 where title like '%covid%' and post_status like '".date('D, d M Y')."%' ORDER BY RAND() LIMIT 1 ";
$r = $core->query($q);
while($d = mysqli_fetch_array($r,MYSQLI_ASSOC)){
    echo $d['title'].' | ';
}
?><span>

<span style='color:orange;'>+++ BIDEN NEWS +++<span>
    <span style='color:white;'>
<?PHP
$q = "select * from newsbot2021 where title like '%biden%' and post_status like '".date('D, d M Y')."%' ORDER BY RAND() LIMIT 1";
$r = $core->query($q);
while($d = mysqli_fetch_array($r,MYSQLI_ASSOC)){
    echo $d['title'].' | ';
}
?><span>
    
<span style='color:orange;'>+++ TRUMP NEWS +++<span>    
    <span style='color:white;'>
<?PHP
$q = "select * from newsbot2021 where title like '%trump%' and post_status like '".date('D, d M Y')."%' ORDER BY RAND() LIMIT 1";
$r = $core->query($q);
while($d = mysqli_fetch_array($r,MYSQLI_ASSOC)){
    echo $d['title'].' | ';
}
?><span>
    
    
    </marquee>
