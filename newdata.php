<HTML>
    <HEAD>
        <TITLE>
            SBI:REGISTer SUCCESSFULLY
               </TITLE>
        <STYLE>
            .BUTTON{background-color: blue;}
        </STYLE>
    </HEAD>
<BODY><IMG SRC="YONO.png" WIDTH="20%"><BR><BR><HR color="SKYBLUE" SIZE="40"><FONT SIZE="6" COLOR="BLUE">
    <CENTER>WELCOME TO SBI</CENTER></FONT><BR><CENTER><IMG SRC="SBILOGO.jpeg"></CENTER>
    <?php
    $name=$_REQUEST["name"];
    $f_name=$_REQUEST["fname"];
    $newuser=$_REQUEST["user"];
    $passnew=$_REQUEST["pass"];
    $mobile=$_REQUEST["MOB"];
    $acc=rand(1000000,999999999);
    $con=mysqli_connect("localhost","root","Y1012Jqkhkp","SBI_DB");
    if(!$con){
        echo "<CENTER><h3>SERVER ERROR:UNABLE TO CONNECT<h3></CENTER>";
    }
    $q="INSERT INTO login_sbi values('$newuser','$passnew',NULL,$acc,'$newuser','$f_name',$mobile)";
    $result=mysqli_query($con,$q);
    if(!$result){
        echo "<CENTER><H3><b>USERNAME EXISTS!!</H3></CENTER>";
    }
    else {
        {
            ECHO "<B><CENTER><H3><FONT COLOR='BLUE'>ACCOUNT REGISTERED SUCCESSFULLY</FONT></H3></B></CENTER>";
        }
    }
    ?>
    <CENTER><BR><BR><a href="LOGIN.HTML"><BUTTON TYPE="SUBMIT">LOGIN TO CONTINUE</BUTTON></A></CENTER>