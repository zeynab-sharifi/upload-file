<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col">
                <form action="/upload.php" method="POST" enctype="multipart/form-data" id="form">
                    <div class="form-group">
                        <label for="fileupload">File :</label>
                        <input type="file" id="fileupload" name="file" class="form-control">
                    </div>
                    <button class="btn btn-danger">submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        const form = document.querySelector('#form')
        

        form.addEventListener('submit' , function(event){
            event.preventDefault();
            let file = this.querySelector(`#fileupload`).file[0]
            if(file){
                let formData = new FormData();
                formData.append('file' , file);

                let ajax = new XMLHttpRequest();
                ajax.addEventListener('load', completHandler)


                ajax.open('POST' , '/upload.php');
                ajax.send(formdata)
            }
        })

        function completHandler(){
            console.log('complete')
        }
    </script>
</body>
</html>