<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Account Baru</title>
</head>
<body>
    <hr>
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>
    <form action="/welcome" method="GET" >
        <label for="fname">First name :</label><br><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name :</label><br><br>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="gender">Gender :</label><br><br>
        <input type="radio" id="gender1" name="gender1" value="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="gender2" name="gender2" value="Female">
        <label for="female">Female</label><br>
        <input type="radio" id="gender3" name="gender3" value="Other">
        <label for="other">Other</label><br><br>
        <label for="nationality">Nationality</label><br><br>
        <select id="nationality" name="nationality">
            <option value="indonesia">Indonesia</option>
            <option value="singapore">Singapore</option>
            <option value="malaysia">Malaysia</option>
        </select><br><br>
        <label for="spoken">Language Spoken :</label><br><br>
        <input type="checkbox" id="spoken1" name="spoken1" value="Bike">
        <label for="spoken1"> I have a bike</label><br>
        <input type="checkbox" id="spoken2" name="spoken2" value="Car">
        <label for="spoken2"> I have a car</label><br>
        <input type="checkbox" id="spoken3" name="spoken3" value="Boat">
        <label for="spoken3"> I have a boat</label><br><br>
        <label for="bio">Bio :</label><br><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br><br>
        <button>Sign Up</button>
    </form>
</body>
</html>