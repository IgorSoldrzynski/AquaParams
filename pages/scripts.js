function result() {
	var result = eval(document.getElementById('display').value);
	document.getElementById('pastResults').innerHTML = document.getElementById('display').value + '=' + result + '\n' + document.getElementById('pastResults').innerHTML;
	document.getElementById('display').value = result;
}

function digit(digit) {
	document.getElementById('display').value += digit;
}

function clearDisplay() {
	document.getElementById('display').value = null;
}

function backspaceDisplay() {
	var sentence = document.getElementById('display').value;
	sentence = sentence.substring(0 , sentence.length - 1);
	document.getElementById('display').value = sentence;
}

document.getElementById("html").addEventListener("keyup", 
	function(event) {
		event.preventDefault();
		var element;
		var propKey = true;
		
		switch(event.keyCode) {
			//if pressed "0"			
			case 48:
			case 96:
				element = document.getElementById("zero");
				break;
			//if pressed "1"			
			case 49:
			case 97:
				element = document.getElementById("one");
				break;
			//if pressed "2"			
			case 50:
			case 98:
				element = document.getElementById("two");
				break;
			//if pressed "3"			
			case 51:
			case 99:
				element = document.getElementById("three");
				break;
			//if pressed "4"			
			case 52:
			case 100:
				element = document.getElementById("four");
				break;
			//if pressed "5"			
			case 53:
			case 101:
				element = document.getElementById("five");
				break;
			//if pressed "6"			
			case 54:
			case 102:
				element = document.getElementById("six");
				break;
			//if pressed "7"
			case 55:
			case 103:
				element = document.getElementById("seven");
				break;
			//if pressed "8"
			case 56:
			case 104:
				element = document.getElementById("eight");
				break;
			//if pressed "9"
			case 57:
			case 105:
				element = document.getElementById("nine");
				break;
			//if pressed coma
			case 108:
			case 188:
			case 190:
				element = document.getElementById("coma");
				break;
			//if pressed =
			case 187:
			case 13:
				element = document.getElementById("equals");
				break;
			//if pressed "/"
			case 111:
			case 191:
			case 220:
				element = document.getElementById("divide");
				break;
			//if pressed "*"
			case 106:
				element = document.getElementById("multiply");
				break;
			//if pressed "-"
			case 109:
			case 189:
				element = document.getElementById("substract");
				break;
			//if pressed "+"
			case 107:
				element = document.getElementById("add");
				break;
			//if pressed ESC
			case 27:
				element = document.getElementById("clear");
				break;
			//if pressed BACKSPACE
			case 8:
				element = document.getElementById("backspace");
				break;
			default:
				propKey = false;
				element = document.getElementById("display");
				break;
		}
		
		//when the correct key has been pressed:
		if(propKey){
			element.click();
			element.style.opacity = "0.5";
			element.style.color = "red";
			setTimeout(function colorBack(){element.style.opacity=null; element.style.color=null;},100);
		}
			
});