

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://192.168.60.249:8080/test/qcs/assets/css/bootstrap.css">
            <link rel="stylesheet" href="http://192.168.60.249:8080/test/qcs/assets/css/table.css">
            
<title>login</title>
<style>
    .bgback{background-image: url("images/back.jpg"); background-repeat: repeat-x;}
    .menubg{text-align:center;background-image: url("images/menu.jpg"); background-repeat: repeat-x;color:#3e6ca9;font-weight:bold;height:30px}
    .hreff{color:#3e6ca9;text-decoration:none}
</style>
</head>
<body>

<table cellpadding="0" cellspacing="0" width="100%" bgcolor="#000">
  <tr>
    <td> 
      <table cellpadding="0" cellspacing="0" width="56%" bgcolor="#fff" align="center" >
          <tr>
            <td class="bgback"> 
              <table cellpadding="0" cellspacing="0" width="96%"  align="center" border="0" margin-bottom:50px;>
                  <tr>
                    <td> 
                        <img src="images/qcs.jpg">
                        <span style="margin-left: 577px;color: #fff;"> Home | Mail us</span>
                    </td>
                  </tr>
                  <tr>
                    <td > 
                        <img src="images/banner.jpg">
                    </td>
                  </tr>
                  
                  <?php if(!empty($errmsg)){ ?>
                  <tr>
                      <td align="center "><br><?php echo $errmsg;?></td>
                  </tr>
                  <?php } ?>
                  <tr>
                    <td> <br>
                    <form method="post" action="http://192.168.60.249:8080/test/qcs/dashboard" >  
                              <table class="reg" cellpadding="5" cellspacing="0" width="66%"  align="center" border="0" >  
                                  <tr bgcolor="#fff">  
                                      <td><th>Username:</th></td>  
                                      <td><input type="text" name="user"></td>  
                                  </tr>  
                                  <tr>  
                                      <td><th>Password:</th></td>  
                                      <td><input type="password" name="pass"></td>  
                                  </tr>  
                        
                                  <tr>  
                                      <td> </td>  
                                      <td><input type="submit" value="Login"></td>  
                                  </tr>  
                              </table>  
                          </form> 
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
    </td>
  </tr>
</table>

</body>
</html>