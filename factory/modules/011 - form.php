button, [type="button"], [type="submit"], [type="reset"], a.button, label.button, .button, a[role="button"], label[role="button"], [role="button"] {
    display: inline-block;
    padding: <?=STEP_LIST[2]['rem']?> <?=STEP_LIST[3]['rem']?>;
    cursor: pointer;
    text-decoration: none;
    color: <?=COLORS_LIST['white']?>;
    border: 1px solid <?=COLORS_LIST['primary']?>;
    background-color: <?=COLORS_LIST['primary']?>;
    border-radius: <?=STEP_LIST[2]['rem']?>; 
}

button:hover, [type="button"]:hover, [type="submit"]:hover, [type="reset"]:hover, a.button:hover, label.button:hover, .button:hover, a[role="button"]:hover, label[role="button"]:hover, [role="button"]:hover {
    display: inline-block;
    padding: <?=STEP_LIST[2]['rem']?> <?=STEP_LIST[3]['rem']?>;
    cursor: pointer;
    text-decoration: none;
    color: <?=COLORS_LIST['white']?>;
    border: 1px solid <?=COLORS_LIST[COLORS_INVERSE['primary']]?>;
    background-color: <?=COLORS_LIST[COLORS_INVERSE['primary']]?>;
    border-radius: <?=STEP_LIST[2]['rem']?>; 
}

<?php
foreach(COLORS_LIST as $color => $value)
{
?>
    button.<?=$color?>,
    [type="button"].<?=$color?>,
    [type="submit"].<?=$color?>,
    [type="reset"].<?=$color?>,
    a.button.<?=$color?>,
    label.button.<?=$color?>,
    .button.<?=$color?>,
    a[role="button"].<?=$color?>,
    label[role="button"].<?=$color?>,
    [role="button"].<?=$color?> {
        display: inline-block;
        padding: <?=STEP_LIST[2]['rem']?> <?=STEP_LIST[3]['rem']?>;
        cursor: pointer;
        text-decoration: none;
        color: <?=COLORS_LIST['white']?>;
        border: 1px solid <?=COLORS_LIST[$color]?>;
        background-color: <?=COLORS_LIST[$color]?>;
        border-radius: <?=STEP_LIST[2]['rem']?>; 
    }

    button.<?=$color?>:hover,
    [type="button"].<?=$color?>:hover,
    [type="submit"].<?=$color?>:hover,
    [type="reset"].<?=$color?>:hover,
    a.button.<?=$color?>:hover,
    label.button.<?=$color?>:hover,
    .button.<?=$color?>:hover,
    a[role="button"].<?=$color?>:hover,
    label[role="button"].<?=$color?>:hover,
    [role="button"].<?=$color?>:hover {
        display: inline-block;
        padding: <?=STEP_LIST[2]['rem']?> <?=STEP_LIST[3]['rem']?>;
        cursor: pointer;
        text-decoration: none;
        color: <?=COLORS_LIST['white']?>;
        border: 1px solid <?=COLORS_LIST[COLORS_INVERSE[$color]]?>;
        background-color: <?=COLORS_LIST[COLORS_INVERSE[$color]]?>;
        border-radius: <?=STEP_LIST[2]['rem']?>; 
    }
<?php    
}
?>

input:not([type]), [type="text"], [type="email"], [type="number"], [type="search"], [type="password"], [type="url"], [type="tel"], [type="checkbox"], [type="radio"], textarea, select {
  box-sizing: border-box;
  background: #fff;
  color: currentcolor;
  border: 1px solid <?=COLORS_LIST['secondary']?>;
  border-radius: <?=STEP_LIST[2]['rem']?>;
  margin: calc(var(<?=STEP_LIST[1]['rem']?>) / 2);
  padding: <?=STEP_LIST[1]['rem']?> calc(1.5 * <?=STEP_LIST[1]['rem']?>);
}

input:not([type]):hover, [type="text"]:hover, [type="email"]:hover, [type="number"]:hover, [type="search"]:hover, [type="password"]:hover, [type="url"]:hover, [type="tel"]:hover, [type="checkbox"]:hover, [type="radio"]:hover, textarea:hover, select:hover {
  box-sizing: border-box;
  background: #fff;
  color: currentcolor;
  border: 1px solid <?=COLORS_LIST['primary']?>;
  border-radius: <?=STEP_LIST[2]['rem']?>;
  margin: calc(var(<?=STEP_LIST[1]['rem']?>) / 2);
  padding: <?=STEP_LIST[1]['rem']?> calc(1.5 * <?=STEP_LIST[1]['rem']?>);
}

input:not([type]):disabled, [type="text"]:disabled, [type="email"]:disabled, [type="number"]:disabled, [type="search"]:disabled, [type="password"]:disabled, [type="url"]:disabled, [type="tel"]:disabled, [type="checkbox"]:disabled, [type="radio"]:disabled, textarea:disabled, select:disabled {
  box-sizing: border-box;
  background: #fff;
  color: <?=COLORS_LIST['secondary-light']?>; 
  border: 1px solid <?=COLORS_LIST['secondary-light']?>;
  border-radius: <?=STEP_LIST[2]['rem']?>;
  margin: calc(var(<?=STEP_LIST[1]['rem']?>) / 2);
  padding: <?=STEP_LIST[1]['rem']?> calc(1.5 * <?=STEP_LIST[1]['rem']?>);
}
