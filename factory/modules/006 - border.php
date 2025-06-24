<?php
foreach(COLORS_LIST as $color_name => $value)
{
?>
.border-<?=$color_name?> {
    border-color: <?=$value?> !important;
}
<?php
}

foreach(STEP_LIST as $step_no => $value)
{
?>
.border-<?=$step_no?> {
    border: <?=$value['px']?> solid currentcolor !important;
}
<?php
}


foreach(DIRECTION_LIST as $direction_name => $value)
{
    foreach(STEP_LIST as $step_no => $val)
    {
    ?>
    .border-<?=$direction_name?>-<?=$step_no?> {
        <?php
        foreach(DIRECTION_LIST[$direction_name] as $direction_name_full)
        {
        ?>
            border-<?=$direction_name_full?>: <?=$val['px']?> solid currentcolor !important;
        <?php
        }
        ?>  
    }
    <?php    
    }

}