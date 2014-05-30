function bmi() {
var h = parseInt(document.getElementById('height').value);
var w = parseInt(document.getElementById('weight').value);
var c = h/100;
var b = w/(c*c);

if (isNaN(b)) {
	alert("您尚未輸入任何資料！");
} else if (Number(b < 18)) {
	document.write("你好，你的BMI值是" + b + "<br/>BMI小於18.5，體重過輕囉!<br/>");
} else if (Number(b > 18 && b < 24)) {
	document.write("你好，你的BMI值是" + b + "<br/>BMI是正常的，體重正常。<br/>");
} else if (Number(b > 24)) {
	document.write("你好，你的BMI值是" + b + "<br/>BMI大於24，體重過重囉!<br/>");
}
}
