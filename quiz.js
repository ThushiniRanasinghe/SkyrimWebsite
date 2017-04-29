
window.onerror = function(m, u, l){
alert('Javascript Error: '+m+'\nURL: '+u+'\nLine Number: '+l);
return true;
}

'use strict';

window.onload = init;

function init() {
document.getElementById('btn').onclick = validate;

document.getElementById('btnclr').onclick = clear;
}

function validate() {
var radios = document.getElementById("quiz").getElementsByTagName("INPUT");
var right = 0;
var wrong = 0; 

for(var i=0, len=radios.length ; i<len ; i++) {
  if(radios[i].value == "x") {
    if(radios[i].checked == true){
      right++;
      radios[i].parentNode.parentNode.className = 'rightans';
    }else{
      wrong++;
      radios[i].parentNode.parentNode.className = 'wrongans';
    }
  }
} 
var marks = ((2*right)-wrong);


document.getElementById("score").innerHTML = 'Correct: '+ right +'<br/>Incorrect: ' + wrong +'<br/> Total marks : ' + marks +' Out of 20';


if (marks >=15){
	 document.getElementById('p').style.backgroundColor='green'
	}else if(marks>=10 && marks<15){
		document.getElementById('p').style.backgroundColor='blue'
	}else if(marks>=5 && marks<10){
		document.getElementById('p').style.backgroundColor='yellow'
	}else if(marks>=0 && marks<5){
		document.getElementById('p').style.backgroundColor='pink'
	}else{
		 document.getElementById('p').style.backgroundColor='orange'
		}
}

function clear(){
var radios = document.getElementById("quiz").getElementsByTagName("INPUT");
 document.getElementById('p').style.backgroundColor='white'
for(var i=0, len=radios.length ; i<len ; i++) {
radios[i].checked = false;
if (radios[i].value == "x"){
 radios[i].parentNode.parentNode.className = '';
}
}
document.getElementById("score").innerHTML = '';
}
var timeInSecs;
        var ticker;

        function startTimer(secs){
            timeInSecs = parseInt(secs)-1;
            ticker = setInterval("tick()",1000);   // every second
            }

            function tick() {
            var secs = timeInSecs;
            if (secs>0) {
            --timeInSecs;
            }
            else {
            clearInterval(ticker);// stop counting at zero
            alert(" Sorry Your Time is Up ! ! Try Again ");
            location.reload();
            }

            document.getElementById("demo").innerHTML = secs;
        }

        startTimer(30);   

