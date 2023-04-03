<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        
    
    ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 border border-info rounded p-3">
                <div class="form-group my-3">
                    <label for="name">Student Name</label>
                    <input type="text" name="name" id="name" class="form-control"> 
                </div>
                <div class="form-group my-3">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email" class="form-control"> 
                </div>
                <div class="form-group my-3">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control"> 
                </div>
                <div class="form-group my-3">
                    <label for="status">Student Name</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">---Select Status---</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <button class="btn btn-info form-control">Save Info</button>
            </div>
            <div class="col-md-8  border border-info rounded p-3">
                <table class>
                    <thead>
                        <tr>
                            <th>S1 No</th>
                            <th>Student Name</th>
                            <th>Email Address</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
