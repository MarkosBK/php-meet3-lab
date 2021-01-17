<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
    <style>
    h1 {
        background-clip: inherit;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    </style>
</head>

<body>
    <form method="POST" class="container mx-auto row">
        <div class="col px-2">
            <h4 align="center">color-1</h4>
            <div class="row d-flex border mx-2">
                <div class="form-group col m-0">
                    <label for="R1">R</label>
                    <input type="number" min="0" max="255" value="255" class="form-control" name="R1">
                </div>

                <div class="form-group col">
                    <label for="G1">G</label>
                    <input type="number" min="0" max="255" value="0" class="form-control" name="G1">
                </div>
                <div class="form-group col">
                    <label for="B1">B</label>
                    <input type="number" min="0" max="255" value="0" class="form-control" name="B1">
                </div>
            </div>
        </div>

        <div class="col px-2">
            <h4 align="center">color-2</h4>
            <div class="row d-flex border mx-2">
                <div class="form-group col m-0">
                    <label for="R2">R</label>
                    <input type="number" min="0" max="255" value="0" class="form-control" name="R2">
                </div>

                <div class="form-group col">
                    <label for="G2">G</label>
                    <input type="number" min="0" max="255" value="255" class="form-control" name="G2">
                </div>
                <div class="form-group col">
                    <label for="B2">B</label>
                    <input type="number" min="0" max="255" value="0" class="form-control" name="B2">
                </div>
            </div>
        </div>

        <div class="col px-2">
            <h4 align="center">color-3</h4>
            <div class="row d-flex border mx-2">
                <div class="form-group col m-0">
                    <label for="R3">R</label>
                    <input type="number" min="0" max="255" value="0" class="form-control" name="R3">
                </div>

                <div class="form-group col">
                    <label for="G3">G</label>
                    <input type="number" min="0" max="255" value="0" class="form-control" name="G3">
                </div>
                <div class="form-group col">
                    <label for="B3">B</label>
                    <input type="number" min="0" max="255" value="255" class="form-control" name="B3">
                </div>
            </div>
        </div>
        <input type="submit" name="accept" value="Create" class="btn btn-dark">
    </form>
    <div class="container mx-auto">
        <h1>GRADIENT TEXT NUMBER ONE</h1>
    </div>
    <?
    if(!isset($_POST["accept"])){

    }
    else{
        ?>
    <div class="container mx-auto">
        <? echo "<h1 style='background-image: linear-gradient(45deg, rgb(".$_POST['R1'].','.$_POST['G1'].','.$_POST['B1'].") 5%, rgb(".$_POST['R2'].','.$_POST['G2'].','.$_POST['B2'].") 33%, rgb(".$_POST['R3'].','.$_POST['G3'].','.$_POST['B3'].") 44%);'>GRADIENT TEXT NUMBER ONE</h1>"
        ?>
    </div>
    <?
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>