<HTML>
   <HEAD> <TITLE> Receiving Input </TITLE> </HEAD>
   <BODY>
     <font size=5>Thank You: Got Your Input.</font>
        <?php
           $email = $_GET["email"];
           $contact = $_GET["contact"];
           print ("<br> Your email address is $email");
           print ("<br> Contact preference is $contact");
        ?>
   </BODY>
 </HTML>


