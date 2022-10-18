<!DOCTYPE html>
<html lang="ru" >
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="scripts.js"></script>
</head>
<body>

<table class="header">
    <tr>
        <td class="nameAndGroup">
            Попов Андрей P32091
        </td>
    </tr>
    <tr>
        <td class="var">
            Вариант 1118
        </td>
    </tr>
</table>

<table>
    <tbody>
    <form name="mainPost" onsubmit="return false;">
        <tr>
            <td class="righted"><img src="img.png"></td>
            <td>
                <table class="input">
                    <tr>
                        <td>
                            <input placeholder="Введите R, (2 < R < 5)" type="text" name="inpR" id="inpR" maxlength="6">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input placeholder="Введите Y, (-5 < Y < 5)" type="text" name="inpY" id="inpY" maxlength="6">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        Выберите X
                                    </td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" name="inpX[]" value="-5"> -5</label></td>
                                    <td><label><input type="checkbox" name="inpX[]" value="-4"> -4</label></td>
                                    <td><label><input type="checkbox" name="inpX[]" value="-3"> -3</label></td>
                                    <td><label><input type="checkbox" name="inpX[]" value="-2"> -2</label></td>
                                    <td><label><input type="checkbox" name="inpX[]" value="-1"> -1</label></td>
                                    <td><label><input type="checkbox" name="inpX[]" value="-0"> 0</label></td>
                                    <td><label><input type="checkbox" name="inpX[]" value="1"> 1</label></td>
                                    <td><label><input type="checkbox" name="inpX[]" value="2"> 2</label></td>
                                    <td><label><input type="checkbox" name="inpX[]" value="3"> 3</label></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="righted">
                <button class="button" value="true" onclick="isValueOk(this.form)">Отправить и посмотреть результаты</button>
            </td>
            <td>
                <div id="err"></div>
            </td>
        </tr>
    </form>
    </tbody>
</table>
</body>
</html>