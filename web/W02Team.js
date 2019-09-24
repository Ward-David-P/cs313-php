function buttonClicked()
{
    alert("Clicked!");
}

function changeColor()
{
    var nColor = $("#newColor").val();

    $("#div1").css("background-color", nColor);
}

function hideDiv3()
{
    if ($("#div3").is(":visible"))
    {
        $("#div3").hide();
    }

    else
    {
        $("#div3").show();
    }
}