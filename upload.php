<?php
if(!empty($_FILES['image']))
{
    $image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_error = $_FILES['image']['error'];

    $extensions = ['png', 'jpg', 'jpeg', 'gif'];
    $type = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'];

    $guessExtension = explode('.', $image_name);

    $max_size = 100000;

    if (in_array($image_type, $type))
    {
        if(count($guessExtension) <= 2 && in_array(strtolower(end($extensions)), $extensions))
        {
            if($image_size <= $max_size && $image_error == 0)
            {
                $image_name = time().'_'.$image_name;
                $image_path = './uploads/'.$image_name;
                if(move_uploaded_file($image_tmp_name, $image_path . uniqid() . '.' . strtolower(end($guessExtension)) ))
                {
                    ?>
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
                            <title>Upload d'image PHP</title>
                        </head>
                        <body>
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-lg-12  mt-5">
                                        <div class="text-center mt-5">
                                            <div class="alert alert-success"><h4>Téléchargement accomplis avec succés ;) !</h4></div>
                                            <a class="btn btn-primary mt-5" href="index.php">Retour à l'accueil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
                        </body>
                        </html>
                    <?php
                }
                else
                {
                    echo 'Error';
                }
            }
            else
            {
                echo 'Size is too big';
            }
        }
    } 
    else 
    {
        echo "type non autorisé";
    }
}

