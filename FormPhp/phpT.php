<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
    <style>
        fieldset{
            width: 450px;
        }
        select{
            width: 100px;
            height: 30px;
            border-radius: 5px;
            margin: 0 10px 0 10px;

            color: #262626;
        }
        .container{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        input[type='submit']{
            width: 150px;
            height: 30px;

            background: #262626;
            color: #fff;
            font-weight: 500;
            font-size: 16px;
            border: 1px solid #fff;
            outline: none;
            border-radius: 5px;
            transition: all ease-in-out 0.5s;

            cursor: pointer;
        }

        input[type='submit']:hover{
            background: #fff;
            color: #262626;
            transition: all ease-in-out 0.5s;
            cursor: pointer;
        }
        form{
            width: 450px;
            height: 150px;
            background: #262626;

            display: flex;
            justify-content: center;
            align-items: center ;
            flex-direction: column;

            margin: 0 auto;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            font-family: Arial, Helvetica, sans-serif;

            box-shadow: 5px 12px 8px rgba(0, 0, 0, 0.08);
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <div class="content">
      <form method="get" action="desafio.php">
          <!-- Valor: <input type="number" name="val"> -->
         <div class="container">
            <label for="valor">Escolha</label>
            <select name="val" id="valor">
                <?php
                    for($op=1; $op<=10; $op++){
                        echo "<option> $op </option>";
                    }
                ?>
            </select>
         </div>
          <input type="submit" value="tabuada">
      </form>
    </div>
</body>
</html>