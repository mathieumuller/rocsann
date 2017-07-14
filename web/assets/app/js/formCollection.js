$(function(){
    $('table.form-collection').each(function(){
        var $that = $(this);
        var prototype = $that.data("prototype");

        $that.on("click", ".add-item", function(){
            var index = $that.data("index");
            var $container = $that.find(".prototypes-container");
            var item = prototype.replace(/__name__/g, index);
            $that.data('index', index + 1);
            var $item = $(item);

            $container.append($item);
            $container.find('tr').last().find('select').material_select();
        });

        $that.on("click", ".remove-item", function(){
            var $row = $(this).closest("tr");
            $row.remove();
        });
    });
});