<?php
define('GENERATED_AT', date('r'));

define('COLORS_LIST', array(
    'primary' => '#0d6efd',
    'primary-light' => '#9ec5fe',
    'primary-dark' => '#012b6a',
    'secondary' => '#6c757d',
    'secondary-light' => '#c4c8cc',
    'secondary-dark' => '#2b2f32',
    'success' => '#198754',
    'success-light' => '#89e9bc',
    'success-dark' => '#0a3622',
    'danger' => '#dc3545',
    'danger-light' => '#f1aeb5',
    'danger-dark' => '#5d1017',
    'warning' => '#ffc107',
    'warning-light' => '#ffe69c',
    'warning-dark' => '#694f00',
    'info' => '#0dcaf0',
    'info-light' => '#9deafa',
    'info-dark' => '#055160',
    'light' => '#f8f9fa',
    'dark' => '#212529',
    'white' => '#ffffff',
    'black' => '#000000',
));

define('COLORS_INVERSE', array(
    'primary' => 'primary-dark',
    'primary-light' => 'primary',
    'primary-dark' => 'primary',
    'secondary' => 'secondary-dark',
    'secondary-light' => 'secondary',
    'secondary-dark' => 'secondary',
    'success' => 'success-dark',
    'success-light' => 'success',
    'success-dark' => 'success',
    'danger' => 'danger-dark',
    'danger-light' => 'danger',
    'danger-dark' => 'danger',
    'warning' => 'warning-dark',
    'warning-light' => 'warning',
    'warning-dark' => 'warning',
    'info' => 'info-dark',
    'info-light' => 'info',
    'info-dark' => 'info',
    'light' => 'dark',
    'dark' => 'light',
    'white' => 'black',
    'black' => 'white',
));

define('STEP_LIST', array(
    '0' => array('px' => 0, 'rem' => '0'),
    '1' => array('px' => '1px', 'rem' => '0.25rem'),
    '2' => array('px' => '2px', 'rem' => '0.375rem'),
    '3' => array('px' => '3px', 'rem' => '0.5rem'), 
    '4' => array('px' => '4px', 'rem' => '1rem'),
    '5' => array('px' => '5px', 'rem' => '2rem'),
    'auto' => array('px' => 'auto', 'rem' => 'auto'),
));

define('DIRECTION_LIST', array(
    'l' => array('left'),
    't' => array('top'),
    'r' => array('right'),
    'b' => array('bottom'),
    'x' => array('left','right'),
    'y' => array('top','bottom'),
));

define('BREAKPOINT_LIST', array(
    'sm' => '576px',
    'md' => '768px',
    'lg' => '992px',
    'xl' => '1200px',
    'xxl' => '1400px',
));