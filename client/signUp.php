<div class="container mt-4 min-vh-100">
    <div class="row">

        <div class="col-md-4 col-12 offset-md-4">
            <h3 class="mb-4">Sign Up</h3>
            <form action="./server/requests.php" method="post">
                <div class="mb-3">
                    <label for="userName" class="form-label">User Name</label>
                    <input type="text" name="userName" class="form-control" id="userName" aria-describedby="nameHelp" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="userEmail" class="form-label">User Email</label>
                    <input type="email" name="userEmail" class="form-control" id="userEmail" aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="userPassword" class="form-label">Password</label>
                    <input type="password" name="userPassword" class="form-control" id="userPassword" placeholder="Enter your password">
                </div>
                <div class="mb-3">
                    <label for="userAddress" class="form-label">User Address</label>
                    <input type="text" name="userAddress" class="form-control" id="userAddress" aria-describedby="addressHelp" placeholder="Enter your address">
                </div>
                <div style="text-align: center;">
                    <button type="submit" name="signUpbtn" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>