<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="output_form.css">
    <title>Cozy Furniture | Log In Output</title>
</head>
<body>
    <div class="container">
        <div class="header-brand">
            <div class="first_name" >cozy</div>
            <div class="last_name" >furniture</div>
        </div>
        <div class="main-content">
            <div class="header-box">Log In Data</div>
        </div>
        <div class="main-content2">
            <div class="content-box">
                <div class="content">
                    <div>Username       :   <? echo $_GET["username"]; ?></div>
                    <div>Password       :   <? echo $_GET["password"]; ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-c">
        Copyright &copy; 2022 Designed by Natalie Fuad
    </div>
</body>
</html>