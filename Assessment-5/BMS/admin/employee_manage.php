<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin: auto;
            margin-top: 50px;
            width: 500px;
            padding: 30px;
            border: 1px solid black;
            border-radius: 5px;
        }
        input{
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
        }
        textarea{
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .buttons{
            display: flex;
            justify-content: center;
        }
        input[type="checkbox"]{
            width: 13px;
            height: 13px;
            margin: 0;
        }
        button{
            padding: 10px;
            margin: 10px;
            width: 100px;
            border: 1px solid black;
            border-radius: 5px;
            color: white;
            font-weight: 700;
        }
        button[type="reset"]{
            background-color: red;
        }
        button[type="submit"]{
            background-color: green;
        }
    </style>
</head>
<body>
    <form action="employee_callback.php" method="POST">
        <label for="name">Category Name*</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Category name">
        <label for="email">detail</label><br>
        <input type="email" name="email" id="email">
        <label for="password">Image</label><br>
        <input type="password" name="password" id="password">
        <label for="status">Status</label>
        <input type="checkbox" name="status">
        <div class="buttons">
            <button type="reset">CANCEL</button><input type="submit" name="" id="">
        </div>
    </form>
</body>
</html>