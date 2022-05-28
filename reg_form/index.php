<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
</head>
<body><!-- The beginning of the form -->
    <form action="user_data.php" method="POST"><!--specifies the linking file & the secured method-->
        <fieldset>
            <legend>Enter Your Details</legend><!--This emphazises the caption-->

            <label for="name">
            Name: <input type="text" name="name" required><br/><br/>
            </label>
            <label for="email">
                Email: <input type="text" name="email" required><br/><br/>
            </label>
            <label for="dob">
                Date_Of_Birth: <input type="date" name="dob" required><br/><br/>
            </label>
            <label for="gender">
                Gender: Male<input type="radio" name="gender" value="Male" required>
                        Female<input type="radio" name="gender" value="Female" required><br/><br/>
            </label>
            <label for="country">Your Country:
                <select name="country" id="country" >
                    <option value="nigeria">Nigeria</option>
                    <option value="ukraine">Ukraine</option>
                    <option value="usa">USA</option>
                    <option value="jamaica">Jamaica</option>
                    <option value="canada">Canada</option>
                </select>
            </label>
            <br/><br/>
            <input type="submit" value="Submit">

        </fieldset>
    </form>
</body>
</html>