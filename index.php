<html>
	<head>
		<title>Rock Paper Scissors</title>
		<link rel="stylesheet" type="text/css" href="rps.css">
		<script language="javascript" type="text/javascript" src="rps.js"></script>
	</head>
	<body onload="init()">
		<?php
		//useless php so heroku buildpack works
		?>
		<div id="gameWindow">
			
			<div id="introScreen">
				<div id="introScreenContent">
					<h1>Rock Paper Scissors</h1>
					<div id="btnStart" class="button" onclick="startGame()">Start Game</div>
				</div>
			</div>
			
			<div id="endScreen">
				<div id="endScreenContent">
					<h1 id="txtEndTitle">Something beats something</h1>
					<h1 id="txtEndMessage">You Win, Lose, or Tie</h1>
					<div id="btnReplay" class="button" onclick="replay()">Play Again</div>
				</div>
			</div>
			
			<div id="btnGo" onclick="go()">GO</div>

			<div id="playerPanel">
				<h2>Player</h2>
				<img id="imgPlayer" src="images/question.png">
				<br><br>
				<div id="btnRock" class="iconButton" onclick="select('rock')">
					<img src="images/rock.png">
					<br>Rock
				</div>
				<div id="btnPaper" class="iconButton" onclick="select('paper')">
					<img src="images/paper.png">
					<br>Paper
				</div>
				<div id="btnScissors" class="iconButton" onclick="select('scissors')">
					<img src="images/scissors.png">
					<br>Scissors
				</div>
			</div>

			<div id="computerPanel">
				<h2>Computer</h2>
				<img id="imgComputer" src="images/question.png">
				<br><br>
				<div id="lblRock" class="iconLabel">
					<img src="images/rock.png">
					<br>Rock
				</div>
				<div id="lblPaper" class="iconLabel">
					<img src="images/paper.png">
					<br>Paper
				</div>
				<div id="lblScissors" class="iconLabel">
					<img src="images/scissors.png">
					<br>Scissors
				</div>
			</div>

			
		</div>
	</body>
</html>

