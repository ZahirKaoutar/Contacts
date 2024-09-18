{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Formulaire d'ajout les contact</h1>
    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="phone" placeholder="Téléphone" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Ajouter</button>
    </form>
    <a href="{{ route('contacts.index') }}" class="btn btn-primary">la liste des contacts</a>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <form  method="POST" action="{{ route('contacts.store') }}">
        @csrf
        <fieldset >
          <legend>Formulaire D'ajout les contacts</legend>
          <div class="mb-3">
            <label for="TextInput" class="form-label">Nom</label>
            <input type="text" name='nom' id="TextInput" class="form-control" placeholder="Entrer Nom " required>
          </div>
          <div class="mb-3">
            <label for="TextInput2" class="form-label">Phone</label>
            <input type="text" name='phone' id="TextInput2" class="form-control" placeholder="Entrer  num Tel " required>
          </div>
          <div class="mb-3">
            <label for="TextInput3" class="form-label">Email</label>
            <input type="email" name='email' id="TextInput3" class="form-control" placeholder="Entrer email " required>
          </div>

          <button type="submit" class="btn btn-primary">Ajouter</button>
        </fieldset>
      </form>
      <br>
     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

