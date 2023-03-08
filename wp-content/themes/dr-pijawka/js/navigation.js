/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

	const burger = document.querySelector( '.burger' );
	const menuMobile =  document.querySelector('.menu-container');
	const navLink =  document.querySelector('.navbar-list-mobile');

	burger.addEventListener('click', function(){
		menuMobile.classList.toggle('active');
	});

	navLink.addEventListener('click', function(){
		menuMobile.classList.remove('active');
	});