<?php
add_action('init', 'my_seminar_init');
function my_seminar_init() 
{
  $labels = array(
    'name' => 'セミナー',
    'singular_name' => 'セミナー',
    'add_new' => 'セミナーの追加',
    'add_new_item' => 'セミナーを追加する',
    'edit_item' => 'セミナーを編集する',
    'new_item' => '新しいセミナー',
    'view_item' => 'セミナー表示',
    'search_items' => 'セミナー検索',
    'not_found' =>  'セミナーが見つかりません',
    'not_found_in_trash' => 'ゴミ箱にセミナーはありません', 
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 5,
//  'supports' => array('title','editor','author','thumbnail','excerpt','comments')
    'supports' => array('title','editor','thumbnail')
  ); 
  register_post_type('seminar',$args);
}

/*** カスタムフィールド項目定義 ***
 *
 * $meta_arr[$id] = array($name,$array,$option);
 *   $id:     キー
 *   $name:   項目名
 *   $array:  保存データ形式（'array':配列、'single':テキスト）
 *   $option: オプション項目
 *   checkboxの場合は配列として登録される
 */
$meta_arr['esArea'] = array('タイプ','array', array('WEBセミナー', 'オンライン相談会', '有料セミナー'));
$meta_arr['esCatchcopy'] = array('こんな方にオススメのセミナー', 'single');
$meta_arr['esProfeel'] = array('セミナー概要','single');
$meta_arr['esRental_1'] = array('参加者からの声1','single');
$meta_arr['esRental_2'] = array('参加者からの声2','single');
$meta_arr['esRental_3'] = array('参加者からの声3','single');

$meta_arr['table_1'] = array('セミナーでお伝えすること','single');
$meta_arr['table_2'] = array('対象者','single');
$meta_arr['table_3'] = array('セミナー日程','single');
$meta_arr['table_4'] = array('参加費','single');
$meta_arr['table_5'] = array('主催','single');

$meta_arr['esNotes'] = array('アクセス','single');



/*** カスタムフィールドコンテンツの作り込み ***/
function my_meta_boxes() {
 
    global $post, $meta_arr;
 
    //metaの現在の登録値を取得（可変変数）
    foreach($meta_arr as $meta => $meta_val) {
        $true = ( $meta_val[1] == 'single' )? true: false;
        $val = $meta.'Val';
        $nam = $meta.'Nam';
        $$nam = $meta_val[0];
        $$val = get_post_meta( $post->ID, $meta, $true );
    }
 
?>
<style>
.postbox_formControl{
    border:none;
    padding:5px 20px 10px 20px;
    background:#f1f1f1;
}
.postbox_formControl h4{
    font-size:18px;
    font-weight:bold;
}
.postbox_formControl dl{
    margin:0;
    padding:0;
}
.postbox_formControl dl dt{
    margin:0 0 5px 0;
    padding:0;
    font-weight:bold;
}
.postbox_formControl dl dd{
    margin:0;
    padding:0 0 10px 0;
}
.postbox_formControl textarea{
    width:100%;
}

</style>
<div class="postbox postbox_formControl">
    <h4>概要</h4>
    <dl>
        <dt><?php echo $esAreaNam ?></dt>
        <dd>
        <?php foreach ($meta_arr['esArea'][2] as $optn): ?>
                <label><input type="checkbox" name="esArea[]" value="<?php echo $optn ?>"<?php if ( is_array($esAreaVal[0]) ) {if ( in_array($optn, $esAreaVal[0]) ) echo ' checked="checked"';} ?> /> <?php echo $optn ?></label>
        <?php endforeach ?></dd>
        <dt><?php echo $esCatchcopyNam ?></dt>
        <dd><textarea name="esCatchcopy" type="textfield" rows="2"><?php echo $esCatchcopyVal ?></textarea></dd>
        <dt><?php echo $esProfeelNam ?></dt>
        <dd><textarea name="esProfeel" type="textfield" rows="4"><?php echo $esProfeelVal ?></textarea></dd>
    </dl>
</div>

<div class="postbox postbox_formControl">
    <h4>セミナー概要</h4>
    <dl>
    <dt>セミナーでお伝えすること</dt>
<dd><textarea name="table_1" type="textfield"><?php echo $table_1Val ?></textarea></dd>
<dt>対象者</dt>
<dd><textarea name="table_2" type="textfield"><?php echo $table_2Val ?></textarea></dd>
<dt>日程</dt>
<dd><textarea name="table_3" type="textfield"><?php echo $table_3Val ?></textarea></dd>
<dt>参加費</dt>
<dd><textarea name="table_4" type="textfield"><?php echo $table_4Val ?></textarea></dd>
<dt>主催</dt>
<dd><textarea name="table_5" type="textfield"><?php echo $table_5Val ?></textarea></dd>
        
        </dl>
</div>


<div class="postbox postbox_formControl">
    <h4>参加者からの声</h4>
    <dl>
<dd><textarea name="esRental_1" type="textfield"><?php echo $esRental_1Val ?></textarea></dd>
<dd><textarea name="esRental_2" type="textfield"><?php echo $esRental_2Val ?></textarea></dd>
<dd><textarea name="esRental_3" type="textfield"><?php echo $esRental_3Val ?></textarea></dd>
        
        </dl>
</div>



<div class="postbox postbox_formControl">
    <h4>アクセス</h4>
    <dl>
        <dt><?php echo $esNotesNam ?></dt>
        <dd><textarea name="esNotes" type="textfield" rows="4"><?php echo $esNotesVal ?></textarea></dd>
    </dl>
</div>
<?php
}

/*** 投稿画面にカスタムフィールドのセクションを追加 ***/
function create_meta_box() {
 
    if ( function_exists('add_meta_box') )
//  add_meta_box('id', 'title', 'callback', 'page', 'context', 'priority');
        add_meta_box( 'my-meta-boxes', 'セミナー登録カスタムフィールド', 'my_meta_boxes', 'seminar', 'normal', 'high' );
}

/*** カスタムフィールド入力値の保存 ***/
function save_postdata( $post_id ) {
 
    global $post, $meta_arr;
    foreach($meta_arr as $meta => $arr) {
        $true = ( $arr == 'single' )? true: false;
 
        $meta_cur = get_post_meta($post_id, $meta, $true);
        $meta_new = $_POST[$meta];
 
        if( $meta_cur == "" && $meta_new != "") {
            add_post_meta($post_id, $meta, $meta_new, true);
        } elseif ( $meta_cur != $meta_new ) {
            update_post_meta($post_id, $meta, $meta_new);
        } elseif ( $meta_new == "" ) {
            delete_post_meta($post_id, $meta, get_post_meta($post_id, $meta_cur, true));
        }
    }
}
add_action('admin_menu', 'create_meta_box');
add_action('save_post', 'save_postdata');