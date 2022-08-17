<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RobotMovement</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<style>
    #instructions{
        color: #136f63;
        font-size: 30px;
    }

    .container{
        max-width: 40%;
        display: flex;
    }

    span {
        display: flex;
        justify-content: space-evenly;
    }

    .btn{
        align-self: center;
        background-color: #164a4b;
        color: white;
        border-radius: 20px;
        border: none;
        padding: 5px;
        font-size: 14px;
        height: 80px;
        width: 80px;
        box-shadow: 0 2px 3px darkslategray;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .btn:hover{
        background-color: #000000;
    }

    .btn:active{
        color: black;
        background-color: #FFFFFF;
        box-shadow: 0 0 2px darkslategray;
        transform: translateY(2px);
    }


    #header{
        align-self: center;
        color: #136f63;
        font-size: 50px;
    }

    body{
        background: #E5F4E3;
        font-family: 'Open Sans', sans-serif;
        -webkit-font-smoothing: antialiased;
        color:#393D3D;
    }

    #btnG{
        align-self: center;
        margin: 30px;
    }


</style>


<body>
<h1 id="header" class = "text-center mt-5">
    Move Robot Controls
</h1>

<div class = "container" id="parent">

    <div class = "form-group" id="btnG"style="Text-align: center " >

        <form action="{{route('forward')}}" method="post">
            @csrf
            <div class = "form-group">
                <span>
                    <button id = "forward-btn" class = "btn btn-danger btn-block form-control text-center mt-5" >
                        forward
                    </button>
                </span>
        </form>


                <span>
                <form action="{{route('left')}}" method="post">
                @csrf
                    <button id = "left-btn" class = "btn btn-danger btn-block form-control text-center mt-5" >
                      left
                    </button>
                </form>

                <form action="{{route('stop')}}" method="post">
                @csrf
                    <button id = "stop-btn" class = "btn btn-danger btn-block form-control text-center mt-5" >
                        stop
                    </button>
                </form>

                <form action="{{route('right')}}" method="post">
                @csrf
                    <button id = "right-btn" class = "btn btn-danger btn-block form-control text-center mt-5" >
                        right
                    </button>
                </form>
                </span>
            <form action="{{route('backward')}}" method="post">
            @csrf
                <span>
                    <button id = "backward-btn" class = "btn btn-danger btn-block form-control text-center mt-5" >
                        backward
                    </button>
                </span>
            </div>
        </form>

        <p id = "instructions" class="text-center mt-5"> Press any button to move\stop robot</p>

    </div>

</div>

</body>

</html>