<?php require_once 'header.php';
session_start();
if (isset($_SESSION['user_email'])) { ?>
    <div class="container">
        <?php
        $naslov = $_POST['naslov'];
        $tip = $_POST['tip'];
        $address = $_POST['address'];
        ?>
        <div class="clearfix"><br/></div>
        <div class="form-group">
            <div style="text-align: center;">
                <p class="btn btn-danger btn-xs"><strong>ВАЖНО! </strong> Сликата треба да биде со димензии 1140x450px;
                </p>
            </div>
            <form id="file_attachment_slider" method="post" enctype="multipart/form-data" action="javascript:void(0);"
                  autocomplete="on">
                <label><?php echo BROWSE; ?> </label><input type="file" name="browsed_file" id="browsed_file"
                                                            class="btn btn-warning">
                <a href="javascript:void(0);" onclick="slider_form_script();" class="btn btn-info"
                   required><?php echo UPLOAD; ?></a>
            </form>
            <form action="process/processponuda.php" method="post">
                <br/>
                <div id="vpb_upload_status"></div>
                <br/>
                <label for="naslov">Внесете наслов на "артиклот" (Село Небрегово, Манастир Св. Ѓорѓија,...):</label>
                <input type="text" name="naslov" class="form-control" id="naslov">
                <label for="date">Изберете датум кога е направен "артиклот" пр. 01/23/2014 (MM/DD/YYYY):</label>
                <input type="date" name="date" class="form-control" id="date">
                <label for="tip">Тип на "артиклот" (Известување, посети,...) :</label>
                <select name="tip" class="form-control" id="tip">
                    <option value=""></option>
                    <option value="Пролетни патувања">Пролетни патувања</option>
                    <option value="Лето">Лето</option>
                    <option value="Есенски патувања">Есенски патувања</option>
                    <option value="Зима">Зима</option>
                    <option value="Екскурзии">Екскурзии</option>
                    <option value="Индивидуални патувања">Индивидуални патувања</option>
                    <option value="Далечни патувања">Далечни патувања</option>
                    <option value="Нова година">Нова Година</option>
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
                <label for="grad">Локација</label>
                <select name="grad" class="form-control" id="grad">
                    <option value=""></option>
                    <option value="Банско">Банско</option>
                    <option value="Пампорово">Пампорово</option>
                    <option value="Боровец">Боровец</option>
                    <option value="Аранжмани/Бугарија">Аранжмани/Бугарија</option>
                    <option value="Разлог">Разлог</option>
                    <option value="Копаоник">Копаоник</option>
                    <option value="Златибор">златибор</option>
                    <option value="Аранжмани/Златибор">Аранжмани/Србија</option>
                </select>

                <label for="kapaciteti">Капацитети</label>
                <select name="kapaciteti" class="form-control" id="kapaciteti">
                    <option value=""></option>
                    <option value="Грција/Хотели">Грција/Хотели</option>
                    <option value="Грција/Аранжмани">Грција/Аранжмани</option>
                    <option value="Неа Врасна/Апартмани">Неа Врасна/Апартмани</option>
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
                    <option value="Ситонија/Апартмани">Ситонија/Апартмани</option>
                    <option value="Атос/Апартмани">Атос/Апартмани</option>
                    <option value="Касандра/Апартмани">Касандра/Апартмани</option>
                    <option value="Пиреа/Апартмани">Пиреа/Апартмани</option>
                    <option value="Ситонија/Хотели">Ситонија/Хотели</option>
                    <option value="Атос/Хотели">Атос/Хотели</option>
                    <option value="Касандра/Хотели">Касандра/Хотели</option>
                    <option value="Пиреа/Хотели">Пиреа/Хотели</option>
                </select>

                <br>
                <label for="cena">Цена</label>
                <input type="text" name="cena" class="form-control" id="cena"/>
                <br>
                <label for="popust">Попуст</label>
                <input type="text" name="popust" class="form-control" id="popust"/>
                <br>
                <textarea class="ckeditor" name="rte"></textarea>
                <label for="youtube">Youtube Link</label>
                <input type="text" name="youtube" class="form-control" id="youtube"/>
                <div class="form-group">
                    <label for="tags">Tags: </label>
                    <input type="text" class="form-control" id="tags" data-role="tagsinput" name="keywords"
                           value="page, static">
                </div>
                <div class="clearfix"><br/></div>
                <button type="submit" class="pull-right btn btn-success"><span class="glyphicon glyphicon-check"></span>
                    Додади
                </button>
            </form>
        </div>
        <script>
            function slider_form_script() {
                //alert('COOL');
                $("#file_attachment_slider").vPB({
                    url: 'vpb_small_image.php',
                    beforeSubmit: function () {
                        $("#vpb_upload_status").html('<div style="font-family: Verdana, Geneva, sans-serif; font-size:12px; color:black;" align="center">Please wait <img src="images/loadings.gif" align="absmiddle" title="Upload...."/></div><br clear="all">');
                    },
                    success: function (response) {
                        $("#vpb_upload_status").hide().fadeIn('slow').html(response);
                    }
                }).submit();
            }
        </script>
    </div>
    <?php
}
else {
    echo 'Please <a href="index.php">Log in</a>';
}
?>

<?php require_once 'footer.php'; ?>