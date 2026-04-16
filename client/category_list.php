<div class="container">
    <h3 class="heading">Category List</h3>

    <?php
    include "./common/db.php";
    $query_category_get = "SELECT * FROM `category`";
    $result_category_show = $conn->query($query_category_get);

    foreach ($result_category_show as $category) {
        $category_name = ucfirst($category['name']);
        $category_id = $category['id'];
       echo "<a class='content_center' href='?c-id={$category['id']}' style='text-decoration: none; color: inherit;'>
        <div class='card_v2 my-3' style='width: 220px;'>
            <div class='card-body'>
                <h5 class='card-title'>{$category_name}</h5>
            </div>
        </div>
      </a>";
    }
    ?>

</div>