<html>
    <head>
        <title>Date Time Validation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div class="content-wrapper">
        <div>Enter your name and select date and time for the appointment</div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <?php
            if (array_key_exists("name", $_GET)) {
                $name = $_GET["name"];
                $date = $_GET["date"];
                $month = $_GET["month"];
                $year = $_GET["year"];
                $hour = $_GET["hour"];
                $minute = $_GET["minute"];
                $second = $_GET["second"];
            } else {
                $name = "";
                $date = 1;
                $month = 1;
                $year = 2021;
                $hour = 0;
                $minute = 0;
                $second = 0;
            }
            ?>
            <table>
                <tr>
                    <td>Your name: </td>
                    <td><input type="text" name="name" value="<?php echo $name ?>"></td>
                </tr>
                <tr>
                    <td>Date: </td>
                    <td>
                        <select name="date">
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                if ($date == $i) {
                                    print("<option selected>$i</option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                        <select name="month">
                            <?php
                            for ($i = 1; $i <= 12; $i++) {
                                if ($month == $i) {
                                    print("<option selected>$i</option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                        <select name="year">
                            <?php
                            for ($i = 1900; $i <= 2200; $i++) {
                                if ($year == $i) {
                                    print("<option selected>$i</option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Time: </td>
                    <td>
                        <select name="hour">
                            <?php
                            for ($i = 0; $i <= 23; $i++) {
                                if ($hour == $i) {
                                    print("<option selected>$i</option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                        <select name="minute">
                            <?php
                            for ($i = 0; $i <= 59; $i++) {
                                if ($minute == $i) {
                                    print("<option selected>$i</option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                        <select name="second">
                            <?php
                            for ($i = 0; $i <= 59; $i++) {
                                if ($second == $i) {
                                    print("<option selected>$i</option>");
                                } else {
                                    print("<option>$i</option>");
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right"><input type="SUBMIT" value="Submit"></td>
                    <td align="left"><input type="RESET" value="Reset"></td>
                </tr>
            </table>
        </form>
        <?php
            if (array_key_exists("name", $_GET)) {
                if ($hour <= 12) {
                    $hour_12 = $hour;
                    $time = "AM";
                } else {
                    $hour_12 = $hour - 12;
                    $time = "PM";
                }

                switch ($month) {
                    case 1:
                    case 3:
                    case 5:
                    case 7:
                    case 8:
                    case 10:
                    case 12:
                        $count = 31;
                        break;
                    case 4:
                    case 6:
                    case 9:
                    case 11:
                        $count = 30;
                        break;
                    case 2:
                        if ($year % 4 == 0 && ($year % 100 != 0) || ($year % 400 == 0)) {
                            $count = 29;
                        } else {
                            $count = 28;
                        }
                        break;
                    default:
                        print("Invalid date!");
                }

                print("Hi $name<br>");
                if ($date > $count) {
                    print("Your date you chose is invalid! Please choose again!<br>");
                } else {
                    $pre_hour = ""; $pre_minute = ""; $pre_second = ""; $pre_hour12 = "";
                    if($hour < 10) {
                        $pre_hour = "0";
                    }
                    if($minute < 10) {
                        $pre_minute = "0";
                    }
                    if($second < 10) {
                        $pre_second = "0";
                    }
                    if($hour_12 < 10) {
                        $pre_hour12 = "0";
                    }
                    print("You have choose to have an appointment on $pre_hour$hour:$pre_minute$minute:$pre_second$second , $date/$month/$year<br>");
                    print("More information<br>");
                    print("In 12 hours, the time and date is $pre_hour12$hour_12:$pre_minute$minute:$pre_second$second $time, $date/$month/$year <br>");
                    print("This month has $count days!<br>");
                }
            }
            ?>
        </div>
    </body>
</html>


