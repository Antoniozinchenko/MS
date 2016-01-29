<?php $our_team = get_query_var('our_team') ?>
<div class="contacon">
    <svg class="svg-graphic" width="245" height="250" viewBox="0 0 245 250" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
        <g>
            <clipPath id="hex-mask_worker">
                <polygon points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" />
            </clipPath>
        </g>
        <a xlink:href="javascript:void(0);">
            <polygon fill="#fff" points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" transform="" />
            <image clip-path="url(#hex-mask_worker)" height="100%" width="100%" xlink:href="<?php echo $our_team->photo ?>" preserveAspectRatio="xMidYMin slice" />
            <p class="worker_pre">
                <span class="name">
                    <?php echo $our_team->post_title ?>
                </span>
                <span class="position">
                    <?php echo $our_team->employee_position ?>
                </span>
            </p>
            <p class="worker_post">
                <span class="mail">
                     <?php echo $our_team->employee_email ?>
                </span>
                <span class="number">
                     <?php echo $our_team->employee_phone ?>
                </span>
                <span class="get_call">
                    замовити дзвінок
                </span>
            </p>
        </a>
    </svg>
    <div class="contacon_fake"></div>
</div>