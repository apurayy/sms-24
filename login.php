<?php include_once('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-4 m-auto card shadow mt-5 p-3">
            <h1>Admin Login</h1>
            <form action="action/login.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                
                <button type="submit" name="login" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>