<?php

include "../../components/header.php";
?>

<main class="container-fluid mb-5">

  <div>
      <form action="" method="post">
        <div class="form-row align-items-center">
          <div class="col-auto my-1">
            <label class="sr-only" for="inlineFormInput">Select category</label>
            <select name="cat" class="custom-select mr-sm-2" id="">
              <option selected>Select category to use</option>
              <option value="1">James</option>
              <option value="2">Dalmas</option>
              <option value="3">Duncan</option>
              <option value="3">Iterate through subcategories setting Id as value and SUBCATEGORY TITLE as the display name</option>
            </select>
          </div>
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Use</button>
          </div>
        </div>
      </form>
    </div>

  <div class="card o-hidden border-0 shadow-lg my-5 p-4">
    <h2 class="text-center"> Add new subcategory </h2>
    <form class="user">

      <div class="form-group">
        <label for=""> Category name </label>
          <input type="text" class="form-control form-control-user" id="" aria-describedby="" value="<?php if (isset($_POST['cat'])) {
            echo $_POST['cat'] ;
          } ?>" placeholder="Enter Subcategory name..." disabled>
      </div>

      <div class="form-group">
          <label for=""> Subcategory title </label>
          <input type="text" class="form-control form-control-user" id="" aria-describedby="" placeholder="Enter subcategory title">
      </div>

      <div class="form-group">
          <label for=""> Subcategory description </label>
          <input type="text" class="form-control form-control-user" id="" aria-describedby="" placeholder="Enter subcategory description">
      </div>

      <div class="form-group">
          <label for=""> Subcategory link name </label>
          <input type="text" class="form-control form-control-user" id="" aria-describedby="" placeholder="Enter subcategory link name ie 'samburu gamepark'">
      </div>

      <div class="form-group">
          <label for=""> Subcategory link name </label>
          <input type="file" class="form-control form-control-user" id="" aria-describedby="">
      </div>

      <div>
        <button class="btn btn-primary"> Add subcategory </button>
      </div>

  </form>
  </div>

</main>

<?php

include "../../components/footer.php";

?>