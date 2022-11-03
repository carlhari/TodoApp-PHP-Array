<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | Alisangco</title>
    <link rel="stylesheet" href="./style.css">

</head>
    
<body>
    <div class="title">TODO APP | Alisangco</div>
    <div class="main-container">
        

        <form class="btn-box" method="POST">

            <div class="todo-box">
                <input type="text" class="task" name="task" placeholder="Write your Task" required>
            </div>

            <input type="submit" name="add" value="ADD" class="btn-add" id="add">
            
        </form>

        <div class="add-box">
            <?php include 'main.php'?>
        </div>
    
      
    </div>
</body>
</html>