$(function(){

	console.log("Hello, from src/js/main.js");

	var $headerNavContainer = $("#main-nav__container"),
		$headerNav = $("#menu-header");

	var Site = function() {

		this.name = "wordpress-starter-theme";

	};

	Site.prototype.sayHi = function() {
		console.log("Hello from", this.name);
	};

	Site.prototype.supportsJS = function() {

		$("html").addClass(" js");
		return true;
	};

	Site.prototype.init = function() {
		this.sayHi();
		this.supportsJS();
	};

	var site = new Site();

	site.init();


});