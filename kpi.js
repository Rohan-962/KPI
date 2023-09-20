function Redirect(webpage)
    {
        window.location=webpage;

    }
    


function required()
{
    var empt = document.forms["masterKpi"]["actual_score"].value;
    if (empt == '') {
        alert("Please input a Actual Score");
        return false;
    }
    else
    {
        return true;
    }
}


