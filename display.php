<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Candidates</title>
    <?php include 'links.php'; ?>
    <style><?php include 'css/style.css'; ?></style>
</head>
<body>
    <div class="main-div">
        <h1>List of Candidates for Web Developers Job</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>degree</th>
                            <th>mobile</th>
                            <th>email</th>
                            <th>refer</th>
                            <th>post</th>
                            <th colspan="2">operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        include 'connection.php';
                       
                        $selectquery = " select * from jobregistration ";

                        $query = mysqli_query($con, $selectquery); 

                        $nums = mysqli_num_rows($query);


                        while ($res = mysqli_fetch_array($query)) {
                           ?>
                        <tr>
                            <td> <?php echo $res['id']?></td>
                            <td>  <?php echo $res['name']?></td>
                            <td>  <?php echo $res['degree']?></td>
                            <td>  <?php echo $res['mobile']?></td>
                            <td>  <?php echo $res['email']?></td>
                            <td>  <?php echo $res['refer']?></td>
                            <td> <?php echo $res['jobpost']?></td>
                            <td><a href="updates.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td><a href="delete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                         <?php 
                        }
                        ?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
                $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
                });
</script>
</body>
</html>

 
