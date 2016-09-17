<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wellcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #1c1c1c;
                color: #0090d9;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .floating{
			    float: left;
			    -webkit-animation-name: Floatingx;
			    -webkit-animation-duration: 3s;
			    -webkit-animation-iteration-count: infinite;
			    -webkit-animation-timing-function: ease-in-out;
			    -moz-animation-name: Floating;
			    -moz-animation-duration: 3s;
			    -moz-animation-iteration-count: infinite;
			    -moz-animation-timing-function: ease-in-out;
			    margin-left: 30px;
			    margin-top: 5px;
			}

			@-webkit-keyframes Floatingx{
			    from {-webkit-transform:translate(0, 0px);}
			    65% {-webkit-transform:translate(0, 15px);}
			    to {-webkit-transform: translate(0, -0px);    }    
			}
			    
			@-moz-keyframes Floating{
			    from {-moz-transform:translate(0, 0px);}
			    65% {-moz-transform:translate(0, 15px);}
			    to {-moz-transform: translate(0, -0px);}    
			}


			.scaling{
			    float: left;
			    -webkit-animation-name: scalex;
			    -webkit-animation-duration:3s;
			    -webkit-animation-iteration-count:infinite;
			    -webkit-animation-timing-function:ease-in-out;
			    -moz-animation-name: scale;
			    -moz-animation-duration:3s;
			    -moz-animation-iteration-count:infinite;
			    -moz-animation-timing-function:ease-in-out;
			}
			    
		    @-webkit-keyframes scalex{
		        from {-webkit-transform: scale(0.9);}
		        65% {-webkit-transform: scale(1.0);}
		        to {-webkit-transform: scale(0.9);}    
		    }
		        
		    @-moz-keyframes scale{
		        from {-moz-transform: scale(0.9);}
		        65% {-moz-transform: scale(1.0);}
		        to {-moz-transform: scale(0.9);}    
		    }
			.center{    
				width: 250px;
			    margin: 0 auto;
			    position: absolute;
			    top: 60%;
			    left: 0;
			    right: 0;
			}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Looks Good!<br>
                    <img src="logo-white2.png" alt="Ballenasoft" class="floating center">
                </div>
            </div>
        </div>
    </body>
</html>