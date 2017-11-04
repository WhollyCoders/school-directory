<?php 
require('./config.php');
$School = new School($connection);
// echo '<pre>';
// print_r($School);
// echo '</pre>';
$schools = $School->get_all();
// echo '<pre>';
// print_r($schools);
// echo '</pre>';
$counter = 1;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>School Index</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Schools</h1>
            <table>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <!-- <th>Address</th> -->
                    <th>City</th>
                    <th>State</th>
                    <!-- <th>Zip</th>
                    <th>Date Added</th> -->
                </tr>
                <?php foreach ($schools as $school) { ?>
                <tr>
                    <td><?php echo($counter); ?></td>
                    <td><?php echo($school['name']); ?></td>
                    <!-- <td><?php echo($school['address']); ?></td> -->
                    <td><?php echo($school['city']); ?></td>
                    <td><?php echo($school['state']); ?></td>
                    <!-- <td><?php echo($school['zip']); ?></td>
                    <td><?php echo($school['date_added']); ?></td> -->
                    <td><a href="#">View Detail</a></td>
                </tr>
                <?php  
                $counter++;
                }  ?>
            </table>
        </div>
    </body>
</html>