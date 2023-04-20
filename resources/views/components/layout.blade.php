<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <style>
    *{
    padding:0;
    margin:0;
    box-sizing: border-box;
    }
    body{
    padding:20px 0;
     }
   .image_container{
    position: relative;
    text-align: center;
    color: white;
 }
.image{
    height:400px;
}
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
.sub{
    width:500px;
}
    </style>
    <title>Blog</title>
</head>
<body>
    <div class="container">
        <x-navbar/>
        {{$slot}}
        <x-footer/>
    </div>
</body>
</html>

