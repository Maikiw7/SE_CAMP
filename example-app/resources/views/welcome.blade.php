<!doctype html>
<html>

<head>
    <title>Javascript HomeWork</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        button {
            padding: 10px 10px;
            background-color: #902d26;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
            margin-top: 10px;

        }

        input[type="text"] {
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .gen_number {
            list-style: none;
            margin: 0;
            padding: 5px 0;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <center>
    <input type="text" id="number" value="0">
    <button onclick="myFunction()">submit</button>
    <br>
    <table id="mytb"></table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function myFunction() {
            let my_number = parseInt($('#number').val());
            let result = ``;
            for (let i = 1; i <= 24; i++) {
                result += `<li class="gen_number">${my_number} x ${i} = ${my_number*i}</li>`;
            };
            $('#mytb').html(result);
        }
    </script>
    </center>
</body>

</html>
