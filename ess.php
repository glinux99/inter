<?php $index=1;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('i_menu/header.php');?>
    <script src="editor/dist/summernote-lite.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js" integrity="sha512-6rE6Bx6fCBpRXG/FWpQmvguMWDLWMQjPycXMr35Zx/HRD9nwySZswkkLksgyQcvrpYMx0FELLJVBvWFtubZhDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <link rel="stylesheet" href="editor/dist/summernote-lite.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" integrity="sha512-ZbehZMIlGA8CTIOtdE+M81uj3mrcgyrh6ZFeG33A4FHECakGrOsTPlPQ8ijjLkxgImrdmSVUHn1j+ApjodYZow==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>
                    Name:
                </th>
                <th>
                    Post-Name:
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                    Daniel
                </th>
                <th>Kikimba</th>
            </tr>
            <tr>
                <th>
                    Daniel
                </th>
                <th>Kikimba</th>
            </tr>
            <tr>
                <th>
                    Daniel
                </th>
                <th>Kikimba</th>
            </tr>
        </tbody>
    </table>    
   <div class="container">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, aliquam.
        <form action="/ess2" method="post">
            <label for="">Titre:</label>
            <input type="text" name="titre" id="" class="form-control">
            <textarea name="description" id="summernote" ></textarea>
            <button type="submit" class="btn btn-success">Envoyer</button>
        </form>
   </div>
   <script>
       $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: "Description",
                height: 200,
                tabsize: 10,
                    });
            });
   </script>
</body>
</html>

