<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
        <h1 class='text-center'>Register Form</h1>
        <form action="form.php" method='POST'>
            <div class="form-group">
                <label for="">Enter Your Name : </label>
                <input type="text" name='name' class="form-control" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="">Enter Your Address : </label>
                <input type="text" name='address' class="form-control" placeholder="Enter Your Address">
            </div>
            <div class="form-group">
                <label for="">Enter Your Phone : </label>
                <input type="text" name='phone' class="form-control" placeholder="Enter Your Phone">
            </div>
            <div class="form-group">
                <label for="">Enter Your Course Name : </label>
                <input type="text" name='c_name' class="form-control" placeholder="Enter Your Course Name">
            </div>
            <div class="form-group">
                <input type="submit" name='send' value="Send" class='btn btn-dark btn-block'>
            </div>


        </form>

        <?php
        
            // when click on submit button
            // super global
            // $_POST => all data send by post method
            // first method mysqli proc...
            if(isset($_POST['send']))
            {
                $connection = mysqli_connect('localhost','root','root','form');
                $name = $_POST['name'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $c_name = $_POST['c_name'];

                $sql = "INSERT INTO student(name,address,phone,c_name) 
                VALUES('$name','$address','$phone','$c_name')";

                if(mysqli_query($connection,$sql))
                {
                    echo 'new row is inserted';
                }else
                {
                    echo 'error : ' . mysqli_error($connection);
                }

            }            
        
        ?>
    </div>
</body>
</html>