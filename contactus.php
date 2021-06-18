<?php if (isset($_POST['btnSubmit'])) {
        $_SESSION["sName"] = $_POST["txtName"];
        $_SESSION["sEmail"] = $_POST["txtEmail"];
        $_SESSION["sMessage"] = $_POST["txtMessage"];

        echo "Following will be sent via email to admin" . "<br/> <br/>";
        echo "Name : " . $_SESSION["sName"] ." <br/><br/>";
        echo "Email : " . $_POST["txtEmail"] ." <br/><br/>";
        echo "Message : " . $_SESSION["txtMessage"] ." <br/><br/>";
        echo "Remote IP : " . $_SERVER["REMOTE_ADDR"] . " <br/><br/>";
        echo "Script : " . $_SERVER['SCRIPT_NAME'] . " <br/><br/>";
        echo "User : " . $_SERVER['HTTP_USER_AGENT'] . "<br/><br/>";
    }
?>

<form action="<?php $_SERVER["SCRIPT_NAME"] ?>" method="post">
    <label name="lblName"> Name : </label> <br/>
    <input type="text" name="txtName" value="<?php print $_SESSION['sName']?>"> <br/>
    <label name="lblEmail"> Email : </label> <br/>
    <input type="text" name="txtEmail"  value="<?php print $_SESSION['sEmail']?>"><br/>
    <label name="lblMessage"> Message : </label> <br/>
    <textarea rows="5" cols="40" name="txtMessage"  value="<?php print $_SESSION['sMessage']?>"> </textarea><br/>
    <input type="submit" name="btnSubmit"  value="Submit"/>
</form>
