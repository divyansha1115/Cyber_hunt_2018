function index(){
			var ans1=document.getElementById("ans").value;
			if(ans1==="a"){
				document.cookie = "count=2"	;
        document.cookie = "correct=1";
				window.location.href="question02.php";

			}
			else{
				window.location.href="wrong.php";
			}
		}

function question2(){
  var ans2=document.getElementById("ans").value;
  if(ans2==="nightmare"){
        document.cookie = "count=3";
        document.cookie = "correct=2";
        window.location.href="question03.php";
  }
  else{
    window.location.href="wrong.php";
  }
}
function question3(){
	var ans3=document.getElementById("ans").value;
	if(ans3==="pain less operation"){
		document.cookie = "count=4";
    document.cookie = "correct=3";
		window.location.href="question04.php";
	}
	else{
		window.location.href="wrong.php";
	}
}
 function question5(){
  var ans5=document.getElementById("ans").value;
  if(ans5==91){
    document.cookie = "count=6";
    document.cookie = "correct=5";
    window.location.href="question06.php";
  }
  else{
    window.location.href="wrong.php";
  }
}
function question6(){
  var ans6=document.getElementById("ans").value;
  if(ans6==="brother"){
    document.cookie = "count=7";
    document.cookie = "correct=6";
    window.location.href="question07.php";
  }
  else{
    window.location.href="wrong.php";
  }
}
function question7(){
  var ans7=document.getElementById("ans").value;
  if(ans7==="palindrome"){
    document.cookie = "count=8";
    document.cookie = "correct=7";
    window.location.href="question08.php";
  }
  else{
    window.location.href="wrong.php";
  }
}
	function question8(){
	var ans8=document.getElementById("ans").value;
	if(ans8==="chris"){
		document.cookie = "count=9";
    document.cookie = "correct=8";
		window.location.href="question09.php";
	}
	else{
		window.location.href="wrong.php";
	}
}
function question10(){
  var ans10=document.getElementById("ans").value;
  if(ans10==="84"){
    document.cookie = "count=11";
    document.cookie = "correct=10";
    window.location.href="question11.php";
  }
  else{
    window.location.href="wrong.php";
  }
}
 function question11(){
  var ans11=document.getElementById("ans").value;
  if(ans11==="u q t"){
    document.cookie = "count=12";
    document.cookie = "correct=11";
    window.location.href="question12.php";
  }
  else{
    window.location.href="wrong.php";
  }
}
function question12(){
  var ans12=document.getElementById("ans").value;
  if(ans12==="game of thrones"){
    document.cookie = "count=13";
    document.cookie = "correct=12";
    window.location.href="question13.php";
  }
  else{
    window.location.href="wrong.php";
  }
}
function question13(){
  var ans13=document.getElementById("ans").value;
  if(ans13==="fargo and mercedes" || ans13==="mercedes and fargo" ){
    document.cookie = "count=14"
    document.cookie = "correct=13"
    window.location.href="question14.php";
  }
  else{
    window.location.href="wrong.php";
  }
}
 function question14(){
  var ans14=document.getElementById("ans").value;
  if(ans14==="13" ){
    document.cookie = "count=15"
    document.cookie = "correct=14"
    window.location.href="question15.php";
  }
  else{
    window.location.href="wrong.php";
  }
}
function question15(){
  var ans15=document.getElementById("ans").value;
  if(ans15==="6" ){
    document.cookie = "count=16"
    document.cookie = "correct=15"
    window.location.href="question16.php";
  }
  else{
    window.location.href="wrong.php";
  }
}
function question16(){
  var ans16=document.getElementById("ans").value;
  if(ans16==="nobel peace prize" ){
    document.cookie = "count=17"
    document.cookie = "correct=16"
    window.location.href="question17.php";
  }
  else{
    window.location.href="wrong.php";
  }
}
function final(){
		document.cookie = "count=1000"
		window.location.href="time.php";
	}
