<?php

include "../../components/header.php";
?>

<main class="container-fluid mb-5">

  <div class="card o-hidden border-0 shadow-lg my-5 p-4">
    <h2 class="text-center"> Add new category </h2>
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

</main>

<?php

include "../../components/footer.php";

?>