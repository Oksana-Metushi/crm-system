<?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p class='block text-red-500 text-md font-semibold mb-2 ml-3 text-center'>Fill in all fields!</p>";
            } else if ($_GET["error"] == "invaliduid") {
                echo "<p class='block text-red-500 text-md font-semibold mb-2 ml-3 text-center'>Invaild username!</p>";
            } else if ($_GET["error"] == "invalidemail") {
                echo "<p class='block text-red-500 text-md font-semibold mb-2 ml-3 text-center'>Invaild email!</p>";
            } else if ($_GET["error"] == "passworddontmatch") {
                echo "<p class='block text-red-500 text-md font-semibold mb-2 ml-3 text-center'>Password don't match!</p>";
            } else if ($_GET["error"] == "usernametaken") {
                echo "<p class='block text-red-500 text-md font-semibold mb-2 ml-3 text-center'>Username already exist!</p>";
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p class='block text-red-500 text-md font-semibold mb-2 ml-3 text-center'>Something went wrong, try again!</p>";
            } else if ($_GET["error"] == "none") {
                echo "<p class='block text-red-500 text-md font-semibold mb-2 ml-3 text-center'>You have signed up!</p>";
            }//else if ($_GET["error"] == "wronglogin") {
            //     echo "<p class='block text-red-500 text-md font-semibold mb-2 ml-3 text-center'>Invaild information!</p>";
            // }
        }
