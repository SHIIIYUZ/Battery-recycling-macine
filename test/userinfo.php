<DOCTYPE html>
<html>
  <head>
    <title>User info</title>
  </head>

  <body>
    
    <form action="<?php echo $_SERVER['$PHP_SELF']; ?>" name="form1" method="post">
    <input type="hidden" name="name" >
    <input type="hidden" name="pwd" >
    </form>
    
    <script type="text/javascript">
    function getParams(key) {
        var reg = new RegExp("(^|&)" + key + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) {
            return unescape(r[2]);
        }
        return null;
    };
    var name=getParams("name");
    var pwd=getParams("password");
    document.getElementById("name").innerHTML = name;
    document.getElementById("pwd").innerHTML = pwd;

    setTimeout("form1.submit();",1000);
    </script>
    
      <?php
      $conn = new mysqli("localhost","root","","user");
      $name = $_POST['name'];//post获得用户名表单值
      $password = $_POST['pwd'];//post获得用户密码单值
        
      $query = "SELECT * FROM userinfo WHERE name = '$name' and pwd='$password';
        $result = mysql_query($query);
        if ($result) :
      ?>
        <table>
          <?php
            while ($row = mysql_fetch_assoc($result)) {
              echo '<tr>';
              echo '<td>', $row['salaried'], '</td><td>', $row['bla-bla-bla'], '</td>' ...; // and others
              echo '</tr>';
            }
          ?>
        </table>
      <?php endif?>
    <?php endif ?>
  </body>
</html>


