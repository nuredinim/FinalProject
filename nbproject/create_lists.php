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