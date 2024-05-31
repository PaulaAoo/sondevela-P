<div class="reviews-tab">
    <div class="reviews-slider">
        <?php
        $reviews = get_field('reviews', 'option');
        //var_dump($reviews);
        foreach ($reviews as $review){ ?>

            <div class="review">
                <span class="title"><?=$review['review_title']?></span>
                <span class="comment"><?=$review['review_comment']?></span>
                <span class="name"><a href="https://www.google.com/search?sa=X&sca_esv=288495b509fb3774&rlz=1C5CHFA_enES996ES996&tbm=lcl&sxsrf=ADLYWILhUKL159gDyvRzFUVL_kWJMMCpjg:1715710983382&q=Sondevela+Catamaran+Barcelona+-+Rent+exclusive+boat,+luxury+experiences+Rese%C3%B1as&rflfq=1&num=20&stick=H4sIAAAAAAAAAONgkxI2NzYwsDCwsDSzNDWwNDEzNDQ138DI-IoxIDg_LyW1LDUnUcE5sSQxN7EoMU_BKbEoOTUnPy9RQVchKDWvRCG1IjmntDizLFUhKT-xREchp7SitKgSKFyQWpSZmpecWgxUV5x6eGNi8SJWqhsJAHMprdHAAAAA&rldimm=7300808969509461157&hl=es-ES&ved=2ahUKEwjOms694Y2GAxX_VKQEHTTrD5wQ9fQKegQIGBAF&cshid=1715710989163508&biw=1780&bih=934&dpr=1#lkt=LocalPoiReviews"><?=$review['name']?></a></span>
            </div>


            <?php
        }

        ?>
    </div>
</div>