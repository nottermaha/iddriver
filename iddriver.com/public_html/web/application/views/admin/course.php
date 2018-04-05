<aside class="right-side"> 
  <!-- Content Header (Page header) --><br />

<h4>จัดการหลักสูตร</h4>  <br />

  <!-- Main content -->
  <section class="content"> 
    
    <!-- row -->
    
    <div class="row">
        <?php 
	echo link_tag('css/kendo/kendo.common.min.css');
	echo link_tag('css/kendo/kendo.flat.min.css');
	echo link_tag('css/kendo/kendo.dataviz.flat.min.css');
	echo link_tag('css/kendo/kendo.default.css');
?>

    <script src="<?php echo base_url()?>js/kendo.all.min.js"></script>
    
<div id="content" class="col-lg-12 col-sm-12"> 
  <!-- content starts -->
 
  <div> 
    <!-- Detail -->
    
    <div class="row" style="width:100%">
    	<div class="col-md-12 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            รายชื่อหลักสูตร (หน้าเว็บ)
                        </div>
                        <div class="panel-body">
                        	<div id="grid"></div>
                     	</div>   
                    </div>
        </div>
    </div><br />
<br />
<div class="row" style="width:100%">
    	<div class="col-md-12 col-sm-12 col-xs-12">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            รายชื่อหลักสูตร (สำหรับจนท.)
                        </div>
                        <div class="panel-body">
                        	<div id="grid2"></div>
                     	</div>   
                    </div>
        </div>
    </div>
    
    
    <!-- Detail --> 
  </div>
</div>
            <script>
                $(document).ready(function () {
                    var crudServiceBaseUrl = "<?php echo base_url()?>index.php/course",
                        dataSource = new kendo.data.DataSource({
                            transport: {
                                read:  {
                                    url: crudServiceBaseUrl + "/list_course?callback",
                                    dataType: "jsonp"
                                },
                                update: {
                                    url: crudServiceBaseUrl + "/course_update",
                                    dataType: "jsonp"
                                },
                                destroy: {
                                    url: crudServiceBaseUrl + "/course_delete",
                                    dataType: "jsonp"
                                },
                                create: {
                                    url: crudServiceBaseUrl + "/course_insert",
                                    dataType: "jsonp"
                                },
                                parameterMap: function(options, operation) {
                                    if (operation !== "read" && options.models) {
                                        return {models: kendo.stringify(options.models)};
                                    }
                                }
                            },
                            batch: true,
                            pageSize: 10,
                            schema: {
                                model: {
                                    id: "ID",
                                    fields: {
                                        ID: { editable: false, nullable: true },
                                        course_name: { editable: true },
										course_cost: { validation: { required: true } },
                                        
                                    }
                                }
                            }
                        });

                    $("#grid").kendoGrid({
                        dataSource: dataSource,
						sortable: true,
						filterable: {
                            extra: false,
                            operators: {
                                string: {
									contains : "ค้นหาคำ"
                                }
                            }
                        },
                        pageable: true,
                        columns: [
                            { field:"course_name",template:'<a href="edit_course/#=ID#">#=course_name#</a>', title: "<div align='center'>หลักสูตร</div>" ,width:"30%",},

                            { field:"course_cost", title: "<div align='center'>ราคา</div>" ,width:"25%"  },
                            { command: ["edit"], title: "<div align='center'>จัดการ</div>", width: "20%" },
                            ],    
                        editable: "popup"
                    });
                });
				
				$(document).ready(function () {
                    var crudServiceBaseUrl = "<?php echo base_url()?>index.php/course",
                        dataSource = new kendo.data.DataSource({
                            transport: {
                                read:  {
                                    url: crudServiceBaseUrl + "/list_course_admin?callback",
                                    dataType: "jsonp"
                                },
                                update: {
                                    url: crudServiceBaseUrl + "/course_admin_update",
                                    dataType: "jsonp"
                                },
                                destroy: {
                                    url: crudServiceBaseUrl + "/course_admin_delete",
                                    dataType: "jsonp"
                                },
                                create: {
                                    url: crudServiceBaseUrl + "/course_admin_insert",
                                    dataType: "jsonp"
                                },
                                parameterMap: function(options, operation) {
                                    if (operation !== "read" && options.models) {
                                        return {models: kendo.stringify(options.models)};
                                    }
                                }
                            },
                            batch: true,
                            pageSize: 20,
                            schema: {
                                model: {
                                    id: "ID",
                                    fields: {
                                        ID: { editable: false, nullable: true },
                                        course_name: { editable: false },
										course_cost: { validation: { required: true } },
                                        
                                    }
                                }
                            }
                        });

                    $("#grid2").kendoGrid({
                        dataSource: dataSource,
						sortable: true,
						filterable: {
                            extra: false,
                            operators: {
                                string: {
									contains : "ค้นหาคำ"
                                }
                            }
                        },
                        pageable: true,
                        columns: [
                            {field:"course_name",template:'<a href="edit_course_admin/#=ID#">#=course_name#</a>', title: "<div align='center'>หลักสูตร</div>" ,width:"55%"  },
							{ field:"course_cost", title: "<div align='center'>ราคา</div>" ,width:"25%"  },
                            { command: ["edit"], title: "<div align='center'>จัดการ</div>", width: "20%" }],
                        editable: "popup"
                    });
                });
            </script>
            <script>
                    function textAreaEditor(container, options) {
                    $('<textarea class="k-textbox" name="' + options.field + '" style="width:100%;height:200%;" />').appendTo(container);
                    }
            </script>
            
            
    </div>
    <!-- /.row -->
    
    
    <!-- /.row --> 
    
  </section>
  <!-- /.content --> 
</aside>
     <!-- DATA TABLE SCRIPTS -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
        </script>
