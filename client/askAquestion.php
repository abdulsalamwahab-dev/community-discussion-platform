<div class="container mt-4 min-vh-100">
    <div class="row">
        <div class="col-md-4 col-12 offset-md-4">
            <h3 class="mb-4">Ask a Question</h3>
            <form action="./server/requests.php" method="post">
                <div class="mb-3">
                    <label for="Title" class="form-label">Title</label>
                    <input type="text" name="Title" class="form-control" id="Title" aria-describedby="nameHelp" placeholder="Enter your question title">
                </div>
                <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                    <textarea type="text" name="Description" class="form-control" id="Description" aria-describedby="nameHelp" placeholder="Enter your question description" style="min-height:100px;"></textarea>
                </div>
                <div class="mb-4">
                    <label for="Category" class="form-label">Category</label>
                    <?php include "category.php" ?>
                </div>
                <div style="text-align: center;">
                    <button type="submit" name="askQuestionBtn" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>