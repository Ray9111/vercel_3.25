<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>張睿浩簡介</title>
	<style type="text/css">

* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}

h1 {color:blue; font-size:60px;}

h2 {color:#33ff33; font-size:40px;}

</style>
<script>

function change1() {

document.getElementById("pic").src = "mountain.jpg";

document.getElementById("h2text").innerText = "靜宜資管";

}

function change2() {

document.getElementById("pic").src = "cliff.jpg";

document.getElementById("h2text").innerText = "ZHANG RUI HAO";

}

</script>
</head>
<body>
	<table width="80%">
		<tr>
			<td>
				<img src="cliff.jpg" width="110%"id="pic"
onmouseover="change1()" onmouseout="change2()"></img>
			</td>

			<td>
				<h1>張睿浩</h1>
				<h2 id="h2text">RUI-HAO-ZHANG</h2>
			</td>
		</tr>
	</table>

	<table width="70%" border="1">
		<tr>
			<td>
	靜宜大學：<a href="https://www.pu.edu.tw">https://www.pu.edu.tw</a><br>
		IG：<a href="https://www.instagram.com/ruihao_0907">https://www.instagram.com/ruihao_0907</a><br>
		Tel:<a href="tel:04-26328001,18110">04-26328001#18110</a><br>
		E-Mail:<a href="mailto:ray949397@gmail.com">ray949397@gmail.com</a><br>
</td>
<td>
		大象席地而坐電影配樂<br>
		<audio controls>
		<source src="elephant.mp3" type="audio/mP3">
		</audio><br>
</td>
<td>
		不要去臺灣<br>
		<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
</td>
<td>
	<iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/a7798c4e-958d-4866-91b4-03a9d2f1b6b2">
</iframe>
</td>
</tale>
 <?php echo date("Y-m-d") ?>
</body>
</html>