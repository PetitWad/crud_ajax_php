<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Create User | plastech</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form id="submit">
                    <div class="form-group">
                        <label for="exampleInputEmail1">FullName of user</label>
                        <input type="text" name="fullName" class="form-control" id="fullName" aria-describedby="emailHelp" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email of user</label>
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                    <div class="input-group">
                    <div class="input-group-prepend mt-2">
                        <label class="input-group-text" for="inputGroupSelect01">Choose a role of user before saving</label>
                    </div>
                    <div>
                        <select class="form-select mt-2" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="admin">Admin</option>
                            <option value="casher">Casher</option>
                        </select>
                    </div>
                    </div>
                    <div>
                        <select name="role" class="custom-select mt-2" id="inputGroupSelect01">
                            <option selected>Choose state of user</option>
                            <option value="actif">Actif</option>
                            <option value="inactif">Inactif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>