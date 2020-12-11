<html lang="en">
    <head>  
        <title>Lists</title>

        <!-- Override CSS file - add your own CSS rules -->
        <link rel="stylesheet" href="assets/css/styles.css">

    </head>
    <body>
        <div class="header">
            <div class="container">
                <h1 class="header-heading">Lists</h1>
            </div>
        </div>
        <div class="nav-bar">
            <div class="container">
                <ul class="nav">
                    <?php
                    echo '<li><a href="view_lists.php">View Lists</a></li>';
                    echo '<li><a href="create_lists.php">Create Lists</a></li>';
                    ?>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="main">
                    <h1>Search Lists</h1>
                    <div class="well">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th> 
                                    <th>Store</th>
                                    <th>Date</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //check to see if the submit button was pushed
                                    // include movie controller file
                                    require_once './controller/list.php';
                                    // get data input into form 
                                    // and store it in variables
                                    select_list();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>