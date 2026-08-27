<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Tag Selector */
      p{
          background-color: yellow;
      }

      #para1{
   color: green;
      }

      .para2{
        color: blue;
      }

    </style>
</head>
<body>
    <section>
    <h1>Registration Page</h1>
     <!-- Inline css 
    <p style="color:red">Welcome to registration page</p>
     <p id="para1">This is a para 1</p>
     <p class="para2">This is a para 2</p>
     <p class="para2">This is a para 3</p>
          
     <p>This is a para 4</p>

     <div class="goat">
        <p>
            I am a goat
        </p>
     </div> -->

     <form>
        <div>
            <label for="FullName">Name: </label>
            <input name="FullName" type="text" id="FullName" placeholder="Enter your name" value="John Cena">
        </div>
        <div>
            <label for="email">Email: </label>
            <input name="email" id="email" type="text" placeholder="Enter your email">
        </div>
        <div>
            <label for="dob">Date of Birth: </label>
            <input name="dob" id="dob" type="date">
        </div>
        <div>
            <label for="time">Time: </label>
            <input name="time" id="time" type="time">
        </div>
        <div>
            <label for="phone">Phone Number: </label>
            <input name="phone" id="phone" type="tel" placeholder="Enter your phone number">
        </div>
        <div>
            <label for="color">Color: </label>
            <input type="color" name="color" id="color">
        </div>

        <div>
            <label for="gender">Gender: </label>

            <input type="radio" id="gender" name="gender" value="male">
            <label for="gender">Male</label>
            <input type="radio" id="gender" name="gender" value="Female">
            <label for="gender">Female</label>
            <input type="radio" id="gender" name="gender" value="Others">
            <label for="gender">Others</label>
        </div>

            <div>
            <label for="hobbies">Hobbies: </label>

            <input type="checkbox" id="hobbies" name="hobbies" value="coding">
            <label for="hobbies">Coding</label>
            <input type="checkbox" id="hobbies" name="hobbies" value="dancing">
            <label for="hobbies">Dancing</label>
            <input type="checkbox" id="hobbies" name="hobbies" value="eating">
            <label for="hobbies">Eating</label>
        </div>

        <div>
            <input type="submit" id="submit" name="submit" value="Register">
        </div>
     </form>
     </section>
</body>
</html>

