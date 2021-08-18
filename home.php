<?php
    include "header.php";
    include "navbar.php";

    
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TSF Bank</title>
	<link rel="icon" href="/images/tsf.png" type="image/x-icon"/>
    <link rel="stylesheet" href="home_style.css">
</head>

<body>
    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">OUR THE SPARKS FOUNDATION BANK.</h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">
                
                    <div class="flex-item-login">
                        <h2 style="text-align:center;">Welcome</h2>
                    </div>

                    <div class="flex-item">
                        <form method="get" action="money.php">
                           <button type="submit" style="float:right;width:470px;">Money Transfer</button>
                        </form>
                    </div>

                    <div class="flex-item">
					    <form method="get" action="history.php">
                           <button type="submit" style="float: right;width:475px;">Transaction History</button>
						</form>
                    </div>

                    
                    </div>
                </form>
            </div>
        </div>

    </div>
	</br>
	</br>
	<div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);text-align:center;color:white;">
                © August 2021 Copyright - Made by <strong>Dayanand Kumar</strong> :
                <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank" style="color:white;"> The Sparks
                    Foundation </a>
            </div>
            <!-- Copyright -->
        </footer>

</body>
</html>


