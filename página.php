<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Meu Segundo site em PHP! Woohoo!</title>
</head>
    <style type="text/css">
        
        .linha {
            font-weight: bold;
            color: green;
            padding-left: 10px;
            line-height: 50px;
        }

    </style>  

    <body>
        
        <?php
            for ( $i = 0; $i < 10 ; $i++ ) {
                print ("<span class=\"linha\"> Linha número " . $i . "</span><br />");
            }
        ?>
    </body>

    <script type="text/javascript"> 
        $(document) .ready(function() {
            alert("Woohoo!");
        }); 
    </script>        

</html>