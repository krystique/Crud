<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
        
            .btn {
                display: block;
                width: 50%;
                border: none;
                background-color: #89CFF0;
                font-size: 16px;
                cursor: pointer;
                text-align: center; 
                position: absolute;
                left:25;
                right:25%;
                font-family: Montserrat;
                font-size: 1.25rem;
            }

            .btn:hover{
                background-color: #89bbf0;
                border: 1px solid gray;
                transition: 0.5s;
            }
        </style>
    </head>
    <body>
        <nav class="navbar" style="background-color: #89bbf0;">
            <div class="container-fluid">
                    <a class="navbar-brand" href="http://127.0.0.1:8000">C.R.U.D</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/teachers">Teacher</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/students">Student</a>
                        </li>
                    </span>
                </div>
            </div>
        </nav>
        <div class="container" style="text-align: center;">
            <a href="http://127.0.0.1:8000"><img src="images/crud logo.png" class="logo" alt="Crud logo" style="margin: 10px auto; display: block; width: 350px"></a>
            <h1 style="text-align: center; font-family: Montserrat; font-size: 2rem">Choose between the two</h1>
            <a href="http://127.0.0.1:8000/teachers" button type="button" class="btn">Teacher</button></a>
            <a href="http://127.0.0.1:8000/students" style="margin-top: 50px" button type="button" class="btn">Student</button></a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>