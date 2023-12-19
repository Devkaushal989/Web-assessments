<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            margin: auto;
            margin-top: 50px;
            position: relative;
        }
        .btn{
            padding: 10px;
            margin: 10px;
            border: 1px solid black;
            border-radius: 5px;
            color: white;
            font-weight: 700;
            background-color: green;
            position: absolute;
            right: 10%;
        }
    </style>
</head>
<body>
    <table border="1" width="1000" >
        <tr>
            <th>role name</th>
            <th>action</th>
        </tr>
        <tr>
            <td>admin</td>
            <td><button>edit</button><button>delete</button></td>
        </tr>
        <tr>
            <td>user</td>
            <td><button>edit</button><button>delete</button></td>
        </tr>
    </table>
            <a href="role_manage.php">abc</a>
            <button class="btn" href="role_manage.php">Add new role</button>
    
</body>
</html>