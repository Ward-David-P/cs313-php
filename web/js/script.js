// highlighting the active page on nav_bar.php
$(window).on("load", function()
{
    $("a").each(function()
    {
        if ($(this).attr("href") == window.location.pathname)
        {
            $(this).addClass("active");
        }
    });
});