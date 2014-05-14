<?php
$jobs = array(
    array(
        "job_title" => "Azure Cloud Developer", 
        "job_description" => "We are seeking an experienced and professional Microsoft .Net Web Applications Developer with Sharepoint/Azure.",
        "salary" => "$115,000"
    ),
    array(
        "job_title" => "DevOps Engineer", 
        "job_description" => "You’ll work with a small but growing team of engineers with a passion for building the best landing experience platform on the planet", 
        "salary" => "$125,000"
    )
);
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>PHP Jobs</title>
</head>
 
<body>
    <div>
      <a href="index.php">PHP Jobs v1.0</a>
    </div>
 
    <div>
        <h1>Current Jobs</h1>    
<?php
if (count($jobs) > 0)
{
?>
        <table>
            <tr>
                <th>Job Title</th>
                <th>Job Descripton</th>
                <th>Salary</th>
            </tr>
<?php
    foreach($jobs as $job)
    {
?>
            <tr>
                <td><?php echo $job['job_title'] ?></td>
                <td><?php echo $job['job_description'] ?></td>
                <td><?php echo $job['salary'] ?></td>
            </tr>
<?php
    }
?>
        </table>
<?php
}
else
{
?>
        <h2>There are no current jobs</h2>
<?php
}
?>
    </div>
</body>
</html>