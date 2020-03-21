<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/calendar.png" type="image/x-icon">
    <title>Assignment 3</title>
</head>
<body>
    <div class="box">
        <br>
        <div class="block" style="height:20px;width:98%; background-color:#8B0000 ;margin:auto"></div>

        <div class="title">
            <h1>COMP207 - Register here for a practical slot</h1>
            <h3>Register only if you know what you are doing.</h3>
           
            <ul>
            <li>Please enter <b>all</b> information and select your desired day. Please enter a correct 'SID' number!</li>
            <li>Please check the number of available seats before submitting.</li>
            <li>Register only to on slot.</li>
            <li>Any problems? Write a message to <a href="" style=" text-decoration: none;  color: #9E2929;">weberb@cse.liv.ac.uk</a></li>
            </ul>
        </div>

        
        <div class="form">
            <label for="name">First Name</label><br>
            <input type="text" name="name" required>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" required>
            <label for="sid">SID</label>
            <input type="text"name="sid" required>
            <label for="email">Email Address</label>
            <input type="email" name="email" required>
       
        <br>
        <br>
       
                <label for="options"><b>Select the practical slot:</b></label>
                <select id="options">
                    <option value="monday">Monday 15:00-17:00</option>
                    <option value="tuesday">Tuesday 14:00-16:00</option>
                    <option value="thursday">Thursday 11:00-13:00</option>
                    <option value="friday">Friday 10:00-12:00</option>
                </select>
      

  
                  <br>
                  <br>
                  <input type="submit" value="Register"/>
                  <input type="submit" value="Clear"/>
     
        </div>
        <br>

        <div class="block" style="height:20px;width:98%; background-color:#8B0000 ;margin:auto"></div>
        <br>
    
    </div>
</body>
</html>