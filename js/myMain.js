
jQuery(document).ready(function ($) {


    $("ul.colorlib-social-icons li a").click(function (e) {
        e.preventDefault();




        $.ajax({
            type: "post",
            dataType: "json",
            url: obj_ajax.ajaxUrl,
            data: {
                action: "my_action",
                user_id: obj_ajax.currentUserId,
                user_name : obj_ajax.current_user_name

            },
            success: function (response) {

                console.log(response);

            }
            // , error: function (res) {
            //     console.log(res);
            // }
        })


        //******************************************************


    })
});
