<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 <!-- Below commented line was originally in the file  -->

    <!-- <script type="text/javascript">
        $(document).ready(function() {
            $('#id').keyup(function() {
                var sid = $(this).val();
				alert(sid);
                var data_String = 'sid=' + sid;
                $.get('search.php', data_String, function(result) {

                    $.each(result, function(){
                        $('#id').val(this.id);
                        $('#name').val(this.name);
                        $('#course').val(this.course);
                        $('#mobile').val(this.mobile);
						            $('#pincode').val(this.pincode);
					            	$('#country').val(this.country);
						            $('#email').val(this.email);
                    });


                });
            });
        });
    </script> -->






    <script type="text/javascript">
        $(document).ready(function() {
            $('#meter_no').keyup(function() {
                var sid = $(this).val();
				//alert(sid);
                var data_String = 'sid=' + sid;
                $.get('search.php', data_String, function(result) {

                    $.each(result, function(){
                        $('#id').val(this.id);
                        $('#meter_no').val(this.meter_no);
                        $('#qtr_no').val(this.qtr_no);
                        // $('#mobile').val(this.mobile);
						            // $('#pincode').val(this.pincode);
					            	// $('#country').val(this.country);
						            // $('#email').val(this.email);
                    });


                });
            });
        });
    </script>
</head>

  <body> <br><br><br>
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <form class="form-horizontal" role="form" method="post" action="">
        <fieldset>

          <!-- Form Name -->
          <legend>Edit Details...</legend>


          <!-- Text input Dropdown-->
          <!-- <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Id</label>
            <div class="col-sm-10">
            <select name="id" id="id">         
          
          <option name="id" id="id" disabled selected>-- Select Meter Number --</option>
          <?php
              include "../dbConn.php";  // Using database connection file here
              $records = mysqli_query($conn, "SELECT meter_no From users_table");  // Use select query here 
      
              while($data = mysqli_fetch_array($records))
              {
                  echo "<option value='". $data['meter_no'] ."'>" .$data['meter_no'] ."</option>";  // displaying data in option menu
              }	
          ?>             
        </select>
            <input type="text" id="id" name="id" placeholder="ID" class="form-control"> 
            </div>
          </div> -->

          <!-- Text input for Id-->
          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Id</label>
            <div class="col-sm-10">
              <input type="text" id="id" name="id" placeholder="ID" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Meter Number</label>
            <div class="col-sm-10">
              <input type="text" id="meter_no" name="meter_no" placeholder="Meter Number" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Quarter Number</label>
            <div class="col-sm-10">
              <input type="text" id="qtr_no" name="qtr_no" placeholder="Quarter Number" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Mobile</label>
            <div class="col-sm-4">
              <input type="text" id="mobile" name="mobile" placeholder="Mobile Number" class="form-control">
            </div>
			
		  <!-- Text input-->
            <label class="col-sm-2 control-label" for="textinput">Postcode</label>
            <div class="col-sm-4">
              <input type="text" id="pincode" name="pincode" placeholder="Pin Code" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Country</label>
            <div class="col-sm-10">
              <input type="text" id="country" name="country" placeholder="Country" class="form-control">
            </div>
          </div>
		  
		    <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Email</label>
            <div class="col-sm-10">
              <input type="text" id="email" name="email" placeholder="Email" class="form-control">
            </div>
          </div>
		  
			<!-- Text input-->
          <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
</body>

</html>