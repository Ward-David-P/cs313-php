// highlighting the active page on nav_bar.php
$(document).ready(function()
{
    $("a").each(function()
    {
        if ($(this).attr("href") == window.location.pathname)
        {
            $(this).addClass("active");
        }
    });
});