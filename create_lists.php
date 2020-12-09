<?php
session_start();
if (!isset($_SESSION['listid'])) {
    $_SESSION['listid'] = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>  
        <title>Create List</title>

        <!-- Override CSS file - add your own CSS rules -->
        <link rel="stylesheet" href="assets/css/styles.css">

    </head>
    <body>
        <div class="header">
            <div class="container">
                <h1 class="header-heading">Create List</h1>
            </div>
        </div>
        <div class="nav-bar">
            <div class="container">
                <ul class="nav">
                            <div class="content">
            <div class="container">
                <div class="main">
                    <h1>Create List</h1>
                    <div class="well">
                        <form name="login" id="login" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                            <div class="form-group">
                                <label for="listName">List Name</label>
                                <input name="listName" type="text" class="form-control" id="listName" required="" maxlength="45">
                            </div>
                            <div class="form-group">
                                <label for="listStore">List Store</label>
                                <input name="listStore" type="text" class="form-control" id="listStore" required="" maxlength="45">
                            </div>
                            <div class="form-group">
                                <label for="listDate">List Date</label>
                                <input name="listDate" type="text" class="form-control" id="listDate" required="" maxlength="45">
                            </div>                                                 
                            <button name="submit" type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                </ul>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                Lists
            </div>
        </div>
    </body>
</html>