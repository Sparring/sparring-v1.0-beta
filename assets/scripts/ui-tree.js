url = 'http://localhost/agricenter/index.php/adminReferensi/kategori/editingKategori';
var UITree = function () {

    return {
        //main function to initiate the module
        init: function () {
            // handle collapse/expand for tree_1
            $('#tree_1_collapse').click(function () {
                $('.tree-toggle', $('#tree_1 > li > ul')).addClass("closed");
                $('.branch', $('#tree_1 > li > ul')).removeClass("in");
            });

            $('#tree_1_expand').click(function () {
                $('.tree-toggle', $('#tree_1 > li > ul')).removeClass("closed");
                $('.branch', $('#tree_1 > li > ul')).addClass("in");
            });
			
			// handle collapse/expand for tree_3
			$('#tree_3_collapse').click(function () {
                $('.tree-toggle', $('#tree_3 > li > ul')).addClass("closed");
                $('.branch', $('#tree_3 > li > ul')).removeClass("in");
            });

            $('#tree_3_expand').click(function () {
                $('.tree-toggle', $('#tree_3 > li > ul')).removeClass("closed");
                $('.branch', $('#tree_3 > li > ul')).addClass("in");
            });

            // handle collapse/expand for tree_2
            $('#tree_2_collapse').click(function () {
                $('.tree-toggle', $('#tree_2 > li > ul')).addClass("closed");
                $('.branch', $('#tree_2 > li > ul')).removeClass("in");
            });

            $('#tree_2_expand').click(function () {
                //$('.tree-toggle', $('#tree_2 > li > ul')).removeClass("closed");
                // iterate tree nodes and exppand all nodes
                $('.tree-toggle', $('#tree_2 > li > ul')).each(function () {
                    $(this).click(); //trigger tree node click
                });
                $('.branch', $('#tree_2 > li > ul')).addClass("in");
            });

            //This is a quick example of capturing the select event on tree leaves, not branches
            $("#tree_1").on("nodeselect.tree.data-api", "[data-role=leaf]", function (e) {
                var output = "";

                output += "Node nodeselect event fired:\n";
                output += "Node Type: leaf\n";
                output += "Value: " + ((e.node.value) ? e.node.value : e.node.el.className) + "\n";
                output += "Parentage: " + e.node.parentage.join("/");
				
				$("#tree_1 span").each(function(){
						$(this).removeClass("checked");
				})
				
				$("#tree_1 input[type='radio']").each(function(){
						$(this).attr('checked',false);
				})
				$("#uniform-" + e.node.value).children(":first").addClass("checked");
				$("#" + e.node.value).attr('checked',true);
                $("#parent").val(e.node.el.text());
				$("#id_parent").val(e.node.value);
            });

            //This is a quick example of capturing the select event on tree branches, not leaves
            $("#tree_1").on("nodeselect.tree.data-api", "[role=branch]", function (e) {
                var output = "Node nodeselect event fired:\n"; + "Node Type: branch\n" + "Value: " + ((e.node.value) ? e.node.value : e.node.el.className) + "\n" + "Parentage: " + e.node.parentage.join("/") + "\n"
				
				$("#tree_1 span").each(function(){
						$(this).removeClass("checked");
				})
				
				$("#tree_1 input[type='radio']").each(function(){
						$(this).attr('checked',false);
				})
				$("#uniform-" + e.node.value).children(":first").addClass("checked");
				$("#" + e.node.value).attr('checked',true);
                $("#parent").val(e.node.el.text());
				$("#id_parent").val(e.node.value);
            });

            //Listening for the 'openbranch' event. Look for e.node, which is the actual node the user opens

            $("#tree_1").on("openbranch.tree", "[data-toggle=branch]", function (e) {

                var output = "Node openbranch event fired:\n" + "Node Type: branch\n" + "Value: " + ((e.node.value) ? e.node.value : e.node.el.text()) + "\n" + "Parentage: " + e.node.parentage.join("/") + "\n"

				$("#tree_1 span").each(function(){
						$(this).removeClass("checked");
				})
				
				$("#tree_1 input[type='radio']").each(function(){
						$(this).attr('checked',false);
				})
				$("#uniform-" + e.node.value).children(":first").addClass("checked");
				$("#" + e.node.value).attr('checked',true);
                $("#parent").val(e.node.el.text());
				$("#id_parent").val(e.node.value);
            });


            //Listening for the 'closebranch' event. Look for e.node, which is the actual node the user closed

            $("#tree_1").on("closebranch.tree", "[data-toggle=branch]", function (e) {

                var output = "Node closebranch event fired:\n" + "Node Type: branch\n" + "Value: " + ((e.node.value) ? e.node.value : e.node.el.text()) + "\n" + "Parentage: " + e.node.parentage.join("/") + "\n"

                $("#tree_1 span").each(function(){
						$(this).removeClass("checked");
				})
				
				$("#tree_1 input[type='radio']").each(function(){
						$(this).attr('checked',false);
				})
				$("#uniform-" + e.node.value).children(":first").addClass("checked");
				$("#" + e.node.value).attr('checked',true);
                $("#parent").val(e.node.el.text());
				$("#id_parent").val(e.node.value);
            });
			
			 //This is a quick example of capturing the select event on tree leaves, not branches
            $("#tree_3").on("nodeselect.tree.data-api", "[data-role=leaf]", function (e) {
                var output = "";

                output += "Node nodeselect event fired:\n";
                output += "Node Type: leaf\n";
                output += "Value: " + ((e.node.value) ? e.node.value : e.node.el.className) + "\n";
                output += "Parentage: " + e.node.parentage.join("/");
				
				$("#parent").val(e.node.el.text());
				$("#id_parent").val(e.node.value);
				
				$.post(url,{id_kategori : e.node.value},function(data){
					$('#detail-kategori').html(data);
					//alert(data);
				});
            });

            //This is a quick example of capturing the select event on tree branches, not leaves
            $("#tree_3").on("nodeselect.tree.data-api", "[role=branch]", function (e) {
                var output = "Node nodeselect event fired:\n"; + "Node Type: branch\n" + "Value: " + ((e.node.value) ? e.node.value : e.node.el.className) + "\n" + "Parentage: " + e.node.parentage.join("/") + "\n"
				

                $("#parent").val(e.node.el.text());
				$("#id_parent").val(e.node.value);
				
				$.post(url,{id_kategori : e.node.value},function(data){
					$('#detail-kategori').html(data);
					//alert(data);
				});
            });

            //Listening for the 'openbranch' event. Look for e.node, which is the actual node the user opens

            $("#tree_3").on("openbranch.tree", "[data-toggle=branch]", function (e) {

                var output = "Node openbranch event fired:\n" + "Node Type: branch\n" + "Value: " + ((e.node.value) ? e.node.value : e.node.el.text()) + "\n" + "Parentage: " + e.node.parentage.join("/") + "\n"


               $("#parent").val(e.node.el.text());
				$("#id_parent").val(e.node.value);
				
				if(e.node.value!= 0){
					$.post(url,{id_kategori : e.node.value},function(data){
						$('#detail-kategori').html(data);
						//alert(data);
					});
				}

            });


            //Listening for the 'closebranch' event. Look for e.node, which is the actual node the user closed

            $("#tree_3").on("closebranch.tree", "[data-toggle=branch]", function (e) {

                var output = "Node closebranch event fired:\n" + "Node Type: branch\n" + "Value: " + ((e.node.value) ? e.node.value : e.node.el.text()) + "\n" + "Parentage: " + e.node.parentage.join("/") + "\n"


                $("#parent").val(e.node.el.text());
				$("#id_parent").val(e.node.value);
				
				if(e.node.value!= 0){
					$.post(url,{id_kategori : e.node.value},function(data){
						$('#detail-kategori').html(data);
						//alert(data);
					});
				}
            });
        }

    };

}();