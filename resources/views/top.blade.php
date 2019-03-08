<! DOCUTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>みんなのお店探し</title>
        <style>
            body {
              background-image: url("/myproject/public/img/beer.jpg");
              background-size: 100%;
            }
	    
      
            .container {
              width: 100%;
              height: 400px;
              text-align: center;
            } 

            a { 
              color: black;
              text-decoration: none;
            }

            .acount-create:hover {
              text-decoration: underline; 
            }

            h1 {
              font-size: 75px;
              font-weight: 100px;
              width: 600px;
              margin: 200px auto 10px auto;
	  
            }
            .login-btn {
              background-color: #FFA500;
              font-size: 20px;
              width: 100px;
              margin: 0 auto 10px auto;
              border-radius: 5px;
              padding: 5px 5px;
              display: block;
            }

            .login-btn:hover {
              transition: all 0.3s;
              background-color: #F29900;         
            }

	  

     
        </style>
    </head>
    <body>
        <div class="container">
        <h1>みんなのお店探し</h1>
        <a class="login-btn" href="http://misakichiba.pepper.jp/myproject/public/login">ログイン</a>
        <a class="acount-create" href="http://misakichiba.pepper.jp/myproject/public/register">アカウントを作成する</a>
        </div>
    </body>
</html>
