<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wall Block :(</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .main-contain{
            background-color: #ccc;
            height: 100vh;
        }

        h1, h2, h3{
            font-family: 'Poppins', sans-serif;
        }

        .manage-child1{
            height: 100vh;
            width: 100%;
            position: relative;
        }

        .child1-contain{
            width: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-items: center;
        }
    </style>
</head>
<body>
<div class="container-fluid main-contain">
    <div class="col-xl-12">
        <div class="manage-child1">
            <div class="child1-contain">
                <h1>This site is under Develop or Maintenance.</h1>
                <h3>If you want to join this site, please contact to Admin site</h3> <h3> or </h3><h3> enter the secret key in the box below.</h3>
                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                    <form method="post" action="{{route('check.wb.key')}}">
                        {{csrf_field()}}
                        <input type="text" class="form-control is-invalid" name="sck">
                        <div class="col-xl-12" style="display: flex; justify-content: center;">
                            <input type="submit" value="Submit" class="btn btn-primary mt-2">
                        </div>
                        <div class="invalid-feedback">
                            Wrong key
                        </div>
                        <input type="text" class="form-control is-valid">
                        <div class="valid-feedback">
                            Success
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>