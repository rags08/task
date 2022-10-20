<!DOCTYPE html>
<html>
   <head>
            <link rel="stylesheet" href="http://192.168.60.249:8080/test/qcs/assets/css/bootstrap.css">
            <link rel="stylesheet" href="http://192.168.60.249:8080/test/qcs/assets/css/table.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   
       <title>QCS</title>
          <style>
            .bgback{background-image: url("images/back.jpg"); background-repeat: repeat-x;}
            .menubg{text-align:center;background-image: url("images/menu.jpg"); background-repeat: repeat-x;color:#3e6ca9;font-weight:bold;height:30px}
            .hreff{color:#3e6ca9;text-decoration:none}
            .tbltwo{background-color:#fff}
            .tblone{background-color:#000}
            div.container{width: 700px;}
            /* Loader css Start */
                #preloader {    /* relative */
                position: fixed; 
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 99;
                }
                #status {
                width: 200px;
                height: 200px;
                position: absolute;
                left: 50%;
                top: 50%;
                background-image: url(https://www.superiorlawncareusa.com/wp-content/uploads/2020/05/loading-gif-png-5.gif); /*https://raw.githubusercontent.com/niklausgerber/PreLoadMe/master/img/status.gif*/
                background-repeat: no-repeat;
                background-position: center;
                margin: -100px 0 0 -100px;
                animation: fa-spin 2s infinite linear;
                background-size: 51px;
                }
		/* Loader css End */
            </style>
          
          <script>
            function getstate(id){

              document.getElementById("frm").submit();
            }
            
          </script>
          <script>
                  $(window).on('load', function() { 
                    $('#status').delay(2000).fadeOut('slow'); 
                    $('#preloader').delay(1000).fadeOut('slow'); 
                    $('#Employee').delay(1000).fadeIn('slow'); 
                    $('#Employee').delay(800).css({'display':'none'});
                  })
                  </script>
                   <!-- //displaying data on page start here -->
                   <script>
                    
                            $.ajax({
                                url: "<?php echo base_url("RegisterController/viewajax");?>",
                                type: "POST",
                                cache: false,
                                success: function(data){
                                    //alert(data);
                                    console.log(data);
                                    $('#table').html(data); 
                                }
                            });
                    </script>
          
                 
      </head>
      <body >

     
      <div class="wrapper" id="Employee">
            <table class="tblone"cellpadding="0" cellspacing="0" width="100%" bgcolor="#000">
            <tr>
              <td> 
                <form name="frm" id="frm" action="" method="post">
                  <input type="hidden" id="cid" name="cid">
                <table class="tbltwo" cellpadding="0" cellspacing="0" width="56%" bgcolor="#fff" align="center" >
                    <tr>
                      <td class="bgback"> 
                        <table cellpadding="0" cellspacing="0" width="96%"  align="center" border="0">
                            <tr>
                              <td> 
                                  <img src="images/qcs.jpg"> 
                                  <span style="margin-left: 577px;color: #fff;"> Home | <a href="login">login</a></span>
                              </td>
                            </tr>
                            <tr>
                              <td > 
                                  <img src="images/banner.jpg" style="margin-bottom:-5px;">
                              </td>
                            </tr>
                            <tr>
                              <td class="menubg"> 
                              <!-- <a href="<?php echo base_url('register');?>" class="hreff">Registration</a> -->
                                  Home &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; About Us&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp; Service&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;Partners &nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;Why Qcs&nbsp;&nbsp; | &nbsp;&nbsp;<a href="register" class="hreff">Registration</a>&nbsp;&nbsp;
                              </td>
                            </tr>
                            <tr>
                              <td > <br>
                                  <div style="display:flex; justify-content: space-evenly;">
                                          <div >
                                              <select name="country" id="country" onchange="getstate(this.value)" class="form-control input-sm">
                                                  <option value="select">-- Select country --</option>
                                                  <?php
                                                  foreach($regcountry as $country){
                                                      echo "<option value='".$country['regcountryCode']."' ".((set_value("country")==$country['regcountryCode'])?"selected":"").">".$country['regcountry']."</option>";
                                                  }
                                                ?>
                                                </select>
                                            </div> 
                                                  <div class="form-group" id="statediv"  >
                                                    <select class="form-control"  name="state" id="state" onchange="getstate(this.value)">
                                                          <option value="">-- Select State --</option>
                                                          <?php
                                                          if(!empty($regstate)){
                                                          foreach($regstate as $state){

                                                              echo "<option value='".$state['regstate']."' ".((set_value("state")==$state['regstate'])?"selected":"").">".$state['regstate']."</option>";
                                                          }
                                                        }
                                                        ?>
                                                      </select>
                                               </div>
                                        <div class="form-group" id="districtdiv" >
                                            <select class="form-control"  name="city" id="city" onchange="getstate(this.value)">
                                            <option value="">select city</option>
                                            <?php
                                              foreach($regcity as $district){
                                              
                                                  echo "<option value='".$district['regcity']."' ".((set_value("city")==$district['regcity'])?"selected":"").">".$district['regcity']."</option>";
                                              }
                                              ?>
                                              </select>
                                          </div>
                                </div>
                                            
                                  <div class="container" width="56%" style="overflow:scroll;">
                                    <div class="row header" style="text-align:center;color:green">
                                                                      
                                            <h3>Bootstrap table with pagination</h3>
                                              <div id="infoMessage"><?php echo $this->session->flashdata('message');?></div>
                                      </div>
                                        <!-- filtering.......................................................................... -->
                                        
                                        <table id="example" class="table table-striped table-bordered" style="width:100%;">
                                                <thead>
                                                        <tr>
                                                            <th>id</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>city</th>
                                                            <th>state</th>
                                                            <th>country</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table" >
                                                         <?php 
                                                          //       echo "<pre>";
                                                          // print_R($data);
                                                          // echo "</pre>";                            
                                                      
                                                        // // foreach($data as $row) 
                                                        // {                                   
                                                          // echo "<pre>";
                                                          // print_R($_POST);
                                                          // echo "</pre>";
                                                          // $del_url = base_url("/deletedata").$row->id; 
                                                          // echo "<tr>";
                                                          // echo "<td>".$row->id."</td>";
                                                          // echo "<td>".$row->regfirstName."</td>";
                                                          // echo "<td>".$row->regprimaryEmail."</td>";
                                                          // echo "<td>".$row->regcity."</td>";
                                                          // echo "<td>".$row->regstate."</td>";
                                                          // echo "<td><a href=".$del_url.">Delete</a></td>";
                                                          // echo "</tr>";
                                                        
                                                        // }
                                                        ?>
                                            </tbody>
                                                </table>
                                      </div>
                                </div>
                                          <script src="http://192.168.60.249:8080/test/qcs/assets/js/jquery.js"></script>

                                          <script type="text/javascript"
                                          src="http://localhost:8080/test/tblform/assets/js/dataTables.min.js"></script>
                                      <script>
                                      $(document).ready(function() {
                                          $('#example').DataTable();
                                     
                                    //   $(document).ready(function () {
                                    //     $('table.display').DataTable();
                                    // });
     // counrtyscruipt start////////////////////////////////////////////////////////////////
                                    $('#country').on('change', function() {
                                   var std_val = $('#country').find('option:selected').val()
                                    console.log(std_val)
                                      if ( std_val== "select") {
                                          $("#statediv").css('display','none');
                                          $("#example").css('display','none');

                                          return false;
                                      } else {
                                          $("#statediv").css('display','block');
                                      }

                  
// countryscrip end//////////////////////////////////////////////////////////////////////////////////
                                    $('#state-dropdown').on('change', function() {
                    
                                          var std_val = $('#state-dropdown').find('option:selected').val()
                                          console.log(std_val)
                                            if ( std_val== "select") {
                                                $("#districtdiv").css('display','none');
                                                $("#example").css('display','none');

                                                return false;
                                            } else {
                                                $("#districtdiv").css('display','block');
                                                      }})
                                                      // districthide.......................................
                                                      $('#district-dropdown').on('change', function() {
                                                      var sec_val = $('#district-dropdown').find('option:selected').val()
                                                          console.log(sec_val)
                                                              if ( sec_val== "select") {
                                                          $("#example").css('display','none');
                                                          
                                                          return false;
                                                      } else {
                                                          $("#example").css('display','block');
                                                      }
                                          } )
                                        })
                                      });

                                      </script>
                                      </body>
                              </td>
                            </tr>
                            <tr>
                              <td> 
                                  <img src="images/footerpic.jpg"  width="100%">
                              </td>
                            </tr>
                        </table>
                      </td>
                    </tr>
                </table>
              </form>
              </td>
            </tr>
          </table>
                                    </div>
                                    
      <!--\\\\\\\\\\\\ Loader Script Start \\\\\\\\\\\\ -->
               <div id="preloader">
                  <div id="status">&nbsp;</div>
                  <div style="position: absolute;top: 55%;text-align: center;width: 100%;color: #0068ff;">Loading...</div>
                  </div>
                  
	<!-- \\\\\\\\\\\\ Loader Script Start End \\\\\\\\\\\\-->    
</body>
</html>