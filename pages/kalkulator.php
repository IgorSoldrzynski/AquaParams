<?php 
echo'
<link rel="stylesheet" type="text/css" href="pages/calc.css" />
	<div id="container">
		<form id="calcForm">
			<h3>calcJS is-001</h3>
			<input type="text" id="display">
			<br/>
			<button id="seven" type="button" onclick="digit(7)">7</button>
			<button id="eight" type="button" onclick="digit(8)">8</button>
			<button id="nine" type="button" onclick="digit(9)">9</button>
			<button id="divide" type="button" onclick="digit(\'/\')">/</button>
			<button id="modulo" type="button" onclick="digit(\'%\')">% (mod)</button>
			<br/>
			<button id="four" type="button" onclick="digit(4)">4</button>
			<button id="five" type="button" onclick="digit(5)">5</button>
			<button id="six" type="button" onclick="digit(6)">6</button>
			<button id="multiply" type="button" onclick="digit(\'*\')">*</button>
			<button id="bracketOpen" type="button" onclick="digit(\'(\')">(</button>
			<br/>
			<button id="one" type="button" onclick="digit(1)">1</button>
			<button id="two" type="button" onclick="digit(2)">2</button>
			<button id="three" type="button" onclick="digit(3)">3</button>
			<button id="substract" type="button" onclick="digit(\'-\')">-</button>
			<button id="bracketClose" type="button" onclick="digit(\')\')">)</button>
			<br/>
			<button id="zero" type="button" onclick="digit(0)">0</button>
			<button id="coma" type="button" onclick="digit(\'.\')">,</button>
			<button id="equals" type="button" onclick="result()">=</button>
			<button id="add" type="button" onclick="digit(\'+\')">+</button>
			<button id="power" type="button" onclick="digit(\'**\')">^(pow)</button>
			<br/>
			<button id="clear" type="button" onclick="clearDisplay()">clear</button>
			<button id="backspace" type="button" onclick="backspaceDisplay()"><(backspace)</button>
		</form>
		<div id="rightColumn">
			<h2>Poprzednie wyniki:</h2>
			<textarea id="pastResults" readonly="readonly"></textarea>
		</div>
    </div>
    <p> </p>
<script type="text/javascript" src="pages/scripts.js"></script>
';
?>