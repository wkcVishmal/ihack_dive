//database connection
<?php
	function phpGetEvent(){
		$con = mysql_connect("localhost","root","");
		if(!$con){
			die("can not connect".mysql_error());
		}
		mysql_select_db("ihack",$con);
		$sql="SELECT event FROM events WHERE user_id = 'U001' OR user_id = 'U002'";
		$result=mysql_query($sql);
		$allEvents = "";
		while($record=mysql_fetch_array($result)){
			$allEvents = $allEvents.' '.$record['event'].'<br/><br/>';	
		}
		mysql_close($con);
		$a = "asd";
		$b = "gtr";
		$re = $a.''.$b;
     	return $allEvents;
}

?>


<script>
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
		var day_event = "<?php echo phpGetEvent() ?>";
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
</script>