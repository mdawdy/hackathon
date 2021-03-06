<?php
if(isset($_GET['sidebar'])){
    include('s_header.php');
} else {
    include('header.php');
}
?>

<ul class="breadcrumbs first">
    <li><a href="#">Admin Panel</a></li>
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Dashboard</a></li>
</ul>


<div class="grid_16 widget first">
    <div class="widget_title clearfix">
        <h2>Registration Form</h2>
    </div>
    <div class="widget_body">
        <div class="widget_content">
            <p>The form uses <a href="http://www.vanadiumjs.com/">Vanadium JS</a> to validate the forms from the client side. Vanaadium is simple, inituative, yet powerful. There is no need for coding and it is easily extensible and customizable.</p>
            <p>You can use AJAX to perform the validation server side. It is possible to use inline markup as well as using JSON</p>
            <p>For more, see <a href="http://www.vanadiumjs.com/">the Vanadium JS documentation</a></p>
        </div>
        <table>
            <tr>
                <td width="250px"><label for="fullname">Full Name</label></td>
                <td><input type="text" name="fullname" class=":required"/></td>
            </tr>
            <tr>
                <td><label for="Email">Email</label></td>
                <td><input type="text" name="email" class=":email :required"/></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input name="password" id="pass" type="password" class=":required"/></td>
            </tr>
            <tr>
                <td><label for="Confirm Password">Confirm Password</label></td>
                <td><input name="confirmpassword" type="password" class=":same_as;pass"/></td>
            </tr>
            <tr>
                <td><label for="terms">I accept the Terms and Conditions</label></td>
                <td><input name="terms" type="checkbox" class=":accept"/></td>
            </tr>
            <tr>
                <td></td>
                <td style="padding:9px 5px 15px"><a href="#" class="btn medium"><span>Register</span></a><br /></td>
            </tr>
        </table>
    </div>
</div>

<div class="clear"></div>

<div class="grid_12 widget first">
    <div class="widget_title clearfix">
        <h2>QuickPress</h2>
    </div>
    <div class="widget_body">
        <table class="simple">
            <tr>
                <td>Title</td>
                <td><input type="text" class="large" /></td>
            </tr>
            <tr>
                <td>Content</td>
                <td><textarea class="editor"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <a href="#" class="btn grey"><span>Save Draft</span></a>
                    <a href="#" class="btn blue"><span>Publish</span></a>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="grid_4 widget">
    <div class="widget_title clearfix">
        <h2>Categories</h2>
    </div>
    <div class="widget_body">
        <div class="widget_content">
            <ul class="nested">
                <li><label><input type="checkbox" />Lorem</label></li>
                <li><label><input type="checkbox" />Lorem</label></li>
                <li><label><input type="checkbox" />Lorem</label>
                    <ul>
                        <li><label><input type="checkbox" />Lorem</label></li>
                        <li><label><input type="checkbox" />Lorem</label></li>
                    </ul>
                </li>
                <li><label><input type="checkbox" />Lorem</label></li>
                <li><label><input type="checkbox" />Lorem</label>
                    <ul>
                        <li><label><input type="checkbox" />Lorem</label></li>
                        <li><label><input type="checkbox" />Lorem</label>
                            <ul>
                                <li><label><input type="checkbox" />Lorem</label></li>
                                <li><label><input type="checkbox" />Lorem</label></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><label><input type="checkbox" />Lorem</label></li>
            </ul>
        </div>
    </div>
</div>


<div class="grid_16 widget first">
    <div class="widget_title clearfix">
        <h2>Validation</h2>
    </div>
    <div class="widget_body">
        <form name="validation" method="get" action="">
        <table>
            <tr>
                <td width="20%"><label for="required_field">Required Field</label></td>
                <td>
                        <input id="required_field" class="medium :required" type="text" />
                        <span class="infobar">This field is required</span>
                </td>
            </tr>
            <tr>
                <td><label for="integer">Integer</label></td>
                <td>
                        <input id="integer" class="medium :integer" type="text" />
                        <span class="infobar">Should be integer</span>
                </td>
            </tr>
            <tr>
                <td><label for="float">Float</label></td>
                <td>
                        <input class="medium :float" type="text" />
                        <span class="infobar">A floating type variable</span>
                </td>
            </tr>
            <tr>
                <td><label for="length">Length</label></td>
                <td>
                        <input class="medium :length;4" type="text" />
                        <span class="infobar">Should be 4 characters in length</span>
                </td>
            </tr>
            <tr>
                <td><label for="minimum_length">Minimum Length</label></td>
                <td>
                        <input class="medium :min_length;4" type="text" />
                        <span class="infobar">Should be 4 or more characters in length</span>
                </td>
            </tr>
            <tr>
                <td><label for="less_or_equal">Less or Equal</label></td>
                <td>
                        <input class="medium :max_length;4" type="text" />
                        <span class="infobar">Should be 4 or less characters in length</span>
                </td>
            </tr>
            <tr>
                <td><label for="wthin_range">Within Range</label></td>
                <td>
                        <input class="medium :min_length;4 :max_length;8" type="text" />
                        <span class="infobar">Should be between 4 and 8 characters in length</span>
                </td>
            </tr>
            <tr>
                <td><label for="email">E-Mail</label></td>
                <td>
                        <input id="email" class="medium :email" type="text">
                </td>
            </tr>
            <tr>
                <td><label for="confirmation">Confirmation</label></td>
                <td>
                        <input id="pass1" class="medium :required" type="password"> <br /> <br />
                        <input class="medium :same_as;pass1" type="password">
                        <span class="infobar">Used to check that the value of the confirmation field matches that of another field</span>
                </td>
            </tr>
            <tr>
                <td><label for="acceptance">Acceptance</label></td>
                <td>
                    <input class=":accept" type="checkbox">
                    <span class="infobar">Acceptance lets you validate that a checkbox has been checked</span>
                </td>
            </tr>
            

            
            <tr>
                <td></td>
                <td>
                        <input type="submit" class="btn blue" name="submit" value="Submit!">
                </td>
            </tr>
        </table>
        </form>
    </div>
</div>

<div class="clear"></div>

<div class="grid_16 widget first">
        <div class="widget_title clearfix">
            <h2>Basic Form Elements</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content">
                <p>This is a list of sample messages that may appear upon's success, failure, warning, notice or configuration change. View <a href="#">all message icons.</a></p>

                <div class="msg success">
                    <span>This is a success message on green background.</span>
                    <a href="#" class="close">x</a>
                </div>
                <div class="msg failure">
                    <span>This is a failure message on red background.</span>
                    <a href="#" class="close">x</a>
                </div>
                <div class="msg warning">
                    <span>This is a warning message on yellow background.</span>
                    <a href="#" class="close">x</a>
                </div>
                <div class="msg notice">
                    <span>This is a notice message on blue background.</span>
                    <a href="#" class="close">x</a>
                </div>
                <div class="msg settings">
                    <span>This is a settings message on grey background.</span>
                    <a href="#" class="close">x</a>
                </div>

                <input type="text" class="datepicker" />
                <select>
                    <option>Dollhouse</option>
                    <option>Battlestar Galactica</option>
                    <option>Doctor Who</option>
                    <option>Firefly</option>
                </select>

                <!--
                <div class="upload">
                   <input type="text" class="fakeupload" /> <!-- browse button is here as background
                   <input type="file" name="upload" class="realupload" onchange="this.fakeupload.value = this.value;" />
                </div>
                -->

                <table class="simple">
                    <tr>
                        <td width="50%" style="padding-left: 0;">
                            <label class="block">Full width input text area:</label>
                            <textarea style="height: 180px;width: 100%;"></textarea>
                            <span class="infobar">Quisque ac interdum felis. Curabitur et purus diam, quis dictum quam. </span>
                        </td>
                        <td width="48%" style="padding-left: 2%">
                            <br /><br />
                            <a href="#" class="btn small"><span>Small Button</span></a>
                            <a href="#" class="btn"><span>Medium Button</span></a>
                            <a href="#" class="btn large"><span>Large Button</span></a>
                            
                            <br /> <br />
                            
                            <a href="#" class="btn small green"><span>Small Button</span></a>
                            <a href="#" class="btn green"><span>Medium Button</span></a>
                            <a href="#" class="btn large green"><span>Large Button</span></a>
                            
                            <br /> <br />
                            
                            <a href="#" class="btn small grey"><span>Small Button</span></a>
                            <a href="#" class="btn grey"><span>Medium Button</span></a>
                            <a href="#" class="btn large grey"><span>Large Button</span></a>
                            
                            
                            <br /> <br />
                            
                            <a href="#" class="btn small orange"><span>Small Button</span></a>
                            <a href="#" class="btn orange"><span>Medium Button</span></a>
                            <a href="#" class="btn large orange"><span>Large Button</span></a>
                            <br /> <br />

                            <input class="ioscheckbox" type="checkbox" />
                            <input class="ioscheckbox" type="checkbox" checked="checked" />

                            <br /><br />
                            <div class="slider"></div>
                            <br />
                            <div class="slider-range"></div>
                            <br />
                            <div class="progressbar"></div>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

<div class="clear"></div>

<div class="grid_16 widget first">
    <div class="widget_title clearfix">
        <h2>More Buttons</h2>
    </div>
    <div class="widget_body">
        <div class="widget_content">
            <table class="simple" style="border-collapse: separate;border-spacing: 0 10px;">
                <tr>
                    <td class="center">
                        <a href="#" class="btn small green"><span>Small Button</span></a>
                        <a href="#" class="btn green"><span>Medium Button</span></a>
                        <a href="#" class="btn large green"><span>Large Button</span></a>
                    </td>
                    <td class="center">
                        <a href="#" class="btn small white"><span>Small Button</span></a>
                        <a href="#" class="btn white"><span>Medium Button</span></a>
                        <a href="#" class="btn large white"><span>Large Button</span></a>
                    </td>
                </tr>
                <tr>
                    <td class="center">
                        <a href="#" class="btn small lightblue"><span>Small Button</span></a>
                        <a href="#" class="btn lightblue"><span>Medium Button</span></a>
                        <a href="#" class="btn large lightblue"><span>Large Button</span></a>
                    </td>
                    <td class="center">
                        <a href="#" class="btn small grey"><span>Small Button</span></a>
                        <a href="#" class="btn grey"><span>Medium Button</span></a>
                        <a href="#" class="btn large grey"><span>Large Button</span></a>
                    </td>
                </tr>
                <tr>
                    <td class="center">
                        <a href="#" class="btn small red"><span>Small Button</span></a>
                        <a href="#" class="btn red"><span>Medium Button</span></a>
                        <a href="#" class="btn large red"><span>Large Button</span></a>
                    </td>
                    <td class="center">
                        <a href="#" class="btn small azure"><span>Small Button</span></a>
                        <a href="#" class="btn azure"><span>Medium Button</span></a>
                        <a href="#" class="btn large azure"><span>Large Button</span></a>
                    </td>
                </tr>
                <tr>
                    <td class="center">
                        <a href="#" class="btn small orange"><span>Small Button</span></a>
                        <a href="#" class="btn orange"><span>Medium Button</span></a>
                        <a href="#" class="btn large orange"><span>Large Button</span></a>
                    </td>
                    <td class="center">
                        <a href="#" class="btn small"><span>Small Button</span></a>
                        <a href="#" class="btn"><span>Medium Button</span></a>
                        <a href="#" class="btn large"><span>Large Button</span></a>
                    </td>
                </tr>
                <tr>
                    <td class="center">
                        <a href="#" class="btn small purple"><span>Small Button</span></a>
                        <a href="#" class="btn purple"><span>Medium Button</span></a>
                        <a href="#" class="btn large purple"><span>Large Button</span></a>
                    </td>
                    <td class="center">
                        <a href="#" class="btn small black"><span>Small Button</span></a>
                        <a href="#" class="btn black"><span>Medium Button</span></a>
                        <a href="#" class="btn large black"><span>Large Button</span></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="grid_8 widget first">
    <div class="widget_title clearfix">
        <h2>Uploadify</h2>
    </div>
    <div class="widget_body">
        <div class="widget_options">
            <a href="http://www.uploadify.com/">Uploadify</a> is a powerful and highly-customizable file upload script. In its simplest form, Uploadify is easy to get up and running with minimal effort and little coding knowledge.
        </div>
        <form name="validation" method="get" action="">
        <table>
            <tr>
                <td>
                    <input id="single_file" name="file_upload" type="file" />
                    <span class="infobar">Auto upload</span>
                </td>
            </tr>
            
            <tr>
                <td>
                    <input id="single_file1" name="file_upload" type="file" />
                    <a href="javascript:jQuery('#single_file1').uploadifyUpload()" class="btn small green right">Upload File</a>
                </td>
            </tr>
            
            <tr>
                <td>
                    <input id="multi_file" name="file_upload" type="file" />
                    <a href="javascript:jQuery('#multi_file').uploadifyUpload()" class="btn small green right">Start Upload</a>
                </td>
            </tr>
            
            <tr>
                <td>
                    <input id="upload_image" name="file_upload" type="file" />
                </td>
            </tr>
            
        </table>
        </form>
    </div>
</div>

<div class="grid_8 widget">
    <div class="widget_title clearfix">
        <h2>Tool Tip</h2>
    </div>
    <div class="widget_body">
        <div class="widget_options">
            <a href="http://onehackoranother.com/projects/jquery/tipsy/">Tipsy</a> is a jQuery plugin for creating a Facebook-like tooltips effect based on an anchor tag's title attribute.
        </div>
		<div class="widget_content">
                    <table class="simple">
                        <tr>
                            <td class="center"><a href="#" id="north-west" title="This is an example of north-west gravity">Northwest</a></td>
                            <td class="center"><a href="#" id="north" title="This is an example of north gravity">North</a></td>
                            <td class="center"><a href="#" id="north-east" title="This is an example of north-east gravity">Northeast</a></td>
                        </tr>
                        <tr>
                            <td class="center"><a href="#" id="west" title="This is an example of west gravity">West</a></td>
                            <td class="center" style="background: #E0E0E0"></td>
                            <td class="center"><a href="#" id="east" title="This is an example of east gravity">East</a></td>
                        </tr>
                        <tr>
                            <td class="center"><a href="#" id="south-west" title="This is an example of south-west gravity">Southwest</a> </td>
                            <td class="center"><a href="#" id="south" title="This is an example of south gravity">South</a></td>
                            <td class="center"><a href="#" id="south-east" title="This is an example of south-east gravity">Southeast</a></td>
                        </tr>
                    </table>
		</div>
		
        <form name="validation" method="get" action="">
        <table id="focus-example">
            <tr>
                <td width="20%"><label for="name">Name</label></td>
                <td>
                    <input id="name" class="medium" type="text" title="Enter your full name" />
                </td>
            </tr>
            
            <tr>
                <td width="20%"><label for="name">Email</label></td>
                <td>
                    <input id="name" class="medium" type="text" title="Enter your valid email address" />
                </td>
            </tr>
            <tr>
                <td width="20%"><label for="name">Password</label></td>
                <td>
                    <input id="name" class="medium" type="text" title="A strong password is good for health :P" />
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" class="btn blue" name="submit" value="Submit!">
                </td>
            </tr>
        </table>
        </form>
    </div>
</div>

<div class="grid_16 widget first">
        <div class="widget_title clearfix">
            <h2>Full view Calendar</h2>
        </div>
        <div class="widget_body">      
            <div class="widget_content">
                <p><a href="http://arshaw.com/fullcalendar/">FullCalendar</a> is a jQuery plugin that provides a full-sized, drag & drop calendar like the one below. It uses AJAX to fetch events on-the-fly for each month and is easily configured to use your own feed format (an extension is provided for Google Calendar). It is visually customizable and exposes hooks for user-triggered events (like clicking or dragging an event)</p>
                <div id='calendar2' class="centered"></div>
            </div>
        </div>
        <script type='text/javascript'>
	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar2').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
		});
		
	});

        </script>
    </div>

<?php include("footer.php") ?>
