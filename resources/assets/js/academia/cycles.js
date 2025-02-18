/*!
 * Enrollment.js v0.2
 * (c) 2018 Fraco Salcedo (franco.salcedo.i3@gmail.com)
 * Released under the Trilce Group.
 */

const Cycles = function(type){

	this.init = function()
	{
		this.setVariables();
		window.onload = () => this.run();
	}

	this.setVariables = function(){
	    this.selectCycle  = document.getElementById('beginning-cyle');
	    this.selectVenue  = document.getElementById('beginning-venue');
	    const api = '....';
	}

	this.run = function()
	{

	}
}

export default Cycles