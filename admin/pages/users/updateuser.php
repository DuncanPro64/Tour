<?php

include "../../components/header.php";
?>

<main>

  <div class="container-fluid">
    <h3 class="text-center"> Update user details </h3>
    <div>
      <form action="" method="post">
        <div class="form-row align-items-center">
          <div class="col-auto my-1">
            <label class="sr-only" for="inlineFormInput">Select user</label>
            <select name="username" class="custom-select mr-sm-2" id="">
              <option selected>Select user to update</option>
              <option value="1">James</option>
              <option value="2">Dalmas</option>
              <option value="3">Duncan</option>
              <option value="3">Iterate through users setting userId as value and Username as the display name</option>
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
          <label for=""> Username </label>
            <input type="text" class="form-control form-control-user" value="<?php if (isset($_POST['username'])) {
              echo $_POST['username'];
            } ?>" id="" aria-describedby="" placeholder="Enter username..." disabled>
        </div>

        <div class="form-group">
            <label for=""> Email </label>
            <input type="email" class="form-control form-control-user" id="" aria-describedby="" placeholder="Enter user email add...">
        </div>

        <div class="form-group">
            <label for=""> Password </label>
            <input type="password" class="form-control form-control-user" id="" aria-describedby="" placeholder="Password...">
        </div>

        <div class="form-group">
            <label for=""> Confirm password </label>
            <input type="password" class="form-control form-control-user" id="" aria-describedby="" placeholder="Password repeat...">
        </div>

        <div>
          <button class="btn btn-primary round"> <i class="fa fa-pencil-alt"></i> Update user </button>
        </div>

    </form>
    </div>
  </div>

</main>

<?php

include "../../components/footer.php";

?>