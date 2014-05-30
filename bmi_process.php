<?php
header('Content-type: text/html; charset=utf-8');
?>

<?php
$height=$_POST["height"];
$weight=$_POST["weight"];
$changm=$height/100;
$bmi=$weight/($changm*$changm);

if($bmi=='') {
	echo "您尚未輸入任何資料!<br/>";

}else if($bmi<18.5) {
	echo "你好，你的BMI值是".$bmi."<br/>BMI小於18.5，體重過輕囉!<br/>";

}else if($bmi>18.5 && $bmi<24) {
	echo "你好，你的BMI值是".$bmi."<br/>BMI是正常的，體重正常。<br/>";

}if($bmi>24) {
	echo "你好，你的BMI值是".$bmi."<br/>BMI大於24，體重過重囉!<br/>";

}
?>

<input type="button" value="回上一頁" name="back" onclick="javascript:history.back()">
