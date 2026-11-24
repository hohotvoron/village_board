<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>zadachas</title>
  <style>
    @font-face{
        font-family: 'izbushka';
        src: url("/fonts/TDIzbushka.otf") format('opentype');
        font-weight: normal;
        font-style: normal;
    }
    * {
     	cursor: url('/images/handapet tonikyan.cur') 4 1, pointer;

    }
    body{

        margin: 0;
        padding: 0;
        font-family: 'izbushka';
    }
    .main{
        margin: 0;
        padding: 0;
        background-image: url("/images/fone.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        min-height: 100vh;
        h1{
            margin: 0;
        }
        .header{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            .head{
                background-image: url('/images/head-fone.webp');
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                width: min(500px, 90%);
                height: 200px;
                h1{
                    color: rgb(39, 38, 38);
                    font-size: clamp(32px, 8vw, 60px);
                    letter-spacing: 5px;
                    text-align: center;
                    line-height: 200px;
                }
            }
            button{
                align-self: flex-end;
                width: min(220px, 90%);
                height: 100px;
                border: none;
                background: none;
                background-image: url('/images/hammer.png'), url('/images/button-fone.png');
                background-position: center, center;
                background-size: contain, cover;
                background-repeat: no-repeat, no-repeat;
            }
        }
        .zadachas{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
            padding: 20px 0;
            .zadacha{
                background-image: url("/images/zadacha-fone.png");
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                width: min(400px, 90%);
                min-height: 400px;
                padding: 152px 50px 48px 50px;
                box-sizing: border-box;
                h2{
                    text-align: center;
                }
                p{
                    text-align: center;
                }
            }
        }
    }
    .new-zadacha{
        background-image: url('/images/zadacha-fone.png');
        background-position: center;
        background-size:cover;
        background-repeat:no-repeat;  
        position: fixed;
        box-sizing: border-box;
        width: min(400px, 90%);
        height: 400px;
        padding: 152px 50px 48px 50px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1000;
        form {
            /* display: block; */
            display: flex;
            align-items: center;
            flex-direction: column;
            }
            .a{
                width: 40%;
                align-self: flex-start;
                margin-left: 30px
            }
            input{
                margin-top: 10px;
                width: 80%;
                margin-bottom: 20px
            }
            textarea{
                width: 80%;
                height: 80px;
            }
            button{
                display: block
                align-self: flex-end;
                width: min(100px, 90%);
                height: 50px;
                border: none;
                background: none;
                background-image: url('/images/hammer.png'), url('/images/button-fone.png');
                background-position: center, center;
                background-size: contain, auto;
                background-repeat: no-repeat, no-repeat;
            }
            input,
            textarea,
            button {
            display: block;           
            box-sizing: border-box;
            
        }

    }
    .krest{
        position: fixed;
        top: 16.5%;
        left: 85%;
        transform: rotate(45deg);
        font-weight: 900;
        font-size: 30px;
        z-index: 10020;
    }
  </style>
</head>
<body>
  <div class="main">
    
    <div class="new-zadacha" id="new_z" style="display: none">
        <p class="krest" id="krest" style="display: none">+</p>
        <form action="" method="post">
            <input type="text">
            <textarea name="" id=""></textarea>
            <input type="date" name="" id="" class="a">
            <button></button>
        </form>
    </div>
    <div class="header">
        <div class="head">
            <h1>Задачи</h1>
        </div>
        <button id="open_new"></button>
    </div>
    <div class="zadachas">
        <div class="zadacha">
            <h2>сходить в туалет</h2>
            <p>дада просто пописять сукоо</p>
        </div>
        <div class="zadacha">
            <h2>сходить в туалет</h2>
            <p>дада просто пописять сукоо</p>
        </div>
        <div class="zadacha">
            <h2>сходить в туалет</h2>
            <p>дада просто пописять сукоо</p>
        </div>
    </div>
  </div>
</body>
<script>
    document.getElementById('open_new').addEventListener('click',function(){
        document.getElementById('new_z').style = "display:block;";
        document.getElementById('krest').style = "display:block;";
    });
    document.getElementById('krest').addEventListener('click', function(){
        document.getElementById('new_z').style = "display:none;";
        document.getElementById('krest').style = "display:none;";
    });
</script>
</html>
