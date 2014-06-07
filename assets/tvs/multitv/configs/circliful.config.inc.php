<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
        'title' => array(
        'caption' => 'Title',
        'type' => 'text'
    ),
        'description' => array(
        'caption' => 'Decription',
        'type' => 'textarea'
    ),
    'id' => array(
        'caption' => 'id',
        'type' => 'text'
    ),
        'data-dimension' => array(
        'caption' => 'Dimension',
        'type' => 'text'
    ),
        'data-text' => array(
        'caption' => 'Text',
        'type' => 'text'
    ),
        'data-info' => array(
        'caption' => 'Info',
        'type' => 'text'
    ),
        'data-width' => array(
        'caption' => 'Width',
        'type' => 'text'
    ),
        'data-fontsize' => array(
        'caption' => 'Font size',
        'type' => 'text'
    ),
        'data-percent' => array(
        'caption' => 'Percent',
        'type' => 'text'
    ),
        'data-fgcolor' => array(
        'caption' => 'Foreground color',
        'type' => 'text'
    ),
        'data-bgcolor' => array(
        'caption' => 'Background color',
        'type' => 'text'
    ),
        'data-fill' => array(
        'caption' => 'Fill color',
        'type' => 'text'
    ),
        'data-type' => array(
        'caption' => 'Type',
        'type' => 'dropdown',
        'elements' => ' ||full||half'
    ),
        'data-total' => array(
        'caption' => 'Total',
        'type' => 'text'
    ),
        'data-part' => array(
        'caption' => 'Part',
        'type' => 'text'
    ),
        'data-border' => array(
        'caption' => 'Border',
        'type' => 'dropdown',
        'elements' => ' ||inline||outline'
    ),
        'data-fill' => array(
        'caption' => 'Fill color',
        'type' => 'text'
    ),
        'data-icon' => array(
        'caption' => 'Fontawesome icon',
        'type' => 'text'
    ),
        'data-icon-size' => array(
        'caption' => 'Icon size',
        'type' => 'text'
    ),
        'data-icon-color' => array(
        'caption' => 'Icon color',
        'type' => 'text'
    ),
        'animationstep' => array(
        'caption' => 'Animation step',
        'type' => 'text'
    )

);
$settings['templates'] = array(
    'outerTpl' => '[+wrapper+]',
    'rowTpl' => '[+title:ne=``:then=`<h2>[+title+]</h2>`+][+description:ne=``:then=`<p>[+description+]</p>`+]<div class="circleStat" id="[+id+]" data-dimension="[+data-dimension+]" [+data-text:ne=``:then=`data-text="[+data-text+]"`+] [+data-info:ne=``:then=`data-info="[+data-info+]"`+] data-width="[+data-width+]" data-fontsize="[+data-fontsize+]" data-percent="[+data-percent+]" data-fgcolor="[+data-fgcolor+]" data-bgcolor="[+data-bgcolor+]" [+data-fill:ne=``:then=`data-fill="[+data-fill+]"`+] [+data-type:ne=``:then=`data-type="[+data-type+]"`+] [+data-total:ne=``:then=`data-total="[+data-total+]"`+] [+data-part:ne=``:then=`data-part="[+data-part+]"`+] [+data-border:ne=``:then=`data-border="[+data-border+]"`+] [+data-icon:ne=``:then=`data-icon="[+data-icon+]"`+] [+data-icon-size:ne=``:then=`data-icon-size="[+data-icon-size+]"`+] [+data-icon-color:ne=``:then=`data-icon-color="[+data-icon-color+]"`+] [+animationstep:ne=``:then=`animationstep="[+animationstep+]"`+]></div>'
);