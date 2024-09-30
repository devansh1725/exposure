<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exposure 2024</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
            font-family: "Fira Sans", sans-serif;
            font-weight: 500;
            font-style: normal;
            background-color: #eae6cf;
        }

        h1 {
            text-align: center;
            color: #fff;
            margin: 0;
            padding: 20px 0;
            background-color: #44484b9c;
        }

        .frame {
            /* max-width: px; */
            margin: 20px auto;
            border: 2px solid #3498db;
            border-radius: 8px;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Navigation Links Styling */
        nav {
            background-color: #2c3e50;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Slideshow Container */
        .slideshow-container {
            position: relative;
            max-width: 100%;
            margin: 20px auto;
            border-radius: 8px;
            overflow: hidden;
        }

        .slides {
            display: none;
            width: 100%;
            height: 500px;
        }

        .slides img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 24px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Slideshow Dots */
        .dots {
            text-align: center;
            padding: 10px;
        }

        .dots span {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .dots .active {
            background-color: #717171;
        }

        .slideshow-container {
            padding: 35px 2px;
            border-radius: 10px;
            box-shadow: -1px 0px 8px 8px rgb(69 50 50 / 35%);
        }

        h1 {
            border-radius: 25px;
            font-size: 48px;
        }

        .buttons {
            /* border: 2px solid black; */
            margin: 0;
            padding-left: 313px;
            align-items: center;
            justify-content: center;
        }

        button {
            /* padding: ; */
            margin: 1px 112px;
            padding: 8px 25px;
            color: black;
            border-radius: 25px;


        }

        a {
            text-decoration: none;
            font-size: 42px;
            font-family: "Fira Sans", sans-serif;
            font-weight: 500;
            font-style: normal;
            color: black;
        }

        .retrieveContainer {
            /* font-size: px; */
            border: 2px solid black;
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
            text-align: center;
            padding: 13px 0px;
            margin: 111px 249px;
            border-radius: 15px;

        }

        h2 {
            font-size: 32px;
        }
        form{
            font-size: 22px;
            text-align: center;

        }

        .btn{
            font-size: 12px;
        }

        button{
            font-size: 16px;
        }

        
    </style>
</head>

<body>
    <!-- Hospital Name (First Row) -->
    <h1>Exposure 2024</h1>

    <div class="retrieveContainer">
        <h2>Retrieve User Data by User ID</h2>

        <!-- Form to input User ID -->
        <form action="5.php" method="POST">
            <label for="userId">Enter User ID:</label>
            <input type="text" id="userId" name="userId" required>
            <br><br>
            <!-- <input class="btn" type="submit" value="Retrieve Data"> -->
            <button type="submit">Retrieve Data</button>
        </form>
    </div>

</body>

</html>