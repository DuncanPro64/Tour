<?php

include "../../components/header.php";
?>

<main>

  <div class="container-fluid">


    <h3 class="text-center"> Bookings within the database ( <i> <small>Get the count from the database here!</small> </i> ) </h3>

    <div class="users">
      <table class="table table-responsive table-light table-striped">
        <thead class="thead thead-dark">
          <tr>
            <th> ID </th>
            <th> Booking </th>
            <th> Booking title </th>
            <th> Booking description </th>
            <th> Booking link name </th>
            <th> Booking image </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>jeymoh</td>
            <td>James</td>
            <td>Last</td>
            <td>james@gmail.com</td>
            <td> 1/10/2020 </td>
          </tr>
          <tr>
            <td>3</td>
            <td>jeymoh</td>
            <td>James</td>
            <td>Last</td>
            <td>james@gmail.com</td>
            <td> 1/10/2020 </td>
          </tr>
        </tbody>
        <tfoot>
          <p class="text-danger">(Iterate through bookings here)</p>
        </tfoot>
      </table>
    </div>

  </div>

</main>

<?php

include "../../components/footer.php";

?>