<?PHP

function display_menu_page_navigation($currentPage){
    $navHTML  = '<h4><div style="margin-top:5px;margin-bottom:45px;">';
    $navHTML .= '<a href="menu.php?page=mto" class="selected">MTO Food</a>';
    $navHTML .= ' | ';
    $navHTML .= '<a href="menu.php?page=snd">Snacks and Drinks</a>';
    $navHTML .= ' <div> </h4>';
    
    echo $navHTML;
}
function get_all_items_from_mto($cat){
    $pdo = connect_to_db();
    $data = $pdo->query("SELECT * FROM items WHERE fType = 'mto' order by category")->fetchAll();
    return $data;
}
function get_all_items_from_snd($cat){
    $pdo = connect_to_db();
    $data = $pdo->query("SELECT * FROM items WHERE fType = 'snd' order by category")->fetchAll();
    return $data;
}
function display_mto_menu(){
    $cat = 'mto';
    display_food_list();

}

function display_snd_menu(){
    $cat = 'snd';
    get_all_items_from_snd($cat);
    echo "Coming Soon!";

}
function get_all_food_from_db(){
    $pdo = connect_to_db();
    $data = $pdo->query("SELECT * FROM items order by category,fType")->fetchAll();
    return $data;
}
function display_food_list($data=null){
    if(!is_array($data)){
        echo "";
        return;
    }
    foreach ($data as $row) {
            echo "<p>";
            echo $row['price']." ".$row['item']." ".$row['description']." ".$row['weight']."<br />\n";
            echo "</p>";
    }
}