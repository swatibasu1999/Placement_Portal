<?php
include '../connection.php';
include 'headeradmin.php';
?>

<div class="w3-row-padding w3-margin-bottom">
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <h5 class="card-header">ADD EXAM</h5>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Exam Category</label>
                                <input type="text" class="form-control" name="exam_category" id="formGroupExampleInput" placeholder="Exam Category">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Exam Time In Minutes</label>
                                <input type="text" class="form-control" name="exam_time_in_minutes" id="formGroupExampleInput2" placeholder="Time in Minutes">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Answer Table</label>
                                <input type="text" class="form-control" name="answer" id="formGroupExampleInput2" placeholder="Reference Answer Table">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">ADD</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <h5 class="card-header">EXAM CATEGORIES</h5>
                    <div class="card-body">
                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">S.NO.</th>
                                    <th scope="col">EXAM NAME</th>
                                    <th scope="col">EXAM TIME</th>
                                    <th scope="col">EDIT</th>
                                    <th scope="col">DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 0;
                                $cursor = $link->find();
                                foreach ($cursor as $document) {
                                    $count = $count + 1;
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $count ?></th>
                                        <td> <?php echo $document["category"] ?> </td>
                                        <td> <?php echo $document["exam_time_in_minutes"] ?> </td>
                                        <td> Edit </td>
                                        <td> Delete </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">

    </div>
</div>

<?php
if (isset($_POST["submit"])) {
    $exam_category = $_POST["exam_category"];
    $exam_time_in_minutes = $_POST["exam_time_in_minutes"];
    $answer = $_POST["answer"];

    $document = array(
        "category" => $exam_category,
        "exam_time_in_minutes" => $exam_time_in_minutes,
        "answer" => $answer,
    );
    $link->insertOne($document);
    ?>
   <script>
       alert("Exam Added sucessfully");
       window.location.href =  window.location.href;
       </script>

    <?php
}

?>


<?php
include 'footeradmin.php';
?>