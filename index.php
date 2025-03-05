<?php 
    require_once("templates/header.php");
?> 
   <h1 id="title-index">Minhas Notas</h1>
    <?php if(isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
   <div id="add-action">
        <?php if(count($notes) > 0): ?>
            <p>Total de Notas: <?= count($notes); ?></p>
        <?php else: ?>
            <p>Ainda nao ha Notas na sua agenda.</p>
        <?php endif; ?>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">Nova Nota</button>
   </div>
   <div id="div-grid-notes">
        <?= require_once("templates/note.php"); ?>
   </div>
   <?= require_once("templates/model.php"); ?>
<?php 
    require_once("templates/footer.php");
?>