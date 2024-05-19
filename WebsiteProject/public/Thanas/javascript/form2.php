<?php
?>


<div class="form2-container">
        <div class="form2-row">
            <button class="form-delete-btn" onclick="removeform(this);">X</button>
            <h1>Statistic-Info</h1>
            <div class="form2-contents">
                <div class="words">Enter Name Of Statistic</div>
                <input type="text" class="form2-input" id="statistic-name" placeholder="Name">
                <div class="words">Enter Table of Statistic</div>
                <select onclick="updateTypeOptions()" class="dropdown" id="category">
                    <option class="dropdown-content" value="">Select Table</option>
                    <option class="dropdown-content" value="1">Orders</option>
                    <option class="dropdown-content" value="2">Products</option>
                    <option class="dropdown-content" value="3">Users</option>
                    <option class="dropdown-content" value="4">Reviews</option>
                </select>
                <div class="div-prod-img">
                        <label for="prod-img" class="label-other">
                            <span>+ Add Statistic Icon</span>
                            <input type="file" id="prod-img" class="prod-img" name="prod-img" accept="image/*">
                        </label>
                    </div>
                <div hidden = 'true'>
                    <div class="words" id="hiddentext">Enter Type</div><br>
                    <select style="width: 100%" class="dropdown"  id="type">
                        <option class="dropdown-content" value="All"></option>
                </select>
                </div>
            </div>
            <button class="form2-confirm-btn" onclick="addstatistic(this)">Add Statistic</button>
        </div>
    </div>

<?php

?>