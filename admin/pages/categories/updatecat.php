<?php

include "../../components/header.php";
?>

<main>

  <div class="container-fluid">
    <h3 class="text-center"> Update category </h3>
    <div>
      <form action="" method="post">
        <div class="form-row align-items-center">
          <div class="col-auto my-1">
            <label class="sr-only" for="inlineFormInput">Select category</label>
            <select name="subcategory" class="custom-select mr-sm-2" id="">
              <option selected>Select category to update</option>
              <option value="1">James</option>
              <option value="2">Dalmas</option>
              <option value="3">Duncan</option>
              <option value="3">Iterate through categories setting Id as value and SUBCATEGORY TITLE as the display name</option>
            </select>
          </div>
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
    <div>
      <form class="user">

        <div class="form-group">
          <label for=""> Category name </label>
            <input type="text" class="form-control form-control-user" id="" aria-describedby="" placeholder="Enter Category name...">
        </div>

        <div class="form-group">
            <label for=""> Category title </label>
            <input type="text" class="form-control form-control-user" id="" aria-describedby="" placeholder="Enter category title">
        </div>

        <div class="form-group">
            <label for=""> Category description </label>
            <input type="text" class="form-control form-control-user" id="" aria-describedby="" placeholder="Enter category description">
        </div>

        <div class="form-group">
            <label for=""> Category link name </label>
            <input type="text" class="form-control form-control-user" id="" aria-describedby="" placeholder="Enter category link name ie 'gameparks'">
        </div>
        
        <div>
          <button class="btn btn-primary"> Add category </button>      
        </div>

    </form>
    </div>
  </div>

</main>

<?php

include "../../components/footer.php";

?>