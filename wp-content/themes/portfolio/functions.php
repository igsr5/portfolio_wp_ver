<?php
// カスタムフィールド追加
function add_custom_posts_columns_name($columns) {
    $columns['feeling'] = '今日の気分';
    return $columns;
}
function add_custom_posts_columns($column, $post_id) {
    if($column == 'feeling') {
        echo get_post_meta($post_id, 'feeling', true);
    }
}
add_filter('manage_posts_columns', 'add_custom_posts_columns_name');
add_action('manage_posts_custom_column', 'add_custom_posts_columns', 10, 2);

// カスタムフィールド検索追加
  add_action('restrict_manage_posts', 'add_feeling_filter');
function add_feeling_filter(){
	global $post_type;
	//表示するのは投稿一覧画面のみ
	if ( $post_type == 'post' ) {
	  echo '<input type="text" name="feeling" value="'. get_query_var('feeling'). '" placeholder="feeling" />';
	}
};

add_filter('query_vars', 'add_feeling');
function add_feeling($vars) {
  $vars[] = 'feeling';
  return $vars;
}

add_filter('posts_where', 'posts_where_feeling');
function posts_where_feeling($where) {
  global $wpdb;
  //管理画面でのみ実行
  if(is_admin()) {
  	$value = get_query_var('feeling');
		if(!empty($value)) {
			//検索条件にカスタムフィールド「feeling」の値を追加
			$where .= $wpdb->prepare(" AND EXISTS ( SELECT * FROM {$wpdb->postmeta} as m
				WHERE m.post_id = {$wpdb->posts}.ID AND m.meta_key = 'feeling' AND m.meta_value like %s )",
				"%{$value}%" );
		}
	}
	return $where;
};
//   固定ページサムネイル追加
  add_theme_support( 'post-thumbnails');

?>