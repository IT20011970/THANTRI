function EnableButton(){
	if(document.getElementById("cbox2").checked)
	{
		document.getElementById("submitbt").disabled = false;
	}
	else
	{
		document.getElementById("submitbt").disabled = true;
	}
}

function loadData(name){
	if(name == "buton1")
	{
		document.getElementById("image1").src = "../images/computer.jpg";
		document.getElementById("bookpara").innerHTML = "Book Details <br> <br> Name : Effective Java <br> Athor : Joshua Bloch <br> Category : Education <br> ISBN : EDUEH201 <br> Year : 2001<br>";
	} 
	else if(name == "buton2")
	{
		document.getElementById("image1").src = "../images/midnightsun.jpg";
		document.getElementById("bookpara").innerHTML = "Book Details <br> <br> Name : Midnight Sun <br> Athor : Stephenie Meyer <br> Category : Novel <br> ISBN : NOVMD202 <br> Year : 2020<br>";
	}
	else if (name == "buton3")
	{
		document.getElementById("image1").src = "../images/kandauda.jpg";
		document.getElementById("bookpara").innerHTML = "Book Details <br> <br> Name : කන්ද උඩ ගින්දර - (Kanda Uda Gindara) <br> Athor : Jackson Anthony <br> Category : Story <br> ISBN : STOKUG203 <br> Year : 2020<br>";
	}
	else if (name == "buton4")
	{
		document.getElementById("image1").src = "../images/phy6.jpg";
		document.getElementById("bookpara").innerHTML = "Book Details <br> <br> Name : The Physics Book: Big Ideas Simply Explained <br> Contributor : Jim Al-Khalili <br> Category : Education <br> ISBN : EDUPHY204 <br> Year : 2020<br>";
	}

	else if (name == "buton5")
	{
		document.getElementById("image1").src = "../images/alchemist.jpg";
		document.getElementById("bookpara").innerHTML = "Book Details <br> <br> Name : The Alchemist <br> Athor : Paulo Coelho <br> Category : Novel <br> ISBN : NOVTHAL205 <br> Year : 1988<br>";
	}

	else
	{
		alert("Invalid!!");
	}
}

function updatefunction() {
	if (confirm("Do you want to save changes?")) 
	{
		alert("Update successful!");
		return true;
	} 
	else 
	{
		alert("Update cancelled!");
		return false;
	}
	   
}

function changePassword(){
	if(document.getElementById("pwd").value != document.getElementById("repwd").value){
		alert("Password Mismatch!");
		return false;
	}
	else{
		alert("Password Changed successfully!");
		return true;
	}
}

function sendData() {
  
  	alert("Thank you for the feedback");
  
}

function deletefeedback() {
	if (confirm("Do you want to delete your feedback?")) 
	{
		alert("Feedback Deleted");
		return true;
	} 
	else 
	{
		alert("Delete cancelled!");
		return false;
	}
	   
}