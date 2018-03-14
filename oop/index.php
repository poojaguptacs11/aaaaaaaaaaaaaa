<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Vertical Form Layout</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <?php
        include('class/user.php');
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Mark</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $studentList=$userObj->userList();
            if($studentList>0)
            {
                foreach($studentList as $key=>$stdVal)
                {
                    ?>
                    <tr>
                        <td><?php echo  $stdVal['name'];?></td>
                        <td><?php echo  $stdVal['class'];?></td>
                        <td><?php echo  $stdVal['mark'];?></td>
                    </tr>
                    <?php
                }
            }
            else
            {
                ?>
                <tr>
                <td colspan="3">No Student Found</td>
            </tr>
                <?php
            }
            ?>
            
        </tbody>
    </table>
</div>
</body>
</html>                            