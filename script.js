function blur_func(id1,text,num)
{
	var x=document.getElementById(id1);
	var y=document.getElementsByClassName("error");
	if(x.value=="")
	{
		y[num].innerHTML=text;
	}
	else
	{
		y[num].innerHTML="";
	}
}
  