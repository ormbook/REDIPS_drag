<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta name="author" content="Darko Bunic"/>
		<meta name="description" content="Drag and drop table content with JavaScript"/>
		<meta name="viewport" content="width=device-width, user-scalable=no"/><!-- "position: fixed" fix for Android 2.2+ -->

	        <!-- Bootstrap -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

				
		<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
		<script type="text/javascript">
			var redipsURL = '/javascript/drag-and-drop-example-3/';
		</script>
		<script type="text/javascript" src="../header.js"></script>
		<script type="text/javascript" src="../redips-drag-min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<title>Plan Your Trip</title>
	</head>
	<body>
	
		<div id="main_container">
			<!-- tables inside this DIV could have draggable content -->
			<div id="redips-drag">
	
				<!-- left container (table with subjects) -->
				<div id="left" style="overflow-y:scroll;" class="no-print">
				<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" id="myTab">
    <li role="presentation" class="active"><a href="#Home" aria-controls="Home" role="tab" data-toggle="tab" >Home</a></li>
    <li role="presentation"><a href="#Highlight" aria-controls="Highlight" role="tab" data-toggle="tab" >Hi</a></li>
    <li role="presentation"><a href="#Shop" aria-controls="Shop" role="tab" data-toggle="tab" >Sh</a></li>
    <li role="presentation"><a href="#Eat" aria-controls="Eat" role="tab" data-toggle="tab">Et</a></li>
    <li role="presentation"><a href="#View" aria-controls="View" role="tab" data-toggle="tab" >Vw</a></li>
    <li role="presentation"><a href="#Transport" aria-controls="Transport" role="tab" data-toggle="tab" >Tr</a></li>	  
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade active" id="Home"><?php $param="Home";require("places.inc.php");?></div>
    <div role="tabpanel" class="tab-pane fade" id="Highlight"><?php $param="Highlight";require("places.inc.php");?></div>
    <div role="tabpanel" class="tab-pane fade " id="Shop"><?php $param="Shop";require("places.inc.php");?></div>
    <div role="tabpanel" class="tab-pane fade " id="Eat"><?php $param="Eat";require("places.inc.php");?></div>
    <div role="tabpanel" class="tab-pane fade " id="View"><?php $param="View";require("places.inc.php");?></div>
    <div role="tabpanel" class="tab-pane fade " id="Transport"><?php $param="Transport";require("places.inc.php");?></div>	  
  </div>
					
				</div><!-- left container -->
				
				<!-- right container -->
				<div id="right">
					<table id="tablePlan">
						<colgroup>
							<col width="50"/>
							<col width="100"/>
							<col width="100"/>
							<col width="100"/>
							<col width="100"/>
							<col width="100"/>
						</colgroup>
						<tbody>
							<tr>
								<!-- if checkbox is checked, clone school subjects to the whole table row  -->
								<td class="redips-trash" title="Trash">Trash</td>
								<!--td class="redips-mark blank">
									<input id="week" type="checkbox" title="Apply school subjects to the week"/>
									<input id="report" type="checkbox" title="Show subject report"/>
								</td-->
								<td class="redips-mark dark">Monday</td>
								<td class="redips-mark dark">Tuesday</td>
								<td class="redips-mark dark">Wednesday</td>
								<td class="redips-mark dark">Thursday</td>
								<td class="redips-mark dark">Friday</td>

							</tr>
							<tr>
								<td class="redips-mark dark">06:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">07:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>							
							<tr>
								<td class="redips-mark dark">8:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">9:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">10:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">11:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">12:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">13:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">14:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">15:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">16:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">17:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">18:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">19:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">20:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">21:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">22:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">23:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">00:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">01:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">02:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">03:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">04:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">05:00</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>							
							<tr>
								<td class="redips-trash" title="Trash">Trash</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>							
							</tr>
						</tbody>
					</table>
				</div><!-- right container -->
			</div><!-- drag container -->
			
		</div><!-- main container -->
		<div id="message">Drag school subjects to the timetable (clone subjects with SHIFT key)</div>
		<div id="spending_money">spending_money</div>
		<div id="spending_time">spending_time</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
	  <ul class="nav nav-tabs" role="tablist" id="idModalTab">
	    <li role="presentation" class="active"><a href="#idModalContent" aria-controls="Home" role="tab" data-toggle="tab" >Content</a></li>
	    <li role="presentation"><a href="#idModalReview" aria-controls="idModalReview" role="tab" data-toggle="tab" >Review</a></li>  
	  </ul>
	  <!-- Tab panes -->
	  <div class="tab-content">
	    <div role="tabpanel" class="tab-pane fade active" id="idModalContent"></div>
	    <div role="tabpanel" class="tab-pane fade" id="idModalReview"> 
		  <div class="jumbotron">
			  <h1>ยินดีต้อนรับสู่การรีวิว โดยชุมชนของเรา ormTravel</h1>
			  <p>...</p>
			  <p><a class="btn btn-primary btn-lg" href="#" role="button">อ่านต่อ...</a></p>
			</div>
		  </div>  
	  </div>
      </div>
      <div class="modal-footer">
        <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button-->
      </div>
    </div>
  </div>
</div>	
		
<script>
$(function () {
$('#myTab a:last').tab('show') // Select first tab
})
	
//
function fnShowModal(id){
$('#myModal').modal('toggle');
//load content by id
  $.get( "loadContent.php", { id: id } )
  .done(function( data ) {
     //Show content in Modal
      $('#idModalTab a:first').tab('show') // Select first tab  
      document.getElementById("idModalContent").innerHTML=data;
  });

}
</script>
	</body>
</html>
