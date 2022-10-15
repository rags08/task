<?php

require_once "db.php";
$result = mysqli_query($conn,"SELECT * FROM tbl_std");

// while($row = mysqli_fetch_array($result)) 
// {
//     echo $row["standard"];
// }
?>
<html>

<head>
    <title>student strength</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    


</head>

<body style="width:fit-content">

    <form>
        <div class="form1">
            <label for="standard">standard</label>
            <select class="form-control" id="standard-dropdown">
                <option value="select">select standard</option>
                <?php
                    require_once "db.php";
                    $result = mysqli_query($conn,"SELECT * FROM tbl_std");
                    while($row = mysqli_fetch_array($result)) 
                        {
                ?>
                         <option value="<?php echo $row["standard"];?>">
                         <?php echo $row["standard"];?></option>
                <?php
                        }
                ?>
             </select>
        </div>
        <div class="form-group" id="sectiondiv" style="display:none">
            <label for="section">Section</label>
            <select class="form-control" id="section-dropdown" >
            <option value="select">select section</option>
            </select>
        </div>
        <div id="tblres" style="display:none" >
                    </div>
        
        <script>
            $(document).ready(function() {
                // -----------------------------------------select section hide------------------------------------------------------------------------------
                var std_val = $('#standard-dropdown').find('option:selected').val()
                var sec_val = $('#section-dropdown').find('option:selected').val()

                $('#standard-dropdown').on('change', function() {
                    
                    var std_val = $('#standard-dropdown').find('option:selected').val()
                    console.log(std_val)
                        if ( std_val== "select") {
                            $("#sectiondiv").css('display','none');
                            $("#tblres").css('display','none');

                            return false;
                        } else {
                            $("#sectiondiv").css('display','block');
                        }
                    // ----------------------------------------- hide end ------------------------------------------------------------------------------------------

                    var standard = this.value;
                    // alert(standard)
                    $.ajax({
                        url: "secbystd.php",
                        type: "POST",
                        data: {
                            standard: standard
                        },
                        cache: false,
                        success: function(result) {
                            console.log(result)
                            $("#section-dropdown").html(result);
                            
                        },error: function (jqXHR, textStatus, errorThrown) {
                  if (jqXHR.status == 500) {
                      alert('Internal error: ' + jqXHR.responseText);
                  } else {
                      alert('Unexpected error.');
                  }
              }
                    });
                });
                // section shows table................................................................
            
            $('#section-dropdown').on('change', function() {
                        var sec_val = $('#section-dropdown').find('option:selected').val()
                            console.log(sec_val)
                                if ( sec_val== "select") {
                            $("#tblres").css('display','none');
                            
                            return false;
                        } else {
                            $("#tblres").css('display','block');
                        }
                var section = $(this).val();
                // var std = $('#standard-dropdown').val();
                // var std = $('#standard-dropdown :selected').val();
                var std = $('#standard-dropdown').find('option:selected').val()
                console.log(std)

                    $.ajax({
                        url: "tblpresent.php",
                        type: "POST",
                        data: {
                                section: section,standard:std
                        },
                        cache: false,
                        success: function(result){
                            console.log(result);
                            // return false;
                           $("#tblres").html(result);
                           $("#standard-dropdown").change(function(){
                            $("#tblres").css('display','none');
                        });
                        }
                     });
                });
            });
            
                        $(function () {
                    // $("#standard-dropdown").change(function () {
                    //     if ($(this).val() == "select") {
                    //         $("#section-dropdown").hide();
                    //     } else {
                    //         $("#section-dropdown").show();
                    //     }
                    // });
                });
        </script>
</body>

</html>