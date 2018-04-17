<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>animate</title>
</head>
<body>
<ul class="text-anime hidden">
	<li>C</li>
	<li>S</li>
	<li>E</li>
	<li></li>
	<li></li>
	<li>D</li>
	<li>E</li>
	<li>P</li>
	<li>T</li><br>
	<li><p>SVCE</p></li>
</ul>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		setTimeout(function(){
			$('.text-anime').removeClass('hidden');
		}, 100);
	})();
</script>

</body>



<style>
	*{
		margin:0;
		padding: 0;
	}

	body{
		background-color: black;
	}

	.text-anime{
		list-style: none;
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translateX(-50%) translateY(-50%);
	}

	.text-anime li{
		display: inline-block;
		margin-right: 5px;
		font-size: 5em;
		font-weight: 300;
		font-family: sans-serif;
		color:white;
		opacity:1;
		transition: all 2s ease;
	}

	.text-anime li:last-child{
		margin-right: 0;
	}

	p{font-size: 40px;  margin-right: 100px;}
	.text-anime.hidden{
		opacity: 1;
	}

	.text-anime.hidden li:nth-child(1){ transform: translateX(-20px) translateY(-20px); }
	.text-anime.hidden li:nth-child(2){ transform: translateX(-20px) translateY(-20px); }
	.text-anime.hidden li:nth-child(3){ transform: translateX(-20px) translateY(-20px); }
	.text-anime.hidden li:nth-child(4){ transform: translateX(10px) translateY(-200px); }
	.text-anime.hidden li:nth-child(5){ transform: translateX(10px) translateY(-200px); }
	.text-anime.hidden li:nth-child(6){ transform: translateX(-10px) translateY(-20px); }
	.text-anime.hidden li:nth-child(7){ transform: translateX(-10px) translateY(-20px); }
	.text-anime.hidden li:nth-child(8){ transform: translateX(-10px) translateY(-20px); }
	.text-anime.hidden li:nth-child(9){ transform: translateX(-10px) translateY(-20px); }

	.text-anime.hidden li p:nth-child(10){ transform: translateX(100px) translateY(-100px); }

</style>
</html>