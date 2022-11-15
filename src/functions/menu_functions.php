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
    $stmt = $pdo->prepare("SELECT * FROM student WHERE firstName like :name or lastName like :name");
    $stmt->execute([':name' => $word."%"]);
    $data = [];
    while($student =  $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[] = $student;
    } 
    
    return $data;
}
function get_all_food_from_db(){
    $pdo = connect_to_db();
    $data = $pdo->query("SELECT * FROM items order by category,ftype")->fetchAll();
    return $data;
}
function display_search_form(){
    echo '<h2>Search for a food item by Name</h2><form method=get action="menu.php">
        Enter Food Name:<input name="search" type="text">
        <input name="page" type="hidden" value="search">
        <input type="submit" value="Search">
    </form><br/><br/>';

}
function display_food_list($data=null){
    if(!is_array($data)){
        echo "";
        return;
    }
    foreach ($data as $row) {
            echo "<a href='menu.php?page=menu&iid=".$row['itemID']."'>";
            echo "$".$row['price']." ".$row['description']."<br />\n";
            echo "</a>";
    }
}