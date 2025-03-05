<?php 
    require_once("templates/header.php");
?>
    <h1 id="title-index">Minhas Notas</h1>
   <div id="add-action">
        <p>Total de Notas: 0</p>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">Nova Nota</button>  
   </div>
   <div id="div-grid-notes">

   </div>
   <?= require_once("templates/model.php"); ?>
<?php 
    require_once("templates/footer.php");
?>