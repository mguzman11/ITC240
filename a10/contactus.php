<?php include 'includes/header.php';?>
<?php
//postback2.php


if(isset($_POST["FirstName"])){//if data show it
    
   // echo $_POST["FirstName"];
    
    echo '<pre>';
        var_dump($_POST);
    echo '</pre>';
    
}else{//no data, show form
    echo '
    <form action="" method="post">
        <p><label for= "FirstName"> First Name: </label><br />
            <input 
            type="text" 
            name="FirstName" 
            id="FirstName"
            required="required"
            placeholder="Enter First Name" 
            title="First Name is required" 
            autofocus="autofocus"/>
            </p>
        <p><label for= "LastName"> Last Name: </label><br />
            <input 
            type="text" 
            name="LastName" 
            id="LastName"
            required="required"
            placeholder="Enter Last Name" 
            title="Last Name is required" />
            </p>
        <p><label for= "Email"> Email: </label><br />
            <input 
            type="email" 
            name="Email" 
            id="Email"
            required="required"
            placeholder="Enter email" 
            title="Email is required" />
            </p>
        <p><label for= "Comments"> Comments: </label><br />
            <textarea name="Comments" 
            id="Comments" 
            placeholder = "Your comments are important to us!" > </textarea>
            </p>
        <p> <input type="submit"/></p>
    
    
    </form>
    ';
    
}
<?php <?php get_footer?>; ?>