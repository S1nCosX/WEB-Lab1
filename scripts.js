function isValueOk(form){
    let r = document.getElementById("inpR").value
    let y = document.getElementById("inpY").value

    r = r.replace(',', '.')
    y = y.replace(',', '.')

    var R = parseFloat(r)
    var Y = parseFloat(y)
    console.log(R)
    console.log(Y)

    if (isNaN(R) || (R <= 2 || R >= 5)){
        errThrow("R has unavailable value | client error")
        return
    }

    if(isNaN(Y) || (Y <= -5 || Y >= 5)){
        errThrow("Y has unavailable value | client error")
        return
    }

    form.action = "resultTable.php"
    form.method = "post"
    form.inpR.value = r
    form.inpY.value = yp
    form.submit()
}

function returnToMainPage(form){
    form.action="index.php"
    form.method = "post"
    form.submit()
}

function errThrow(message){
    $('#err').html(message);
}