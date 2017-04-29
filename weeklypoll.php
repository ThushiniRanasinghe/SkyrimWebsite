<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Movie race</title>
<link rel="" type="" href="file:"/>

</head>

<body>
<div class="container">
<div id="hello">
    <?php
	require("configcart.php");
	$vote="SELECT * FROM poll";
	$votequery=mysql_query($vote);
	$rowq = mysql_fetch_array($votequery);
	
	$vote = $_REQUEST['vote'];
	
	$filename = "poll.txt";
	$content = file($filename);
	
	$array = explode("||", $content[0]);
	$bvs = $array[0];
	$kf3 = $array[1];
	$dp = $array[2];
	$jb = $array[3];
	
	if($vote==0){
		$bvs = $bvs + 1;
		$votes1="UPDATE poll SET vote=1 WHERE poll_id='1'";
		$votequerys1=mysql_query($votes1);
	}if($vote==1){
		$kf3 = $kf3 + 1;
		$votes2="UPDATE poll SET vote=1 WHERE poll_id='2'";
		$votequerys2=mysql_query($votes2);
	}if($vote==2){
		$dp = $dp +1;
		$votes3="UPDATE poll SET vote=1 WHERE poll_id='3'";
		$votequerys3=mysql_query($votes3);
	}if($vote==3){
		$jb = $jb + 1;
		$votes4="UPDATE poll SET vote=1 WHERE poll_id='4'";
		$votequerys4=mysql_query($votes4);
	}
	
	$insertvote = $bvs."||".$kf3."||".$dp."||".$jb;
	$fp = fopen($filename, "w");
	fputs($fp, $insertvote);
	fclose($fp);
	?>
    
    <h2 align=center><font color='white' > Results</font> </h2>
    <table bgcolor='skyblue' width=500 align=center height=250>
    <tr>
    <td><font size=5 color='white'>Batman Vs. Superman</font></td>
    <td>:</td>
    <td>
    <img src="images/blue.png"
    width='<?php echo(100*round($bvs/($bvs+$kf3+$dp+$jb),2)); ?>'
    height="30">
    <?php echo(100*round($bvs/($bvs+$kf3+$dp+$jb),2));?>%
    </td>
    </tr>
    <tr><br></tr>
    <tr>
    <td><font size=5 color='white'>Kung Fu Panda-3</font></td>
    <td>:</td>
    <td>
     <img src="images/blue.png"
    width='<?php echo(100*round($kf3/($bvs+$kf3+$dp+$jb),2)); ?>'
    height="30">
    <?php echo(100*round($kf3/($bvs+$kf3+$dp+$jb),2));?>%
    </td>
    </tr>
    <tr><br></tr>
    <tr>
    <td><font size=5 color='white'>Deadpool</font></td>
    <td>:</td>
    <td>
    <img src="images/blue.png"
    width='<?php echo(100*round($dp/($bvs+$kf3+$dp+$jb),2)); ?>'
    height="30">
    <?php echo(100*round($dp/($bvs+$kf3+$dp+$jb),2));?>%
    </td>
    </tr>
    <tr><br></tr>
    <tr>
    <td><font size=5 color='white'>Jungle Book</font></td>
    <td>:</td>
    <td>
    <img src="images/blue.png"
    width='<?php echo(100*round($jb/($bvs+$kf3+$dp+$jb),2)); ?>'
    height="30">
    <?php echo(100*round($jb/($bvs+$kf3+$dp+$jb),2));?>%
    </td>
    </tr>
    </table>
    </div>
</div>
<script language="" type="" src="file:"></script> 

</body>
</html>
