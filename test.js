
var myform=document.forms.myform;
alert("hello");

var bbb;
myform.seater.onclick=function(bbb=myform.seater.value){
    if(bbb==1)
    {myform.fpm.value=1000;}
    else if(bbb==2)
     {myform.fpm.value=2000;}

     else
     	 {myform.fpm.value=1000;}
};