<?php
/*

 */


require("inc/connect.php");
$country_id = ($_REQUEST["country_id"] <> "") ? trim($_REQUEST["country_id"]) : "";
if ($country_id <> "") {
    $sql = "SELECT  DISTINCT city FROM location WHERE  state = '" . $_POST["country_id"] . "' ";
    try {
        $stmt = $DB->prepare($sql);
       
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
    if (count($results) > 0) {
        ?>
        <label>State: 
            <select name="state" onchange="showCity(this);">
                <option value="">Please Select</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["city"]; ?>"><?php echo $rs["stcityate"]; ?></option>
                <?php } ?>
            </select>
        </label>
        <?php
    }
}
?>