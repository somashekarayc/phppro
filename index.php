<?= require_once './layouts/header.php' ?>
<main>

  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>

</main>

<div class="container">
  <button type="button" class="btn btn-sm btn-primary btn-icon m-1 getclienee" data-bs-toggle="modal" data-bs-target="#exampleModal" data-url="model/index_modal.php" data-size="lg" data-bs-whatever="Create New Index data"> <span class="text-white">
      <i class="ti ti-plus text-white" data-bs-toggle="tooltip" data-bs-original-title="Create"></i></span>
  </button>
</div>

<?= require_once './layouts/footer.php' ?>