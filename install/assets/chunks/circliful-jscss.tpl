/**
 * circliful-jscss
 *
 * include js and css for circliful multitv
 *
 * @category	chunk
 * @version 	1.0
 * @author      tattoocms.it
 * @license 	http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	@modx_category MultiTV add-ons
 * @internal    @installset base
 * @internal    @overwrite false
 */

<link rel="stylesheet" type="text/css" href="/assets/templates/common/js/circliful/css/jquery.circliful.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/assets/templates/common/js/circliful/css/font-awesome.min.css" media="screen" />
<style>
	.circleStat {float:left;}
</style>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="/assets/templates/common/js/circliful/js/jquery.circliful.min.js"></script>
    <script type="text/javascript">
   (function($) {
$( document ).ready(function() {
        $('.circleStat').circliful();
    });
   })(jQuery);
    </script>