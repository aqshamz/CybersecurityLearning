<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>
<style>
    body {
        background-color: white;
    }

    /* Header */

    #logo {
        width: 250px;
    }

    .navbar {
        background-color: rgb(0, 182, 158);
        height: 40px;
        display: flex;
        align-items: center;
    }

    .navbtn {
        color: white;
        text-decoration: none;
        margin-left: 30px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

    }

    .navbtn:hover {
        opacity: 50%;
    }

    .atas {
        background-color: #005b99;
        height: 500px;
        display: flex;
        flex-direction: column;
        align-items: center;

    }

    .gambar {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;

    }

    .tulisan {
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 2rem;
        font-family: Arial, Helvetica, sans-serif;
        line-height: 25px;
    }

    .tebel {
        font-weight: bolder;
    }

    #c {
        width: 100px;
    }

    #c:hover {
        opacity: 50%;
    }

    .tulisanbawah {
        line-height: 45px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
        place-items: center;
        font-size: larger;
    }

    .gambarbawah {
        border-image-width: 50px;
        place-items: center;
    }

    .bawah {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
        height: 325px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .do {
        color: teal;
    }

    .tb {
        color: white;
    }

    .footer {
        background-color: rgb(0, 182, 158);
        height: 55px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .tf {
        margin-left: 40px;
    }

    #fb {
        width: 30px;
    }

    #fb:hover {
        opacity: 50%;
    }

    .sosmed {
        margin-right: 20px;
    }


    body {
        margin: 0;
    }

    .sk {
        background-color: rgb(16, 40, 46);
        height: 780px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form {
        background-color: white;
        height: 70%;
        width: 30%;
        border: black;
        border-radius: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .f {}

    .jf {
        font-size: 40px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: bolder;
    }

    .fl {
        margin-top: 20px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .rd {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        margin-top: 20px;

    }

    .dob {
        margin-top: 20px;

        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }


    .cb {
        margin-top: 20px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .b {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
</style>

<body>
    <div class="content">
        @yield('content')
    </div>

</body>

</html>
