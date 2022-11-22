<?PHP

function display_menu_page_navigation($currentPage){
    $navHTML  = '<h4><div style="margin-top:5px;margin-bottom:45px;">';
    $navHTML .= '<a href="menu.php?page=mto" class="selected">MTO Food</a>';
    $navHTML .= ' | ';
    $navHTML .= '<a href="menu.php?page=snd">Snacks and Drinks</a>';
    $navHTML .= ' <div> </h4>';
    
    echo $navHTML;
}
function get_food_by_name($word){
    if($word==""){
        return get_all_food_from_db();
    }
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("SELECT * FROM items WHERE description like :name");
    $stmt->execute([':name' => $word."%"]);
    $data = [];
    while($food =  $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[] = $food;
    } 
    
    return $data;
}
function get_mto_by_name($word){
    if($word==""){
        return get_all_mto_from_db();
    }
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("SELECT * FROM items WHERE category = 'MTO' and description like :name");
    $stmt->execute([':name' => $word."%"]);
    $data = [];
    while($food =  $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[] = $food;
    } 
    
    return $data;
}
function get_snd_by_name($word){
    if($word==""){
        return get_all_snd_from_db();
    }
    $pdo = connect_to_db();
    $stmt = $pdo->prepare("SELECT * FROM items WHERE category = 'SND' and description like :name");
    $stmt->execute([':name' => $word."%"]);
    $data = [];
    while($food =  $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[] = $food;
    } 
    
    return $data;
}
function get_all_food_from_db(){
    $pdo = connect_to_db();
    $data = $pdo->query("SELECT * FROM items order by category,ftype")->fetchAll();
    return $data;
}
function get_all_mto_from_db(){
    $pdo = connect_to_db();
    $data = $pdo->query("SELECT * FROM items WHERE category = 'MTO' order by ftype")->fetchAll();
    return $data;
}
function get_all_snd_from_db(){
    $pdo = connect_to_db();
    $data = $pdo->query("SELECT * FROM items WHERE category = 'SND' order by ftype")->fetchAll();
    return $data;
}

function display_food_list($data=null){
    if(!is_array($data)){
        echo "";
        return;
    }
    foreach ($data as $row) {

        echo '<form method="post"><input type="submit" name="$row" value="Add to Cart" >';
        echo "\t";
        echo "<a>";
        echo "$".number_format((float)$row['price'], 2, '.', '');
        echo "\t\t".$row['description']."<br />\n";
        echo "</a>";
        if(isset($_POST['$row'])){
            //echo 'added '.$row['description'].' to cart';
            "INSERT INTO cart(price, description, weight) VALUES (:price, :description,:weight)";
        }     
        echo '</form>';  
    }
}

function addToCart($itemID, $orderID){
    $sql = "INSERT INTO orders(orderID, itemID) VALUES ($itemID, $orderID)";
}


