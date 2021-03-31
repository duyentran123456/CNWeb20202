<!doctype html>
<html>
    <head>
        <title>Your information</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            * {
                box-sizing: border-box;
            }            
            .result-wrapper {
                border-radius: 21px;
                font-size: 120%;
                border: 2px solid black;
                margin: 38px auto;
                padding: 10px;
                width: 800px;
            }
            .thank-you {
                font-size: 150%;
            }            
            table {
                margin-left: 50px;
            }
            table th {
                padding-bottom: 10px;
            }
            table td {
                padding-left: 30px;
                padding-bottom: 10px;
            }
            @media (max-width: 800px) {
                .result-wrapper {
                    width: 80%;
                    font-size: 100%;
                    padding: 5px 0px 0px 5px;
                    margin: auto;
                }
                table {
                    margin: 0px;
                }
            }
        </style>
    </head>
    <body>
        <div class="result-wrapper">
            <?php
            if (array_key_exists("name", $_POST)) {
                $name = $_POST["name"];
                $gender = (array_key_exists("gender", $_POST)) ? $_POST["gender"] : "";
                $birth = (array_key_exists("birth", $_POST)) ? $_POST["birth"] : "";
                $university = $_POST["university"];
                $class = $_POST["class"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                print("<div class='thank-you'>Hi $name! Thank you for your information!</div><br>");
                print("Your information: <br>");

                print("<table>");
                if (!empty($gender)) {
                    print("<tr>");
                    print("<th>Gender:</th>");
                    print("<td>$gender</td>");
                    print("</tr>");
                }
                if (!empty($birth)) {
                    print("<tr>");
                    print("<th>Birthday:</th>");
                    print("<td>$birth</td>");
                    print("</tr>");
                }
                print("<tr>");
                print("<th>University:</th>");
                print("<td>$university</td>");
                print("</tr>");
                
                print("<tr>");
                print("<th>Class:</th>");
                print("<td>$class</td>");
                print("</tr>");
                
                print("<tr>");
                print("<th>Email:</th>");
                print("<td>$email</td>");
                print("</tr>");
                
                print("<tr>");
                print("<th>Phone:</th>");
                print("<td>$phone</td>");
                print("</tr>");

                print("<tr>");
                print("<th>Hobbies:</th>");                   
                if (empty($_POST["hobbies"])) {                    
                    print("<td>You didn't choose any hobby!</td>");
                } else {
                    print("<td><ul>");
                    foreach ($_POST["hobbies"] as $hobby) {
                        print("<li>$hobby</li>");
                    }
                    print("</ul></td>");
                }
                print("</tr>");
                print("</table>");
            } else {
                print("You didn't fill in the form. Please filled in first.<br>");
            }
            ?>
        </div>
    </body>
</html>


