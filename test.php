<!DOCTYPE html>
<html>
<head>
    <title>Blue Website</title>
    <style>
        body {
            background-color: blue;
            color: white;
            font-family: Arial, sans-serif;
        }
        .box {
            width: 300px;
            height: 250px;
            background-color: white;
            margin: 50px;
            display: inline-block;
            text-align: center;
            line-height: 150px;
            font-size: 24px;
            color: red; /* Set the text color to red */
            cursor: pointer;
            white-space: nowrap; /* Prevent text from wrapping */
        }
    </style>
</head>
<body>
    <h1>Welcome to Gabriel's portfolio!</h1>
    <div class="box" onclick="location.href='page1.html';">
        School projects
    </div>
    <div class="box" onclick="location.href='page2.html';">
        Internship projects
    </div>
    <div class="box" onclick="location.href='page3.html';">
        Passion projects
    </div>
</body>
</html>
