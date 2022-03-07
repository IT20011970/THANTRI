var setImage = 'image1';
	function changePic(){
		var image = document.getElementById('pic');
		if(setImage=='image1'){
			 image.src='../images/image2.jpg';
			 setImage='image2';
		}
		else if(setImage=='image2'){
			 image.src='../images/image3.jpg';
			 setImage='image3';
		} 
		else if(setImage=='image3'){
			 image.src='../images/image4.jpg';
			 setImage='image4';
		}
		else if(setImage=='image4'){
			 image.src='../images/image5.jpg';
			 setImage='image5';
		} 
		else{
			 image.src='../images/image5.jpg';
			 setImage='image1';
		}
	 }
var timeChange = setInterval('changePic();',2000);  