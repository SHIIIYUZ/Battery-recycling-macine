<?PHP
    header("Content-Type: text/html; charset=utf8");
    /*if(!isset($_POST["submit"])){
        exit("����ִ��");
    }//����Ƿ���submit���� */

    include('connect.php');//�������ݿ�
    $conn = new mysqli("localhost","root","","userInfo");
    $name = $_POST['adname'];//post����û�����ֵ
    $password = $_POST['adpassword'];//post����û����뵥ֵ

    if ($name && $password){//����û��������붼��Ϊ��
             $sql = "select * from login where username = '$name' and code='$password'";//������ݿ��Ƿ��ж�Ӧ��username��password��sql
             $result = mysqli_query($conn,$sql);//ִ��sql
             $rows=mysqli_num_rows($result);//����һ����ֵ
             if($rows){//0 false 1 true
                   header("refresh:0;url=welcome.html");//����ɹ���ת��welcome.htmlҳ��
                   exit;
             }else{
                echo "�û������������";
                echo "
                    <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                    </script>

                ";//�������ʹ��js 1�����ת����¼ҳ������;
             }
             

    }else{//����û����������п�
                echo "����д������";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='login.html';},1000);
                      </script>";

                        //�������ʹ��js 1�����ת����¼ҳ������;
    }

    //mysql_close();//�ر����ݿ�
?>