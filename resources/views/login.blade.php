<html>
<head>
    <link rel="icon" type="image/png" href="images/favicon.png">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta name="DESCRIPTION" content="Nalipa">
    <meta name="KEYWORDS" content="Nalipa,Simply Pay,Nalipa.com">
    <meta name="ROBOTS" content="ALL">
    <title>Nalipa - Simply Pay</title>
    <style>
        a {
            color: green;
            text-decoration: none;
        }

        a:visited {
            color: #36582;
        }

        .logreg_link {
            color: green;
            text-decoration: none;
        }

        .logreg_link:hover {
            color: black;
            text-decoration: none;
        }

        .rnd {
            -moz-border-radius: 15px 15px 15px 15px;
            -webkit-border-radius: 15px 15px 15px 15px;
            border-radius: 15px 15px 15px 15px;
        }

        .top_nav_td {
            font-weight: bold;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 14px;
        }

        .top_nav_td:hover {
            border-bottom-style: solid;
        }

        .bottom_nav_td {
            border-right: solid;
            border-width: 2px;
            border-color: #8EBB79;
        }

        .btn {
            height: 40px;
            letter-spacing: 1px;

            background-color: #B8DD39;
            font-weight: bold;
            color: black;
            font-size: 22px;

            -moz-border-radius: 10px 10px 10px 10px;
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
        }

    </style>
    <script type="text/javascript" src="chrome-extension://aadgmnobpdmgmigaicncghmmoeflnamj/ng-inspector.js"></script>
</head>
<body style="font-family:arial; font-size:11px;">
<table align="center" style="width:80%; padding:10px; border-color:green;">
    <tbody>
    <tr>
        <td style="width:206px; height:98px;">
            <a href="index.php"><img src="../../resources/assets/images/logo.png"></a>
        </td>
    </tr>
    <tr>
        <td class="rnd" colspan="100%" style="padding-top:30px;">
            <table class="rnd"
                   style="width:100%; border-style:solid; border-width:20px; border-color:#365827;; padding:30px;"
                   cellspacing="0" cellpadding="0">
                <tbody>
                <tr>
                    <td colspan="100%" style="font-weight:bold; font-size:large;">Log-in to access Nalipa API</td>
                </tr>
                <tr>
                    <td colspan="100%">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="width:100%;">
                        <form name="login" action="vlogin.php" method="post">
                            <table style="width:100%; padding:30px;">
                                <tbody>
                                <tr>
                                    <td align="right">Your email :</td>
                                    <td><input name="user_id" id="user_id" type="text" style="height:30px;"></td>
                                </tr>
                                <tr>
                                    <td align="right">Password :</td>
                                    <td><input name="password" id="password" type="password" style="height:30px;"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td align="left"><input class="btn" style="width:170px;" value="Login" type="button"
                                                            onclick="vlogin()"></td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </td>
                    <script>

                        function vlogin() {
                            var user_id = document.getElementById('user_id').value.length;
                            var password = document.getElementById('password').value.length;
                            if (user_id != 0 && password != 0) {
                                document.login.submit();
                            } else {
                                alert("Enter Username and Password to continue");
                            }
                        }
                    </script>
                </tr>
                <tr style="height:10px;">
                    <td colspan="100%"></td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>


</body>
</html>