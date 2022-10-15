            <html>
            <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

            </head>
            <body>
                <div class="container">
                <div class="row header" style="text-align:center;color:green">
                    <h3>Bootstrap table with pagination</h3>
                    <div id="infoMessage"><?php echo $this->session->flashdata('message');?></div>
                                    <select name="state" id="state" class="form-control">
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>userid</th>
                            <th>name</th>
                            <th>email</th>
                            <th>city</th>
                            <th>state</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
            $i=1;
            foreach($data as $row)
            {
            $del_url = base_url("Table/deletedata/").$row->id; 
            echo "<tr>";
            echo "<td>".$row->id."</td>";
            echo "<td>".$row->regfirstName."</td>";
            echo "<td>".$row->regprimaryEmail."</td>";
            echo "<td>".$row->regcity."</td>";
            echo "<td>".$row->regstate."</td>";
            echo "<td><a href=".$del_url.">Delete</a></td>";
            echo "</tr>";
            $i++;
            }
            ?>
            </tbody>
                </table>
                </div>
                <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

                <script type="text/javascript"
                src="http://localhost/test/tblform/assets/js/dataTables.min.js"></script>
            <script>
            $(document).ready(function() {
                $('#example').DataTable();
            

            } );
            </script>
            </body>
            </html>