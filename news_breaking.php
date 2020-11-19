<meta http-equiv="refresh" content="60"><?PHP
global $core;
$q = "select * from newsbot2021 ORDER BY id desc LIMIT 1 ";
$r = $core->query($q);
$d = mysqli_fetch_array($r,MYSQLI_ASSOC);
?><span style='font-size:50px'><?PHP echo $d['title'];?></span><br><span style='font-size:15px'>SOURCE: <?PHP echo $d['href'];?></span>
