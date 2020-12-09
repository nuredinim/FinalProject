<?php
session_start();
if (!isset($_SESSION['listid'])) {
    $_SESSION['listid'] = 0;
}
?>
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
                        <form name="lists" id="lists" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <div class="form-group">
                                <label for="listName">List Name</label>
                                <input name="listName" type="text" class="form-control" id="listName" maxlength="45">
                            </div>                                                                        
                            <button name="submit" type="submit" class="btn btn-primary">Search</button>
                        </form>
                        <br>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th> 
                                    <th>Store</th>
                                    <th>Date</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //check to see if the submit button was pushed
                                if ((isset($_GET['list']))) {
                                    // include movie controller file
                                    require_once './controller/list.php';

                                    // get data input into form 
                                    // and store it in variables
                                    $list = $_GET['list'];
                                    
                                    select_list();
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>