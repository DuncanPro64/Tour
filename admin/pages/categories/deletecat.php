<?php

include "../../components/header.php";
?>

<main>

  <div class="container-fluid">


    <h3 class="text-center"> Delete category </h3>
    <div>
      <form action="" method="post">
        <div class="form-row align-items-center">
          <div class="col-auto my-1">
            <label class="sr-only" for="inlineFormInput">Select category</label>
            <select class="custom-select mr-sm-2" id="" name="username">
              <option selected>Select category to delete</option>
              <option value="1">James</option>
              <option value="2">Dalmas</option>
              <option value="3">Duncan</option>
              <option value="3">Iterate through categories setting userId as value and Username as the display name</option>
            </select>
          </div>
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </form>
    </div>

  </div>

</main>

<?php

include "../../components/footer.php";

?>