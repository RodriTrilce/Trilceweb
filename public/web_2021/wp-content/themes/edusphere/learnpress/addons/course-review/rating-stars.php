<?php
/**
 * Template for displaying rating stars.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/addons/course-review/rating-stars.php.
 *
 * @author ThimPress
 * @package LearnPress/Course-Review/Templates
 * version  3.0.1
 */

// Prevent loading this file directly
defined( 'ABSPATH' ) || exit;
//echo'<pre>alo ';print_r(sprintf(__( '%s out of 5 stars', 'edusphere'), $rated));die;

$percent = ( ! $rated ) ? 0 : min( 100, ( round( $rated * 2 ) / 2 ) * 20 );
$title   = sprintf( __( '%s out of 5 stars', 'edusphere' ), $rated );
?>

<div class="review-stars-rated" title="<?php echo esc_attr( $title ); ?>">
    <?php $c=0;for ($i=1;$i<=$rated;$i++) {	$c++;?>			    

<?php echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/rating_on.gif' ) . '" alt="'.esc_html__( 'star', 'edusphere' ).'">';?>
<?php } 
$s=0;
if(!empty($rated) ) {
$s=$rated-intval($rated);
}
if($s){
if($s<=0.5){ $c++;?>
<?php echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/rating_half.gif' ) . '" alt="'.esc_html__( 'star', 'edusphere' ).'">';?>
  
<?php } else { $c++;?>
<?php echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/rating_on.gif' ) . '" alt="'.esc_html__( 'star', 'edusphere' ).'">';?>

<?php } 
}
for($i=1;$i<=(5-$c);$i++){
     echo '<img src="' . plugins_url( 'radiantthemes-addons/assets/images/rating_off.gif' ) . '" alt="'.esc_html__( 'star', 'edusphere' ).'">';
}

?>
    <!--<div class="review-stars filled" style="width:<?php //echo $percent; ?>%;"></div>-->
    
</div>