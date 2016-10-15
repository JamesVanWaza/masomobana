/**
 * Google Sign On Implementation
 * Author: James Van Waza
 * Email: jgacuca@jamesvanwaza.com
 * Version: 1.0.0
 */

/** Sign in the user */
function onSignIn(googleUser){
	var profile = googleUser.getBasicProfile();
	console.log('ID' + profile.getId());
	console.log('Name' + profile.getName());
	console.log('Image URL' + profile.getImageUrl());
	console.log('Email' + profile.getEmail());

	/** After a user successfully signs in, get the user's ID token */
	var id_token = googleUser.getAuthResponse().id_token;

	/** Send the ID token to your server with an HTTPS POST request */
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'https://masomobana2016.jamesvanwaza.com/tokensignin');
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.onload = function(){
		console.log('Signed in as: ' + xhr.responseText);
	}
	xhr.send('idtoken=' + id_token);
}

/** Retrieve Profile Information for the user */
if (auth2.isSignedIn.get()) {
	var profile = auth2.currentUser.get().getBasicProfile();
	console.log('ID' + profile.getId());
	console.log('Name' + profile.getName());
	console.log('Image URL' + profile.getImageUrl());
	console.log('Email' + profile.getEmail());
}

/** Sign out the User */
function signOut(){
	var auth2 = gapi.auth2.getAuthInstance();
	auth2.signOut().then(function(){
		console.log('User signed out');
	});
}