<div class="container mt-4 min-vh-100">

    <div class="row">
        <div class="col-md-4 col-12 offset-md-4">
            <h3 class="mb-4">Login</h3>
            <form action="./server/requests.php" method="post">
                <div class="mb-3">
                    <label for="userName" class="form-label">User Email</label>
                    <input type="text" name="user_email" class="form-control" id="userName" aria-describedby="nameHelp" placeholder="Enter your email">
                </div>
                <div class="mb-4">
                    <label for="userPassword" class="form-label">Password</label>
                    <input type="password" name="user_password" class="form-control" id="userPassword" placeholder="Enter your password">
                </div>
                <div style="text-align: center;">
                    <button type="submit" name="login_btn" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>