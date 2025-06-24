<?php
foreach(STEP_LIST as $step_no => $value)
{
?>
    .m-<?=$step_no?> {
        margin: <?=$value['rem']?> !important;    
    }
<?php
}

foreach(DIRECTION_LIST as $direction_name => $value)
{
    foreach(STEP_LIST as $step_no => $val)
    {
    ?>
    .m<?=$direction_name?>-<?=$step_no?> {
        <?php
        foreach(DIRECTION_LIST[$direction_name] as $direction_name_full)
        {
        ?>
            margin-<?=$direction_name_full?>: <?=$val['rem']?> !important;
        <?php    
        }
        ?>        
    }
    <?php    
    }

}

foreach(BREAKPOINT_LIST as $breakpoint => $valz)
{
    foreach(STEP_LIST as $step_no => $value)
    {
    ?>
        .m-<?=$breakpoint?>-<?=$step_no?> {
            margin: <?=$value['rem']?> !important;
        }
    <?php
    }

    foreach(DIRECTION_LIST as $direction_name => $value)
    {
        foreach(STEP_LIST as $step_no => $val)
        {
        ?>
        .m<?=$direction_name?>-<?=$breakpoint?>-<?=$step_no?> {
            <?php
            foreach(DIRECTION_LIST[$direction_name] as $direction_name_full)
            {
            ?>
                margin-<?=$direction_name_full?>: <?=$val['rem']?> !important;
            <?php    
            }
            ?>        
        }
        <?php    
        }

    }    
}