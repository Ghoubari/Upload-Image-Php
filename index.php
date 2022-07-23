<!DOCTYPE html>
<html lang="fr">
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
            <div class="col-lg-12">
                <h1 class="text-center mt-5">Téléchargez vos images</h1>
                <div class="text-center">
                    <!-- Make form to upload some files -->
                    <form class="form-group" action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="d-grid gap-2 col-6 mx-auto mt-5">
                            <input type="file" name="image" multiple class="form-control">
                        </div>   
                        <div class="d-grid gap-2 col-6 mx-auto mt-5">
                            <button class="btn btn-success">Télécharger</button>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>