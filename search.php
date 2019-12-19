<?php

//در صورتی که در فرم فیلدی با نام S وجود داشته باشد و هنگام ارسال فرم خودکار
// به این صفحه یعنی Search.php انتقال پیدا میکند که با دستور زیر میتوان به محتویات
// آن دسترسی داشت
// echo get_search_query()




function showMe($query)
{
    return strtoupper($query);
}

echo showMe(get_search_query());

