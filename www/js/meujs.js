function capturePhoto(){
	navigator.camera.getPicture(onPhotoDataSuccess,onFail,{quality:50, destinationType:destinationType.DATA_URL});	
}

function capturePhotoEdit(){
	navigator.camera.getPicture(onPhotoDataSuccess,onFail,{quality:50, allowEdit:true,
	destinationType:destinationType.DATA_URL});		
}

function getPhoto(source){
	navigator.camera.getPicture(onPhotoDataURISuccess,onFail,{quality:50, allowEdit:true,
	destinationType:destinationType.DATA_URL, sourceType:source});	
}