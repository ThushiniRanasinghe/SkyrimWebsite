function getVote() {

	var val  = document.poll_form.vote.value;
	
  if (window.XMLHttpRequest) {

    xmlhttp=new XMLHttpRequest();
  } else {  

    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {

    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	
      document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
  }
 
  xmlhttp.open("GET","vote.php?vote="+val,true);
  

  xmlhttp.send();
}
