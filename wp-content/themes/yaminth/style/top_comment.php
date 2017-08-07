<?php if (get_option('swt_type') == 'Display') { ?>
<h3>最近给力的童鞋</h3>
<ul>
<?php
$counts = $wpdb->get_results("SELECT COUNT(comment_ID) AS cnt, comment_author, comment_author_url, comment_author_email FROM (SELECT * FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->posts.ID=$wpdb->comments.comment_post_ID) WHERE comment_date > date_sub( NOW(), INTERVAL 1 MONTH ) AND user_id='0' AND comment_author_email != '' AND post_password='' AND comment_approved='1' AND comment_type='') AS tempcmt GROUP BY comment_author_email ORDER BY cnt DESC LIMIT 15");
foreach ($counts as $count) {
$a = get_bloginfo('wpurl') . '/avatar/' . md5(strtolower($count->comment_author_email)) . '.jpg';
$c_url = $count->comment_author_url;
$mostactive .= '<li class="mostactive">' . '<a href="'. $c_url . '" title="' . $count->comment_author . ' (留下'. $count->cnt . '个脚印)" target="_blank" rel="external nofollow"><img src="' . $a . '" alt="' . $count->comment_author . '" class="avatar" /></a></li>';
}
echo $mostactive;
?>
</ul>
<?php { echo ''; } ?>

<?php } else {?>

<h3>最近给力的童鞋</h3>
<ul>
<?php
	$query="SELECT COUNT(comment_ID) AS cnt, comment_author, comment_author_url, comment_author_email FROM (SELECT * FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->posts.ID=$wpdb->comments.comment_post_ID) WHERE comment_date > date_sub( NOW(), INTERVAL 1 MONTH ) AND user_id='0' AND comment_author_email != '' AND post_password='' AND comment_approved='1' AND comment_type='') AS tempcmt GROUP BY comment_author_email ORDER BY cnt DESC LIMIT 15";
	$wall = $wpdb->get_results($query);
	foreach ($wall as $comment)
	{
		if( $comment->comment_author_url )
		$url = $comment->comment_author_url;
		else $url="#";
		$r="rel='external nofollow'";
		$tmp = "<a href='".$url."' '".$r."' title='".$comment->comment_author." (留下".$comment->cnt."个脚印)'>".get_avatar($comment->comment_author_email, 38)."</a>";
		$output .= $tmp;
	}
	echo $output ;
?>
</ul>

<?php }?>
