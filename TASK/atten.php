<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qcs";
    $conn = mysqli_connect($servername, $username, $password, $dbname);  
        if(mysqli_connect_errno()) {  
          die("Failed to connect with MySQL: ". mysqli_connect_error()); 
        }
          ?>
          <?php
  
  $select = "SELECT * FROM tbl_atten";
  $result = $conn->query($select);
    //     echo "<pre>";
    // print_R($_POST);
    // echo "</pre>";
?>
<html>  

    <head>  
        <title>dropdown menu using select tab</title> 
           <style>
            #dept{display:none;}
            </style> 
    </head>  
    <body >  
        
<div>
 <form name="form1" id="form1" action="">     
<select id = "mylist" name="mylist" onchange="ch();">  
                    <option value="roll"> rollnumber </option>  
                    <option value="1"> 1std </option>  
                    <option value="2"> 2std </option>  
                    <option value="3"> 3std </option>  
            </select>  <br><br>
            <select id = "dept" style="display: none" onchange="dpch();">  
                    <option> A Section </option>  
                    <option> B Section </option>  
                    <option> C Section </option>  
                    
            </select>  <br><br>
            
            
            <table id="atten"  border="1px" style="display: none;width:max-content;">
                <tr>
                    <th>userid</th>
                    <th>roll</th>
                    <th>department</th>
                    <th>attendance</th>
                </tr>
                <?php  
                       while($row = $result->fetch_object()){
                   ?>
                 <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->rollnumber; ?></td>
                    <td><?php echo $row->department; ?></td>
                    <td><?php echo $row->attendance; ?></td>
               </tr>     
               <?php } ?>           
            </table>  
</form>


                <script >
                function ch() {
                var mylist = document.getElementById("mylist");
                var dept = document.getElementById("dept");
                dept.style.display = mylist.value == "roll" ? "none" : "block";
                $('#form1').submit();

                }
                function dpch() {
                var dept = document.getElementById("dept");
                var atten = document.getElementById("atten");
                atten.style.display = dept.value == "Department" ? "none" : "block";
                }

                </script>
                </div>
    </body>  
</html>  