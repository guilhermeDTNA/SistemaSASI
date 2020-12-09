if(location.protocol!=='http:'){
	const httpURL = 'http://'+ location.href.split('//')[1];
	location.replace(httpURL);
}