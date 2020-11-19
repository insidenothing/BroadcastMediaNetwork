<meta http-equiv="refresh" content="60">
<span style='font-size:90px'>
<?PHP
global $core;
$q = "select * from newsbot2021 ORDER BY id desc LIMIT 1 ";
$r = $core->query($q);
while($d = mysqli_fetch_array($r,MYSQLI_ASSOC)){
    echo $d['post_status'];
}
?>
</span>
