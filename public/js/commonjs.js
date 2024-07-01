// JavaScript Document

/*$("input[type=text], textarea").mouseover(zoomDisable).mousedown(zoomEnable);
$("input[type=text], text").mouseover(zoomDisable).mousedown(zoomEnable);
function zoomDisable(){
  $('head meta[name=viewport]').remove();
  $('head').prepend('<meta name="viewport" content="user-scalable=0" />');
}
function zoomEnable(){
  $('head meta[name=viewport]').remove();
  $('head').prepend('<meta name="viewport" content="user-scalable=1" />');
}*/
function GoToTop()
{
	window.parent.scrollTo(0,0);//Code for go to top of the page
}

function setMsg(msg,id){
	document.getElementById(id).innerHTML=msg;
	
	}

function SetBlur(strEle){
	rt=true;
	
	if(strEle.value == ""){
		MarkError(strEle.id);
		rt=false;
		
		}
		else {
		
		 clearError(strEle.id);
		}	
	return rt;	
 }
function CompairDateTime(a,b){
	

	a=removegap(a);
	b=removegap(b);


	a_Arr=a.split(" ");
	b_Arr=b.split(" ");
	aTime=a_Arr[1];
	bTime=b_Arr[1];
	aDate=a_Arr[0].split("-");
	bDate=b_Arr[0].split("-");
	var aa1=aTime.split(":");
	var aa2=bTime.split(":");
//	(year, month, day, hours, minutes, seconds, milliseconds);
//alert(a);
//alert(aDate[0]+"-"+aDate[1]+"-" +aDate[2]);
//alert(aa1[0]+"-"+aa1[1]+"-" +aa1[2]);
	var d1=new Date(parseInt(aDate[0],10),(parseInt(aDate[1],10))-1,parseInt(aDate[2],10),parseInt(aa1[0],10),parseInt(aa1[1],10),parseInt(aa1[2],10));
	var d2=new Date(parseInt(bDate[0],10),(parseInt(bDate[1],10))-1,parseInt(bDate[2],10),parseInt(aa2[0],10),parseInt(aa2[1],10),parseInt(aa2[2],10));
	//alert(d1);
	//alert(d2);
	var dd1=d1.valueOf();
	var dd2=d2.valueOf();
//alert(dd1);
	//alert(dd2);
	//alert("done");
	//alert(dd1>=dd2);
	
	//alert(a + " " + b );
	//alert(d1  );
	//alert(dd1 + "##########"+ dd2)
	//alert(d2  );
	//alert(dd1>=dd2);
	if(dd1>=dd2) return 1;
	//alert("a is greater");
	
	else return 0;
	//alert("b is greater");
	
}



/////////////////////


function CompairTimeIsEqual(a,b){
		a=removegap(a);
	b=removegap(b);
	a_Arr=a.split(" ");
	b_Arr=b.split(" ");
	aTime=a_Arr[1];
	bTime=b_Arr[1];
	aDate=a_Arr[0].split("-");
	bDate=b_Arr[0].split("-");
	var aa1=aTime.split(":");
	var aa2=bTime.split(":");
var d1=new Date(parseInt(aDate[0],10),(parseInt(aDate[1],10))-1,parseInt(aDate[2],10),parseInt(aa1[0],10),parseInt(aa1[1],10),parseInt(aa1[2],10));
	var d2=new Date(parseInt(bDate[0],10),(parseInt(bDate[1],10))-1,parseInt(bDate[2],10),parseInt(aa2[0],10),parseInt(aa2[1],10),parseInt(aa2[2],10));
	//alert(d1);

var dd1=d1.valueOf();
var dd2=d2.valueOf();

if(dd1==dd2) return 0;
//alert("a is greater");
else return 1;
//alert("b is greater");
	
}/*
function CompairTime(a,b){
	a_Arr=a.split(" ");
	b_Arr=b.split(" ");
	aTime=a_Arr[1];
	bTime=b_Arr[1];
	aDate=a_Arr[0].split("-");
	bDate=b_Arr[0].split("-");
	var aa1=aTime.split(":");
	var aa2=bTime.split(":");
var d1=new Date(parseInt(aDate[0],10),(parseInt(aDate[1],10))-1,parseInt(aDate[2],10),parseInt(aa1[0],10),parseInt(aa1[1],10),parseInt(aa1[2],10));
	var d2=new Date(parseInt(bDate[0],10),(parseInt(bDate[1],10))-1,parseInt(bDate[2],10),parseInt(aa2[0],10),parseInt(aa2[1],10),parseInt(aa2[2],10));
	//alert(d1);
var dd1=d1.valueOf();
var dd2=d2.valueOf();

if(dd1>=dd2) return 1;
//alert("a is greater");
else return 0;
//alert("b is greater");
	
}*/

function getTimeStamp(a){
	a=removegap(a);
	
	a_Arr=a.split(" ");
	aTime=a_Arr[1];
	aDate=a_Arr[0].split("-");
	var aa1=aTime.split(":");
var d1=new Date(parseInt(aDate[0],10),(parseInt(aDate[1],10))-1,parseInt(aDate[2],10),parseInt(aa1[0],10),parseInt(aa1[1],10),parseInt(aa1[2],10));
var dd1=d1.valueOf();
return dd1;
}
function isTimeInbetween(a,b,c)
{
		a=removegap(a);
	b=removegap(b);
		c=removegap(c);
	
//var a="04:44:00";
//var b="06:03:00";
//var c="6:37:00";

/*var aa1=a.split(":");
var aa2=b.split(":");
var aa3=c.split(":");

var d1=new Date(parseInt("2001",10),(parseInt("01",10))-1,parseInt("01",10),parseInt(aa1[0],10),parseInt(aa1[1],10),parseInt(aa1[2],10));
var d2=new Date(parseInt("2001",10),(parseInt("01",10))-1,parseInt("01",10),parseInt(aa2[0],10),parseInt(aa2[1],10),parseInt(aa2[2],10));
var d3=new Date(parseInt("2001",10),(parseInt("01",10))-1,parseInt("01",10),parseInt(aa3[0],10),parseInt(aa3[1],10),parseInt(aa3[2],10));

*/

	a_Arr=a.split(" ");
	b_Arr=b.split(" ");
	c_Arr=c.split(" ");
	aTime=a_Arr[1];
	bTime=b_Arr[1];
	cTime=c_Arr[1];
	aDate=a_Arr[0].split("-");
	bDate=b_Arr[0].split("-");
	cDate=c_Arr[0].split("-");
	var aa1=aTime.split(":");
	var aa2=bTime.split(":");
	var aa3=cTime.split(":");
var d1=new Date(parseInt(aDate[0],10),(parseInt(aDate[1],10))-1,parseInt(aDate[2],10),parseInt(aa1[0],10),parseInt(aa1[1],10),parseInt(aa1[2],10));
	var d2=new Date(parseInt(bDate[0],10),(parseInt(bDate[1],10))-1,parseInt(bDate[2],10),parseInt(aa2[0],10),parseInt(aa2[1],10),parseInt(aa2[2],10));
	var d3=new Date(parseInt(cDate[0],10),(parseInt(cDate[1],10))-1,parseInt(cDate[2],10),parseInt(aa3[0],10),parseInt(aa3[1],10),parseInt(aa3[2],10));
	//alert(d1);
	
	

var dd1=d1.valueOf();
var dd2=d2.valueOf();
var dd3=d3.valueOf();

if(dd3>=dd1 && dd3<=dd2) return 1;
//alert("c is In between");
else return 0;//alert("c is not between");

}

//////////////////////////////
 function convert12to24WithSec(timeStr){
	 var meridian = timeStr.substr(timeStr.length-2).toLowerCase();;
    var hours =  timeStr.substr(0, timeStr.indexOf(':'));
    
	var minutessec = timeStr.substring(timeStr.indexOf(':')+1, timeStr.indexOf(' '));
	//alert(minutessec);
	var arrminutes=minutessec.split(":");
	var minutes=arrminutes[0];
	var seconds=arrminutes[1];
	
	
    if (meridian=='pm')
    {//if(hours==12){ hours=12;}
        if (hours!=12)
        {
            hours=hours*1+12;
        }
        else
        {
          //  hours = (minutes!='00') ? '0' : '24' ;
		  
        }
    }else{
		if(hours==12){ hours=0;}
		}

    return hours+':'+minutes+':'+seconds;
}
function convert12to24(timeStr)
{
    var meridian = timeStr.substr(timeStr.length-2).toLowerCase();;
    var hours =  timeStr.substr(0, timeStr.indexOf(':'));
    var minutes = timeStr.substring(timeStr.indexOf(':')+1, timeStr.indexOf(' '));
    if (meridian=='pm')
    {//if(hours==12){ hours=12;}
        if (hours!=12)
        {
            hours=hours*1+12;
        }
        else
        {
          //  hours = (minutes!='00') ? '0' : '24' ;
		  
        }
    }else{
		if(hours==12){ hours=0;}
		}

    return hours+':'+minutes;
}

function clearError(objid){
	//alert(objid);
	document.getElementById(objid).style.borderColor = "";
	/*$('#'+objid).removeClass('csErrorMark');
	$('#'+objid).removeClass('csRemoveErrorMark');
	$('#'+objid).addClass('csRemoveErrorMark');*/
	
}
function MarkError(objid){
	
	document.getElementById(objid).style.borderColor = "red"; 
	//$('#'+objid).removeClass('csRemoveErrorMark');
	//$('#'+objid).removeClass('csErrorMark');
	//$('#'+objid).addClass('csErrorMark');
	
	//$('#'+objid).focus();
}


function HideMe(obj)
{
	document.getElementById(obj).style.display = "none";
}
function ShowMe(obj)
{
	document.getElementById(obj).style.display = "block";
}
var urlprefix = ".php";
////Email Validation//////
function isValidEmail(str) {

		var at="@";
		var dot=".";
		var lat=str.indexOf(at);
		var lstr=str.length;
		var ldot=str.indexOf(dot);
		if (str.indexOf(at)==-1){
		   //alert("Invalid E-mail ID");
		   return false;
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   //alert("Invalid E-mail ID");
		   return false;
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    //alert("Invalid E-mail ID");
		    return false;
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    //alert("Invalid E-mail ID");
		    return false;
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    //alert("Invalid E-mail ID");
		    return false;
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    //alert("Invalid E-mail ID");
		    return false;
		 }
		
		 if (str.indexOf(" ")!=-1){
		    //alert("Invalid E-mail ID");
		    return false;
		 }

 	}

//////////////////////////
function isValidTenDigitMobileNo(inputtxt)  
{  
  //alert("here" + inputtxt);
  var phoneno = /^\d{10}$/;  
  if(inputtxt.match(phoneno)){  
      return true;  
  }  
  else  
  {  
       // alert("message");  
        return false;  
  }  
} 
