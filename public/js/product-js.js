$(document).ready(function () {
    $('.nav-group-manage-inventory').addClass('show');

    $('.nav-products').addClass('active');
    
    $(document).on('click', '.delete-img', function() {
        $(this).parents('.col-image').remove();
    })

    $('.sortable').sortable({
        stop: function( event, ui ) {
            var sortOrder = 1;
            
            $('#sortable > li').each(function(){
                thiselem = $(this);
                oldsort = thiselem.data('sort');
                maincontent_id = thiselem.data('element-id');
                thiselem.data('sort', sortOrder);
                $('#sort-value-'+maincontent_id).val(sortOrder);
                sortOrder++;
            });
        }
    });

    var lfm = function(id, type, options) {
        let button = document.getElementById(id);
        
        button.addEventListener('click', function () {
            var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
            var target_input = document.getElementById(button.getAttribute('data-input'));
            var target_preview = document.getElementById(button.getAttribute('data-preview'));
        
            window.open(route_prefix + '?type=image' || 'file', 'FileManager', 'width=900,height=600');
            window.SetUrl = function (items) {
                // console.log(items)
            var file_path = items.map(function (item) {
                return item.url;
            }).join(',');
        
            target_input.value = file_path;
            target_input.dispatchEvent(new Event('change'));
        
            target_preview.innerHtml = '';
        
            items.forEach(function (item) {
                let img_div = '<div class="col-image"><div class="box-image"><div class="img"><img src="'+ item.thumb_url+'" alt="" title=""/></div><div class="delete-img"><a><img src="'+web_url+'/assets/img/admin/delete4.png" alt="" title=""/></a></div></div><input type="hidden" name="images[]" value="'+item.url+'"></div>';
                $('#holder').append(img_div);
            });
            target_preview.dispatchEvent(new Event('change'));
            };
        });
    };
    var route_prefix = "filemanager";
    lfm('lfm-product', 'image', {route_prefix});
});