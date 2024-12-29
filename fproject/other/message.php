<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR DATA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center"  style="background-color: #a020f0;">
    <div class="bg-dark p-5 mt-5 mb-4">
        <div class="d-flex justify-content-center align-items-center text-light">
            <div>
                <div class="d-flex justify-content-center align-items-center">
                    <h2>E-TAG</h2>
                </div>
                
                <br>
                <?php
                   $all='hii';
                   $gphone = 9130807215;
                   echo $all;
                   $loc='https://api.whatsapp.com/send?text=!!E-TAG EMERGENCY ALERT!! E-Tag user is asking for emergency help. Location: https://www.google.com/maps/@20.9269723,77.7402553,17z?entry=ttu';
                   $url = $loc."&phone=".$gphone;
                   echo '</br></br></br><button type="button" class="btn btn-outline-danger"><a href="'.$url.'"> ALERT </a></button>';
                   
                ?> 

                <br><br><br><br>
            
            </div>
        </div>
        <br> 
    </div>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

