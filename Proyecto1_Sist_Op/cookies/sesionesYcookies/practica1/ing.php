<!DOCTYPE html>
<html>
    <head>
        <title>Images</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            h2,h4{
                text-align: center;
                background-color: coral;
                color: darkgreen;
            }
            table{
                width: 25%;
                background-color: lightsteelblue;
                border: 4px dotted darkgreen;
                margin: auto;
            }
            .izq{
                text-align:right;
                color: darkgreen;
            }
            .der{
                text-align:left;
                color: darkgreen;
            }
            td{
                text-align: center;
                padding: 15px;
            }
            .button {
                display: inline-block;
                border-radius: 4px;
                background-color: darkolivegreen;
                border: none;
                color: aliceblue;
                text-align: center;
                font-size: 14px;
                padding: 5px;
                width: 100px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
                
            }
            .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }

            .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
            }

            .button:hover span {
                padding-right: 25px;
            }

            .button:hover span:after {
                opacity: 1;
                right: 0;
            }
        </style>
    </head>
    <body>
        
        <h2>Beautiful images</h2>
        <h4>On this page you'll find four pretty images</h4>
        <table width="800" border="0">
                <tr>
                    <td class="izq"><img src="img/Chrysanthemum.jpg" width="300" height="166"></td>
                    <td class="der"><img src="img/Desert.jpg" width="300" height="171"></td>
                </tr>
                <tr>
                    <td class="izq"><img src="img/Hydrangeas.jpg" width="300" height="166"></td>
                    <td class="der"><img src="img/Jellyfish.jpg" width="300" height="197"></td>
                </tr>
                
        </table>
    </body>
</html>
