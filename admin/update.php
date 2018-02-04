<?php require_once 'header.php';
    if session_start();
if (isset($_SESSION['user_email'])) { ?>
    <div class="clearfix"><br/></div>
    <?php
    $id = $_POST['id'];

    $sql = mysqli_query($con, "SELECT * FROM tekst WHERE id = $id");
    if (mysqli_connect_errno($con)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    while ($row = mysqli_fetch_array($sql)) {
        echo '

<div class="form-group">
    <form action="process/ponudaupdate.php" method="post" >
        
        <input type="hidden" name="id" value="' . $id . '" />
        <label for="naslov">Внесете наслов на "артиклот" (Село Небрегово, Манастир Св. Ѓорѓија,...):</label>
        <input type="text" name="naslov" class="form-control" id="naslov">
        <label for="date">Изберете датум кога е направен "артиклот" пр. 01/23/2014 (MM/DD/YYYY):</label>
        <input type="date" name="date" class="form-control" id="date">
        <label for="tip">Тип на "артиклот" (Известување, посети,...) :</label>
        <select name="tip" class="form-control" id="tip">
            <option value=""></option>
            <option value="Лето">Лето</option>
            <option value="Зима">Зима</option>
            <option value="Екскурзии">Екскурзии</option>
        </select>
        <br/>
        <label for="ostrov">Одбери остров;</label>
        <select name="ostrov" class="form-control" id="ostrov">
            <option value=""></option>
            <option value="Лефкада">Лефкада</option>
            <option value="Закинтос">Закинтос</option>
            <option value="Крф">Крф</option>
            <option value="Тасос">Тасос</option>
            <option value="Скијатос">Скијатос</option>
            <option value="Санторини">Санторини</option>
        </select>
        <br/>
        <label for="drzava">Држава</label>
        <select name="drzava" class="form-control" id="drzava">
            <option value=""></option>
            <option value="Грција">Грција</option>
            <option value="Хрватска">Хрватска</option>
            <option value="Бугарија">Бугарија</option>
            <option value="Албанија">Албанија</option>
            <option value="Црна Гора">Црна Гора</option>
            <option value="Шпанија">Шпанија</option>
            <option value="Турција">Турција</option>
            <option value="Македонија">Македонија</option>
            
        </select>
        <label for="kapaciteti">Капацитети</label>
        <select name="kapaciteti" class="form-control" id="kapaciteti">
            <option value=""></option>
            <option value="Грција/Хотели">Грција/Хотели</option>
            <option value="Грција/Аранжмани">Грција/Аранжмани</option>
            <option value="Хрватска/Хотели">Хрватска/Хотели</option>
            <option value="Хрватска/Аранжмани">Хрватска/Аранжмани</option>
            <option value="Бугарија/Хотели">Бугарија/Хотели</option>
            <option value="Бугарија/Аранжмани">Бугарија/Аранжмани</option>
            <option value="Албанија/Хотели">Албанија/Хотели</option>
            <option value="Албанија/Аранжмани">Албанија/Аранжмани</option>
            <option value="Црна Гора/Хотели">Црна Гора/Хотели</option>
            <option value="Црна Гора/Аранжмани">Црна Гора/Аранжмани</option>
            <option value="Шпанија/Хотели">Шпанија/Хотели</option>
            <option value="Шпанија/Аранжмани">Шпанија/Аранжмани</option>
            <option value="Турција/Хотели">Турција/Хотели</option>
            <option value="Турција/Аранжмани">Турција/Аранжмани</option>
            <option value="Турција/Аранжмани">Србија/Аранжмани</option>
            <option value="Бугарија/Аранжмани">Турција/Аранжмани</option>


        </select>
        <br>
        
        ';

    }
    ?>

    </select>
    <br/>
    <?php
    $id = $_POST['id'];

    $sql = mysqli_query($con, "SELECT * FROM tekst WHERE id = $id");
    if (mysqli_connect_errno($con)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    while ($row = mysqli_fetch_array($sql)) {
        echo '
    <textarea class="ckeditor" name="rte">' . $row['rte'] . '</textarea>
    <label for="youtube">Youtube Link</label>
    <input type="text" name="youtube" class="form-control" id="youtube" value="' . $row['youtube'] . '"/><br>
    <label for="keywords">Keywords</label>
    <input type="text" class="form-control" id="tags" data-role="tagsinput" name="keywords" value="' . $row['keywords'] . '"/>
    <div class="clearfix"><br /></div>
    <button type="submit" class="pull-right btn btn-success"> <span class="glyphicon glyphicon-check"></span> Додади  </button>
</form>
</div>
';
    }
    ?>
    <?php
}
else {
    echo 'Please <a href="index.php">Log in</a>';
}
?>
<?php require_once 'footer.php'; ?>