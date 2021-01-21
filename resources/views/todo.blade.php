<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/todo.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">


</head>
<body>
    
    <div class="overlay">
        <div class="description mb-24 mt-24">
            <p>Todo App</p>
            <p>Built in Laravel, Vue, and MySQL</p>
        </div>    
        <div class="overlay-images">
            <img src="images/laravel.png" />
            <img src="images/mysql.png" />
            <img src="images/vue.png" />
        </div>
        <div class="overlay-info mt-4">
            <p>(Click anywhere to close)</p>
        </div>
    </div>
    <div id="app" class="mt-24">
        <todo-form></todo-form>
    </div>

    <script src="js/app.js"></script>
    <script>
        document.querySelector(".overlay").addEventListener("click",function(){
            document.querySelector(".overlay").style.display="none";
        });

    </script>
</body>
</html>