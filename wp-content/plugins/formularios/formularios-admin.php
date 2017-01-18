<?php 

// For those who are object orientated. Add a class 
// function as the menu callback and setup the 
// menus automatically. 
 
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
 

esc_html_e( 'Admin Page Test', 'textdomain' ); 

?>

<h1><a>Untitled Form</a></h1>
		<form id="form_6472" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Untitled Form</h2>
			<p>This is your form description. Click here to edit.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Name </label>
		<span>
			<input id="element_1_1" name= "element_1_1" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="element_1_2" name= "element_1_2" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Date </label>
		<span>
			<input id="element_2_1" name="element_2_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_2_1">MM</label>
		</span>
		<span>
			<input id="element_2_2" name="element_2_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_2_2">DD</label>
		</span>
		<span>
	 		<input id="element_2_3" name="element_2_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_2_3">YYYY</label>
		</span>
	
		<span id="calendar_2">
			<img id="cal_img_2" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_2_3",
			baseField    : "element_2",
			displayArea  : "calendar_2",
			button		 : "cal_img_2",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Drop Down </label>
		<div>
		<select class="element select medium" id="element_3" name="element_3"> 
			<option value="" selected="selected"></option>
<option value="1" >First option</option>
<option value="2" >Second option</option>
<option value="3" >Third option</option>

		</select>
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="6472" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	