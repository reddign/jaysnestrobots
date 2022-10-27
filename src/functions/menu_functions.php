<?PHP

function display_menu_page_navigation($currentPage){
    $navHTML  = '<h4><div style="margin-top:5px;margin-bottom:45px;">';
    $navHTML .= '<a href="menu.php?page=mto" class="selected">MTO Food</a>';
    $navHTML .= ' | ';
    $navHTML .= '<a href="menu.php?page=snd">Snacks and Drinks</a>';
    $navHTML .= ' <div> </h4>';
    
    echo $navHTML;
}

function display_mto_menu(){
    echo
    '<li><iframe width="1000" height="500" frameborder="0" scrolling="no" src="https://elizabethtown-my.sharepoint.com/:x:/g/personal/bednara_etown_edu/EffX_7Ze_-dGrozdANRRUoMBvyNfCKLhk3K6CDkCpMZDgg?e=kP7HCp&action=embedview&wdbipreview=true"></li>';

}

function display_snd_menu(){
    echo "Coming Soon!";

}