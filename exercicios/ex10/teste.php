<html>
<form method="post" id="form">
    <div class="form-group">
        <label for="num">Digite 20 números</label>
        <input type="text" class="form-control" name="num" id="num">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
</html>
<?php

$numbers = $_POST['num'];
$numArray = explode(',', $numbers);

foreach($numArray as $num){
    if($num < 0){
        $neg[] = $num;
    } elseif($num > 0){
        $pos[] = $num;
    } else {
        $zero[] = $num;
    }
}
echo array_sum($pos);
echo "<br>";
echo count($neg);