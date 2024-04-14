<?php include_once ("templates/header.php"); ?>




<title>Contatos</title>
<main>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nome</th>
        <th scope="col">preco</th>
        <th scope="col">actions</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>


      <tr>
        <th scope="row"> </th>
        <td></td>
        <td>

        <td>
          <form action="excluir.php" method="post">
            <input type="hidden" name="id" value="">
            <input type="submit" value="excluir">
          </form>
        </td>
        <td>

          <form action="editar.php" method="post">
            <input type="hidden" name="id" value="">
            <input type="hidden" name="nome" value="">
            <input type="hidden" name="preco" value="">

            <input type="submit" value="editar">
          </form>
        </td>
        </td>

      </tr>

    </tbody>
  </table>
</main>

<?php include_once ("templates/footer.php") ?>