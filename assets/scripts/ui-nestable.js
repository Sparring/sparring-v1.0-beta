var UINestable = function () {

    var updateOutput = function (e) {
        var list = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };


    return {
        //main function to initiate the module
        init: function () {

            // activate Nestable for list 1
            $('#main_menu').nestable({
                group: 1
            })
           //     .on('change', updateOutput);

            // activate Nestable for list 2
            $('#footer').nestable({
                group: 2
            })
               // .on('change', updateOutput);

            // output initial serialised data
           /* updateOutput($('#main_menu').data('output', $('#nestable_list_1_output')));
            updateOutput($('#footer').data('output', $('#nestable_list_2_output')));*/

            $('#nestable_list_menu').on('click', function (e) {
                var target = $(e.target),
                    action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
            });

            $('#nestable_list_3').nestable();

        }

    };

}();