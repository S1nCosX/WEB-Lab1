<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru" >
<head>
    <meta charset="UTF-8">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="scripts.js"></script>
</head>
<body>
<table class="mainTable">
    <tr>
        <td>
            <form name="returnPost">
                <button class="button" onclick="returnToMainPage(this.form)">Вернуться назад</button>
            </form>
        </td>
        <td id="err">

        </td>
    </tr>
    <tr>
        <td>
            <?php
            if (!isset($_SESSION["data"])){
                $_SESSION["data"] = array();
            }

            if (isset($_POST['inpR'])){
                $R = $_POST['inpR'];
                strtr ($R, array (',' => '.'));
                if (!settype($R, "double") || ($R <= 2 || $R >= 5)) {
                    $message = "R has unavailable value | server error";
                    echo "<script>errThrow('$message')</script>";
                    goto exit_;
                }
            }
            else{
                goto exit_;
            }

            if (isset($_POST['inpY'])){
                $Y = $_POST['inpY'];
                strtr ($Y, array (',' => '.'));
                if (!settype($Y, "double") || ($Y <= -5 || $Y >= 5)) {
                    $message = "Y has unavailable value | server error";
                    echo "<script>errThrow('$message')</script>";
                    goto exit_;
                }
            }
            if(!empty($_POST['inpX']))
            {
                foreach($_POST['inpX'] as $X)
                {
                    if (is_numeric($X) && settype($X, 'int') && ($X == -5 || $X == -4 || $X == -3 || $X == -2 || $X == -1 || $X == 0 || $X == 1 || $X == 2 || $X == 3 )){
                        if ($X*$X + $Y*$Y <= $R*$R && $X >= 0 && $Y >= 0)
                        {
                            $_SESSION['data'][] = array('X' => $X, 'Y' => $Y, 'R' => $R, 'RESULT' => true);
                            break;
                        }

                        if ($X <= $R / 2 && $Y <= -$R)
                        {
                            $_SESSION['data'][] = array('X' => $X, 'Y' => $Y, 'R' => $R, 'RESULT' => true);
                            break;
                        }

                        $A = ($R/2 - $X)*($R/2) - (-$R/2)*(-$Y);
                        $B=(0 - $X)*(-$R/2);
                        $C=-($R/2)*(-$Y);

                        if (($A >= 0 && $B >= 0 && $C >= 0) || ($A <= 0 && $B <= 0 && $C <= 0)) {
                            $_SESSION['data'][] = array('X' => $X, 'Y' => $Y, 'R' => $R, 'RESULT' => true);
                            break;
                        }
                        $_SESSION['data'][] = array('X' => $X,'Y' => $Y,'R' => $R,'RESULT' => false);
                    }
                    else{
                        $message = "one of X has unavailable value | server error";
                        echo "<script>errThrow('$message')</script>";
                    }
                }
            }
            exit_: ;
            echo '<tr>';
            echo '<table class="outputTable">';

            echo '<tr class="tableHead"><td>X</td><td>Y</td><td>R</td><td>RESULT</td></tr>';
            foreach($_SESSION['data'] as $DATA)
            {
                echo '<tr class="highlightable"><td>';
                echo $DATA['X'];
                echo '</td><td>';
                echo $DATA['Y'];
                echo '</td><td>';
                echo $DATA['R'];
                echo '</td>';
                if ($DATA['RESULT'])
                    echo '<td class="true">true';
                else
                    echo '<td class="false">false';
                echo '</td></tr>';
            }
            echo '</table>';
            echo '</tr>';
            ?>
        </td>
    </tr>
</table>
</body>
