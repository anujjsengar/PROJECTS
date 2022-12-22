<HTML>
    <HEAD>
        <TITLE>
            LOGIN:SBI
        </TITLE>
        <STYLE>
            .BUTTON{background-color: blue;}
        </STYLE>
    </HEAD>
<BODY><IMG SRC="YONO.png" WIDTH="20%"><BR><BR><HR color="SKYBLUE" SIZE="40">
<?php
$user=$_REQUEST["user"];
$pass=$_REQUEST["pass"];
$con=mysqli_connect("localhost","root","Y1012Jqkhkp","SBI_DB");
if(!$con){
    echo "<CENTER><h3>SERVER ERROR:UNABLE TO CONNECT<h3></CENTER>";
}
$query="SELECT * FROM LOGIN_SBI";
$result=mysqli_query($con,$query);
if ($result->num_rows > 0) 
    { $n=0;
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            $userdb=$row["Username"];
            $passdb=$row["Password"];
            $mob=$row["MOBILE"];
            $ac=$row["ACCOUNT_NO"];
            $fname=$row["F_NAME"];
            $uname=$row["NAME_HOLDER"];
            $bal=$row["BALANCE"];
            if($user==$userdb && $pass==$passdb){
                echo "<h3><center><b>LOGIN SUCCESSFULLY!!</b></H3></CENTER>";
                echo "<table BORDER='4' ALIGN='CENTER'><tr><th>HOLDER'S NAME</th><th>FATHER'S NAME</th><th>ACCOUNT NUMBER</th><th>MOBILE NUMBER</th><th>BALANCE</th></tr>
                <TR><TD> $uname</TD><TD> $fname</TD><TD> $ac</TD><TD> $mob</TD><TD> $bal</TD></TR>
                </table>";
                $n++;
                break;
                }
            }
            if($n==0){
                echO "<CENTER><H3><b>FAILED TO LOGIN!!!<BR>PLEASE CHECK YOUR CRUDENTIAL!!!</b></H3></CENTER>";
            }
            }
    ?>
    <br>
    <center><img src="images.png"> 
    <br><br><br>
    <a href="LOGIN.HTML"><BUTTON TYPE="SUBMIT">BACK TO LOGIN PAGE</BUTTON></A>
</center>
</body>
</html>

