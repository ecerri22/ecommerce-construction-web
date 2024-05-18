<?php
?>


<div class="form2-container">
    <div class="form2-row">
    <button class="form-delete-btn" onclick ="removeform(this);">X</button>
        <div class = "form2-contents">
            <div>Enter Name Of Statistic</div>
            <input type="text" class="form2-input" id="statistic-name">
            <div>Enter Table of Statistic</div>
            <select class="dropdown" id="category">
                <option value="">Select Table</option>
                <option value="1">Orders</option>
                <option value="2">Products</option>
                <option value="3">Users</option>
                <option value="3">Reviews</option>
            </select>
        </div>
    </div>
</div>

<?php

?>