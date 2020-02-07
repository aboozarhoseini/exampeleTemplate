jQuery(document).ready(function ($) {


    // ajax for test
    $("ul.colorlib-social-icons li a").click(function (e) {
        e.preventDefault();


        //******************************************************


        //******************************************************

        $.ajax({
            type: "post",
            // dataType: "json",
            url: obj_ajax.ajaxUrl,

            data: {
                action: "my_action",
                user_id: obj_ajax.currentUserId,
                user_name: obj_ajax.current_user_name,
                digit: obj_ajax.myDigit,
                full_name: obj_ajax.name,
                birth: 'kangavar'

            },

            success: function (response) {

                console.log(response);
                // alert(response);

            }
            // , error: function (res) {
            //     console.log(res);
            // }
        })


        //******************************************************


    })


    // ajax for like


    $("article .a-like-it").on('click', function (e) {
        e.preventDefault();
        $this = $(this);


        $.ajax({
            url: obj_ajax.ajaxUrl,
            type: 'post',
            data: {
                action: "like_action"
            },
            success: function (res) {
                $('article .p-like').html(res);

            }


        })
    })
});
