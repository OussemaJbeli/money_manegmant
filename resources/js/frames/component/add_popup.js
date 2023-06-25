/*****************open close */
let add_popup = document.getElementById('add_popup');
let add_button = document.getElementById('add_button');
let exit_popup = document.getElementById('exit_popup');
add_button.addEventListener('click',open_popup);
exit_popup.addEventListener('click',close_popup);
function open_popup(){
    add_popup.style.display='flex';
}
function close_popup(){
    add_popup.style.display='none';
}
/****test */
let state = document.getElementById('item_table');
state.addEventListener('select',region_selct);
function region_selct(){
}
/******************add item info **/
let item_table = document.getElementById('item_table');
var checkboxes = document.querySelectorAll('.item_chek');
checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        let box = document.getElementById(this.name);
        /*get color item*/
        const rootStyles1 = getComputedStyle(document.documentElement);
        const primaryColor = rootStyles1.getPropertyValue('--side_color_cards');

        const rootStyles2 = getComputedStyle(document.documentElement);
        const seconderyColor = rootStyles2.getPropertyValue('--color_item_popup');
        if (this.checked) {
            addRow(this.value,this.name);
            box.style.backgroundColor=primaryColor;
        }
        else {
            remove_ow(this.value)
            box.style.backgroundColor=seconderyColor;
        }
    });
});
//addrow
function addRow(value,icon) {
    var newRowHtml = `<tr id="${value}">
                            <td><img id="item_icon" src="${value}"></td>
                            <td><input id="item_name" value="${icon}" type="text" name="item_name" readonly></td>
                            <td><input id="item_price" type="number" placeholder="price" name="price" value='0' required></td>
                            <td><input id="item_quentity" type="number" placeholder="quentity" name="quentity" value='1' required></td>
                        </tr>`;
    item_table.innerHTML += newRowHtml;
}
//removerow
function remove_ow(id) {
    let row = document.getElementById(id);
    row.parentNode.removeChild(row);
}