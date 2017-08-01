<!DOCTYPE html>
<html>
<body>

<h2>Use the XMLHttpRequest to get the content of a file.</h2>
<p>The content is written in JSON format, and can easily be converted into a JavaScript object.</p>

<p id="demo"></p>

<script>
var z="----";

function ob2(obj)
{

/*
	if(obj[0].selected==1)
	{
	document.getElementById("demo3").innerHTML+=obj[0].name+"<br />";
	ob2(obj[0].children);	
	}
	else
	document.getElementById("demo3").innerHTML+=obj.name+"<br />";	
*/


for (j in obj.children){
	z+="----";
if( obj.children[j].selected==1)
{
	document.getElementById("demo3").innerHTML+=z+obj.children[j].name+"<br />";	
	ob2(obj.children[j]);
}
}

}


function op1(obj)
{

	for (j in obj.children){
		
if( obj.children[j].selected==1)
{
	ob2(obj.children[j]);
}

}

}
function op(obj)
{
for (j in obj.menu)
{
if(obj.menu[j].type=="sectionheader")
{
document.getElementById("demo3").innerHTML+=z+obj.menu[j].name+"<br />";
op1(obj.menu[j]);
 }
else{

	document.getElementById("demo3").innerHTML+=obj.menu[j].name+"<br />";
	}
	
}//
}


var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        document.getElementById("demo").innerHTML = myObj.name;
      //  for (x in myObj) {
    //document.getElementById("demo1").innerHTML += myObj[x] + "<br>";}




for (i in myObj.body.Recommendations)
{
	z="----";
	document.getElementById("demo3").innerHTML+=myObj.body.Recommendations[i].RestaurantName+"<br />";
 op( myObj.body.Recommendations[i]);
document.getElementById("demo3").innerHTML+="<br /><br /><br /><br />";
}



    }
};
xmlhttp.open("GET", "foodyo_output.json", true);
xmlhttp.send();

</script>

<p>Take a look at <a href="foodyo_output.json" target="_blank">json_demo.txt</a></p>
<br /><br /><br />
<div id="demo1"></div>

<br /><br /><br />
<div id="demo2"></div>
<br /><br /><br />
<div id="demo3"></div>

</body>
</html>
