<link rel="stylesheet" href="normalize.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
include 'dbConfig.php';

//load the database configuration file

if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Members data has been inserted successfully.';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>
<div class="container">
    <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    } ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Books import
        </div>
        <div class="panel-body">
            <form action="importData.php" method="post" enctype="multipart/form-data" id="importFrm">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Uitgifte ID</th>
                      <th>Kleur code of categorie </th>
                      <th>Titel boek</th>
                      <th>Auteur nummer</th>
                      <th>Auteur naam</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    //get records from database
                    $query = $db->query("SELECT * FROM books ORDER BY id DESC");
                    if($query->num_rows > 0){
                        while($row = $query->fetch_assoc()){ ?>
                    <tr>
                      <td><?php echo $row['book_id']; ?></td>
                      <td><?php echo $row['book_colorcat']; ?></td>
                      <td><?php echo $row['book_title']; ?></td>
                      <td><?php echo $row['book_author_id']; ?></td>
                      <td><?php echo $row['book_author_name']; ?></td>
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="5">Geen data gevonden...</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
