if(location.protocol!=='https:'){
	const httpsURL = 'https://'+ location.href.split('//')[1];
	location.replace(httpsURL)
}