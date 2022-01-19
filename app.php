<?php
require_once"dbconfig.php";
 $query="select * from category  where id='".$_POST['id']."'";
$result=mysqli_query($cid,$query);
$output='';
while($res=mysqli_fetch_array($result))
{
	$output .='<h3 style="text-align:center">'.$res['category_name'].'</h3>
	
	<p style="text-align:justify">'.$res['theory'].'
	</p></br>
	<a href="#" ux='.$res['id'].' class="quiz btn btn-success" style="text-decoration:none">Test</a>
	</br>
	</br>
	';
}
echo $output;

?>



