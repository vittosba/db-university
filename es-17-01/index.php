<?php
require_once __DIR__ . '/get-departments.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css' integrity='sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==' crossorigin='anonymous'/>
</head>
<body>
    <main class="container">
        <h1 class="mb-4">Departments Archive</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Active</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(!empty($departments)) :
                    foreach($departments as $department) :?>
                    <tr>
                        <td><?php echo $department['id']?></td>
                        <td><?php echo $department['name']?></td>
                        <td><?php echo $department['email']?></td>
                        <td><?php echo $department['website']?></td>
                        <td>
                            <a href="./show.php?id=<?php echo $department['id']?>">
                                View
                            </a>
                        </td>
                    </tr>
                    <?php endforeach ;
                endif; ?>
            </tbody>
        </table>
    </main>
</body>
</html>