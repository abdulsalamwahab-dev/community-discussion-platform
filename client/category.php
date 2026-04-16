<select name="Category" class="form-select" id="Category">
    <option value="">Select Category</option>

    <?php 

    include "./common/db.php"; 
    $query_category = "SELECT * FROM category";
    $result_categories = $conn->query($query_category);

    foreach ($result_categories as $category) {
        $category_id = $category['id'];
        $category_name = $category['name'];
        echo "<option value='" . $category_id . "'>" . $category_name . "</option>";
    }

    ?>

</select>