<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
    <style>
        *{
            margin: auto;
            padding: 0;
        }
        .top,.bottom{
            display: flex;
            flex-wrap: wrap;
        }
        .bottom{
            background: red;
        }
        .b-l{
            text-align: left;
            background-color: #f1f1f1;
            padding: 10px;
            flex: 20%;
        }
        .b-r{
            background-color: dodgerblue;
            padding: 10px;
            flex: 80%;   
        }
        a{
            text-decoration: none;
            color: black;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        @media (max-width: 800px) {
            .b-l, .b-r {
                flex: 100%;
        }
    }
        
    </style>
</head>

<body>
    <section class="top">
        <div class="left">
            <h1>Nepal Electricity Authority (NEA) </h1>
        </div>
        <div class="rignt">logo</div>
    </section>
    <section class="bottom">
        <div class="b-l">
            <div><a href="#0">Home</a></div>
            <div>
                <a href="#1">Customer module</a>
            </div>
            <div><a href="#2">Bill management module</a></div>
            <div><a href="#3">Payment management module</a></div>
            <div><a href="#4">Reporting</a></div>
        </div>
        <div class="b-r">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </section>
    <style>
        
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>