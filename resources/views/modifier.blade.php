<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modifier article</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!-- Inclure SweetAlert CDN -->

    <style>
        /* CSS pour le formulaire */
        body {
            background-color: #2e3141;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
            min-height: 150px;
        }

        ul.actions {
            list-style: none;
            padding: 0;
            margin-top: 1rem;
        }

        ul.actions li {
            display: inline-block;
            margin-right: 1rem;
        }

        /* CSS pour CKEditor */
        .ck-editor__editable_inline {
            min-height: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 0.5rem;
        }

        /* CSS pour les boutons */
        input[type="submit"],
        input[type="button"],
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"].primary {
            background-color: #007bff;
        }

        input[type="submit"]:hover,
        input[type="button"]:hover,
        button:hover {
            background-color: #555;
        }

        .centered-title {
            text-align: center;
            font-size: 1.5rem;
            margin-top: 1rem;
            margin-bottom: 2rem;
            font-family: 'Roboto', sans-serif;
            color: #fff;
        }
    </style>
    
    <script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
</head>

<body>

    <center>
        <h3 class="centered-title">Modifier votre contenu ici</h3>
    </center>

    <form action="{{route('modifyContent')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <label for="demo-name" style="color: #fff;">Titre</label>
                <input type="text" name="titre" value="" placeholder="{{$contenu->titre}}"/>
            </div>

            <div class="col-12">
                <label for="demo-message" style="color: #fff;">Description</label>
                <textarea name="description" rows="6" class="form-control" placeholder="{{$contenu->description}}"></textarea>
            </div>

            <div class="col-12">
                <label for="demo-message" style="color: #fff;">Texte</label>
                <textarea class="form-control" name="texte" id="editor" placeholder="{!!$contenu->texte!!}"></textarea>
            </div>
            <br>
            <div class="col-12">
                <input type="submit" value="Modifier">
            </div>

    </form>
  
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

  

</body>

</html>
