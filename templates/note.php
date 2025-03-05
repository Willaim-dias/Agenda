<?php foreach($notes as $note): ?>
    <div id="note">
        <td class="actions">
            <h3><?= $note["title"] ?></h3>
            <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
            <form class="delete-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
                <input type="hidden" name="type" value="delete">
                <input type="hidden" name="id" value="<?= $note["id"] ?>">
                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
            </form>
        </td>   
        <textarea type="text" name="observations" id="observations"><?= $note["observations"] ?></textarea>  
    </div>
<?php endforeach; ?>
