<?php 
$date_array = getdate(); 
foreach ( $date_array as $key => $val ) { 
    print "$key = $val<br />"; 
} 
$mydate=getdate(date("H")); 
// bạn tham khảo hàm date() ở bên dưới 
print "Today: ";
echo "$mydate[year], $mydate[month] $mydate[mday], $mydate[hours], $mydate[minutes], $mydate[seconds]"; 



?>
<hr>
<?php 

$date = date('Y/m/d H:i:s ', time());
echo $date;
?>