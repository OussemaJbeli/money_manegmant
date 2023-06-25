<?php
    $categoris=session('categories');
?>
<div class="add_popup" id="add_popup">
    <div class="frame_add_popup">
        <div class="header">
            <div class="logo"><i class="fa-solid fa-cart-plus"></i></div>
            <div class="exite" id="exit_popup"><i class="fa-sharp fa-solid fa-circle-xmark"></i></div>
        </div>
        <form action="">
            <div class="region_carrency">
                <div class="region">
                    <i class="fa-solid fa-globe"></i>
                    <select name="select state" id="state" class="region_select" required>
                        <?php
                        if(isset($categoris)){
                            $region_tab=['beja','tunisie','jandouba','bizert'];
                            for ($i=0; $i <count($region_tab) ; $i++) { 
                                echo '<option value="'.$region_tab[$i].'">'.$region_tab[$i].'</option>';
                            }
                        }
                        ?>
                    </select>
                    <select name="slect accreditation" id=" accreditation" class="region_select" required>
                        <option value="amdoun" selected> Amdoun</option>
                        <option value="beja center"> Beja</option>
                    </select>
                </div>
                <div class="carrency">
                    <i class="fa-solid fa-coins"></i>
                    <select name="select carrency" id="state" class="carrency_select" required>
                        <option value="TND">TND</option>
                        <option value="EUR">EUR</option>
                    </select>
                </div>
            </div>
            <div class="items_shoser">
                <div id="list-example" class="list-group">
                    <?php
                        for($i = 0; $i < count($categoris); $i++){
                            $cat = $categoris[$i]["categories"];
                            $cat_path=asset('icon/items_icon/'.$cat.'.png');
                            echo'<a class="list-group-item list-group-item-action" href="#list-item-'.$i.'">';
                            echo    '<img src="'.$cat_path.'">';
                            echo'</a>';
                        }
                    ?>
                </div>
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                    <?php
                        for($i=0;$i<count($categoris);$i++){

                            $cat_name = $categoris[$i]["categories"];
                            $items_tab = session($cat_name);

                            echo '<div class="items_group" id ="list-item-'.$i.'">';
                                echo '<p class="cat_title">'.$cat_name.'</p>';
                                echo '<div class="items">';
                                for($j=0;$j<count($items_tab);$j++){

                                    $item_name = $items_tab[$j]['items'];
                                    $item_icon = $item_name.'.png';
                                    $item_path=asset('icon/items_icon/'.$cat_name.'/'.$item_icon);

                                    echo '<div  class="item" id="'.$item_name.'">';
                                        echo '<label for="'.$item_icon.'">';
                                            echo    '<img id="item_path" src="'.$item_path.'">';
                                            echo '<p>'.$item_name.'</p>';
                                        echo '</label>';
                                        echo '<input id="'.$item_icon.'" class="item_chek" type="checkbox" value="'.$item_path.'" name="'.$item_name.'">';
                                    echo '</div>';
                                } 
                                echo '</div>';
                            echo '</div>';
                        } 
                    ?>
                </div>
            </div>
            <div class="item_info">
                <table id='item_table'>
                    <thead>
                        <td class="item_icon">icon</td>
                        <td class="item_name">name</td>
                        <td class="item_price">price</td>
                        <td class="item_quentity">quentity</td>
                    </thead>
                    <tbody>
                        {{-- js --}}
                    </tbody>
                </table>
            </div>
            <div class="save">
                <input type="submit" value="save" class="save">
            </div>
        </form>
    </div>
</div>