//this function will find today's date
function calendar(){
	var day=['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Satureday'];
	var month=['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Auguest', 'September', 'October', 'November', 'December'];
	var d = new Date();
	setText('calendar-day', day[d.getDay()]);
	setText('calendar-date', d.getDate());
	setText('calendar-month-year', month[d.getMonth()]+' '+(1900+d.getYear()));
};

//this function will set text value of <p> tags
function setText(id, val){
	if(val < 10){
		val = '0' + val; //add leading 0 if val < 10
	}
	document.getElementById(id).innerHTML = val;
};

/* This is for load event */
function load_event(){
	var day_event = 'This is a event';
	setText('event-description', day_event);
};

function setText(id, val){
	document.getElementById(id).innerHTML = val;
};


function start(){
	calendar();
	load_event();
}

//call calendar() and load_event() when page load
window.onload = start;