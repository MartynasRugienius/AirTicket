<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>
    <?php 
    if(isset($_POST['submit'])){  
            if($_POST['baggage'] === '20+') (int)$_POST['price'] += 30;
    }
    ?>
    <div class="container">
        <h1 class="">Air Ticket</h1>


    <form method="POST">
        
        <div class="mb-3">
        <label for="FlightNmbr" class="form-label">Skrydžio Nr.</label>
            <select class="form-select" id='FlightNmbr'
            name='FlightNmbr'
            >
                <option selected disabled value="">Select</option>
                <?php foreach ($RandFlightNumb as $FlightNmbr): ?>
                <option value=<?=$FlightNmbr?>><?=$FlightNmbr?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="code" class="form-label">Asmens Kodas</label>
            <input type="number" class="form-control"
            name='code'
            required
            id="code">
        </div>
        <div class="mb-3">
            <label for="vname" class="form-label">Vardas</label>
            <input type="text" class="form-control"
            name='name'
            required
            id="name">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Pavardė</label>
            <input type="text" class="form-control"
            name='surname'
            required
            id="surname">
        </div>
        <div class="mb-3">
        <label for="flightstart" class="form-label">Iš kur skrenda</label>
            <select class="form-select" id='flightstart'
            name='flightstart'
            
            required
            >
                <option selected disabled value="">Select</option>
                <?php foreach ($countries as $country): ?>
                <option value="<?=$country?>"><?=$country?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
        <label for="flightend" class="form-label">Į kur skrenda</label>
            <select class="form-select" id='flightend'
            name='flightend'
            required
            >
                <option selected disabled value="">Select</option>
                <?php foreach ($countries as $country): ?>
                <option value="<?=$country?>"><?=$country?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Kaina &euro;</label>
            <input type="number" class="form-control"
            name='price'
            required
            id="price">
        </div>
        <div class="mb-3">
            <label for="baggage" class="form-label">Bagažas (kg)</label>
            <select class="form-select" id='baggage'
            name='baggage'
            required
            >
                <option selected disabled value="">Select</option>
                <?php foreach ($baggage as $luggage): ?>
                <option value="<?=$luggage?>"><?=$luggage?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="additional" class="form-label">Pastabos</label>
            <textarea class="form-control" placeholder="Rašykite pastabas čia" id="additional" name='additional'></textarea>

        </div>
        <button type="submit" name='submit' class="btn btn-primary">Spausdinti</button>
    </form>
    <?php if(isset($_POST['submit'])):?>
        <?php if($_POST['flightstart'] !== $_POST['flightend']):?>
            <table class="table mt-5">
                <thead class="thead-dark">
                        <tr>
                        <?php foreach ($_POST as $key =>$data): ?>
                            <?php if($key !== 'submit'):?>
                                <th scope="col"><?=$key?></th>
                            <?php endif?>
                        <?php endforeach ?>
                        </tr>
                </thead>
                <tbody>
                
                    <tr>
                    <?php foreach ($_POST as $key =>$data): ?>
                        <?php if($key !== 'submit'):?>
                            <td scope="col"><?=$data?></td>
                        <?php endif?>
                    <?php endforeach ?>
                    </tr>
                
                </tbody>
        </table>
        <?php else: ?>
            <h2>Iš ir Į kur skrenda negali būti tokie patys</h2>
        <?php endif?>
<?php endif?>
    </div>


</body>
</html>
