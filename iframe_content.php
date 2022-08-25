<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="content">
        <div id="email">
            <?php
                    $name = $email = $message = "";
                    
                    if(isset($_POST['submit'])){
                    $name = $_POST['name'];
                    $email = $_POST["email"];
                    $message = $_POST['message'];
                    $email_moj = "kamilwaresiak@gmail.com";
                };


                    if(empty($name && $email && $message)){
                        echo '<div class="red">';
                        echo "Proszę uzupełnić puste pola!";
                        echo '</div>';
                    }
                    else{
                        $mail = mail("kamilwaresiak@gmail.com", $name, $message,$email);
                        if($mail){
                            echo '<div>';
                            echo "Wiadomość wysłano pomyślnie!";
                            echo '</div>';
                        }
                        else{
                        echo '<div class="red">';
                        echo "Nie wysłano!";
                        echo '</div>';
                        }
                    };
                    
            ?>
        </div>
    </div>
    <style>
        *{
            margin: 0;
        }
        #content{
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 32px;
            
        }
        #email{
            color: green;                
        }
        .red{
            color: red;
        }
    </style>
</body>
</html>