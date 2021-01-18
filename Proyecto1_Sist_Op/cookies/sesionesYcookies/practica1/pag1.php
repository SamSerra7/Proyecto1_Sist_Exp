<!DOCTYPE html>
<html>
    <head>
        <title>Elegir idioma</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <?php
            if (isset($_COOKIE["selected_idiom"])) {
                if ($_COOKIE["selected_idiom"] == "es") {
                    header("location:esp.php");
                } 
                else if ($_COOKIE["selected_idiom"] == "en") {
                    header("location:ing.php");
                }
            }
        
        ?>
        <table width="254" align="center">
                <tr>
                    <td colspan="2" align="center">
                        <h1>Elige idioma</h1>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <a href="crea_cookie.php?idioma=es"><img src="img/esp.gif" width="90" height="60"></a>
                    </td>
                    <td align="center">
                        <a href="crea_cookie.php?idioma=en"><img src="img/ing.gif" width="90" height="60"></a>
                    </td>
                </tr>
            </table>
    </body>
</html>
