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
    $("article").on('click', function (e) {
        e.preventDefault();
        $this = $(this);
        $this_like = $this.find('.a-like-it');
        $this_i = $(this).find('i');
        $pLike = $this.find('.p-like');

        // $this_like.css('backgroundColor','lightBlue');
        // $this_i.css('backgroundColor','pink');
        // $pLike.css('backgroundColor','yellow');

        $.ajax({
            url: obj_ajax.ajaxUrl,
            type: 'post',
            data: {
                action: "like_action"
            },
            success: function (res) {
                // $pLike = $(this).find('.p-like');
                $currentLike = $pLike.html();
                // $pLike.html(Number($currentLike) + Number(res) );
                $pLike.html(res);

            }


        })
    })

    // ajax for more post

    $('.moreDiv').click(function (e) {
        e.preventDefault();
        var $this = $(this).find('a');

        $this.text('در حال بارگذاری . . .');

        ($('.divImage').show());

        var $page = parseInt($this.data('page'));


        // hide div with mainPosts class
        // این div ها در فایل loop موجود است و برای حذف آنها و نمایش از ابتدا این کار انجام شده است
        $('.mainPosts').hide();

        $.ajax({
            url: obj_ajax.ajaxUrl,
            type: 'post',
            dataType: 'json',
            data: {
                action: "more_action",
                page: $page
            },
            success: function (res) {
                if (res.allpost > -1) {
                    if (parseInt(res.count) > 0) {
                        $('.divImage').hide();
                        $this.parent().parent().prev().append(res.content);
                        $this.data('page', parseInt($page + 1));
                        $this.text('مطالب بیشتر');
                    }
                }else{
                    $this.text('هیچ پستی وجود ندارد');
                    $('.divImage').hide();
                }


            }
        })
    })
});





